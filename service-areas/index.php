<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage = 'service-areas';
$pageType = 'other';
$pageTitle = "Plumbing Service Areas | $siteName | Palm Beach County, FL";
$metaDescription = "Expert drain cleaning and plumbing services across Palm Beach County. We serve Palm Springs, Lake Worth, West Palm Beach, Boynton Beach, Wellington, and surrounding communities. Call $phone today.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="hero hero--interior">
    <div class="container">
        <div class="hero-content">
            <p class="eyebrow">Where We Work</p>
            <h1>Professional Plumbing Services Across the Palm Beaches</h1>
            <p class="hero-answer">
                We serve homeowners and businesses throughout Palm Beach County with fast, reliable drain cleaning, sewer repair, and emergency plumbing. Our team knows the local infrastructure—from older Palm Springs neighborhoods to newer Wellington developments—and we're equipped to handle any plumbing challenge the area brings.
            </p>
        </div>
    </div>
</section>

<!-- Service Areas Grid -->
<section class="section bg-light">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Communities We Serve</p>
            <h2>Expert Plumbing in <span class="text-accent">8 Palm Beach County Cities</span></h2>
            <p class="section-intro">
                From emergency sewer backups to routine drain maintenance, our licensed plumbers bring the same expertise and fair pricing to every community we serve. Wherever you are in the Palm Beaches, we're ready to help.
            </p>
        </div>

        <div class="areas-grid">
            <?php
            $areaDescriptions = [
                'Palm Springs' => 'Our home base. We know every neighborhood, from Century Village to the Golf/Vista Park areas, and we respond fast to local calls.',
                'Lake Worth' => 'Serving both the historic downtown district and the newer residential communities with comprehensive drain and sewer services.',
                'West Palm Beach' => 'From Northwood to Flamingo Park, we handle the plumbing challenges of one of South Florida\'s largest cities.',
                'Greenacres' => 'Expert service for this growing community, including hydro jetting and trenchless sewer repair for modern and established homes alike.',
                'Boynton Beach' => 'Professional plumbing for coastal and inland neighborhoods, tackling hard water buildup and sewer line issues common to the area.',
                'Wellington' => 'Serving Wellington\'s residential communities and equestrian properties with reliable plumbing solutions.',
                'Lantana' => 'Fast response times for this tight-knit community, specializing in slab leak detection and water heater service.',
                'Royal Palm Beach' => 'Comprehensive plumbing services for homes and businesses across this western Palm Beach County community.',
            ];

            foreach ($serviceAreas as $index => $area):
                $areaSlug = getAreaSlug($area);
                $description = $areaDescriptions[$area] ?? "Professional plumbing services in $area and surrounding neighborhoods.";
            ?>
            <div class="area-card" data-animate="fade-up" data-delay="<?php echo ($index % 3) * 100; ?>">
                <div class="area-card-header">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                    <h3><?php echo htmlspecialchars($area); ?></h3>
                </div>
                <p><?php echo $description; ?></p>
                <a href="/service-areas/<?php echo $areaSlug; ?>/" class="area-card-link">
                    Learn more about service in <?php echo htmlspecialchars($area); ?>
                    <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us for Your Area -->
<section class="section">
    <div class="container-narrow">
        <h2>Why Choose Drain Masters for Your Neighborhood?</h2>
        <div class="prose">
            <p>
                When you call a local plumber, you want someone who understands the specific challenges your area faces. Palm Beach County's infrastructure varies widely—some neighborhoods have aging cast iron pipes prone to root intrusion, while others deal with hard water that accelerates mineral buildup. Coastal communities face unique corrosion issues, and newer developments may have modern plumbing that still requires expert care.
            </p>
            <p>
                Our team has worked across the Palm Beaches since <?php echo $yearEstablished; ?>, and we've seen it all. We know which streets flood during summer storms, which neighborhoods have shared sewer laterals, and where tree roots are most likely to invade underground lines. That local knowledge means faster diagnosis, better solutions, and fewer return trips.
            </p>
            <p>
                Whether you're in a high-rise condo in West Palm Beach or a single-family home in Wellington, we bring the same commitment: honest pricing, licensed technicians, and work that's guaranteed. No surprise charges, no upsells you don't need—just reliable plumbing service you can count on.
            </p>
        </div>
    </div>
</section>

<!-- Services We Bring to Every Community -->
<section class="section bg-light">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">What We Do</p>
            <h2>Complete Plumbing Services <span class="text-accent">Across the Palm Beaches</span></h2>
        </div>

        <div class="grid-3">
            <div class="service-highlight-card">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="m15 5-3 3-3-3"/><path d="m19 10-3 3-3-3"/><path d="m5 14 3 3 3-3"/><path d="m9 19 3 3 3-3"/></svg>
                <h3>Drain Cleaning & Hydro Jetting</h3>
                <p>From kitchen sinks to main sewer lines, we clear blockages fast with professional equipment and techniques that last.</p>
            </div>
            <div class="service-highlight-card">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                <h3>Leak Detection & Slab Leak Repair</h3>
                <p>Electronic leak detection pinpoints hidden leaks without tearing up your property. Targeted repairs save time and money.</p>
            </div>
            <div class="service-highlight-card">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"/></svg>
                <h3>Water Heater Installation & Repair</h3>
                <p>Tank and tankless water heaters sized right for your household, with expert installation and same-day repairs.</p>
            </div>
            <div class="service-highlight-card">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16V9"/><path d="M12 16V6"/><path d="M17 16v-5"/></svg>
                <h3>Sewer Line Repair & Replacement</h3>
                <p>Trenchless and traditional sewer repair for broken, collapsed, or root-invaded lines. We restore flow without destroying your yard.</p>
            </div>
            <div class="service-highlight-card">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                <h3>Emergency Plumbing</h3>
                <p>Burst pipes, sewer backups, and major leaks don't wait for business hours. We offer emergency service across all our areas.</p>
            </div>
            <div class="service-highlight-card">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                <h3>Repiping & Gas Line Work</h3>
                <p>Whole-home repiping for corroded lines, plus safe gas line repair and installation by licensed professionals.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: var(--space-2xl);">
            <a href="/services/" class="btn-primary">View All Services</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container">
        <div class="cta-content">
            <h2>Need a Plumber in Your Area?</h2>
            <p>We're ready to help. Fast response, fair pricing, and work that's guaranteed across the Palm Beaches.</p>
        </div>
        <div class="cta-actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn-secondary">
                <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                Call <?php echo $phone; ?>
            </a>
            <button class="btn-primary" data-open-estimate>Get Free Estimate</button>
        </div>
    </div>
</section>

<style>
.areas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--space-lg);
    margin-top: var(--space-2xl);
}

.area-card {
    background: var(--color-bg);
    border: 1px solid var(--color-border);
    border-radius: var(--radius);
    padding: var(--space-lg);
    transition: var(--transition);
}

.area-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
    border-color: var(--color-accent);
}

.area-card-header {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    margin-bottom: var(--space-md);
}

.area-card-header svg {
    color: var(--color-accent);
    flex-shrink: 0;
}

.area-card-header h3 {
    font-size: var(--fs-h4);
    font-weight: 700;
    margin: 0;
}

.area-card p {
    color: var(--color-text-light);
    line-height: 1.6;
    margin-bottom: var(--space-md);
}

.area-card-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-xs);
    color: var(--color-accent);
    font-weight: 600;
    font-size: var(--fs-sm);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    transition: var(--transition);
}

.area-card-link:hover {
    gap: var(--space-sm);
}

.area-card-link svg {
    transition: var(--transition);
}

.service-highlight-card {
    background: var(--color-bg);
    border: 1px solid var(--color-border);
    border-radius: var(--radius);
    padding: var(--space-lg);
    text-align: center;
}

.service-highlight-card svg {
    color: var(--color-accent);
    margin: 0 auto var(--space-md);
}

.service-highlight-card h3 {
    font-size: var(--fs-h5);
    font-weight: 700;
    margin-bottom: var(--space-sm);
}

.service-highlight-card p {
    color: var(--color-text-light);
    font-size: var(--fs-sm);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .areas-grid {
        grid-template-columns: 1fr;
    }

    .grid-3 {
        grid-template-columns: 1fr;
    }
}
</style>

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
