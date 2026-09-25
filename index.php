<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'home';
$pageType    = 'home';

$pageTitle       = 'Plumber & Drain Cleaning in Palm Springs, FL | Drain Masters of the Palm Beaches';
$metaDescription = 'Drain Masters of the Palm Beaches is a licensed Palm Springs, FL plumber for drain cleaning, sewer line repair, water heaters and emergency plumbing. Call ' . $phone . '.';
$canonicalUrl    = $siteUrl . '/';

/* Allocated homepage hero (deal_assets role=hero) — NOT $photoLibrary[0] */
$heroImage  = 'owner-img_8976';
$heroPreload = [
    'srcset' => '/assets/images/' . $heroImage . '-480.avif 480w, /assets/images/' . $heroImage . '-960.avif 960w',
    'sizes'  => '100vw',
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

/* Inline Lucide SVGs (v6.2 — pasted at build time, never data-lucide/CDN) */
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
/* Photo pool cycled across service cards (hero photo is reserved for the hero) */
$svcPhotos    = ['owner-img_8820', 'owner-img_8947', 'owner-img_8933', 'owner-img_8819', 'owner-img_8946', 'owner-img_8976'];
$homeServices = array_slice($services, 0, 8);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition (tokens only) -->
<style>
  .home-hero .hero-rating { display: inline-flex; align-items: center; gap: var(--space-xs); font-size: var(--font-size-sm); color: var(--color-white); margin-top: var(--space-xs); }
  .home-hero .hero-rating .stars { display: inline-flex; gap: var(--space-1); color: var(--color-star); }
  .home-hero .hero-rating strong { color: var(--color-white); }

  .home-intro .intro-points { list-style: none; margin: var(--space-md) 0 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-sm) var(--space-lg); }
  .home-intro .intro-points li { display: flex; gap: var(--space-xs); align-items: flex-start; font-size: var(--font-size-sm); color: var(--color-ink-2); }
  .home-intro .intro-points svg { color: var(--color-accent-dark); flex: 0 0 auto; }
  @media (max-width: 560px) { .home-intro .intro-points { grid-template-columns: 1fr; } }

  .home-services .services-cta { display: flex; justify-content: center; margin-top: var(--space-2xl); }

  .home-cta .cta-copy { display: grid; gap: var(--space-sm); }
  .home-cta .cta-eyebrow { color: var(--color-accent-bright); }

  .home-estimate .estimate-next { display: grid; gap: var(--space-lg); align-content: start; }
  .home-estimate .area-note { font-size: var(--font-size-sm); color: var(--color-ink-2); margin: 0; }
</style>

<!-- ============ HERO (bold-industrial: full-bleed photo) ============ -->
<section class="hero hero--photo home-hero" aria-label="Introduction">
    <div class="hero-bg">
        <?php echo renderPicture($heroImage, 'Drain Masters of the Palm Beaches plumber on a job site in Palm Springs, Florida', 1600, 1000, '100vw', ['eager' => true]); ?>
    </div>
    <div class="hero-overlay"></div>
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
        <div class="hero-grid hero-grid--form">
            <div class="hero-text">
                <span class="eyebrow">Palm Springs, FL &middot; Serving the Palm Beaches</span>
                <h1 class="hero-title">Fast, Honest Plumbing &amp; Drain Service in Palm Springs</h1>
                <p class="hero-answer">Drain Masters of the Palm Beaches clears stubborn clogs, repairs sewer lines, and handles plumbing emergencies across Palm Springs and Palm Beach County&mdash;licensed, insured, and ready for same-day calls.</p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                    <a class="link-call" href="tel:<?php echo formatPhone($phone); ?>"><?php echo $icons['phone']; ?> or call <?php echo $phone; ?></a>
                </div>
                <p class="hero-rating"><span class="stars"><?php echo str_repeat($icons['star'], 5); ?></span> <strong>5.0</strong> from 6 Google reviews</p>
                <ul class="hero-chips">
                    <li><?php echo $icons['shield']; ?> Licensed &amp; insured</li>
                    <li><?php echo $icons['home']; ?> Family owned since 2023</li>
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
                    <?php echo getAttributionFields('hero'); ?>
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
                <p>You get a straight answer, an upfront estimate with no surprise fees, and work backed by a licensed, insured local team. Whether it's a slow kitchen sink or a collapsed sewer main, we diagnose the real cause before we quote a repair.</p>
                <ul class="intro-points">
                    <li><?php echo $icons['check']; ?> Free assessments &amp; upfront pricing</li>
                    <li><?php echo $icons['check']; ?> Same-day &amp; after-hours emergencies</li>
                    <li><?php echo $icons['check']; ?> Camera diagnosis on sewer jobs</li>
                    <li><?php echo $icons['check']; ?> Drain cleaning is our core trade</li>
                </ul>
            </div>
            <div class="frame reveal-right">
                <div class="frame__img">
                    <?php echo renderPicture('owner-img_8820', 'Drain Masters technician servicing a plumbing line at a Palm Springs, FL home', 600, 660, '(max-width: 900px) 100vw, 500px'); ?>
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
                $photo  = $svcPhotos[$i % count($svcPhotos)];
            ?>
            <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
                <div class="service-card__image">
                    <?php echo renderPicture($photo, $svc['name'] . ' by Drain Masters of the Palm Beaches in Palm Springs, FL', 600, 360, '(max-width: 768px) 100vw, 300px'); ?>
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

<!-- ============ TICKER STRIP ============ -->
<div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
        <?php
        $tickerItems = [
            ['shield',      'Licensed &amp; Insured'],
            ['star',        '5.0&#9733; Google Rating'],
            ['clock',       'Same-Day Service'],
            ['waves',       'Drain Cleaning &amp; Hydro Jetting'],
            ['wrench',      'Sewer Line Experts'],
            ['map-pin',     'Palm Springs &amp; Lake Worth'],
            ['badge-check', 'Free Estimates'],
            ['home',        'Family Owned Since 2023'],
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
                    <li><b>Repair</b><span>Licensed techs complete the work cleanly and to code.</span></li>
                    <li><b>Guarantee</b><span>We confirm full flow and stand behind every repair.</span></li>
                </ol>
            </div>
            <div class="about-image reveal-right">
                <div class="about-image-primary">
                    <?php echo renderPicture('owner-img_8933', 'Drain Masters of the Palm Beaches team completing a plumbing repair in Palm Springs, FL', 600, 660, '(max-width: 900px) 100vw, 460px'); ?>
                </div>
                <div class="about-stat-card">
                    <span class="stat-number">Since <span>2023</span></span>
                    <span class="stat-label">Locally owned &amp; operated</span>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <?php echo getAttributionFields('estimate-section'); ?>
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
                        <li><strong>We call you back same day</strong>Tell us what's happening and we'll respond fast&mdash;often within the hour during business hours.</li>
                        <li><strong>We diagnose the real cause</strong>On urgent jobs we head out same-day and inspect the line before quoting anything.</li>
                        <li><strong>You get an upfront price</strong>Clear options, no hidden fees, and work backed by a licensed local team.</li>
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
