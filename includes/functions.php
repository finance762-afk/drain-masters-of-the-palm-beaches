<?php
/**
 * includes/functions.php — helper functions for the site
 * Included via config.php on every page.
 */

/**
 * Check if a given page slug is the current page
 * @param string $page The page identifier (e.g., 'home', 'services', 'about')
 * @return bool
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for display
 * @param string $phone Raw phone number (e.g., '561-906-8711')
 * @return string Formatted for tel: link (e.g., '+15619068711')
 */
function formatPhone($phone) {
    // Remove all non-numeric characters
    $cleaned = preg_replace('/[^0-9]/', '', $phone);
    // Prepend +1 for US numbers
    return '+1' . $cleaned;
}

/**
 * Generate a URL-safe slug from a service name
 * @param string $name Service name (e.g., 'Drain Cleaning')
 * @return string Slug (e.g., 'drain-cleaning')
 */
function getServiceSlug($name) {
    return strtolower(str_replace([' ', '&', '/'], ['-', '-', '-'], trim($name)));
}

/**
 * Generate a URL-safe slug from a city name
 * @param string $city City name (e.g., 'West Palm Beach')
 * @return string Slug (e.g., 'west-palm-beach')
 */
function getAreaSlug($city) {
    return strtolower(str_replace(' ', '-', trim($city)));
}

/**
 * Generate Service schema for a given service
 * @param array $service Service array from config.php
 * @return string JSON-LD schema markup
 */
function generateServiceSchema($service) {
    global $siteName, $siteUrl, $address;

    $schema = [
        '@type' => 'Service',
        'serviceType' => $service['name'],
        'description' => $service['description'],
        'provider' => [
            '@id' => $siteUrl . '/#organization'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'] . ', ' . $address['state']
        ]
    ];

    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Generate FAQPage schema
 * @param array $faqs Array of FAQ items, each with 'q' and 'a' keys
 * @return string JSON-LD schema markup
 */
function generateFAQSchema($faqs) {
    $mainEntity = [];

    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntity
    ];

    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Read and return inline SVG icon
 * @param string $name Icon name (e.g., 'phone', 'mail', 'droplets')
 * @param int $size Icon size in pixels (default 24)
 * @return string SVG markup with aria-hidden and dimensions set
 */
function icon($name, $size = 24) {
    $iconPath = $_SERVER['DOCUMENT_ROOT'] . '/../crm/references/lucide-icons/' . $name . '.svg';

    if (!file_exists($iconPath)) {
        return '';
    }

    $svg = file_get_contents($iconPath);

    // Add aria-hidden, width, and height attributes
    $svg = str_replace('<svg', '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '"', $svg);

    return $svg;
}

/**
 * Render a responsive <picture> element (v6.3 — AVIF source + WebP srcset + JPG fallback).
 * Only references variant files that actually exist on disk, so QA never flags a
 * missing descriptor. Base is the filename stem in /assets/images/ (no extension).
 *
 * @param string $base    Filename stem, e.g. 'owner-img_8976'
 * @param string $alt     Alt text (empty string allowed for decorative)
 * @param int    $w       Intrinsic width  (for the <img> width attr — prevents CLS)
 * @param int    $h       Intrinsic height (for the <img> height attr)
 * @param string $sizes   The sizes attribute value
 * @param array  $opts    ['eager'=>bool, 'class'=>picture class, 'imgClass'=>img class, 'objectPosition'=>css]
 * @return string <picture> markup
 */
function renderPicture($base, $alt, $w, $h, $sizes, $opts = []) {
    $dir       = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/';
    $eager     = !empty($opts['eager']);
    $picClass  = isset($opts['class']) ? ' class="' . htmlspecialchars($opts['class']) . '"' : '';
    $imgClass  = isset($opts['imgClass']) ? ' class="' . htmlspecialchars($opts['imgClass']) . '"' : '';
    $widths    = [480, 960, 1600];

    $build = function ($ext) use ($dir, $base, $widths) {
        $parts = [];
        foreach ($widths as $w) {
            if (file_exists($dir . $base . '-' . $w . '.' . $ext)) {
                $parts[] = '/assets/images/' . $base . '-' . $w . '.' . $ext . ' ' . $w . 'w';
            }
        }
        return implode(', ', $parts);
    };

    $avif = $build('avif');
    $webp = $build('webp');

    // Fallback src: the on-disk .jpg if present, else the smallest webp.
    $fallback = file_exists($dir . $base . '.jpg')
        ? '/assets/images/' . $base . '.jpg'
        : '/assets/images/' . $base . '-480.webp';

    $loading = $eager ? 'eager' : 'lazy';
    $priority = $eager ? ' fetchpriority="high"' : ' decoding="async"';
    $sizesAttr = ($webp || $avif) ? ' sizes="' . htmlspecialchars($sizes) . '"' : '';

    $out  = '<picture' . $picClass . '>';
    if ($avif) $out .= '<source type="image/avif" srcset="' . $avif . '"' . $sizesAttr . '>';
    $out .= '<img src="' . $fallback . '"';
    if ($webp) $out .= ' srcset="' . $webp . '"' . $sizesAttr;
    $out .= $imgClass;
    $out .= ' alt="' . htmlspecialchars($alt) . '" width="' . (int)$w . '" height="' . (int)$h . '"';
    $out .= ' loading="' . $loading . '"' . $priority . '>';
    $out .= '</picture>';

    return $out;
}

/**
 * Generate attribution hidden form fields
 * Wrapper for the p1_attribution_fields() function from attribution.php
 * @param string $formId Unique form identifier on the page
 * @return string HTML hidden input fields
 */
function getAttributionFields($formId) {
    if (function_exists('p1_attribution_fields')) {
        return p1_attribution_fields($formId);
    }
    return '';
}
