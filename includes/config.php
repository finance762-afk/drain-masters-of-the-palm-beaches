<?php
/**
 * includes/config.php — single source of truth for site-wide variables.
 * Included at the top of every page (before head.php). All values sourced
 * from build-plan.json. Framework files are locked; editable copy lives in
 * includes/content.php (added Phase 2+).
 */

/* ---- Identity --------------------------------------------------------- */
$slug            = 'drain-masters-of-the-palm-beaches';          // == build directory name
$siteName        = 'Drain Masters of the Palm Beaches';
$tagline         = 'Licensed Drain & Plumbing Experts in Palm Springs, FL';
$ownerName       = 'Luis Noda';
$industry        = 'plumbing';

/* ---- Contact ---------------------------------------------------------- */
$phone           = '561-906-8711';
$phoneSecondary  = '';
$email           = 'nodaluis239@gmail.com';

$address = [
    'street' => '3193 Drew Way',
    'city'   => 'Palm Springs',
    'state'  => 'FL',
    'zip'    => '33406',
];
$addressPublic   = true;
$businessHours   = '';   // not supplied in intake

/* ---- Domain / URLs ---------------------------------------------------- */
// build-plan.json has no production_domain → default to the preview host.
$domain          = 'drain-masters-of-the-palm-beaches.pageone.cloud';
$siteUrl         = 'https://' . $domain;   // always a valid absolute URL
// NOTE: $canonicalUrl is NOT set here — head.php computes it per page from the request URI.

/* ---- SEO -------------------------------------------------------------- */
$primaryKeyword     = 'plumber Palm Springs FL';
$secondaryKeywords  = [
    'drain cleaning Palm Beach County',
    'emergency plumber Lake Worth',
    'sewer line repair West Palm Beach',
    'water heater installation Palm Springs FL',
];

/* ---- Services (name, description, keywords, slug) --------------------- */
$services = [
    [
        'name'        => 'Drain Cleaning',
        'slug'        => 'drain-cleaning',
        'description' => 'Professional drain cleaning that clears stubborn clogs, grease, and buildup to restore full flow throughout your home.',
        'keywords'    => 'drain cleaning Palm Springs FL',
    ],
    [
        'name'        => 'Hydro Jetting',
        'slug'        => 'hydro-jetting',
        'description' => 'High-pressure hydro jetting scours pipe walls clean, removing roots and years of grease that snaking alone leaves behind.',
        'keywords'    => 'hydro jetting Palm Springs FL',
    ],
    [
        'name'        => 'Sewer Line Repair & Replacement',
        'slug'        => 'sewer-line-repair-replacement',
        'description' => 'Diagnosis and repair of broken, collapsed, or root-invaded sewer lines, with full replacement when a line is past saving.',
        'keywords'    => 'sewer line repair & replacement Palm Springs FL',
    ],
    [
        'name'        => 'Trenchless Sewer Repair',
        'slug'        => 'trenchless-sewer-repair',
        'description' => 'Trenchless pipe lining and bursting that renews failing sewer lines without tearing up your yard or driveway.',
        'keywords'    => 'trenchless sewer repair Palm Springs FL',
    ],
    [
        'name'        => 'Leak Detection & Slab Leak Repair',
        'slug'        => 'leak-detection-slab-leak-repair',
        'description' => 'Electronic leak detection pinpoints hidden and slab leaks fast, so repairs stay targeted and your floors stay intact.',
        'keywords'    => 'leak detection & slab leak repair Palm Springs FL',
    ],
    [
        'name'        => 'Water Heater Installation & Repair',
        'slug'        => 'water-heater-installation-repair',
        'description' => 'Repair, replacement, and new installation of tank and tankless water heaters sized right for your household.',
        'keywords'    => 'water heater installation & repair Palm Springs FL',
    ],
    [
        'name'        => 'Repiping',
        'slug'        => 'repiping',
        'description' => 'Whole-home repiping that replaces corroded or leak-prone pipes with durable modern materials built for Florida water.',
        'keywords'    => 'repiping Palm Springs FL',
    ],
    [
        'name'        => 'Toilet & Faucet Repair and Installation',
        'slug'        => 'toilet-faucet-repair-and-installation',
        'description' => 'Fast repair and clean installation of toilets, faucets, and fixtures that stop leaks and cut wasted water.',
        'keywords'    => 'toilet & faucet repair and installation Palm Springs FL',
    ],
    [
        'name'        => 'Garbage Disposal Repair',
        'slug'        => 'garbage-disposal-repair',
        'description' => 'Repair and replacement of jammed, leaking, or dead garbage disposals to get your kitchen sink working again.',
        'keywords'    => 'garbage disposal repair Palm Springs FL',
    ],
    [
        'name'        => 'Sump Pump Installation & Repair',
        'slug'        => 'sump-pump-installation-repair',
        'description' => 'Sump pump installation, testing, and repair that keeps groundwater out during Palm Beach County storm season.',
        'keywords'    => 'sump pump installation & repair Palm Springs FL',
    ],
    [
        'name'        => 'Gas Line Repair',
        'slug'        => 'gas-line-repair',
        'description' => 'Safe gas line repair, installation, and leak testing performed by licensed plumbers to code.',
        'keywords'    => 'gas line repair Palm Springs FL',
    ],
    [
        'name'        => 'Backflow Prevention',
        'slug'        => 'backflow-prevention',
        'description' => 'Backflow prevention device installation, testing, and certification that protects your drinking water supply.',
        'keywords'    => 'backflow prevention Palm Springs FL',
    ],
    [
        'name'        => 'Emergency Plumbing',
        'slug'        => 'emergency-plumbing',
        'description' => 'Same-day and after-hours emergency plumbing for burst pipes, sewer backups, and major leaks across the Palm Beaches.',
        'keywords'    => 'emergency plumbing Palm Springs FL',
    ],
];

/* ---- Service areas ---------------------------------------------------- */
$serviceAreas = [
    'Palm Springs',
    'Lake Worth',
    'West Palm Beach',
    'Greenacres',
    'Boynton Beach',
    'Wellington',
    'Lantana',
    'Royal Palm Beach',
];

/* ---- Social ----------------------------------------------------------- */
$socialLinks = [
    // platform => url  (none supplied in intake)
];

/* ---- Google Business Profile / integrations --------------------------- */
$gbpPlaceId      = 'ChIJ7x22zmG-n4kRX8wzPU6Cvdo';
$gbpProfileUrl   = 'https://share.google/UHHg3DvwRmLceJEvI';
$gbpMapEmbed     = '';   // no embed iframe supplied
$directionsUrl   = 'https://www.google.com/maps/dir/?api=1&destination=place_id:ChIJ7x22zmG-n4kRX8wzPU6Cvdo';
$reviewRequestUrl = 'https://search.google.com/local/writereview?placeid=ChIJ7x22zmG-n4kRX8wzPU6Cvdo';
$acceptsSms      = false;   // integrations.accepts_sms is null → treat as not accepted

/* ---- Analytics -------------------------------------------------------- */
$googleAnalyticsId = 'G-XXXXXXXXXX';   // placeholder — replaced post-launch

/* ---- Brand colors ----------------------------------------------------- */
// No logo/colors extracted in intake (logo null). Plumbing-appropriate palette;
// Phase 2 finalizes and applies these as :root overrides in head.php.
$colors = [
    'primary'      => '#0C5A9E',   // water blue
    'primary_dark' => '#083E6E',
    'secondary'    => '#123B5E',   // deep navy
    'accent'       => '#E8871E',   // amber — high-contrast CTA
];

/* ---- Business facts --------------------------------------------------- */
$yearEstablished = 2023;
$yearsInBusiness = 3;

/* ---- Forms ------------------------------------------------------------ */
$formAction      = 'https://db.pageone.cloud/functions/v1/leads/drain-masters-of-the-palm-beaches';

/* ---- CSS cache-bust (SINGLE source — never set per page) -------------- */
$cssVersion      = '1';

/* ---- Helper functions ------------------------------------------------- */
require_once __DIR__ . '/functions.php';

/* ---- Lead attribution (v6.3) — MUST be last, before any output -------- */
require_once __DIR__ . '/attribution.php';
