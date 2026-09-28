<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Greenacres communities: https://wellingtonhometeam.com/greenacres-communities/
 * - City guide: https://www.homes.com/local-guide/greenacres-fl/
 * - USDA Zone: 10b (2023, per plantmaps.com)
 * - Notable neighborhoods: Palm Beach National, Forest Hill Village (1970s-80s), River Bridge, Magnolia Bay, Buttonwood
 * - Oldest homes in east end; housing ramped up in second half of 1900s
 * - River Bridge: townhomes and Mediterranean-style single-family homes, gated
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'greenacres';
$areaName = 'Greenacres';
$pageTitle = "Plumber in Greenacres, FL | Drain Cleaning & Repairs | $siteName";
$metaDescription = "Expert plumbing in Greenacres, FL. Serving Palm Beach National, River Bridge, Magnolia Bay, and all Greenacres neighborhoods with drain cleaning, sewer repair, and water heater service. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/greenacres/';

$ap = [
    'slug'      => 'greenacres',
    'name'      => 'Greenacres',
    'eyebrow'   => 'Service in Greenacres',
    'h1'        => 'Reliable Plumbing in Greenacres, Florida',
    'answer'    => 'Drain Masters of the Palm Beaches serves Greenacres\' growing neighborhoods—from Palm Beach National\'s golf-course homes to River Bridge\'s gated community and the established Forest Hill Village area—with professional plumbing service for drains, sewers, leaks, and water heaters.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'owner-img_8819',
    'photoAlt'  => photoAlt('owner-img_8819'),
    'fact'      => ['Zone 10b', 'USDA hardiness, 2023 map'],
    'neighborhoods' => ['Palm Beach National', 'Forest Hill Village', 'River Bridge', 'Magnolia Bay', 'Buttonwood'],
    'intro' => [
        'eyebrow'    => 'A Growing Community',
        'h2'         => 'Modern Plumbing for Greenacres Neighborhoods',
        'paragraphs' => [
            'Greenacres is one of Palm Beach County\'s fastest-growing cities, with neighborhoods that range from the older ranch homes in the east end to newer gated communities like River Bridge, Magnolia Bay, and Buttonwood. Most Greenacres homes were built after 1970, which means they\'re more likely to have modern PVC drain lines and PEX or CPVC supply lines—materials that outlast the galvanized steel and cast iron common in older cities nearby.',
            'That said, even modern plumbing systems face challenges here. Tree root intrusion into sewer lines is common wherever mature landscaping exists, especially near Palm Beach National\'s golf course neighborhoods and the palm-lined streets in Forest Hill Village. Florida\'s hard water causes sediment buildup in water heaters, shortening their lifespan and reducing efficiency. If your water heater is more than 8 to 10 years old and struggling to keep up with demand, it\'s likely time for replacement.',
            'For homes in the older east-end neighborhoods—where stucco ranches date back to the 1970s and 1980s—we do see some aging cast iron drains and corroded galvanized supply pipes. Those systems need proactive replacement before they fail completely. Drain Masters of the Palm Beaches has the tools and experience to diagnose what\'s failing and recommend the most cost-effective repair or replacement.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Greenacres Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'Cable snaking and high-pressure hydro jetting to clear tree roots, grease, and buildup from kitchen, bathroom, and main line drains.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for root-invaded or damaged lines, common in Greenacres\' mature neighborhoods.', 'sewer-line-repair-replacement', 'wrench'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service, including sediment flushing and full replacement when hard water damage ends the unit\'s life.', 'water-heater-installation-repair', 'flame'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection locates hidden leaks in walls and under slabs without unnecessary demolition.', 'leak-detection-slab-leak-repair', 'search'],
            ['Toilet & Faucet Repair and Installation', 'Fast repair and replacement of toilets, faucets, and fixtures to stop leaks and cut wasted water.', 'toilet-faucet-repair-and-installation', 'droplet'],
            ['Emergency Plumbing', 'Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Greenacres.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Greenacres Homeowners Choose Drain Masters',
        'paragraphs' => [
            'When you call a plumber in Greenacres, you want someone who shows up on time, fixes the problem right the first time, and charges a fair price. You don\'t want surprise fees, pressure to buy services you don\'t need, or a repair that fails three months later.',
            'That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix. We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. If we need to order a part or schedule a larger job—repiping, sewer line replacement, water heater installation—we\'ll give you an honest timeline and a written estimate before we start.',
            'We\'ve served the Palm Beaches since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Greenacres?',
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
