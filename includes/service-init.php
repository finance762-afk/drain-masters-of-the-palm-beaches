<?php
/**
 * includes/service-init.php — prep for /services/{slug}/index.php pages.
 * Included by each service page AFTER it defines $sp and its SEO vars
 * ($pageTitle/$metaDescription/$pageDescription/$canonicalUrl) and BEFORE head.php.
 *
 * Defines: display helpers (sp_e/sp_d), inline icon set ($spIcons), related-service
 * metadata, the resolved service record ($spService/$spName), $spHeroImage + $heroPreload,
 * related-service records ($spRelatedRecords), and the Service+FAQPage+BreadcrumbList
 * schema JSON ($spSchemaJson). The page renders the hero inline; the shared body markup
 * lives in includes/service-body.php.
 */

if (!isset($sp) || !is_array($sp)) {
    http_response_code(500);
    exit('service-init.php included without a $sp data array.');
}

/* Display-text normalizer: decode any HTML entities the page data may contain
 * (some fields were authored with &mdash;/&amp;), then re-escape once so plain-text
 * fields never double-escape. XSS-safe (still escapes < > " '). */
function sp_e($s) {
    return htmlspecialchars(html_entity_decode((string) $s, ENT_QUOTES | ENT_HTML5), ENT_QUOTES);
}
/* Decode-only, for values passed into renderPicture() which re-escapes alt itself. */
function sp_d($s) {
    return html_entity_decode((string) $s, ENT_QUOTES | ENT_HTML5);
}

/* ---- Inline Lucide SVGs (v6.2 — pasted raw at build time; no runtime injection, no CDN) ---- */
$spIcons = [
    'droplets'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'waves'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
    'wrench'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'hammer'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"/></svg>',
    'search'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>',
    'flame'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'phone'         => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'clock'         => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'shield'        => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'home'          => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'map-pin'       => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'badge-check'   => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'check'         => '<svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'x'             => '<svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'star'          => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>',
    'mail'          => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>',
    'alert-triangle'=> '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
    'gauge'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'trash-2'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>',
    'thermometer'   => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"/></svg>',
    'zap'           => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>',
    'droplet'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>',
    'award'         => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>',
    'arrow-right'   => '<svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
];

/* Photo pool cycled across related-service cards (hero photo reserved for the hero) */
$svcPhotos = ['owner-img_8820', 'owner-img_8947', 'owner-img_8933', 'owner-img_8819', 'owner-img_8946', 'owner-img_8976'];

/* ---- Icon + bullet metadata for every service (used by related-services cards) ---- */
$spServiceMeta = [
    'drain-cleaning'                        => ['icon' => 'droplets', 'bullets' => ['Clears grease and buildup', 'Snaking and cable rodding', 'Full flow restored fast']],
    'hydro-jetting'                         => ['icon' => 'waves',    'bullets' => ['Blasts out roots and grease', 'Scours the full pipe wall', 'Camera-verified results']],
    'sewer-line-repair-replacement'         => ['icon' => 'wrench',   'bullets' => ['Root-invaded line repair', 'Full replacement when needed', 'Permitted and to code']],
    'trenchless-sewer-repair'               => ['icon' => 'hammer',   'bullets' => ['No yard or driveway dig-up', 'Pipe lining and bursting', 'Seamless, long-lasting pipe']],
    'leak-detection-slab-leak-repair'       => ['icon' => 'search',   'bullets' => ['Electronic leak location', 'Slab leak specialists', 'Targeted, low-damage repair']],
    'water-heater-installation-repair'      => ['icon' => 'flame',    'bullets' => ['Tank and tankless units', 'Right-sized for your home', 'Fast same-week swaps']],
    'repiping'                              => ['icon' => 'wrench',   'bullets' => ['Whole-home pipe replacement', 'Ends recurring leaks', 'Modern, durable materials']],
    'toilet-faucet-repair-and-installation' => ['icon' => 'droplet',  'bullets' => ['Stops running toilets', 'Fixture install and repair', 'Cuts wasted water']],
    'garbage-disposal-repair'               => ['icon' => 'trash-2',  'bullets' => ['Fixes jams and leaks', 'Repair or full swap', 'Kitchen sink back in service']],
    'sump-pump-installation-repair'         => ['icon' => 'gauge',    'bullets' => ['Storm-season ready', 'Install, test, and repair', 'Keeps groundwater out']],
    'gas-line-repair'                       => ['icon' => 'zap',      'bullets' => ['Licensed gas work', 'Leak testing to code', 'Safe install and repair']],
    'backflow-prevention'                   => ['icon' => 'shield',   'bullets' => ['Device install and testing', 'Annual certification', 'Protects drinking water']],
    'emergency-plumbing'                    => ['icon' => 'alert-triangle', 'bullets' => ['Same-day and after-hours', 'Burst pipes and backups', 'Fast damage control']],
];

/* ---- Resolve the service config record ($services from config.php) ---- */
$spService = null;
foreach ($services as $spCfg) {
    if ($spCfg['slug'] === $sp['slug']) { $spService = $spCfg; break; }
}
if ($spService === null) {
    http_response_code(404);
    exit('Unknown service slug: ' . htmlspecialchars($sp['slug']));
}
$spName = $sp['name'] ?? $spService['name'];

/* Hero image + preload (v6.3 — avif srcset for the eager hero <picture>) */
$spHeroImage = $sp['heroImage'];
$heroPreload = [
    'srcset' => '/assets/images/' . $spHeroImage . '-480.avif 480w, /assets/images/' . $spHeroImage . '-960.avif 960w, /assets/images/' . $spHeroImage . '-1600.avif 1600w',
    'sizes'  => '100vw',
];

/* ---- Related services (auto-pick 3 siblings if not provided) ---- */
$spRelated = $sp['related'] ?? [];
if (empty($spRelated)) {
    $slugs = array_column($services, 'slug');
    $pos   = array_search($sp['slug'], $slugs, true);
    $count = count($slugs);
    for ($k = 1; $k <= 3; $k++) {
        $spRelated[] = $slugs[($pos + $k) % $count];
    }
}
$spRelatedRecords = [];
foreach ($spRelated as $rslug) {
    foreach ($services as $rcfg) {
        if ($rcfg['slug'] === $rslug) { $spRelatedRecords[] = $rcfg; break; }
    }
}

/* ---- Schema @graph (Service + FAQPage + BreadcrumbList) ---- */
$spCanonical  = $siteUrl . '/services/' . $sp['slug'] . '/';
$spAreaServed = [];
foreach ($serviceAreas as $spArea) {
    $spAreaServed[] = ['@type' => 'City', 'name' => $spArea . ', FL'];
}
$spFaqEntities = [];
foreach ($sp['faqs'] as $spFaq) {
    $spFaqEntities[] = [
        '@type'          => 'Question',
        'name'           => sp_d($spFaq[0]),
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => sp_d($spFaq[1])],
    ];
}
$spGraph = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'Service',
            '@id'         => $spCanonical . '#service-' . $sp['slug'],
            'name'        => sp_d($spName) . ' in ' . $address['city'] . ', ' . $address['state'],
            'serviceType' => sp_d($spName),
            'description' => sp_d($spService['description']),
            'url'         => $spCanonical,
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => $spAreaServed,
            'offers'      => [
                '@type'         => 'Offer',
                'availability'  => 'https://schema.org/InStock',
                'priceCurrency' => 'USD',
            ],
        ],
        [
            '@type'      => 'FAQPage',
            '@id'        => $spCanonical . '#faq',
            'mainEntity' => $spFaqEntities,
        ],
        [
            '@type'           => 'BreadcrumbList',
            '@id'             => $spCanonical . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => sp_d($spName), 'item' => $spCanonical],
            ],
        ],
    ],
];
$spSchemaJson = json_encode($spGraph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
