<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Sump Pump Installation & Repair — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'sump-pump-installation-repair',
    'name'            => 'Sump Pump Installation & Repair',
    'h1'              => 'Sump Pump Installation & Repair in Palm Springs, FL',
    'title'           => 'Sump Pump Installation & Repair in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Sump pump installation, testing and repair in Palm Springs, FL. Drain Masters keeps groundwater and storm flooding out of your home. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8933',
    'heroImageAlt'    => 'Drain Masters plumber installing a sump pump at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches installs, tests, and repairs sump pumps that keep groundwater and stormwater out of low areas of Palm Springs homes. With South Florida&rsquo;s high water table and hurricane-season downpours, our licensed team makes sure your pump is ready before the next storm rolls in.',
    'heroChips'       => [
        ['gauge', 'Storm-season ready'],
        ['shield', 'Battery backup available'],
        ['droplet', 'Keeps groundwater out'],
    ],
    'problem' => [
        'q'         => 'What are the signs your Palm Springs sump pump is failing?',
        'answer'    => 'When your sump pump stops keeping up, you&rsquo;ll see standing water where the floor should stay dry, hear a pump that runs nonstop or cycles oddly, or notice a musty, damp smell. In flood-prone Palm Springs, those warning signs mean the pump needs attention before the next heavy rain.',
        'pullquote' => 'A sump pump only earns its keep the day the water rises&mdash;and that&rsquo;s the worst possible time to learn it failed.',
        'signs'     => [
            ['Standing water near the pit', 'If water pools where your pump should keep the area dry, the pump has stopped moving water or can\'t keep up with the inflow.'],
            ['Runs constantly or won\'t stop', 'A pump that cycles nonstop often has a stuck float, an undersized unit, or a failing check valve letting water flow back in.'],
            ['Grinding or rattling noises', 'Unusual grinding, rattling, or humming points to a worn motor, a jammed impeller, or a pump nearing the end of its life.'],
            ['Never turns on', 'A pump that stays silent as the pit fills may have a tripped breaker, a bad float switch, or a burned-out motor.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners trust Drain Masters for sump pumps?',
        'answer'    => 'Sump pumps only matter in an emergency, so we treat them that way. Drain Masters of the Palm Beaches is a locally owned Palm Springs company that sizes, installs, and tests every pump for real South Florida storm conditions&mdash;not a quick swap that fails when the water rises.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs sits low and drains slowly, and the water table across Palm Beach County rises fast during the summer rainy season. That combination pushes groundwater up under garages, utility rooms, and crawlspaces&mdash;exactly where a working sump pump earns its place.',
            'We size the pump to your home&rsquo;s inflow, wire in a battery backup so it keeps running when a storm knocks the power out, and test the full system before we leave&mdash;so it works the day you actually need it.',
        ],
        'points' => [
            ['Sized for your home', 'We match pump horsepower and pit capacity to how much water your property actually takes on during a heavy South Florida storm.'],
            ['Battery backup built in', 'Storms cut power right when the pump is needed most, so we install a backup that keeps water moving during an outage.'],
            ['Tested before storm season', 'We check the float, check valve, and discharge line and run the pump under load, so you know it works before the rain arrives.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in a sump pump installation or repair?',
        'answer' => 'A Drain Masters sump pump job covers sizing and installing the right pump, wiring the float switch and check valve, and testing the whole system under load. For repairs, we diagnose why the pump failed&mdash;float, motor, or power&mdash;and fix or replace it so it&rsquo;s ready for the next storm.',
        'included' => [
            'Assessment of your pit, water inflow, and existing pump setup',
            'Submersible or pedestal pump sized to your home',
            'Float switch and check valve installation or replacement',
            'Battery backup wiring for storm-season power outages',
            'Full load test to confirm the pump cycles and discharges',
            'Straight advice on backup options and seasonal maintenance',
        ],
        'process' => [
            ['Inspect & size', 'We check the pit, discharge line, and how much water your home takes on to spec the right pump.'],
            ['Install & wire', 'We set the pump, connect the float switch and check valve, and add a battery backup where you need it.'],
            ['Test under load', 'We fill the pit and run the pump to confirm it turns on, discharges, and shuts off cleanly.'],
            ['Ready for storms', 'You get honest advice on backup power and a maintenance check before hurricane season.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician installing a sump pump at a Palm Springs, FL home',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters sump pump service?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review is real and verifiable&mdash;read them on our Google Business Profile, or leave your own after we get your sump pump ready for storm season.',
    ],
    'comparison' => [
        'q'      => 'What makes our sump pump service different from other Palm Springs plumbers?',
        'answer' => 'Many plumbers drop in whatever pump is on the truck and move on. Drain Masters sizes the pump to your home, adds battery backup for storm outages, and tests the full system under load&mdash;so it actually runs the day Palm Beach County floods.',
        'rows'   => [
            ['Install whatever pump is on the truck', 'Size the pump to your home\'s real water inflow'],
            ['Skip battery backup entirely', 'Wire in backup power for storm-season outages'],
            ['Leave without testing the system', 'Test the pump under load before we go'],
            ['Ignore the float switch and check valve', 'Install and verify the float switch and check valve'],
            ['Only show up after the flood', 'Check and service your pump before storm season'],
        ],
    ],
    'faqs' => [
        ['Does my Palm Springs home really need a sump pump?', 'Many low-lying Palm Springs and Palm Beach County properties benefit from one. With a high water table and heavy summer rain, groundwater can push up into garages, utility rooms, and crawlspaces. If you have ever seen water collect in a low area of your home after a storm, a sump pump keeps that space dry and protects your floors and belongings.'],
        ['How much does sump pump installation cost in Palm Springs?', 'Cost depends on the pump type, whether you add a battery backup, and how much new wiring or discharge line the job needs. A straightforward replacement costs less than a full new installation with backup power. Drain Masters gives a free on-site assessment and a clear, upfront price before any work starts, with no hidden fees.'],
        ['Should I get a battery backup for my sump pump?', 'In South Florida, yes. Hurricanes and summer storms knock out power exactly when your pump is working hardest, and a pump with no electricity cannot move water. A battery backup keeps the system running through an outage so your home stays protected during the storm. We install and test backup units as part of a full sump pump setup.'],
        ['Why does my sump pump run constantly?', 'A pump that never shuts off usually has a stuck or misadjusted float switch, a failed check valve letting discharged water flow back into the pit, or a unit too small for your home\'s water inflow. Running nonstop wears the motor out fast. Drain Masters diagnoses the cause and repairs or replaces the failing part before the pump burns out.'],
        ['How often should a sump pump be tested or serviced?', 'Test your sump pump at least once a year, and ideally again right before hurricane season starts in June. Pour water into the pit and confirm the pump turns on, discharges, and shuts off. Drain Masters can service the float, check valve, and discharge line during a visit so your pump is ready before Palm Beach County\'s heavy rains arrive.'],
        ['Submersible or pedestal sump pump — which is better?', 'It depends on your pit and how much water your home takes on. Submersible pumps sit inside the pit, run quieter, and move more water, which suits most Palm Springs homes. Pedestal pumps sit above the pit and are easier to service. Drain Masters recommends the right type after checking your setup and typical inflow during a storm.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches on a sump pump service call in Palm Springs, FL'],
        ['owner-img_8819', 'Sump pump and plumbing work by Drain Masters in Palm Beach County'],
        ['owner-img_8946', 'Drain Masters technician completing a sump pump job at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Get your sump pump storm-ready',
        'text'    => 'Standing water, a pump that won&rsquo;t start, or no backup before hurricane season? Drain Masters of the Palm Beaches installs, tests, and repairs sump pumps&mdash;call now or request a free estimate across Palm Springs and Palm Beach County.',
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
