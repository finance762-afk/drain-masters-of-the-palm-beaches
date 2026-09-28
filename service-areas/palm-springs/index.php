<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* Research sources:
 * - Wikipedia: https://en.wikipedia.org/wiki/Palm_Springs,_Florida
 * - USDA Plant Hardiness Zone: 10b (per ZIP 33406)
 * - Elevation: 10-18 ft (USGS sources vary)
 * - Notable neighborhoods: Century Village, Golf/Vista Park
 */

$currentPage = 'service-areas';
$pageType = 'city';
$citySlug = 'palm-springs';
$areaName = 'Palm Springs';
$pageTitle = "Plumber in Palm Springs, FL | Drain Cleaning & Sewer Repair | $siteName";
$metaDescription = "Palm Springs, FL plumber serving Century Village, Golf, and Vista Park. Drain cleaning, sewer repair, same-day emergency service. Call $phone.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/service-areas/palm-springs/';

$ap = [
    'slug'      => 'palm-springs',
    'name'      => 'Palm Springs',
    'eyebrow'   => 'Service in Palm Springs',
    'h1'        => 'Expert Plumbing in Palm Springs, Florida',
    'answer'    => 'Based right here in Palm Springs and locally owned since 2023, Drain Masters of the Palm Beaches brings local expertise to every call—from Century Village condos to single-family homes in the Golf and Vista Park neighborhoods.',
    'chips'     => ['Locally Owned Since 2023', 'Fast Response', 'Fair Pricing'],
    'photo'     => 'dm-gutted-bathroom-plumbing',
    'photoWide' => true,
    'photoAlt'  => photoAlt('dm-gutted-bathroom-plumbing'),
    'fact'      => ['10–18 ft', 'Elevation above sea level'],
    'neighborhoods' => ['Century Village', 'Golf', 'Vista Park', 'Congress Avenue corridor'],
    'intro' => [
        'eyebrow'    => 'Our Home Base',
        'h2'         => 'Professional Plumbers Who Know Palm Springs',
        'paragraphs' => [
            'Palm Springs is where we\'re based, and it\'s the community we know best. From the established neighborhoods around Congress Avenue to the sprawling Century Village community, we\'ve worked on plumbing systems across every part of town. That local familiarity means we respond fast, diagnose accurately, and know exactly what plumbing challenges your neighborhood faces.',
            'Many Palm Springs homes were built in the 1970s and 80s, an era when cast iron sewer lines and galvanized supply pipes were standard. Those materials corrode over time—especially in Florida\'s humid, mineral-heavy water conditions—leading to recurring clogs, low water pressure, and slab leaks. We\'ve repiped dozens of local homes and replaced countless aging sewer laterals, and we can tell you honestly whether a repair will hold or if it\'s time for a full replacement.',
            'If you\'re in a newer development near the Golf course or Vista Park, you\'re more likely dealing with modern PVC and PEX systems. Those materials last longer, but they\'re not immune to issues—tree root intrusion into sewer lines is common wherever there\'s mature landscaping, and even new water heaters fail when sediment from our hard water builds up inside the tank.',
        ],
    ],
    'services' => [
        'h2'    => ['Plumbing Services We Bring to', 'Palm Springs Homes'],
        'items' => [
            ['Drain Cleaning & Hydro Jetting', 'Professional clearing of kitchen, bathroom, and main line clogs using cable snaking and high-pressure hydro jetting.', 'drain-cleaning', 'droplets'],
            ['Sewer Line Repair & Replacement', 'Trenchless and traditional sewer repair for broken, root-invaded, or collapsed lines common in older Palm Springs neighborhoods.', 'sewer-line-repair-replacement', 'wrench'],
            ['Leak Detection & Slab Leak Repair', 'Electronic leak detection pinpoints hidden leaks in walls and under slabs without unnecessary demolition.', 'leak-detection-slab-leak-repair', 'search'],
            ['Water Heater Installation & Repair', 'Tank and tankless water heater service, including sediment flushing and anode rod replacement to extend system life.', 'water-heater-installation-repair', 'flame'],
            ['Whole-Home Repiping', 'Replacement of corroded galvanized or leaking copper supply lines with modern PEX or CPVC piping.', 'repiping', 'hammer'],
            ['Emergency Plumbing', 'Same-day and after-hours service for burst pipes, sewer backups, and major leaks across Palm Springs.', 'emergency-plumbing', 'alert-triangle'],
        ],
    ],
    'trust' => [
        'h2'         => 'Why Palm Springs Residents Choose Drain Masters',
        'paragraphs' => [
            'When you call a local plumber in Palm Springs, you want someone who shows up on time, diagnoses the problem accurately, and gives you a fair price before starting work. You don\'t want surprise charges, pressure to buy services you don\'t need, or a repair that fails three months later.',
            'That\'s what we deliver. We\'re a locally owned Palm Springs plumbing company, and we diagnose the real cause before quoting a fix. We show up prepared for the common drain, sewer, and water heater problems in the area, so many repairs can be finished the same day. If we need to order a specialty part or schedule a larger job like repiping or sewer line replacement, we\'ll give you an honest timeline and a written estimate with no hidden fees.',
            'We\'ve lived and worked in Palm Springs since ' . $yearEstablished . ', and we\'re not going anywhere. When we finish a job, you get our direct number—not a call center. If you have a question two weeks later or need a follow-up visit, you call the same team who did the work. That\'s how local service should work.',
        ],
    ],
    'cta' => [
        'h2'   => 'Need a Plumber in Palm Springs?',
        'text' => 'Fast response, fair pricing, and straight answers. Call us or request a free estimate online.',
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
