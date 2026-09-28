<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Wikipedia: https://en.wikipedia.org/wiki/Lake_Worth_Beach,_Florida
 * - Wikipedia College Park: https://en.wikipedia.org/wiki/College_Park_Historic_District_(Lake_Worth,_Florida)
 * - USDA Plant Hardiness Zone: 10b (2023 map, per ZIP 33461/33463/33467)
 * - Elevation: 13-16 ft (USGS/Wikipedia)
 * - Notable neighborhoods: College Park Historic District, Old Lucerne Historic Residential District
 * - Historic downtown, coastal proximity, homes built 1920s-1960s
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'lake-worth';
$areaName = 'Lake Worth';
$pageTitle = "Plumber in Lake Worth, FL | Emergency Drain & Sewer Repair | $siteName";
$metaDescription = "Lake Worth, FL plumber serving College Park, Old Lucerne, and downtown. Drain cleaning, sewer repair, same-day emergency service. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/lake-worth/';

$ap = [
    'slug'      => 'lake-worth',
    'name'      => 'Lake Worth',
    'eyebrow'   => 'Service in Lake Worth',
    'h1'        => 'Trusted Plumbing in Lake Worth, Florida',
    'answer'    => 'Drain Masters of the Palm Beaches serves Lake Worth\'s historic neighborhoods—from the vintage homes of College Park and Old Lucerne to the coastal properties along the Intracoastal—with drain cleaning, sewer repair, and emergency plumbing from a locally owned Palm Springs company.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'dm-old-water-heater-removed',
    'photoWide' => true,
    'photoAlt'  => photoAlt('dm-old-water-heater-removed'),
    'fact'      => ['13–16 ft', 'Elevation above sea level'],
    'neighborhoods' => ['College Park Historic District', 'Old Lucerne', 'Downtown Lake Worth', 'Intracoastal waterfront'],
    'intro' => [
        'eyebrow'    => 'Historic Lake Worth',
        'h2'         => 'Plumbing Service for Lake Worth\'s Oldest Neighborhoods',
        'paragraphs' => [
            'Lake Worth\'s historic downtown and coastal character make it one of Palm Beach County\'s most distinctive communities. From the College Park Historic District—where single-family homes date back to the 1920s through the 1960s—to the Old Lucerne neighborhoods near Federal Highway, many Lake Worth homes carry the plumbing challenges that come with age.',
            'Those older homes were built with galvanized steel supply lines and cast iron drains. After 50 to 70 years in service, galvanized pipes corrode from the inside, causing low water pressure and rusty water. Cast iron develops internal rust that roughens the pipe walls, catching debris and leading to chronic slow drains and backups. We\'ve repiped entire Lake Worth homes and replaced dozens of failing sewer laterals under driveways and landscaping.',
            'Closer to the coast—near the Intracoastal Waterway and the beach—salt air accelerates corrosion on exposed fixtures and outdoor plumbing. Combined with Florida\'s hard, mineral-heavy water, fixtures and water heaters wear faster here than they would inland. If you\'re in a newer Lake Worth development, you likely have PVC drains and PEX supply lines, which last longer—but even modern systems face tree root intrusion into sewer lines wherever mature trees line the streets.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Lake Worth Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'Cable snaking and high-pressure hydro jetting to clear kitchen, bathroom, and main line clogs caused by grease, roots, and debris.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for corroded, root-invaded, or collapsed lines common in Lake Worth\'s older neighborhoods.', 'sewer-line-repair-replacement', 'wrench'],
            ['Whole-Home Repiping', 'Replacement of corroded galvanized or leaking copper supply lines with durable PEX or CPVC piping built for Florida\'s water chemistry.', 'repiping', 'hammer'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection pinpoints hidden leaks in walls and under slabs, minimizing demolition and restoration costs.', 'leak-detection-slab-leak-repair', 'search'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service, including sediment flushing and full replacement when repair isn\'t cost-effective.', 'water-heater-installation-repair', 'flame'],
            ['Emergency Plumbing', 'Same-day and after-hours service for burst pipes, sewer backups, and major leaks across Lake Worth and the Palm Beaches.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Lake Worth Homeowners Trust Drain Masters',
        'paragraphs' => [
            'When you call a plumber in Lake Worth, you want someone who shows up on time, diagnoses the problem accurately, and charges a fair price with no hidden fees. You don\'t want to be pressured into repairs you don\'t need or handed a surprise bill after the work is done.',
            'That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix. We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. If we need to order a specialty part or schedule a larger project like repiping or sewer line replacement, we\'ll give you an honest timeline and a written estimate before we start.',
            'We\'ve served the Palm Beaches since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Lake Worth?',
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
