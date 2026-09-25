<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage     = 'services';
$pageType        = 'other';

$pageTitle       = 'Plumbing Services in Palm Springs, FL | Drain Masters of the Palm Beaches';
$metaDescription = 'Full-service plumbing in Palm Springs, FL: drain cleaning, hydro jetting, sewer line repair, leak detection, water heaters, repiping and emergency plumbing. Call ' . $phone . '.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/';

/* Hero image preload (v6.3 — avif srcset for the eager hero <picture>) */
$heroImage   = 'owner-img_8976';
$heroPreload = [
    'srcset' => '/assets/images/' . $heroImage . '-480.avif 480w, /assets/images/' . $heroImage . '-960.avif 960w',
    'sizes'  => '100vw',
];

/* Inline Lucide SVGs used on this page */
$icons = [
    'droplets'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'waves'          => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
    'wrench'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'hammer'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"/></svg>',
    'search'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>',
    'flame'          => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'droplet'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>',
    'trash-2'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>',
    'gauge'          => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'zap'            => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>',
    'shield'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'alert-triangle' => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
    'phone'          => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge-check'    => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
];

/* Per-service icon + 3 bullets (mirrors service-page.php) */
$svcMeta = [
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
$svcPhotos = ['owner-img_8820', 'owner-img_8947', 'owner-img_8933', 'owner-img_8819', 'owner-img_8946', 'owner-img_8976'];

/* BreadcrumbList schema */
$servicesBreadcrumb = json_encode([
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
  .services-index .services-grid { margin-top: var(--space-xl); }
  .services-list-cta { display: flex; justify-content: center; margin-top: var(--space-2xl); }
</style>

<!-- ============ HERO ============ -->
<section class="hero hero--photo services-index-hero" aria-label="Plumbing services introduction">
    <div class="hero-bg">
        <?php echo renderPicture($heroImage, 'Drain Masters of the Palm Beaches plumbing team in Palm Springs, Florida', 1600, 1000, '100vw', ['eager' => true]); ?>
    </div>
    <div class="hero-overlay"></div>
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
        <div class="hero-text">
            <span class="eyebrow">Serving Palm Springs &amp; the Palm Beaches</span>
            <h1 class="hero-title">Plumbing Services in Palm Springs, FL</h1>
            <p class="hero-answer">Drain Masters of the Palm Beaches is a licensed, locally owned plumbing company in Palm Springs, Florida. From routine drain cleaning to sewer replacement and 24/7 emergencies, we handle the full range of residential plumbing across Palm Beach County.</p>
            <div class="hero-actions">
                <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                <a class="link-call" href="tel:<?php echo formatPhone($phone); ?>"><?php echo $icons['phone']; ?> or call <?php echo $phone; ?></a>
            </div>
        </div>
    </div>
</section>

<!-- ============ SERVICES GRID (all 13) ============ -->
<section class="section services-index" aria-label="All plumbing services">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>Which <span class="text-accent">plumbing service</span> does your Palm Springs home need?</h2>
            <p class="hero-answer">Drain Masters of the Palm Beaches offers <?php echo count($services); ?> residential plumbing services across Palm Springs, Lake Worth, West Palm Beach, and the surrounding Palm Beach County communities. Choose a service below to see how we handle it&mdash;or call and we will point you to the right fix.</p>
        </div>

        <div class="services-grid">
            <?php
            $tintCycle = [1, 2, 3];
            foreach ($services as $i => $svc):
                $meta  = $svcMeta[$svc['slug']] ?? ['icon' => 'wrench', 'bullets' => []];
                $photo = $svcPhotos[$i % count($svcPhotos)];
            ?>
            <article class="service-card-with-image card-tint-<?php echo $tintCycle[$i % 3]; ?> reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
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

        <div class="services-list-cta">
            <a href="/contact/" class="btn btn-secondary btn-lg">Not sure what you need? Contact us <?php echo $icons['badge-check']; ?></a>
        </div>
    </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="closing-cta texture-grain edge-curve-top" aria-label="Get started">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container-wide">
        <div class="cta-copy">
            <span class="eyebrow-label">Ready when you are</span>
            <h2>One call handles it&mdash;from a slow drain to a full repipe</h2>
            <p>Drain Masters of the Palm Beaches brings the right tools and a licensed local crew to every job in Palm Springs and Palm Beach County. Call now or request a free estimate.</p>
        </div>
        <div class="actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-accent btn-lg"><?php echo $icons['phone']; ?> Call <?php echo $phone; ?></a>
            <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request an estimate</button>
        </div>
    </div>
</section>

<script type="application/ld+json">
<?php echo $servicesBreadcrumb; ?>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
