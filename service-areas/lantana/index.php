<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Neighborhoods: https://www.homes.com/local-guide/lantana-fl/lantana-heights-neighborhood/
 * - Community info: https://www.bocaviphomes.com/lantana/
 * - USDA Zone: 10b-11a (2023, per plantguideonline.com)
 * - Notable neighborhoods: Lantana Heights (Colonial Revival, ranch homes), Paul Mar, Ocean Breeze, Lantana Pines
 * - Coastal community, old Florida fishing village
 * - Bordered by Atlantic Ocean and Intracoastal Waterway
 * - Ranch-style homes on slab, many with boat driveways
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'lantana';
$areaName = 'Lantana';
$pageTitle = "Plumber in Lantana, FL | Coastal Plumbing Experts | $siteName";
$metaDescription = "Lantana, FL plumber serving Lantana Heights, Ocean Breeze, and the coast. Drain cleaning, sewer repair, same-day emergency plumbing. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/lantana/';

$ap = [
    'slug'      => 'lantana',
    'name'      => 'Lantana',
    'eyebrow'   => 'Service in Lantana',
    'h1'        => 'Trusted Plumbing in Lantana, Florida',
    'answer'    => 'Drain Masters of the Palm Beaches serves Lantana\'s coastal neighborhoods—from Lantana Heights and Ocean Breeze to the waterfront properties along the Intracoastal—with professional plumbing service for slab homes, older ranch-style properties, and everything in between.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'dm-shower-pan-drain',
    'photoWide' => true,
    'photoAlt'  => photoAlt('dm-shower-pan-drain'),
    'fact'      => ['10b–11a', 'USDA hardiness zone, 2023 map'],
    'neighborhoods' => ['Lantana Heights', 'Paul Mar', 'Ocean Breeze', 'Lantana Pines', 'Intracoastal waterfront'],
    'intro' => [
        'eyebrow'    => 'Old Florida Charm',
        'h2'         => 'Plumbing for Lantana\'s Coastal Homes',
        'paragraphs' => [
            'Lantana is a small coastal town that still retains its character as an old Florida fishing village. Bordered by the Atlantic Ocean to the east and the Intracoastal Waterway to the west, the community features tight-knit neighborhoods like Lantana Heights, Paul Mar, Ocean Breeze, and Lantana Pines—many filled with Colonial Revival and ranch-style homes on slab foundations.',
            'Slab homes present unique plumbing challenges. Because the supply lines run under the concrete slab, leaks often go undetected until they cause water pooling, foundation cracks, or sudden spikes in the water bill. Slab leak repair requires electronic leak detection to pinpoint the failure without tearing up the entire floor. Once located, we can either repair the damaged section or, if the pipes are old and widespread failures are likely, reroute supply lines through the attic or walls to avoid future slab leaks.',
            'Lantana\'s coastal location means salt air accelerates corrosion on outdoor plumbing fixtures, hose bibs, and any exposed copper or galvanized fittings. Combined with Florida\'s hard water, fixtures wear faster here than they would inland. Many Lantana homes also have boat driveways and outdoor showers, which see heavy seasonal use and need regular maintenance to stay functional. Drain Masters of the Palm Beaches has the tools and experience to handle everything from slab leaks to corroded outdoor plumbing.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Lantana Homes'],
        'items' => [
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection locates hidden leaks under slabs and in walls, with targeted repair or rerouting to avoid future failures.', 'leak-detection-slab-leak-repair', 'search'],
            ['Drain Cleaning & Hydro Jetting', 'High-pressure hydro jetting and cable snaking to clear grease, roots, and buildup from kitchen, bathroom, and main line drains.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for corroded or damaged lines common in Lantana\'s older coastal homes.', 'sewer-line-repair-replacement', 'wrench'],
            ['Whole-Home Repiping', 'Complete replacement of corroded galvanized or leaking copper supply lines with durable PEX or CPVC piping.', 'repiping', 'hammer'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service, including sediment flushing and replacement when hard water damage ends the unit\'s life.', 'water-heater-installation-repair', 'flame'],
            ['Emergency Plumbing', 'Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Lantana.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Lantana Homeowners Trust Drain Masters',
        'paragraphs' => [
            'In a small coastal community like Lantana, you want a plumber who understands the local challenges—slab foundations, salt air corrosion, and the aging plumbing systems common in older ranch homes. You also want someone who shows up on time, fixes the problem right the first time, and charges a fair price.',
            'That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix. We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. For larger projects—slab leak repair, repiping, sewer line replacement—we\'ll give you an honest timeline and a written estimate with no hidden fees before we start.',
            'We\'ve served the Palm Beaches since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Lantana?',
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
