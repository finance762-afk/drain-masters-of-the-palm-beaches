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

$ap = [
    'slug'      => 'boynton-beach',
    'name'      => 'Boynton Beach',
    'eyebrow'   => 'Service in Boynton Beach',
    'h1'        => 'Expert Plumbing in Boynton Beach, Florida',
    'answer'    => 'Drain Masters of the Palm Beaches serves Boynton Beach\'s coastal and inland neighborhoods—from Leisureville and Golfview Harbour to the historic downtown area and Boynton Beach Heights—with professional plumbing service for hard water issues, sewer repairs, and emergency calls.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'dm-electric-tankless-heater',
    'photoAlt'  => photoAlt('dm-electric-tankless-heater'),
    'fact'      => ['10 ft', 'Elevation above sea level'],
    'neighborhoods' => ['Leisureville', 'Golfview Harbour', 'Boynton Beach Heights', 'Historic downtown', 'Federal Highway corridor'],
    'intro' => [
        'eyebrow'    => 'Coastal Plumbing Challenges',
        'h2'         => 'Plumbing for Boynton Beach\'s Coastal and Inland Homes',
        'paragraphs' => [
            'Boynton Beach sits on Florida\'s Atlantic coast, stretching from the Intracoastal Waterway west to I-95 and beyond. That geographic spread creates distinct plumbing challenges. Homes in the eastern neighborhoods near the beach—historic downtown, Boynton Beach Heights, and properties along Federal Highway—face accelerated corrosion on outdoor fixtures from salt air and spray. Copper pipes and galvanized fittings degrade faster here than they do even a few miles inland.',
            'Inland, the bigger issue is hard water. Boynton Beach draws from South Florida\'s limestone aquifer, which produces heavily mineralized municipal water. That hard water leaves calcium and magnesium deposits inside pipes, on fixtures, and in water heater tanks. If you\'ve noticed white buildup on faucets or declining water heater efficiency, mineral deposits are usually the cause. Left unchecked, those deposits shorten the life of appliances and reduce water pressure.',
            'Many Boynton Beach homes were built between the 1950s and 1970s, an era when cast iron drain pipes and galvanized supply lines were standard. After 50 to 70 years in service, cast iron develops internal corrosion that catches debris and causes chronic clogs. Galvanized pipes rust from the inside, producing discolored water and low pressure. We\'ve repiped entire Leisureville and Golfview Harbour homes to replace those failing systems with modern materials built for Florida\'s water chemistry.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Boynton Beach Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'High-pressure hydro jetting and cable snaking to clear grease, roots, and mineral buildup from kitchen, bathroom, and main line drains.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for corroded cast iron or root-invaded lines common in Boynton Beach\'s older neighborhoods.', 'sewer-line-repair-replacement', 'wrench'],
            ['Whole-Home Repiping', 'Complete replacement of corroded galvanized or leaking copper supply lines with modern PEX or CPVC built for hard water conditions.', 'repiping', 'hammer'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service, including sediment flushing and full replacement when mineral buildup ends the unit\'s life.', 'water-heater-installation-repair', 'flame'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection pinpoints hidden leaks in walls and under slabs without tearing up your entire home.', 'leak-detection-slab-leak-repair', 'search'],
            ['Emergency Plumbing', 'Same-day and after-hours emergency service for burst pipes, sewer backups, and major leaks across Boynton Beach.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Boynton Beach Homeowners Trust Drain Masters',
        'paragraphs' => [
            'When you call a plumber in Boynton Beach, you want someone who understands the local challenges—hard water, saltwater corrosion, and aging plumbing systems—and has the tools to diagnose and fix problems right the first time. That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix.',
            'We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. If we need to order a specialty part or schedule a larger project—repiping, sewer line replacement, water heater installation—we\'ll give you an honest timeline and a written estimate with no hidden fees before we start.',
            'We\'ve served the Palm Beaches since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local plumbing service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Boynton Beach?',
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
