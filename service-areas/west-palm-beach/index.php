<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Wikipedia: https://en.wikipedia.org/wiki/West_Palm_Beach,_Florida
 * - Historic Northwood Hills: https://historicnorthwoodhills.org/
 * - USDA Zone: 10b (2023)
 * - Elevation: varies, Northwood Hills has highest natural peaks in South Florida at 44 ft
 * - Notable neighborhoods: Flamingo Park (Spanish Colonial/Mission Revival), Northwood Hills, Old Northwood (developed 1921)
 * - Large diverse city with 12+ historic neighborhoods
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'west-palm-beach';
$areaName = 'West Palm Beach';
$pageTitle = "Plumber in West Palm Beach, FL | Drain & Sewer Experts | $siteName";
$metaDescription = "Expert plumbing in West Palm Beach, FL. Serving Northwood Hills, Flamingo Park, and all historic neighborhoods with drain cleaning, sewer repair, and emergency service. Licensed plumbers. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/west-palm-beach/';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="hero hero--interior hero-grid hero-grid--form">
    <div class="container">
        <div class="hero-grid-inner">
            <div class="hero-content">
                <p class="eyebrow">Service in West Palm Beach</p>
                <h1>Professional Plumbing in West Palm Beach, Florida</h1>
                <p class="hero-answer">
                    From Northwood Hills to Flamingo Park and across all of West Palm Beach's diverse neighborhoods, Drain Masters of the Palm Beaches delivers licensed plumbing service—drain cleaning, sewer repair, repiping, and emergency calls—to homes of every age and style.
                </p>
                <div class="hero-chips">
                    <span class="hero-chip">
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                        Licensed & Insured
                    </span>
                    <span class="hero-chip">
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        Fast Response
                    </span>
                    <span class="hero-chip">
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                        Fair Pricing
                    </span>
                </div>
                <div class="btn-group">
                    <a href="tel:<?php echo formatPhone($phone); ?>" class="btn-secondary">
                        <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <button class="btn-primary btn-show-mobile" data-open-estimate>Get Free Estimate</button>
                </div>
            </div>

            <div class="hero-form-card">
                <h3>Free estimate in West Palm Beach</h3>
                <p class="footnote">We reply the same day.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <?php echo getAttributionFields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

                    <div class="form-row-3">
                        <div class="field">
                            <label for="hero-name">Name</label>
                            <input id="hero-name" type="text" name="name" autocomplete="name" required>
                        </div>
                        <div class="field">
                            <label for="hero-phone">Phone</label>
                            <input id="hero-phone" type="tel" name="phone" autocomplete="tel" required>
                        </div>
                        <div class="field">
                            <label for="hero-email">Email</label>
                            <input id="hero-email" type="email" name="email" autocomplete="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label for="hero-service">Service Needed</label>
                        <select id="hero-service" name="service">
                            <option value="">Select a service</option>
                            <?php foreach ($services as $svc): ?>
                            <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <fieldset class="form-consent-fieldset">
                        <label class="form-consent-item form-consent-compact">
                            <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                            <span class="consent-label">Email updates (optional)</span>
                        </label>
                        <label class="form-consent-item form-consent-compact">
                            <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                            <span class="consent-label">SMS updates (optional, msg rates apply)</span>
                        </label>
                        <label class="form-consent-item form-consent-required">
                            <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                            <span class="consent-label">I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-block">Send my request</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="section">
    <div class="container">
        <div class="split-content">
            <div class="split-text">
                <p class="eyebrow">A Diverse City</p>
                <h2>Plumbing for Every Neighborhood in West Palm Beach</h2>
                <div class="prose">
                    <p>
                        West Palm Beach is Palm Beach County's largest city, and its neighborhoods span a century of construction styles and plumbing systems. The Old Northwood Historic District—developed in 1921 just a block from the Intracoastal Waterway—features architect-designed homes with original galvanized and cast iron plumbing that's now approaching 100 years old. Flamingo Park's Spanish Colonial and Mission Revival homes from the same era face similar challenges.
                    </p>
                    <p>
                        Northwood Hills sits on the highest natural elevation in South Florida—44 feet above sea level—with a figure-eight street layout surrounding those peaks. The elevation means better drainage during heavy rain, but older homes here still carry the same aging pipes found throughout the city's historic core. In these neighborhoods, we see chronic low water pressure from corroded galvanized supply lines, slab leaks from pinhole failures in copper, and cast iron sewer laterals that have rusted through after decades of service.
                    </p>
                    <p>
                        Newer developments on the west side of the city use modern PEX supply lines and PVC drains, which hold up better—but Florida's hard water still shortens the life of water heaters and leaves mineral deposits in fixtures. No matter where you are in West Palm Beach, Drain Masters of the Palm Beaches has the diagnostic tools and experience to repair or replace failing plumbing fast.
                    </p>
                </div>
            </div>
            <div class="split-image">
                <?php echo renderPicture('owner-img_8976', 'Drain Masters technician servicing plumbing system in West Palm Beach, FL', 800, 600, '(min-width: 768px) 50vw, 100vw', ['imgClass' => 'img-cover']); ?>
            </div>
        </div>
    </div>
</section>

<!-- Services in West Palm Beach -->
<section class="section bg-light">
    <div class="container-narrow">
        <div class="section-head">
            <p class="eyebrow">What We Do Here</p>
            <h2>Plumbing Services We Bring to <span class="text-accent">West Palm Beach Homes</span></h2>
        </div>

        <div class="service-checklist">
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Drain Cleaning & Hydro Jetting</h3>
                    <p>High-pressure hydro jetting and cable snaking to clear grease, roots, and debris from kitchen, bathroom, and main line drains.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Sewer Line Repair & Replacement</h3>
                    <p>Traditional excavation and trenchless repair for broken, root-invaded, or collapsed sewer lines throughout West Palm Beach.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Whole-Home Repiping</h3>
                    <p>Complete replacement of corroded galvanized, leaking copper, or failing polybutylene supply lines with modern PEX or CPVC.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Leak Detection & Slab Leak Repair</h3>
                    <p>Electronic leak detection locates hidden leaks in walls and under slabs without tearing up your entire home.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Water Heater Installation & Repair</h3>
                    <p>Tank and tankless water heater repair, maintenance, and full replacement when sediment buildup or corrosion ends the unit's life.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Emergency Plumbing</h3>
                    <p>Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across West Palm Beach.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: var(--space-2xl);">
            <a href="/services/" class="btn-primary">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section">
    <div class="container-narrow">
        <h2>Why West Palm Beach Residents Choose Drain Masters</h2>
        <div class="prose">
            <p>
                In a city as large and diverse as West Palm Beach, finding a plumber you can trust means finding someone who's licensed, experienced with homes of every age, and willing to show up when they say they will. We're a Florida-licensed plumbing contractor serving the Palm Beaches, and we've worked on everything from century-old homes in Old Northwood to new construction on the west side.
            </p>
            <p>
                We drive fully stocked service trucks, so most repairs happen the same day. If we need to order a part or schedule a bigger job—repiping, sewer line replacement, water heater installation—we'll give you an honest timeline and a written estimate with no hidden fees before we start.
            </p>
            <p>
                We've served this community since <?php echo $yearEstablished; ?>, and we're not going anywhere. When we finish a job, you get our direct number. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work—not a call center. That's how local plumbing service should work.
            </p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container">
        <div class="cta-content">
            <h2>Need a Plumber in West Palm Beach?</h2>
            <p>Fast response, honest pricing, and work that's guaranteed. Call us or request a free estimate online.</p>
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
.service-checklist {
    display: grid;
    gap: var(--space-lg);
    margin-top: var(--space-2xl);
}

.checklist-item {
    display: grid;
    grid-template-columns: 32px 1fr;
    gap: var(--space-md);
    align-items: start;
}

.checklist-item svg {
    color: var(--color-accent);
    flex-shrink: 0;
    margin-top: 2px;
}

.checklist-item h3 {
    font-size: var(--fs-h5);
    font-weight: 700;
    margin-bottom: var(--space-xs);
}

.checklist-item p {
    color: var(--color-text-light);
    line-height: 1.6;
    margin: 0;
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
                    "name": "Service Areas",
                    "item": "<?php echo $siteUrl; ?>/service-areas/"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "West Palm Beach"
                }
            ]
        },
        {
            "@type": "LocalBusiness",
            "name": "<?php echo htmlspecialchars($siteName); ?>",
            "description": "<?php echo htmlspecialchars($metaDescription); ?>",
            "url": "<?php echo $siteUrl; ?>/service-areas/west-palm-beach/",
            "telephone": "<?php echo $phone; ?>",
            "areaServed": {
                "@type": "City",
                "name": "West Palm Beach",
                "containedInPlace": {
                    "@type": "State",
                    "name": "Florida"
                }
            }
        }
    ]
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
