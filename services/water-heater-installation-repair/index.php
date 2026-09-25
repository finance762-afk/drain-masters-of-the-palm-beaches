<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Water Heater Installation & Repair — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'water-heater-installation-repair',
    'name'            => 'Water Heater Installation & Repair',
    'h1'              => 'Water Heater Installation & Repair in Palm Springs, FL',
    'title'           => 'Water Heater Installation & Repair in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Water heater installation & repair in Palm Springs, FL. Drain Masters fixes no-hot-water, leaks and sediment, and installs tank & tankless units to code. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8933',
    'heroImageAlt'    => 'Drain Masters plumber servicing a residential water heater at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches repairs, replaces, and installs water heaters across Palm Springs and Palm Beach County. Our licensed team fixes no-hot-water calls and leaks, flushes sediment, and installs tank &amp; tankless units sized to your household&mdash;often within the same week.',
    'heroChips'       => [
        ['flame', 'Tank &amp; tankless'],
        ['clock', 'Fast same-week swaps'],
        ['badge-check', 'Free estimates'],
    ],
    'problem' => [
        'q'         => 'How do you know when a Palm Springs water heater needs repair or replacement?',
        'answer'    => 'When hot water runs out fast, turns rusty, or the tank pops and rumbles, sediment and wear are catching up with the unit. Water pooling at the base or a tank past 8 to 12 years old usually means replacement, while a bad element, thermostat, or pilot is often a straightforward repair.',
        'pullquote' => 'A water heater rarely fails all at once&mdash;it warns you with lukewarm showers and strange noises long before the tank lets go.',
        'signs'     => [
            ['No or limited hot water', 'A failed heating element, thermostat, or gas burner cuts hot water. Showers that turn cold quickly point to sediment stealing tank capacity.'],
            ['Rusty or discolored water', 'Brown or metallic hot water means the tank or anode rod is corroding from the inside, and corrosion only spreads once it starts.'],
            ['Popping or rumbling tank', 'Palm Springs hard water bakes a sediment layer onto the bottom of the tank; the noise is water boiling under it, and it wastes energy.'],
            ['Water around the base', 'Pooling or dampness at the bottom of the unit usually signals a cracked tank or failed fitting that a repair cannot reliably save.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners call Drain Masters for water heater work?',
        'answer'    => 'Drain Masters of the Palm Beaches is a locally owned Palm Springs plumbing company that sizes and installs water heaters to code, not by guesswork. We tell you honestly when a unit is worth repairing and when a replacement will cost you less over the next several years.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs runs on hard, mineral-heavy water, and that mineral load is exactly what shortens a water heater\'s life here. Sediment settles on the tank floor, forces the burner or element to work harder, and drives up the power bill&mdash;which is why an annual flush matters so much in Palm Beach County.',
            'We diagnose the real fault before quoting, right-size any new tank or tankless unit to how your household actually uses hot water, and install it to code so it runs efficiently for years&mdash;not just until the next cold shower.',
        ],
        'points' => [
            ['Repair or replace, honestly', 'We price the repair and the replacement so you can weigh the age of your unit against the cost&mdash;no pressure to swap a heater that has years left.'],
            ['Right-sized every time', 'We match tank capacity or tankless flow rate to your household demand, so you never run out mid-shower or pay to heat water you don\'t use.'],
            ['Sediment-smart service', 'We flush the tank and check the anode rod to fight the mineral buildup that ages heaters fast in Palm Springs.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in a Drain Masters water heater installation or repair?',
        'answer' => 'A Drain Masters visit starts by diagnosing whether the fault is the thermostat, element, gas valve, or the tank itself. For repairs we replace the failed part and flush sediment; for installs we haul off the old unit and set the new tank or tankless heater to code, then test it end to end.',
        'included' => [
            'Full diagnosis of the fault before any parts or pricing',
            'Thermostat, heating element, gas valve, or pilot repair',
            'Sediment flush to restore capacity and efficiency',
            'Anode rod check to slow future corrosion',
            'Tank or tankless replacement sized to your household',
            'Old-unit haul-away and a to-code install with a hot-water test',
        ],
        'process' => [
            ['Diagnose the fault', 'We find whether it is a part, sediment, or a failing tank before we quote a thing.'],
            ['Repair or right-size', 'We fix the fault, or size a new tank or tankless unit to how your home uses hot water.'],
            ['Install to code', 'We set the unit, connect water, gas or power, and the T&amp;P valve safely to code.'],
            ['Test the hot water', 'We fire it up, confirm temperature and flow, and clear the old unit away.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician installing a water heater at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters water heater service?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review is real and verifiable&mdash;read them on our Google Business Profile, or leave your own after we get your hot water flowing again.',
    ],
    'comparison' => [
        'q'      => 'What makes our water heater service different from other Palm Springs plumbers?',
        'answer' => 'Plenty of plumbers push a same-day replacement whether or not the tank is done. Drain Masters diagnoses first, prices the repair against the replacement, and sizes any new unit to your home&mdash;so you pay for the right fix instead of the fastest upsell.',
        'rows'   => [
            ['Swap the tank without diagnosing the fault', 'Diagnose first, then price repair against replacement'],
            ['Install whatever size is on the truck', 'Right-size the tank or tankless unit to your household'],
            ['Skip the sediment flush and anode check', 'Flush sediment and check the anode to extend unit life'],
            ['Leave the T&amp;P valve or venting loose', 'Install every connection and safety valve to code'],
            ['Hidden fees added after the work', 'Upfront pricing agreed before the job starts'],
        ],
    ],
    'faqs' => [
        ['How long do water heaters last in Palm Springs?', 'A tank water heater typically lasts 8 to 12 years, but Palm Springs hard water can shorten that as sediment builds on the tank floor. Tankless units often run longer with maintenance. An annual flush and anode-rod check help you reach the top of that range instead of replacing early.'],
        ['Should I repair or replace my water heater?', 'If the unit is under about eight years old and the fault is a thermostat, element, or gas valve, a repair usually makes sense. Once a tank is leaking, badly corroded, or past 10 years, replacement almost always costs less over time. Drain Masters prices both so you can decide.'],
        ['Is a tankless water heater worth it in Florida?', 'Tankless units give endless hot water, save space, and often last longer, which suits many Palm Beach County homes. The trade-off is a higher upfront cost and, sometimes, gas or electrical upgrades. We size the flow rate to your household and tell you honestly whether tankless pays off for you.'],
        ['Why is my water heater making popping noises?', 'Popping or rumbling almost always means sediment has hardened on the bottom of the tank, and water is boiling underneath it. Palm Springs hard water builds that layer fast. A professional flush usually quiets the tank and restores efficiency, though a heavily scaled older unit may be near the end of its life.'],
        ['Do you offer same-day or emergency water heater service?', 'Yes. Drain Masters of the Palm Beaches handles same-day and after-hours water heater calls across Palm Springs and Palm Beach County. If your tank is leaking or you have no hot water, call us and we will get out as fast as possible to repair it or set a replacement.'],
        ['What size water heater does my home need?', 'It depends on how many people live in your home and when you use hot water at once. A right-sized tank stops you running out mid-shower without paying to heat water you never use; a tankless unit is sized by flow rate instead. We assess your household demand before recommending a size.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Water heater installation by Drain Masters of the Palm Beaches in Palm Springs, FL'],
        ['owner-img_8819', 'Drain Masters plumbing work on a residential water line in Palm Beach County'],
        ['owner-img_8946', 'Drain Masters technician completing a water heater job at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Get your hot water back today',
        'text'    => 'No hot water, a leaking tank, or a unit past its prime? Drain Masters of the Palm Beaches repairs and installs tank &amp; tankless water heaters&mdash;call now or request a free estimate in Palm Springs and across Palm Beach County.',
    ],
];

$currentPage  = 'services';
$pageType     = 'service';
$serviceSlug  = $sp['slug'];
$pageTitle       = $sp['title'];
$metaDescription = $sp['metaDescription'];
$pageDescription = $sp['metaDescription'];
$canonicalUrl    = $siteUrl . '/services/' . $sp['slug'] . '/';

require $_SERVER['DOCUMENT_ROOT'] . '/includes/service-init.php';
include  $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include  $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ============ BREADCRUMB ============ -->
<nav class="sp-breadcrumb" aria-label="Breadcrumb" style="background:var(--color-paper-2);border-bottom:1px solid var(--color-line);font-size:var(--font-size-sm)">
    <div class="container">
        <ol style="list-style:none;display:flex;flex-wrap:wrap;gap:.4rem;align-items:center;margin:0;padding:var(--space-sm) 0;color:var(--color-ink-2)">
            <li><a href="/" style="color:var(--color-ink-2)">Home</a></li>
            <li aria-hidden="true"><?php echo $spIcons['arrow-right']; ?></li>
            <li><a href="/services/" style="color:var(--color-ink-2)">Services</a></li>
            <li aria-hidden="true"><?php echo $spIcons['arrow-right']; ?></li>
            <li><span aria-current="page" style="color:var(--color-ink);font-weight:600"><?php echo sp_e($spName); ?></span></li>
        </ol>
    </div>
</nav>

<!-- ============ 1. HERO (bold-industrial photo hero + lead form) ============ -->
<section class="hero hero--photo sp-hero" aria-label="<?php echo sp_e($spName); ?> introduction">
    <div class="hero-bg">
        <?php echo renderPicture($spHeroImage, sp_d($sp['heroImageAlt']), 1600, 1000, '100vw', ['eager' => true]); ?>
    </div>
    <div class="hero-overlay"></div>
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
        <div class="hero-grid hero-grid--form">
            <div class="hero-text">
                <span class="eyebrow"><?php echo sp_e($spName); ?> &middot; Palm Springs, FL</span>
                <h1 class="hero-title"><?php echo sp_e($sp['h1'] ?? ($spName . ' in Palm Springs, FL')); ?></h1>
                <p class="hero-answer"><?php echo $sp['heroAnswer']; ?></p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                    <a class="link-call" href="tel:<?php echo formatPhone($phone); ?>"><?php echo $spIcons['phone']; ?> or call <?php echo $phone; ?></a>
                </div>
                <ul class="hero-chips">
                    <?php foreach ($sp['heroChips'] as $chip): ?>
                    <li><?php echo $spIcons[$chip[0]]; ?> <?php echo $chip[1]; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <aside class="hero-form-card">
                <h2>Get a free estimate</h2>
                <p class="hero-form-tagline">No obligation. Same-day reply.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="form_location" value="hero">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-email">Email</label><input id="hero-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-service">Service</label>
                        <select id="hero-service" name="service">
                            <?php foreach ($services as $ffSvc): ?>
                            <option value="<?php echo htmlspecialchars($ffSvc['name']); ?>"<?php echo $ffSvc['slug'] === $sp['slug'] ? ' selected' : ''; ?>><?php echo htmlspecialchars($ffSvc['name']); ?></option>
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

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-body.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
