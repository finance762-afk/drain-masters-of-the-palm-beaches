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
