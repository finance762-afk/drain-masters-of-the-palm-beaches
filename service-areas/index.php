<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage = 'service-areas';
$pageType = 'other';
$pageTitle = "Plumbing Service Areas | $siteName | Palm Beach County, FL";
$metaDescription = "Expert drain cleaning and plumbing services across Palm Beach County. We serve Palm Springs, Lake Worth, West Palm Beach, Boynton Beach, Wellington, and surrounding communities. Call $phone today.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/';

/* Inline Lucide SVGs (v6.2 — pasted raw at build time) */
$saIcons = [
    'map-pin'     => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'droplets'    => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'search'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>',
    'flame'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'wrench'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'alert'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
    'hammer'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"/></svg>',
    'phone'       => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge-check' => '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
];

$areaDescriptions = [
    'Palm Springs'     => 'Our home base. We know every neighborhood, from Century Village to the Golf/Vista Park areas, and we respond fast to local calls.',
    'Lake Worth'       => 'Serving both the historic downtown district and the newer residential communities with comprehensive drain and sewer services.',
    'West Palm Beach'  => 'From Northwood to Flamingo Park, we handle the plumbing challenges of one of South Florida\'s largest cities.',
    'Greenacres'       => 'Expert service for this growing community, including hydro jetting and trenchless sewer repair for modern and established homes alike.',
    'Boynton Beach'    => 'Professional plumbing for coastal and inland neighborhoods, tackling hard water buildup and sewer line issues common to the area.',
    'Wellington'       => 'Serving Wellington\'s residential communities and equestrian properties with reliable plumbing solutions.',
    'Lantana'          => 'Fast response times for this tight-knit community, specializing in slab leak detection and water heater service.',
    'Royal Palm Beach' => 'Comprehensive plumbing services for homes and businesses across this western Palm Beach County community.',
];

$saHighlights = [
    ['droplets', 'Drain Cleaning & Hydro Jetting',        'From kitchen sinks to main sewer lines, we clear blockages fast with professional equipment and techniques that last.', 'drain-cleaning'],
    ['search',   'Leak Detection & Slab Leak Repair',     'Electronic leak detection pinpoints hidden leaks without tearing up your property. Targeted repairs save time and money.', 'leak-detection-slab-leak-repair'],
    ['flame',    'Water Heater Installation & Repair',    'Tank and tankless water heaters sized right for your household, with expert installation and same-day repairs.', 'water-heater-installation-repair'],
    ['wrench',   'Sewer Line Repair & Replacement',       'Trenchless and traditional sewer repair for broken, collapsed, or root-invaded lines. We restore flow without destroying your yard.', 'sewer-line-repair-replacement'],
    ['alert',    'Emergency Plumbing',                    'Burst pipes, sewer backups, and major leaks don\'t wait for business hours. We offer emergency service across all our areas.', 'emergency-plumbing'],
    ['hammer',   'Repiping & Gas Line Work',              'Whole-home repiping for corroded lines, plus safe gas line repair and installation done to code.', 'repiping'],
];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Page-specific composition (tokens only) -->
<style>
  .sa-hero .floating-ring { right: -140px; top: -120px; opacity: .12; }
  .sa-hero .hero-text { max-width: 44rem; }
  .sa-hero .hero-answer { max-width: 40rem; }
  .sa-hero .btn-outline-white { color: #fff; }
  .sa-cities .services-grid { gap: var(--space-lg); }
  .sa-cities .service-card__body { padding: var(--space-xl); gap: var(--space-sm); }
  .sa-cities .service-card-with-image { height: 100%; }
  .sa-why .about-copy p { color: var(--color-ink); }
  .sa-why .frame__card { display: grid; gap: .1rem; min-width: 150px; }
  .sa-svc .services-grid { grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
  .sa-svc .service-card__body { padding: var(--space-xl); gap: var(--space-sm); }
  .sa-svc .services-cta { display: flex; justify-content: center; margin-top: var(--space-2xl); }
  @media (max-width: 1000px) { .sa-svc .services-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 600px) { .sa-svc .services-grid { grid-template-columns: 1fr; } }
  .sa-cta .cta-copy { display: grid; gap: var(--space-sm); }
</style>

<!-- ============ HERO (interior, sized to content) ============ -->
<section class="hero hero--interior sa-hero" aria-label="Service areas">
    <span class="grain" aria-hidden="true"></span>
    <span class="floating-ring" aria-hidden="true"></span>
    <div class="container">
        <div class="hero-text">
            <span class="eyebrow">Where We Work</span>
            <h1>Professional Plumbing Services Across the Palm Beaches</h1>
            <p class="hero-answer">We serve homeowners and businesses throughout Palm Beach County with fast, reliable drain cleaning, sewer repair, and emergency plumbing. Our team knows the local infrastructure—from older Palm Springs neighborhoods to newer Wellington developments—and we're equipped to handle any plumbing challenge the area brings.</p>
            <div class="hero-actions">
                <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Get a free estimate</button>
                <a class="btn btn-outline-white btn-lg" href="tel:<?php echo formatPhone($phone); ?>"><?php echo $saIcons['phone']; ?> Call <?php echo $phone; ?></a>
            </div>
        </div>
    </div>
</section>

<!-- ============ CITY GRID (tinted scaffold cards) ============ -->
<section class="section section--light sa-cities" aria-label="Communities we serve">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">Communities We Serve</span>
            <h2>Expert Plumbing in <span class="text-accent">8 Palm Beach County Cities</span></h2>
            <p>From emergency sewer backups to routine drain maintenance, our plumbers bring the same expertise and fair pricing to every community we serve. Wherever you are in the Palm Beaches, we're ready to help.</p>
        </div>
        <div class="services-grid">
            <?php foreach ($serviceAreas as $saIndex => $saArea):
                $saSlug   = getAreaSlug($saArea);
                $saExists = is_dir($_SERVER['DOCUMENT_ROOT'] . '/service-areas/' . $saSlug);
                $saDesc   = $areaDescriptions[$saArea] ?? "Professional plumbing services in $saArea and surrounding neighborhoods.";
            ?>
            <a href="<?php echo $saExists ? '/service-areas/' . $saSlug . '/' : '/contact/'; ?>" class="service-card-with-image card-tint-<?php echo ($saIndex % 3) + 1; ?> reveal-up reveal-delay-<?php echo ($saIndex % 3) + 1; ?>" id="<?php echo $saSlug; ?>">
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $saIcons['map-pin']; ?></div>
                    <h3><?php echo htmlspecialchars($saArea); ?></h3>
                    <p class="service-card__desc"><?php echo htmlspecialchars($saDesc); ?></p>
                    <span class="service-card__cta">Plumber in <?php echo htmlspecialchars($saArea); ?></span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ WHY CHOOSE US (asymmetric split + framed photo) ============ -->
<section class="section sa-why" aria-label="Why choose Drain Masters for your neighborhood">
    <div class="container-wide">
        <div class="grid-asymmetric">
            <div class="about-copy reveal-left">
                <span class="eyebrow-label">Local Knowledge</span>
                <h2>Why Choose Drain Masters for Your Neighborhood?</h2>
                <p>When you call a local plumber, you want someone who understands the specific challenges your area faces. Palm Beach County's infrastructure varies widely—some neighborhoods have aging cast iron pipes prone to root intrusion, while others deal with hard water that accelerates mineral buildup. Coastal communities face unique corrosion issues, and newer developments may have modern plumbing that still requires expert care.</p>
                <p>Our team has worked across the Palm Beaches since <?php echo $yearEstablished; ?>, and we've seen it all. We know which streets flood during summer storms, which neighborhoods have shared sewer laterals, and where tree roots are most likely to invade underground lines. That local knowledge means faster diagnosis, better solutions, and fewer return trips.</p>
                <p>Whether you're in a high-rise condo in West Palm Beach or a single-family home in Wellington, we bring the same commitment: honest pricing, experienced technicians, and straight answers. No surprise charges, no upsells you don't need—just reliable plumbing service you can count on.</p>
            </div>
            <div class="frame reveal-right">
                <div class="frame__img img-reveal">
                    <?php echo renderPicture('dm-service-van', photoAlt('dm-service-van'), 600, 660, '(max-width: 900px) 100vw, 460px'); ?>
                </div>
                <div class="frame__card">
                    <span class="stat-number"><span>8</span> cities</span>
                    <span class="stat-label">Across Palm Beach County</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SERVICES WE BRING TO EVERY COMMUNITY ============ -->
<section class="section section--light edge-wave-top sa-svc" aria-label="Plumbing services across the Palm Beaches">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>Complete Plumbing Services <span class="text-accent">Across the Palm Beaches</span></h2>
        </div>
        <div class="services-grid">
            <?php foreach ($saHighlights as $hi => $sh):
                $shHref = is_dir($_SERVER['DOCUMENT_ROOT'] . '/services/' . $sh[3]) ? '/services/' . $sh[3] . '/' : '/services/';
            ?>
            <a href="<?php echo $shHref; ?>" class="service-card-with-image card-tint-<?php echo ($hi % 3) + 1; ?> reveal-up reveal-delay-<?php echo ($hi % 3) + 1; ?>">
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $saIcons[$sh[0]]; ?></div>
                    <h3><?php echo htmlspecialchars($sh[1]); ?></h3>
                    <p class="service-card__desc"><?php echo htmlspecialchars($sh[2]); ?></p>
                    <span class="service-card__cta">Learn more</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="services-cta">
            <a href="/services/" class="btn btn-secondary btn-lg">View All <?php echo count($services); ?> Services <?php echo $saIcons['badge-check']; ?></a>
        </div>
    </div>
</section>

<!-- ============ CTA BAND ============ -->
<section class="closing-cta texture-grain edge-curve-top sa-cta" aria-label="Get started">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="cta-copy">
            <span class="eyebrow-label">Ready when you are</span>
            <h2>Need a Plumber in Your Area?</h2>
            <p>We're ready to help. Fast response, fair pricing, and straight answers across the Palm Beaches.</p>
        </div>
        <div class="actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-accent btn-lg"><?php echo $saIcons['phone']; ?> Call <?php echo $phone; ?></a>
            <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Get Free Estimate</button>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "<?php echo $siteUrl; ?>/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Service Areas"
                }
            ]
        },
        {
            "@type": "WebPage",
            "name": "<?php echo htmlspecialchars($pageTitle); ?>",
            "description": "<?php echo htmlspecialchars($metaDescription); ?>",
            "url": "<?php echo $siteUrl; ?>/service-areas/",
            "provider": {
                "@id": "<?php echo $siteUrl; ?>/#organization"
            }
        }
    ]
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
