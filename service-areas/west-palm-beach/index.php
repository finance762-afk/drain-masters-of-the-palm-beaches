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
$metaDescription = "West Palm Beach, FL plumber serving Northwood Hills, Flamingo Park, and more. Drain cleaning, sewer repair, same-day emergency service. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/west-palm-beach/';

$ap = [
    'slug'      => 'west-palm-beach',
    'name'      => 'West Palm Beach',
    'eyebrow'   => 'Service in West Palm Beach',
    'h1'        => 'Professional Plumbing in West Palm Beach, Florida',
    'answer'    => 'From Northwood Hills to Flamingo Park and across all of West Palm Beach\'s diverse neighborhoods, Drain Masters of the Palm Beaches delivers professional plumbing service—drain cleaning, sewer repair, repiping, and emergency calls—to homes of every age and style.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'dm-new-pvc-line-trench',
    'photoAlt'  => photoAlt('dm-new-pvc-line-trench'),
    'fact'      => ['44 ft', 'Northwood Hills natural peak'],
    'neighborhoods' => ['Old Northwood Historic District', 'Northwood Hills', 'Flamingo Park', 'West side developments'],
    'intro' => [
        'eyebrow'    => 'A Diverse City',
        'h2'         => 'Plumbing for Every Neighborhood in West Palm Beach',
        'paragraphs' => [
            'West Palm Beach is Palm Beach County\'s largest city, and its neighborhoods span a century of construction styles and plumbing systems. The Old Northwood Historic District—developed in 1921 just a block from the Intracoastal Waterway—features architect-designed homes with original galvanized and cast iron plumbing that\'s now approaching 100 years old. Flamingo Park\'s Spanish Colonial and Mission Revival homes from the same era face similar challenges.',
            'Northwood Hills sits on the highest natural elevation in South Florida—44 feet above sea level—with a figure-eight street layout surrounding those peaks. The elevation means better drainage during heavy rain, but older homes here still carry the same aging pipes found throughout the city\'s historic core. In these neighborhoods, we see chronic low water pressure from corroded galvanized supply lines, slab leaks from pinhole failures in copper, and cast iron sewer laterals that have rusted through after decades of service.',
            'Newer developments on the west side of the city use modern PEX supply lines and PVC drains, which hold up better—but Florida\'s hard water still shortens the life of water heaters and leaves mineral deposits in fixtures. No matter where you are in West Palm Beach, Drain Masters of the Palm Beaches has the diagnostic tools and experience to repair or replace failing plumbing fast.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'West Palm Beach Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'High-pressure hydro jetting and cable snaking to clear grease, roots, and debris from kitchen, bathroom, and main line drains.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Traditional excavation and trenchless repair for broken, root-invaded, or collapsed sewer lines throughout West Palm Beach.', 'sewer-line-repair-replacement', 'wrench'],
            ['Whole-Home Repiping', 'Complete replacement of corroded galvanized, leaking copper, or failing polybutylene supply lines with modern PEX or CPVC.', 'repiping', 'hammer'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection locates hidden leaks in walls and under slabs without tearing up your entire home.', 'leak-detection-slab-leak-repair', 'search'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater repair, maintenance, and full replacement when sediment buildup or corrosion ends the unit\'s life.', 'water-heater-installation-repair', 'flame'],
            ['Emergency Plumbing', 'Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across West Palm Beach.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why West Palm Beach Residents Choose Drain Masters',
        'paragraphs' => [
            'In a city as large and diverse as West Palm Beach, finding a plumber you can trust means finding someone who\'s experienced with homes of every age and willing to show up when they say they will. We\'re a locally owned plumbing company serving the Palm Beaches, and we\'ve worked on everything from century-old homes in Old Northwood to new construction on the west side.',
            'We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. If we need to order a part or schedule a bigger job—repiping, sewer line replacement, water heater installation—we\'ll give you an honest timeline and a written estimate with no hidden fees before we start.',
            'We\'ve served this community since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work—not a call center. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in West Palm Beach?',
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
