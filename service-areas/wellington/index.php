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

$ap = [
    'slug'      => 'wellington',
    'name'      => 'Wellington',
    'eyebrow'   => 'Service in Wellington',
    'h1'        => 'Professional Plumbing in Wellington, Florida',
    'answer'    => 'Drain Masters of the Palm Beaches serves Wellington\'s equestrian estates and family neighborhoods—from Grand Prix Village and Equestrian Club Estates to Palm Beach Point and The Meadows—with professional plumbing service for homes and properties of every size.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'owner-img_8946',
    'photoAlt'  => 'Drain Masters technician servicing plumbing system in Wellington, FL',
    'fact'      => ['57+ miles', 'Equestrian trails across the village'],
    'neighborhoods' => ['Grand Prix Village', 'Equestrian Club Estates', 'The Meadows', 'Mallet Hill', 'Palm Beach Point'],
    'intro' => [
        'eyebrow'    => 'Equestrian Capital',
        'h2'         => 'Plumbing for Wellington\'s Unique Properties',
        'paragraphs' => [
            'Wellington is known worldwide as the "Winter Equestrian Capital of the World," with more than 57 miles of equestrian trails and luxurious properties built to support the equestrian lifestyle. Neighborhoods like Grand Prix Village, Equestrian Club Estates, Mallet Hill, and Palm Beach Point feature large estate homes on acreage, many with barns, wash stations, and outdoor plumbing systems that see heavy seasonal use.',
            'Those larger properties often have more complex plumbing layouts than standard suburban homes—multiple water heaters, irrigation systems tied to potable water lines, and outdoor spigots serving barns and paddocks. When something fails, it\'s important to work with a plumber who can diagnose the entire system, not just the fixtures inside the house. We\'ve serviced equestrian properties throughout Wellington and understand how these systems are built.',
            'Wellington\'s newer suburban developments—like those near the village center and along Southern Boulevard—use modern PEX supply lines and PVC drains, which hold up well. But Florida\'s hard water still causes sediment buildup in water heaters and leaves mineral deposits on fixtures. If you\'re noticing reduced hot water capacity or white buildup around faucets, it\'s time to flush the water heater or replace corroded components before a full failure happens.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Wellington Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'Cable snaking and high-pressure hydro jetting to clear grease, roots, and debris from kitchen, bathroom, and main line drains.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for root-invaded or damaged lines, including larger estate properties.', 'sewer-line-repair-replacement', 'wrench'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service for single-family homes and larger estates, including multi-unit installations.', 'water-heater-installation-repair', 'flame'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection pinpoints hidden leaks in walls, under slabs, and across large properties without unnecessary demolition.', 'leak-detection-slab-leak-repair', 'search'],
            ['Backflow Prevention', 'Backflow prevention device installation, testing, and certification to protect drinking water supplies on properties with irrigation systems.', 'backflow-prevention', 'shield-big'],
            ['Emergency Plumbing', 'Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Wellington.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Wellington Homeowners Choose Drain Masters',
        'paragraphs' => [
            'Wellington properties range from suburban family homes to estate-sized equestrian properties with complex plumbing systems. No matter the size or scope of your project, you want a plumber who shows up on time, diagnoses the problem accurately, and gives you a fair price with no hidden fees.',
            'That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix. We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. For larger projects—repiping, sewer line replacement, multi-unit water heater installations—we\'ll give you an honest timeline and a written estimate before we start.',
            'We\'ve served the Palm Beaches since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Wellington?',
        'text' => 'Fast response, honest pricing, and straight answers. Call us or request a free estimate online.',
    ],
];

require $_SERVER['DOCUMENT_ROOT'] . '/includes/area-init.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ============ HERO (interior, sized to content, compact form card beside the copy) ============ -->
<section class="hero hero--interior area-hero" aria-label="Plumbing service in <?php echo ap_e($apName); ?>">
    <span class="grain" aria-hidden="true"></span>
    <span class="hero-glow" aria-hidden="true"></span>
    <span class="floating-ring" aria-hidden="true"></span>
    <div class="container">
        <div class="hero-grid hero-grid--form">
            <div class="hero-text">
                <span class="eyebrow"><?php echo ap_e($ap['eyebrow']); ?></span>
                <h1><?php echo ap_e($ap['h1']); ?></h1>
                <p class="hero-answer"><?php echo ap_e($ap['answer']); ?></p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                    <a class="btn btn-outline-white btn-lg" href="tel:<?php echo formatPhone($phone); ?>"><?php echo $apIcons['phone']; ?> Call <?php echo $phone; ?></a>
                </div>
                <ul class="hero-chips">
                    <?php foreach ($ap['chips'] as $ci => $chip): ?>
                    <li><?php echo $apIcons[$apChipIcons[$ci % 3]]; ?> <?php echo ap_e($chip); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <aside class="hero-form-card" id="estimate-form">
                <h2>Free estimate in <?php echo ap_e($apName); ?></h2>
                <p class="hero-form-tagline">No obligation. Same-day reply.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="form_location" value="hero">
                    <input type="hidden" name="service_area" value="<?php echo ap_e($apName); ?>">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-service">Service</label>
                        <select id="hero-service" name="service">
                            <option value="">What do you need?</option>
                            <?php foreach ($services as $apHeroSvc): ?>
                            <option value="<?php echo htmlspecialchars($apHeroSvc['name']); ?>"><?php echo htmlspecialchars($apHeroSvc['name']); ?></option>
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/area-body.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
