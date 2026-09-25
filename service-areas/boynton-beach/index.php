<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Wikipedia: https://en.wikipedia.org/wiki/Boynton_Beach,_Florida
 * - Plumbing services info: https://bluefrogplumbing.com/boynton-beach/
 * - Water filtration needs: https://www.royaleliteplumbing.com/services/water-filtration/boynton-beach
 * - USDA Zone: 10b (2023, per plantmaps.com)
 * - Elevation: 10 ft (3.0 m)
 * - Notable neighborhoods: Boynton Beach Heights, Leisureville, Golfview Harbour, neighborhoods along Federal Highway
 * - Coastal city with hard water from limestone aquifer
 * - Homes from 1950s-1970s with cast iron drains, saltwater corrosion in coastal areas
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'boynton-beach';
$areaName = 'Boynton Beach';
$pageTitle = "Plumber in Boynton Beach, FL | Drain & Sewer Repair | $siteName";
$metaDescription = "Expert plumbing in Boynton Beach, FL. Serving Leisureville, Golfview Harbour, and all coastal and inland neighborhoods with drain cleaning, sewer repair, water heater service. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/boynton-beach/';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="hero hero--interior hero-grid hero-grid--form">
    <div class="container">
        <div class="hero-grid-inner">
            <div class="hero-content">
                <p class="eyebrow">Service in Boynton Beach</p>
                <h1>Expert Plumbing in Boynton Beach, Florida</h1>
                <p class="hero-answer">
                    Drain Masters of the Palm Beaches serves Boynton Beach's coastal and inland neighborhoods—from Leisureville and Golfview Harbour to the historic downtown area and Boynton Beach Heights—with licensed plumbing service for hard water issues, sewer repairs, and emergency calls.
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
                <h3>Free estimate in Boynton Beach</h3>
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
                <p class="eyebrow">Coastal Plumbing Challenges</p>
                <h2>Plumbing for Boynton Beach's Coastal and Inland Homes</h2>
                <div class="prose">
                    <p>
                        Boynton Beach sits on Florida's Atlantic coast, stretching from the Intracoastal Waterway west to I-95 and beyond. That geographic spread creates distinct plumbing challenges. Homes in the eastern neighborhoods near the beach—historic downtown, Boynton Beach Heights, and properties along Federal Highway—face accelerated corrosion on outdoor fixtures from salt air and spray. Copper pipes and galvanized fittings degrade faster here than they do even a few miles inland.
                    </p>
                    <p>
                        Inland, the bigger issue is hard water. Boynton Beach draws from South Florida's limestone aquifer, which produces heavily mineralized municipal water. That hard water leaves calcium and magnesium deposits inside pipes, on fixtures, and in water heater tanks. If you've noticed white buildup on faucets or declining water heater efficiency, mineral deposits are usually the cause. Left unchecked, those deposits shorten the life of appliances and reduce water pressure.
                    </p>
                    <p>
                        Many Boynton Beach homes were built between the 1950s and 1970s, an era when cast iron drain pipes and galvanized supply lines were standard. After 50 to 70 years in service, cast iron develops internal corrosion that catches debris and causes chronic clogs. Galvanized pipes rust from the inside, producing discolored water and low pressure. We've repiped entire Leisureville and Golfview Harbour homes to replace those failing systems with modern materials built for Florida's water chemistry.
                    </p>
                </div>
            </div>
            <div class="split-image">
                <?php echo renderPicture('owner-img_8976', 'Drain Masters technician servicing plumbing system in Boynton Beach, FL', 800, 600, '(min-width: 768px) 50vw, 100vw', ['imgClass' => 'img-cover']); ?>
            </div>
        </div>
    </div>
</section>

<!-- Services in Boynton Beach -->
<section class="section bg-light">
    <div class="container-narrow">
        <div class="section-head">
            <p class="eyebrow">What We Do Here</p>
            <h2>Plumbing Services We Bring to <span class="text-accent">Boynton Beach Homes</span></h2>
        </div>

        <div class="service-checklist">
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Drain Cleaning & Hydro Jetting</h3>
                    <p>High-pressure hydro jetting and cable snaking to clear grease, roots, and mineral buildup from kitchen, bathroom, and main line drains.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Sewer Line Repair & Replacement</h3>
                    <p>Trenchless and traditional sewer repair for corroded cast iron or root-invaded lines common in Boynton Beach's older neighborhoods.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Whole-Home Repiping</h3>
                    <p>Complete replacement of corroded galvanized or leaking copper supply lines with modern PEX or CPVC built for hard water conditions.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Water Heater Installation & Repair</h3>
                    <p>Tank and tankless water heater service, including sediment flushing and full replacement when mineral buildup ends the unit's life.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Leak Detection & Slab Leak Repair</h3>
                    <p>Electronic leak detection pinpoints hidden leaks in walls and under slabs without tearing up your entire home.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Emergency Plumbing</h3>
                    <p>Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Boynton Beach.</p>
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
        <h2>Why Boynton Beach Homeowners Trust Drain Masters</h2>
        <div class="prose">
            <p>
                When you call a plumber in Boynton Beach, you want someone who understands the local challenges—hard water, saltwater corrosion, and aging plumbing systems—and has the tools to diagnose and fix problems right the first time. That's what we deliver. We're a licensed Florida plumbing contractor, bonded and insured, and our work is guaranteed.
            </p>
            <p>
                We drive fully stocked service trucks, so most repairs happen the same day. If we need to order a specialty part or schedule a larger project—repiping, sewer line replacement, water heater installation—we'll give you an honest timeline and a written estimate with no hidden fees before we start.
            </p>
            <p>
                We've served the Palm Beaches since <?php echo $yearEstablished; ?>, and we're not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That's how local plumbing service should work.
            </p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container">
        <div class="cta-content">
            <h2>Need a Plumber in Boynton Beach?</h2>
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
                    "name": "Boynton Beach"
                }
            ]
        },
        {
            "@type": "LocalBusiness",
            "name": "<?php echo htmlspecialchars($siteName); ?>",
            "description": "<?php echo htmlspecialchars($metaDescription); ?>",
            "url": "<?php echo $siteUrl; ?>/service-areas/boynton-beach/",
            "telephone": "<?php echo $phone; ?>",
            "areaServed": {
                "@type": "City",
                "name": "Boynton Beach",
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
