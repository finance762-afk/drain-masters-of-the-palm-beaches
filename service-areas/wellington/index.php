<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Wikipedia: https://en.wikipedia.org/wiki/Wellington,_Florida
 * - Equestrian neighborhoods: https://mattsells.com/blog/wellingtons-equestrian-neighborhoods-an-overview
 * - USDA Zone: 10b (2023, per plantmaps.com)
 * - Elevation: 16 feet (4.9 m)
 * - Notable equestrian neighborhoods: Grand Prix Village, Equestrian Club Estates, The Meadows, Mallet Hill, Palm Beach Point
 * - "Winter Equestrian Capital of the World" with 57+ miles of trails
 * - Mix of newer developments and equestrian properties
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'wellington';
$areaName = 'Wellington';
$pageTitle = "Plumber in Wellington, FL | Equestrian Property Plumbing | $siteName";
$metaDescription = "Expert plumbing in Wellington, FL. Serving Grand Prix Village, Equestrian Club Estates, and all Wellington neighborhoods with drain cleaning, sewer repair, and emergency service. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/wellington/';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="hero hero--interior hero-grid hero-grid--form">
    <div class="container">
        <div class="hero-grid-inner">
            <div class="hero-content">
                <p class="eyebrow">Service in Wellington</p>
                <h1>Professional Plumbing in Wellington, Florida</h1>
                <p class="hero-answer">
                    Drain Masters of the Palm Beaches serves Wellington's equestrian estates and family neighborhoods—from Grand Prix Village and Equestrian Club Estates to Palm Beach Point and The Meadows—with licensed plumbing service for homes and properties of every size.
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
                <h3>Free estimate in Wellington</h3>
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
                <p class="eyebrow">Equestrian Capital</p>
                <h2>Plumbing for Wellington's Unique Properties</h2>
                <div class="prose">
                    <p>
                        Wellington is known worldwide as the "Winter Equestrian Capital of the World," with more than 57 miles of equestrian trails and luxurious properties built to support the equestrian lifestyle. Neighborhoods like Grand Prix Village, Equestrian Club Estates, Mallet Hill, and Palm Beach Point feature large estate homes on acreage, many with barns, wash stations, and outdoor plumbing systems that see heavy seasonal use.
                    </p>
                    <p>
                        Those larger properties often have more complex plumbing layouts than standard suburban homes—multiple water heaters, irrigation systems tied to potable water lines, and outdoor spigots serving barns and paddocks. When something fails, it's important to work with a plumber who can diagnose the entire system, not just the fixtures inside the house. We've serviced equestrian properties throughout Wellington and understand how these systems are built.
                    </p>
                    <p>
                        Wellington's newer suburban developments—like those near the village center and along Southern Boulevard—use modern PEX supply lines and PVC drains, which hold up well. But Florida's hard water still causes sediment buildup in water heaters and leaves mineral deposits on fixtures. If you're noticing reduced hot water capacity or white buildup around faucets, it's time to flush the water heater or replace corroded components before a full failure happens.
                    </p>
                </div>
            </div>
            <div class="split-image">
                <?php echo renderPicture('owner-img_8976', 'Drain Masters technician servicing plumbing system in Wellington, FL', 800, 600, '(min-width: 768px) 50vw, 100vw', ['imgClass' => 'img-cover']); ?>
            </div>
        </div>
    </div>
</section>

<!-- Services in Wellington -->
<section class="section bg-light">
    <div class="container-narrow">
        <div class="section-head">
            <p class="eyebrow">What We Do Here</p>
            <h2>Plumbing Services We Bring to <span class="text-accent">Wellington Homes</span></h2>
        </div>

        <div class="service-checklist">
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Drain Cleaning & Hydro Jetting</h3>
                    <p>Cable snaking and high-pressure hydro jetting to clear grease, roots, and debris from kitchen, bathroom, and main line drains.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Sewer Line Repair & Replacement</h3>
                    <p>Trenchless and traditional sewer repair for root-invaded or damaged lines, including larger estate properties.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Water Heater Installation & Repair</h3>
                    <p>Tank and tankless water heater service for single-family homes and larger estates, including multi-unit installations.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Leak Detection & Slab Leak Repair</h3>
                    <p>Electronic leak detection pinpoints hidden leaks in walls, under slabs, and across large properties without unnecessary demolition.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Backflow Prevention</h3>
                    <p>Backflow prevention device installation, testing, and certification to protect drinking water supplies on properties with irrigation systems.</p>
                </div>
            </div>
            <div class="checklist-item">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <div>
                    <h3>Emergency Plumbing</h3>
                    <p>Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Wellington.</p>
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
        <h2>Why Wellington Homeowners Choose Drain Masters</h2>
        <div class="prose">
            <p>
                Wellington properties range from suburban family homes to estate-sized equestrian properties with complex plumbing systems. No matter the size or scope of your project, you want a plumber who shows up on time, diagnoses the problem accurately, and gives you a fair price with no hidden fees.
            </p>
            <p>
                That's what we deliver. We're a licensed Florida plumbing contractor, bonded and insured, and our work is guaranteed. We drive fully stocked service vehicles, so most repairs happen the same day. For larger projects—repiping, sewer line replacement, multi-unit water heater installations—we'll give you an honest timeline and a written estimate before we start.
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
            <h2>Need a Plumber in Wellington?</h2>
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
                    "name": "Wellington"
                }
            ]
        },
        {
            "@type": "LocalBusiness",
            "name": "<?php echo htmlspecialchars($siteName); ?>",
            "description": "<?php echo htmlspecialchars($metaDescription); ?>",
            "url": "<?php echo $siteUrl; ?>/service-areas/wellington/",
            "telephone": "<?php echo $phone; ?>",
            "areaServed": {
                "@type": "City",
                "name": "Wellington",
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
