<?php
/**
 * includes/area-init.php — prep for /service-areas/{city}/index.php pages (mirrors service-init.php).
 * Included by each city page AFTER it defines $ap + its SEO vars ($pageTitle/$metaDescription/
 * $pageDescription/$canonicalUrl/$currentPage/$pageType/$citySlug) and BEFORE head.php.
 * Defines ap_e/ap_d, $apIcons, $apChipIcons, $apName, $apCanonical, $apFaqs, $apNearby, $apSchemaJson.
 * The page renders the hero inline (H1 + tracked form live in the page file, like the service pages);
 * the shared body markup lives in includes/area-body.php.
 *
 * $ap keys:
 *   slug, name, eyebrow, h1, answer, chips[] (label strings)
 *   photo, photoAlt, photoWide (bool: landscape source), fact => [value, label]
 *   neighborhoods[]            — ticker strip (true names from the research block)
 *   intro    => [eyebrow, h2, paragraphs[]]
 *   services => [h2 => [plain, accent], intro, items[] => [name, desc, slug, icon]]
 *   trust    => [h2, paragraphs[]]
 *   faqs[]   => [q, a]  (optional; visible accordion + FAQPage schema stay in sync)
 *   cta      => [h2, text]
 */
if (!isset($ap) || !is_array($ap)) {
    http_response_code(500);
    exit('area-init.php included without an $ap data array.');
}

function ap_e($s) { return htmlspecialchars(html_entity_decode((string) $s, ENT_QUOTES | ENT_HTML5), ENT_QUOTES); }
function ap_d($s) { return html_entity_decode((string) $s, ENT_QUOTES | ENT_HTML5); }

/* ---- Inline Lucide SVGs (v6.2 — pasted raw, no runtime injection) ---- */
$apIcons = [
    'droplets'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'wrench'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'hammer'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"/></svg>',
    'search'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>',
    'flame'          => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'droplet'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>',
    'alert-triangle' => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
    'shield-big'     => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'phone'          => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'clock'          => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'shield'         => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'badge-check'    => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'map-pin'        => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'star'           => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>',
    'arrow-right'    => '<svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
];
$apChipIcons = ['shield', 'clock', 'badge-check'];

$apName      = $ap['name'];
$apCanonical = $siteUrl . '/service-areas/' . $ap['slug'] . '/';
$apFaqs      = $ap['faqs'] ?? [];

/* Nearby cities: every other configured area whose page exists on disk (link integrity rule) */
$apNearby = [];
foreach ($serviceAreas as $apArea) {
    $apAreaSlug = getAreaSlug($apArea);
    if ($apAreaSlug === $ap['slug']) { continue; }
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/service-areas/' . $apAreaSlug)) { $apNearby[] = [$apArea, $apAreaSlug]; }
}

/* Schema @graph: BreadcrumbList + LocalBusiness (+ FAQPage when the page has FAQs) */
$apGraph = [
    [
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $siteUrl . '/service-areas/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $apName],
        ],
    ],
    [
        '@type'       => 'LocalBusiness',
        'name'        => $siteName,
        'description' => $metaDescription,
        'url'         => $apCanonical,
        'telephone'   => $phone,
        'areaServed'  => ['@type' => 'City', 'name' => $apName, 'containedInPlace' => ['@type' => 'State', 'name' => 'Florida']],
    ],
];
if (!empty($apFaqs)) {
    $apFaqEntities = [];
    foreach ($apFaqs as $apFaq) {
        $apFaqEntities[] = ['@type' => 'Question', 'name' => ap_d($apFaq[0]), 'acceptedAnswer' => ['@type' => 'Answer', 'text' => ap_d($apFaq[1])]];
    }
    $apGraph[] = ['@type' => 'FAQPage', '@id' => $apCanonical . '#faq', 'mainEntity' => $apFaqEntities];
}
$apSchemaJson = json_encode(['@context' => 'https://schema.org', '@graph' => $apGraph], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

