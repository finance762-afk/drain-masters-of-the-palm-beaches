<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'home';
$pageType    = 'home';

$pageTitle       = 'Plumber & Drain Cleaning in Palm Springs, FL | Drain Masters of the Palm Beaches';
$metaDescription = 'Locally owned Palm Springs, FL plumber for drain cleaning, sewer repair, water heaters and same-day emergency plumbing. Free estimates. Call ' . $phone . '.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/';

/* Hero visual = the client's own service truck (revision 2, 2026-10-02: Luis sent a 10 s clip
   of the truck on the waterfront). The still (first frame) is the LCP image on every screen;
   the loop is attached after window load on desktop only. Replaces the revision-1 logo backdrop
   (the truck carries the same lettering). */
$heroImage  = 'hero-truck-v1';
$heroPreload = [
    'srcset' => '/assets/images/' . $heroImage . '-480.avif 480w, /assets/images/' . $heroImage . '-960.avif 960w, /assets/images/' . $heroImage . '-1600.avif 1600w',
    'sizes'  => '(min-width: 1500px) 1500px, 100vw',
];

/* FAQs (from research_brief) — drive both the visible list and FAQPage schema */
$faqs = [
    [
        'q' => 'What are the signs I need professional drain cleaning?',
        'a' => "Common signs include slow drains, recurring clogs, gurgling sounds from pipes, water backing up, or foul odors. If plunging doesn't solve the problem, professional cleaning is usually needed to clear debris, roots, or mineral buildup deeper in the line.",
    ],
    [
        'q' => 'How often should I have my drains professionally cleaned?',
        'a' => 'Most homes benefit from professional drain cleaning every 1-2 years as preventative maintenance. Homes with trees nearby, older pipes, or frequent clogs may need annual service. We can assess your system and recommend a schedule.',
    ],
    [
        'q' => 'Do you offer emergency drain service in Palm Springs?',
        'a' => "Yes, we provide emergency drain cleaning and plumbing repairs. Contact us for same-day or after-hours availability—we understand that plumbing problems don't wait for business hours.",
    ],
    [
        'q' => 'What causes drain problems in Palm Springs specifically?',
        'a' => "Our area's hard water and mineral content can build up in pipes over time. Older homes may have corroded pipes, and tree root intrusion is common. We diagnose the root cause and recommend the best solution for your situation.",
    ],
    [
        'q' => "What's your pricing structure, and do you charge for estimates?",
        'a' => "We provide free initial assessments and transparent estimates with no hidden fees. Pricing depends on the severity of the blockage and method required (standard snaking, hydro-jetting, etc.). We'll explain your options before starting work.",
    ],
];
$faqSchema = generateFAQSchema($faqs);

/* Inline Lucide SVGs (v6.2 — pasted raw at build time; no runtime injection, no CDN) */
$icons = [
    'droplets'    => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'waves'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
    'wrench'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'hammer'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"/></svg>',
    'search'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>',
    'flame'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'phone'       => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'clock'       => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'shield'      => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'home'        => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'map-pin'     => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'badge-check' => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'check'       => '<svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>',
    'star'        => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>',
    'mail'        => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>',
];

/* Services shown on the homepage grid: first 8 (13 total → View All link) */
$svcMeta = [
    'drain-cleaning'                        => ['icon' => 'droplets', 'bullets' => ['Clears grease and buildup', 'Snaking and cable rodding', 'Full flow restored fast']],
    'hydro-jetting'                         => ['icon' => 'waves',    'bullets' => ['Blasts out roots and grease', 'Scours the full pipe wall', 'Camera-verified results']],
    'sewer-line-repair-replacement'         => ['icon' => 'wrench',   'bullets' => ['Root-invaded line repair', 'Full replacement when needed', 'Permitted and to code']],
    'trenchless-sewer-repair'               => ['icon' => 'hammer',   'bullets' => ['No yard or driveway dig-up', 'Pipe lining and bursting', 'Seamless, long-lasting pipe']],
    'leak-detection-slab-leak-repair'       => ['icon' => 'search',   'bullets' => ['Electronic leak location', 'Slab leak specialists', 'Targeted, low-damage repair']],
    'water-heater-installation-repair'      => ['icon' => 'flame',    'bullets' => ['Tank and tankless units', 'Right-sized for your home', 'Fast same-week swaps']],
    'repiping'                              => ['icon' => 'wrench',   'bullets' => ['Whole-home pipe replacement', 'Ends recurring leaks', 'Modern, durable materials']],
    'toilet-faucet-repair-and-installation' => ['icon' => 'droplets', 'bullets' => ['Stops running toilets', 'Fixture install and repair', 'Cuts wasted water']],
];
/* Service cards use each service's own photo ($servicePhoto in config.php) */
$homeServices = array_slice($services, 0, 8);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition (tokens only) -->
<style>
  /* Hero: the client's truck runs as a band across the top of the first screen (revision 2).
     The band is never covered: the copy card and the form start at its lower edge, over the
     road, so the truck lettering and phone number stay readable. */
  .home-hero.hero--truck { padding-block: var(--nav-height) var(--space-2xl); background: linear-gradient(180deg, var(--color-paper) 0%, var(--color-paper-2) 100%); color: var(--color-ink); border-bottom: 4px solid var(--color-primary); }
  .home-hero .hero-truck { position: relative; width: min(1500px, 100%); margin-inline: auto; aspect-ratio: 16 / 5; overflow: hidden; }
  .home-hero .hero-truck picture { display: block; position: absolute; inset: 0; }
  .home-hero .hero-truck img, .home-hero .hero-truck video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: 50% 0; }
  .home-hero .hero-truck video { filter: var(--photo-grade); opacity: 0; transition: opacity .6s ease; }
  .home-hero .hero-truck video.is-playing { opacity: 1; }
  .home-hero .hero-truck::after { content: ""; position: absolute; inset: 0; pointer-events: none; background: linear-gradient(180deg, transparent 86%, var(--color-paper) 100%); }
  .home-hero .hero-truck-toggle { position: absolute; top: var(--space-sm); right: var(--space-sm); z-index: 2; display: grid; place-items: center; width: 2.5rem; height: 2.5rem; border-radius: 50%; border: 1px solid var(--color-line); background: color-mix(in srgb, var(--color-paper) 82%, transparent); -webkit-backdrop-filter: blur(6px); backdrop-filter: blur(6px); color: var(--color-ink); cursor: pointer; }
  .home-hero .hero-truck-toggle[hidden] { display: none; }
  .home-hero .hero-truck-toggle .icon-play, .home-hero .hero-truck-toggle[aria-pressed="true"] .icon-pause { display: none; }
  .home-hero .hero-truck-toggle[aria-pressed="true"] .icon-play { display: block; }
  @media (min-width: 1500px) { .home-hero .hero-truck { -webkit-mask-image: linear-gradient(90deg, transparent, black 7%, black 93%, transparent); mask-image: linear-gradient(90deg, transparent, black 7%, black 93%, transparent); } .home-hero .hero-truck-toggle { right: 9%; } }
  .home-hero .hero-grid { position: relative; z-index: 1; margin-top: calc(var(--space-xl) * -1); align-items: start; }
  .home-hero .hero-text { background: color-mix(in srgb, var(--color-paper) 92%, transparent); -webkit-backdrop-filter: blur(6px) saturate(1.1); backdrop-filter: blur(6px) saturate(1.1); border: 1px solid color-mix(in srgb, var(--color-paper) 60%, var(--color-line)); border-radius: var(--radius-lg); padding: var(--space-lg) var(--space-xl); box-shadow: var(--shadow); max-width: 38rem; gap: var(--space-md); }
  .home-hero .hero-title { color: var(--color-ink); }
  .home-hero .hero-title .text-accent, .home-hero .eyebrow { color: var(--color-primary); }
  .home-hero .hero-answer { color: var(--color-ink); font-weight: 500; }
  .home-hero .link-call { color: var(--color-primary); font-size: var(--font-size-lg); }
  .home-hero .hero-chips li { background: color-mix(in srgb, var(--color-surface) 90%, transparent); }
  .home-hero .hero-form-card { background: var(--color-surface); border-top: 4px solid var(--color-primary); }
  .home-hero .hero-rating { display: inline-flex; align-items: center; gap: var(--space-xs); font-size: var(--font-size-sm); color: var(--color-ink); margin: 0; }
  .home-hero .hero-rating .stars { display: inline-flex; gap: var(--space-1); color: var(--color-star); }
  .home-hero .hero-rating strong { color: var(--color-ink); }
  /* Phone/tablet: the still shows the whole truck above the copy; no video is loaded. */
  @media (max-width: 900px) {
    .home-hero .hero-truck { aspect-ratio: 1600 / 625; }
    .home-hero .hero-truck::after { background: none; }
    .home-hero .hero-truck video, .home-hero .hero-truck-toggle { display: none; }
    .home-hero .hero-grid { margin-top: var(--space-md); }
    .home-hero .eyebrow { display: none; }
    .home-hero .hero-text { background: none; -webkit-backdrop-filter: none; backdrop-filter: none; border: 0; padding: 0; box-shadow: none; }
  }

  .home-intro .intro-points { list-style: none; margin: var(--space-md) 0 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-sm) var(--space-lg); }
  .home-intro .intro-points li { display: flex; gap: var(--space-xs); align-items: flex-start; font-size: var(--font-size-sm); color: var(--color-ink-2); }
  .home-intro .intro-points svg { color: var(--color-accent-dark); flex: 0 0 auto; }
  @media (max-width: 560px) { .home-intro .intro-points { grid-template-columns: 1fr; } }

  .home-plans .plans-teaser { display: grid; grid-template-columns: minmax(0, 1.1fr) minmax(0, 1fr); gap: var(--space-2xl); align-items: center; }
  .home-plans .plans-teaser-copy { display: grid; gap: var(--space-md); justify-items: start; }
  .home-plans .plans-teaser-copy p { margin: 0; color: var(--color-ink-2); }
  .home-plans .plans-teaser-prices { list-style: none; margin: 0; padding: 0; display: grid; gap: var(--space-sm); }
  .home-plans .plans-teaser-prices a { display: grid; grid-template-columns: 6.5rem 1fr; align-items: center; gap: var(--space-md); padding: var(--space-md) var(--space-lg); border: 1px solid var(--color-line); border-left: 4px solid var(--color-primary); border-radius: var(--radius-lg); background: var(--color-card-tint-1); color: var(--color-ink); text-decoration: none; transition: var(--transition); }
  .home-plans .plans-teaser-prices li:nth-child(2) a { background: var(--color-card-tint-2); }
  .home-plans .plans-teaser-prices li:nth-child(3) a { background: var(--color-card-tint-3); }
  .home-plans .plans-teaser-prices a:hover { box-shadow: var(--shadow); transform: translateY(-2px); }
  .home-plans .plans-teaser-prices .amount { font-family: var(--font-heading); font-weight: 800; font-size: var(--fs-h2); color: var(--color-primary); line-height: 1; font-variant-numeric: tabular-nums; }
  .home-plans .plans-teaser-prices .label { font-weight: 600; }
  @media (max-width: 900px) { .home-plans .plans-teaser { grid-template-columns: 1fr; gap: var(--space-xl); } }

  .home-reviews { background: var(--color-paper-2); }
  .home-services .services-cta { display: flex; justify-content: center; margin-top: var(--space-2xl); }

  .home-cta .cta-copy { display: grid; gap: var(--space-sm); }
  .home-cta .cta-eyebrow { color: var(--color-accent-bright); }

  .home-estimate .estimate-next { display: grid; gap: var(--space-lg); align-content: start; }
  .home-estimate .area-note { font-size: var(--font-size-sm); color: var(--color-ink-2); margin: 0; }

  /* Blog preview section */
  .blog-preview { max-width: 800px; margin: var(--space-2xl) auto 0; }
  .blog-featured-card { background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--radius); overflow: hidden; transition: var(--transition); display: grid; grid-template-columns: 1fr 1fr; gap: 0; }
  .blog-featured-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }
  .blog-featured-image-link { position: relative; display: block; overflow: hidden; min-height: 280px; }
  .blog-featured-image-link picture { position: absolute; inset: 0; display: block; }
  .blog-featured-image { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
  .blog-featured-card:hover .blog-featured-image { transform: scale(1.05); }
  .blog-featured-content { padding: var(--space-xl); display: flex; flex-direction: column; justify-content: center; }
  .blog-featured-meta { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--font-size-sm); color: var(--color-ink-2); margin-bottom: var(--space-md); }
  .blog-featured-category { font-weight: 600; color: var(--color-accent-dark); text-transform: uppercase; letter-spacing: 0.05em; font-size: 0.7rem; }
  .blog-featured-dot { opacity: 0.5; }
  .blog-featured-title { font-size: var(--font-size-h3); font-weight: 700; line-height: 1.3; margin-bottom: var(--space-sm); }
  .blog-featured-title a { color: var(--color-ink-1); transition: var(--transition); }
  .blog-featured-title a:hover { color: var(--color-accent-dark); }
  .blog-featured-excerpt { color: var(--color-ink-2); line-height: 1.6; margin-bottom: var(--space-md); font-size: var(--font-size-sm); }
  .blog-featured-link { display: inline-flex; align-items: center; gap: var(--space-xs); color: var(--color-accent-dark); font-weight: 600; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 0.05em; transition: var(--transition); }
  .blog-featured-link:hover { gap: var(--space-sm); }
  @media (max-width: 768px) { .blog-featured-card { grid-template-columns: 1fr; } .blog-featured-image-link { min-height: 220px; } }
</style>

<!-- ============ HERO (bold-industrial: client truck band, video on desktop) ============ -->
<section class="hero hero--truck home-hero" aria-label="Introduction">
    <div class="hero-truck">
        <picture>
            <source type="image/avif" srcset="/assets/images/<?php echo $heroImage; ?>-480.avif 480w, /assets/images/<?php echo $heroImage; ?>-960.avif 960w, /assets/images/<?php echo $heroImage; ?>-1600.avif 1600w" sizes="(min-width: 1500px) 1500px, 100vw">
            <img src="/assets/images/<?php echo $heroImage; ?>.jpg" srcset="/assets/images/<?php echo $heroImage; ?>-480.webp 480w, /assets/images/<?php echo $heroImage; ?>-960.webp 960w, /assets/images/<?php echo $heroImage; ?>-1600.webp 1600w" sizes="(min-width: 1500px) 1500px, 100vw" alt="Drain Masters of the Palm Beaches service truck parked by the water under palm trees" width="1600" height="625" loading="eager" fetchpriority="high">
        </picture>
        <video muted loop playsinline preload="none" disablepictureinpicture aria-hidden="true" tabindex="-1" width="1600" height="626" data-webm="/assets/video/<?php echo $heroImage; ?>.webm" data-mp4="/assets/video/<?php echo $heroImage; ?>.mp4"></video>
        <button type="button" class="hero-truck-toggle" aria-label="Pause background video" aria-pressed="false" hidden>
            <svg class="icon-pause" aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="14" y="3" width="5" height="18" rx="1"/><rect x="5" y="3" width="5" height="18" rx="1"/></svg>
            <svg class="icon-play" aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"/></svg>
        </button>
    </div>
    <script>
    /* Truck loop: desktop only, after window load, skipped for reduced-motion / data-saver. */
    (function () {
        var band = document.querySelector('.hero-truck'); if (!band) return;
        var v = band.querySelector('video'), btn = band.querySelector('.hero-truck-toggle');
        var ok = window.matchMedia('(min-width: 901px)').matches
            && !window.matchMedia('(prefers-reduced-motion: reduce)').matches
            && !(navigator.connection && navigator.connection.saveData);
        if (!v || !ok) return;
        function play() { var p = v.play(); if (p && p.catch) p.catch(function () {}); }
        function start() {
            [['webm', 'video/webm'], ['mp4', 'video/mp4']].forEach(function (f) {
                var s = document.createElement('source'); s.src = v.getAttribute('data-' + f[0]); s.type = f[1]; v.appendChild(s);
            });
            v.addEventListener('playing', function () { v.classList.add('is-playing'); btn.hidden = false; }, { once: true });
            v.load(); play();
        }
        btn.addEventListener('click', function () {
            var pausing = !v.paused;
            if (pausing) v.pause(); else play();
            btn.setAttribute('aria-pressed', pausing ? 'true' : 'false');
            btn.setAttribute('aria-label', pausing ? 'Play background video' : 'Pause background video');
        });
        if (document.readyState === 'complete') start(); else window.addEventListener('load', start);
    })();
    </script>
    <div class="container">
        <div class="hero-grid hero-grid--form">
            <div class="hero-text">
                <span class="eyebrow">Palm Springs, FL &middot; Serving the Palm Beaches</span>
                <h1 class="hero-title">Fast, Honest Plumbing &amp; Drain Service in Palm Springs</h1>
                <p class="hero-answer">Drain Masters of the Palm Beaches clears stubborn clogs, repairs and replaces sewer lines, finds hidden leaks, installs water heaters, and handles plumbing emergencies across Palm Springs and Palm Beach County. Locally owned since 2023, owner Luis Noda's team offers same-day and after-hours emergency service and free estimates.</p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                    <a class="link-call" href="tel:<?php echo formatPhone($phone); ?>"><?php echo $icons['phone']; ?> or call <?php echo $phone; ?></a>
                </div>
                <p class="hero-rating"><span class="stars"><?php echo str_repeat($icons['star'], 5); ?></span> <strong>5.0</strong> from 6 Google reviews</p>
                <ul class="hero-chips">
                    <li><?php echo $icons['shield']; ?> Locally owned since 2023</li>
                    <li><?php echo $icons['home']; ?> Serving 8 Palm Beach County cities</li>
                    <li><?php echo $icons['clock']; ?> Same-day emergency service</li>
                </ul>
            </div>

            <aside class="hero-form-card" id="estimate-form">
                <h2>Get a free estimate</h2>
                <p class="hero-form-tagline">No obligation. Same-day reply.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="form_location" value="hero">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-service">Service</label>
                        <select id="hero-service" name="service">
                            <option value="">What do you need?</option>
                            <?php foreach ($services as $heroSvc): ?>
                            <option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"><?php echo htmlspecialchars($heroSvc['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
                    <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
                </form>
            </aside>
        </div>
    </div>
</section>

<!-- ============ PROOF STRIP (verifiable facts only) ============ -->
<section class="stats-band slant-top" aria-label="Company facts">
    <div class="container">
        <div class="stats-row">
            <div class="stat-item">
                <span class="stat-number">Est. <span>2023</span></span>
                <span class="stat-label">Locally owned in Palm Springs</span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><span>5.0</span> &#9733;</span>
                <span class="stat-label">Rated across 6 Google reviews</span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><span>8</span> Cities</span>
                <span class="stat-label">Served across Palm Beach County</span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><span>13</span> Services</span>
                <span class="stat-label">Drains, sewers, water heaters &amp; more</span>
            </div>
        </div>
    </div>
</section>

<!-- ============ INTRO / WHY US (split with photo) ============ -->
<section class="section section--light home-intro" aria-label="Why Drain Masters">
    <div class="container-wide">
        <div class="split">
            <div class="hero-text reveal-left" style="max-width:none">
                <span class="eyebrow-label">Palm Springs Plumbing Specialists</span>
                <h2>Why Palm Springs homeowners call Drain Masters first</h2>
                <p>Drain Masters of the Palm Beaches was built around one job most plumbers treat as an afterthought: keeping your drains and sewer lines flowing. Palm Springs sits on hard, mineral-heavy water, and many homes here run on decades-old cast iron and clay pipe that scales up, corrodes, and pulls in tree roots. We know exactly how those lines fail&mdash;and how to fix them for good.</p>
                <p>You get a straight answer, an upfront estimate with no surprise fees, and work done by a local team that knows Palm Springs plumbing. Whether it's a slow kitchen sink or a collapsed sewer main, we diagnose the real cause before we quote a repair.</p>
                <ul class="intro-points">
                    <li><?php echo $icons['check']; ?> Free assessments &amp; upfront pricing</li>
                    <li><?php echo $icons['check']; ?> Same-day &amp; after-hours emergencies</li>
                    <li><?php echo $icons['check']; ?> Camera diagnosis on sewer jobs</li>
                    <li><?php echo $icons['check']; ?> Drain cleaning is our core trade</li>
                </ul>
            </div>
            <div class="frame reveal-right">
                <div class="frame__img">
                    <?php echo renderPicture('dm-cast-iron-pipe-scale', photoAlt('dm-cast-iron-pipe-scale'), 600, 660, '(max-width: 900px) 100vw, 500px'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="section home-services" aria-label="Plumbing services">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>What <span class="text-accent">plumbing services</span> does Drain Masters offer in Palm Springs?</h2>
            <p class="hero-answer">Drain Masters of the Palm Beaches handles the full range of residential plumbing in Palm Springs and across Palm Beach County&mdash;from routine drain cleaning and hydro jetting to sewer line repair, leak detection, water heaters, repiping, and 24/7 emergencies.</p>
        </div>

        <div class="services-grid">
            <?php
            $tintCycle  = [1, 2, 3];
            foreach ($homeServices as $i => $svc):
                $meta   = $svcMeta[$svc['slug']] ?? ['icon' => 'wrench', 'bullets' => []];
                $tint   = $tintCycle[$i % 3];
                $delay  = ($i % 3) + 1;
                $photo  = $servicePhoto[$svc['slug']];
            ?>
            <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
                <div class="service-card__image">
                    <?php echo renderPicture($photo, photoAlt($photo), 600, 360, '(max-width: 768px) 100vw, 300px'); ?>
                </div>
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $icons[$meta['icon']]; ?></div>
                    <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
                    <p class="service-card__desc"><?php echo htmlspecialchars($svc['description']); ?></p>
                    <ul>
                        <?php foreach ($meta['bullets'] as $bullet): ?>
                        <li><?php echo htmlspecialchars($bullet); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/services/<?php echo $svc['slug']; ?>/" class="service-card__cta">Learn more</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="services-cta">
            <a href="/services/" class="btn btn-secondary btn-lg">View All <?php echo count($services); ?> Services <?php echo $icons['badge-check']; ?></a>
        </div>
    </div>
</section>

<!-- ============ MAINTENANCE PLANS TEASER ============ -->
<section class="section section--light home-plans" aria-label="Plumbing maintenance plans">
    <div class="container">
        <div class="plans-teaser">
            <div class="plans-teaser-copy">
                <span class="eyebrow">Maintenance Plans</span>
                <h2>Plumbing maintenance plans from <span class="text-accent">$30 a month</span></h2>
                <p>Drain Masters of the Palm Beaches offers monthly maintenance plans for homes, restaurants, commercial buildings and condo communities. Home plans include a yearly inspection, a water heater flush and no trip charge, and every plan takes 10% to 20% off service calls.</p>
                <a class="btn btn-primary btn-lg" href="/maintenance-plans/">See the plans</a>
            </div>
            <ul class="plans-teaser-prices">
                <li><a href="/maintenance-plans/#home-plans"><span class="amount">$30</span><span class="label">Standard Home Plan, per month</span></a></li>
                <li><a href="/maintenance-plans/#home-plans"><span class="amount">$50</span><span class="label">Premium Home Plan, per month</span></a></li>
                <li><a href="/maintenance-plans/#business-plans"><span class="amount">$70</span><span class="label">Restaurant &amp; Commercial Plan, per month</span></a></li>
            </ul>
        </div>
    </div>
</section>

<!-- ============ TICKER STRIP ============ -->
<div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
        <?php
        $tickerItems = [
            ['shield',      'Locally Owned &amp; Operated'],
            ['star',        '5.0&#9733; Google Rating'],
            ['clock',       'Same-Day Service'],
            ['waves',       'Drain Cleaning &amp; Hydro Jetting'],
            ['wrench',      'Sewer Line Experts'],
            ['map-pin',     'Palm Springs &amp; Lake Worth'],
            ['badge-check', 'Free Estimates'],
            ['home',        'Serving the Palm Beaches Since 2023'],
        ];
        // Print twice for a seamless loop
        for ($pass = 0; $pass < 2; $pass++):
            foreach ($tickerItems as $t):
        ?>
        <span><?php echo $icons[$t[0]]; ?> <?php echo $t[1]; ?></span>
        <?php endforeach; endfor; ?>
    </div>
</div>

<!-- ============ ABOUT / PROCESS (asymmetric signature section) ============ -->
<section class="section section--light home-about" aria-label="About Drain Masters and how we work">
    <div class="container-wide">
        <div class="about-split">
            <div class="about-copy reveal-up">
                <span class="eyebrow-label">Our Story &amp; Process</span>
                <h2>A local crew that treats your home like our own</h2>
                <p>Drain Masters of the Palm Beaches started in 2023 with a simple idea: give Palm Springs homeowners a plumber who shows up, explains the problem in plain English, and charges a fair price. Owner Luis Noda still runs the jobs, so the person quoting your work is the person standing behind it.</p>
                <p>Because drains and sewers are our specialty, we don't guess. We inspect, we diagnose the root cause, and we recommend the least invasive fix that actually lasts&mdash;whether that's a quick cabling or a trenchless sewer repair.</p>
                <ol class="process-steps">
                    <li><b>Inspect</b><span>We assess the line, often with a camera, to find the real problem.</span></li>
                    <li><b>Diagnose &amp; Quote</b><span>You get a clear explanation and an upfront, no-surprise estimate.</span></li>
                    <li><b>Repair</b><span>Our crew completes the work cleanly and to code.</span></li>
                    <li><b>Confirm</b><span>We test the line and confirm full flow before we leave.</span></li>
                </ol>
            </div>
            <div class="about-image reveal-right">
                <div class="about-image-primary">
                    <?php echo renderPicture('dm-sewer-camera-screen', photoAlt('dm-sewer-camera-screen'), 600, 660, '(max-width: 900px) 100vw, 460px'); ?>
                </div>
                <div class="about-stat-card">
                    <span class="stat-number">Since <span>2023</span></span>
                    <span class="stat-label">Locally owned &amp; operated</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ GOOGLE REVIEWS (Page One reviews feed — real reviews, refreshed nightly) ============ -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/google-reviews.php';
$homeReviews = p1_google_reviews($slug, ['heading' => 'What Palm Beach County customers say on Google']);
if ($homeReviews !== ''): ?>
<section class="section home-reviews" aria-label="Google reviews">
    <div class="container">
        <?php echo $homeReviews; ?>
    </div>
</section>
<?php endif; ?>

<!-- ============ MID-PAGE CTA BANNER (dark) ============ -->
<section class="cta-banner texture-grain edge-curve-top home-cta" aria-label="Emergency call to action">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container-wide">
        <div class="cta-copy">
            <span class="eyebrow-label cta-eyebrow">Backed up? Don't wait.</span>
            <h2>A slow drain today is a flooded floor tomorrow</h2>
            <p>Sewer backups and hidden leaks only get more expensive the longer they sit. Call Drain Masters of the Palm Beaches for same-day and after-hours service across Palm Springs, Lake Worth, and the rest of Palm Beach County.</p>
        </div>
        <div class="actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-accent btn-lg"><?php echo $icons['phone']; ?> Call <?php echo $phone; ?></a>
            <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request an estimate</button>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section home-faq" aria-label="Frequently asked questions">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">Good to Know</span>
            <h2>Palm Springs drain &amp; plumbing questions, answered</h2>
            <p class="prose">Straight answers to what homeowners ask us most about drains, sewers, and pricing.</p>
        </div>
        <div class="faq-grid">
            <?php foreach ($faqs as $fi => $faq): ?>
            <details class="faq"<?php echo $fi < 2 ? ' open' : ''; ?>>
                <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
                <p><?php echo htmlspecialchars($faq['a']); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ FROM THE BLOG ============ -->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php'; ?>
<section class="section bg-light">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Plumbing Tips & Advice</p>
            <h2>From the <span class="text-accent">Blog</span></h2>
            <p class="section-intro">Practical advice from our team's <?php echo $yearsInBusiness; ?> years of experience serving the Palm Beaches.</p>
        </div>

        <?php if (!empty($blogPosts)): ?>
        <div class="blog-preview">
            <?php
            $featuredPost = $blogPosts[0];
            ?>
            <article class="blog-featured-card">
                <a href="/blog/<?php echo $featuredPost['slug']; ?>/" class="blog-featured-image-link">
                    <?php echo renderPicture($featuredPost['imageBase'], $featuredPost['alt'], 960, 540, '(max-width: 768px) 100vw, 400px', ['imgClass' => 'blog-featured-image']); ?>
                </a>
                <div class="blog-featured-content">
                    <div class="blog-featured-meta">
                        <span class="blog-featured-category"><?php echo htmlspecialchars($featuredPost['category']); ?></span>
                        <span class="blog-featured-dot">•</span>
                        <time datetime="<?php echo $featuredPost['dateISO']; ?>"><?php echo $featuredPost['date']; ?></time>
                        <span class="blog-featured-dot">•</span>
                        <span><?php echo $featuredPost['readtime']; ?></span>
                    </div>
                    <h3 class="blog-featured-title">
                        <a href="/blog/<?php echo $featuredPost['slug']; ?>/">
                            <?php echo htmlspecialchars($featuredPost['title']); ?>
                        </a>
                    </h3>
                    <p class="blog-featured-excerpt"><?php echo htmlspecialchars($featuredPost['excerpt']); ?></p>
                    <a href="/blog/<?php echo $featuredPost['slug']; ?>/" class="blog-featured-link">
                        Read Article
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            </article>
        </div>

        <div style="text-align: center; margin-top: var(--space-2xl);">
            <a href="/blog/" class="btn-primary">View All Articles</a>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- ============ ESTIMATE SECTION ============ -->
<section class="section home-estimate" id="estimate" aria-label="Request a free estimate">
    <div class="container">
        <div class="estimate">
            <div class="card">
                <span class="eyebrow-label">Free Estimate</span>
                <h2>Tell us about the job</h2>
                <p class="prose">Send a few details and Drain Masters of the Palm Beaches will get back to you the same day with next steps.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <input type="hidden" name="form_location" value="estimate-section">
                    <?php echo p1_attribution_fields('estimate-section'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

                    <div class="form-grid">
                        <div class="field">
                            <label for="est-name">Your Name</label>
                            <input id="est-name" type="text" name="name" autocomplete="name" required>
                        </div>
                        <div class="field">
                            <label for="est-phone">Phone</label>
                            <input id="est-phone" type="tel" name="phone" autocomplete="tel" required>
                        </div>
                        <div class="field full">
                            <label for="est-email">Email</label>
                            <input id="est-email" type="email" name="email" autocomplete="email" required>
                        </div>
                        <div class="field full">
                            <label for="est-service">Service Needed</label>
                            <select id="est-service" name="service">
                                <option value="">Select a service</option>
                                <?php foreach ($services as $estSvc): ?>
                                <option value="<?php echo htmlspecialchars($estSvc['name']); ?>"><?php echo htmlspecialchars($estSvc['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="field full">
                            <label for="est-message">How can we help?</label>
                            <textarea id="est-message" name="message" rows="4"></textarea>
                        </div>
                    </div>

                    <fieldset class="form-consent-fieldset">
                        <legend class="form-consent-legend">Communication Consent</legend>
                        <label class="form-consent-item">
                            <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                            <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, and promotions. I can unsubscribe anytime.</span>
                        </label>
                        <label class="form-consent-item">
                            <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                            <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive texts from <?php echo htmlspecialchars($siteName); ?> at the number provided (reminders, updates, offers). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                        </label>
                        <label class="form-consent-item form-consent-required">
                            <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                            <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-block">Send my request</button>
                </form>
            </div>

            <div class="estimate-next">
                <div>
                    <span class="eyebrow-label">What happens next</span>
                    <h3>Three steps to a fixed drain</h3>
                    <ol class="next-steps">
                        <li><strong>We call you back same day</strong>Tell us what's happening and we'll respond fast with next steps.</li>
                        <li><strong>We diagnose the real cause</strong>On urgent jobs we head out same-day and inspect the line before quoting anything.</li>
                        <li><strong>You get an upfront price</strong>Clear options, no hidden fees, and work done by a local Palm Springs team.</li>
                    </ol>
                </div>

                <div class="nap">
                    <div><?php echo $icons['phone']; ?><a href="tel:<?php echo formatPhone($phone); ?>"><?php echo $phone; ?></a></div>
                    <div><?php echo $icons['mail']; ?><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
                    <div><?php echo $icons['map-pin']; ?><span><?php echo $address['street']; ?>, <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?></span></div>
                </div>
                <p class="area-note">Serving Palm Springs, Lake Worth, West Palm Beach, Greenacres, Boynton Beach, Wellington, Lantana, and Royal Palm Beach.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQPage schema (AI comprehension aid) -->
<script type="application/ld+json">
<?php echo $faqSchema; ?>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
