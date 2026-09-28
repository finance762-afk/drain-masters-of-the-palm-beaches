<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Wikipedia: https://en.wikipedia.org/wiki/Royal_Palm_Beach,_Florida
 * - Neighborhoods: https://wellingtonhometeam.com/royal-palm-beach-communities/
 * - Best neighborhoods: https://www.tricoliteam.com/blog/best-neighborhoods-royal-palm-beach-fl/
 * - USDA Zone: 10b (2023, per plantmaps.com)
 * - Elevation: 16 feet (4.9 m)
 * - Western Palm Beach County location
 * - Notable neighborhoods: Crestwood (1970s-80s), La Mancha, Counterpoint Estates, Madison Green, Victoria Grove, Saratoga
 * - Newer western developments near Crestwood Boulevard
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'royal-palm-beach';
$areaName = 'Royal Palm Beach';
$pageTitle = "Plumber in Royal Palm Beach, FL | Drain & Sewer Repair | $siteName";
$metaDescription = "Expert plumbing in Royal Palm Beach, FL. Serving Crestwood, Madison Green, Victoria Grove, and all western Palm Beach County neighborhoods with drain cleaning and sewer repair. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/royal-palm-beach/';

$ap = [
    'slug'      => 'royal-palm-beach',
    'name'      => 'Royal Palm Beach',
    'eyebrow'   => 'Service in Royal Palm Beach',
    'h1'        => 'Reliable Plumbing in Royal Palm Beach, Florida',
    'answer'    => 'Drain Masters of the Palm Beaches serves Royal Palm Beach\'s established and newer neighborhoods—from Crestwood and La Mancha to Madison Green, Victoria Grove, and Saratoga—with professional plumbing service for drains, sewers, water heaters, and emergency repairs.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'dm-recirculation-pump-copper',
    'photoWide' => true,
    'photoAlt'  => photoAlt('dm-recirculation-pump-copper'),
    'fact'      => ['16 ft', 'Elevation above sea level'],
    'neighborhoods' => ['Crestwood', 'La Mancha', 'Counterpoint Estates', 'Madison Green', 'Victoria Grove', 'Saratoga'],
    'intro' => [
        'eyebrow'    => 'Western Palm Beach County',
        'h2'         => 'Plumbing for Royal Palm Beach\'s Neighborhoods',
        'paragraphs' => [
            'Royal Palm Beach sits in western Palm Beach County and includes neighborhoods that span several decades of construction. The older communities—Crestwood, La Mancha, and Counterpoint Estates—were built in the 1970s and 1980s with larger lots and minimal association dues. Many of these homes still have the original galvanized supply lines and cast iron drain pipes from that era, which are now nearing the end of their serviceable life.',
            'After 40 to 50 years in service, galvanized pipes corrode from the inside, causing low water pressure and rusty water. Cast iron drains develop internal rust that catches debris and leads to chronic clogs. If you\'re in one of Royal Palm Beach\'s older neighborhoods and dealing with recurring plumbing issues, it\'s often more cost-effective to repipe the entire home than to keep patching individual failures.',
            'The newer western developments near Crestwood Boulevard—along with gated communities like Victoria Grove and Saratoga—were built in the 2000s and use modern PEX supply lines and PVC drains. Those materials last longer, but Florida\'s hard water still shortens the life of water heaters and leaves mineral deposits in fixtures. If you\'re noticing reduced hot water capacity or white buildup around faucets, it\'s time to flush the water heater or replace corroded anode rods before a full failure happens.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Royal Palm Beach Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'Cable snaking and high-pressure hydro jetting to clear kitchen, bathroom, and main line clogs caused by grease, roots, and debris.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for corroded or root-invaded lines common in Royal Palm Beach\'s older neighborhoods.', 'sewer-line-repair-replacement', 'wrench'],
            ['Whole-Home Repiping', 'Complete replacement of corroded galvanized or leaking copper supply lines with modern PEX or CPVC built for Florida\'s water.', 'repiping', 'hammer'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service, including sediment flushing and full replacement when mineral buildup ends the unit\'s life.', 'water-heater-installation-repair', 'flame'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection pinpoints hidden leaks in walls and under slabs without tearing up your entire home.', 'leak-detection-slab-leak-repair', 'search'],
            ['Emergency Plumbing', 'Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Royal Palm Beach.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Royal Palm Beach Homeowners Choose Drain Masters',
        'paragraphs' => [
            'When you call a plumber in Royal Palm Beach, you want someone who shows up on time, diagnoses the problem accurately, and charges a fair price with no hidden fees. You don\'t want to be pressured into repairs you don\'t need or handed a surprise bill after the work is done.',
            'That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix. We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. For larger projects—repiping, sewer line replacement, water heater installation—we\'ll give you an honest timeline and a written estimate before we start.',
            'We\'ve served the Palm Beaches since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Royal Palm Beach?',
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
