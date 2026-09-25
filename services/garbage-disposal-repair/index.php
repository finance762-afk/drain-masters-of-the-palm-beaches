<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Garbage Disposal Repair — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'garbage-disposal-repair',
    'name'            => 'Garbage Disposal Repair',
    'h1'             => 'Garbage Disposal Repair in Palm Springs, FL',
    'title'           => 'Garbage Disposal Repair in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Garbage disposal repair in Palm Springs, FL. Drain Masters fixes jams, leaks, humming and dead units under the sink—or replaces them right-sized. Free estimates, call ' . $phone . '.',
    'heroImage'       => 'owner-img_8820',
    'heroImageAlt'    => 'Drain Masters plumber repairing a garbage disposal under a kitchen sink at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches repairs and replaces kitchen garbage disposals across Palm Springs and Palm Beach County. Whether your unit hums but won\'t grind, trips its reset, leaks under the sink, or has gone completely dead, our licensed team diagnoses the cause and gets your sink working again&mdash;usually same day.',
    'heroChips'       => [
        ['trash-2', 'Jams, leaks &amp; dead units'],
        ['clock', 'Same-day service'],
        ['badge-check', 'Free estimates'],
    ],
    'problem' => [
        'q'         => 'How do you know when a Palm Springs kitchen disposal needs a plumber?',
        'answer'    => 'A disposal that hums without grinding has a stuck flywheel; one that stays dead has tripped its reset, lost power, or burned out its motor. Water pooling in the cabinet, a smell that won\'t rinse away, or a sudden metal-on-metal rattle all mean the unit needs a plumber&mdash;not another handful of ice cubes.',
        'pullquote' => 'A disposal that hums but won\'t spin is jammed, not broken&mdash;forcing the switch only overheats the motor and turns a quick fix into a full replacement.',
        'signs'     => [
            ['Hums but won\'t grind', 'The motor has power but the flywheel is jammed on a bone, seed, or utensil. Repeatedly flipping the switch trips the overload and can cook the motor.'],
            ['Completely dead', 'No hum, no spin. Usually a tripped reset button, a flipped GFCI, loose wiring, or a motor that has finally failed after years of use.'],
            ['Leaking under the sink', 'Water in the cabinet points to the top mounting flange, the side drain or dishwasher connection, or a cracked housing&mdash;the last of which means replacement.'],
            ['Loud rattle or bad smell', 'A sudden grinding clatter is a loose or broken impeller, while an odor that survives rinsing means food is stuck below the grinding chamber.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners call Drain Masters for disposal repair?',
        'answer'    => 'We fix the disposal AND the drain line it feeds, so a clog under the unit doesn\'t come back a week later. Drain Masters of the Palm Beaches is a locally owned Palm Springs company that tells you honestly when a jam is a five-minute reset versus when a leaking, burned-out unit is cheaper to replace.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Most disposal calls in Palm Springs are one of two things: a jam that a proper reset and hand-clearing solves, or a unit that has leaked or seized past the point of repair. The mistake we see most is a homeowner riding the reset button until the motor overheats&mdash;so we check the simple causes first before quoting anything.',
            'When a swap is the smart call, owner Luis Noda sizes the new unit to your household and plumbs the drain and dishwasher connections leak-tight&mdash;then runs it under water to confirm the sink drains clean before we pack up.',
        ],
        'points' => [
            ['Repair before replace', 'Jams, tripped resets, and loose connections get fixed on the spot&mdash;we only recommend a new unit when the motor or body is truly gone.'],
            ['Right-sized replacements', 'A one-cook kitchen and a busy family kitchen need different horsepower; we match the unit to how you actually use the sink.'],
            ['Drain-side expertise', 'Disposals feed the trap and branch line&mdash;as drain specialists we clear any clog below the unit, not just the disposal itself.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What does a garbage disposal repair or replacement include?',
        'answer' => 'A Drain Masters visit starts with diagnosing why the disposal jammed, leaked, or died, then clearing the jam or resetting and re-wiring where possible. If the unit is cracked or burned out, we remove it, install a correctly sized replacement, seal every connection, and test the sink and dishwasher line under running water.',
        'included' => [
            'Diagnosis of the jam, leak, power fault, or motor failure',
            'Flywheel clearing and reset for jammed units that can be saved',
            'Inspection of the mounting flange, drain, and dishwasher connections',
            'Removal and disposal of a failed or cracked unit',
            'Installation and correct horsepower sizing of a new disposal',
            'Leak test and drain check under running water before we leave',
        ],
        'process' => [
            ['Diagnose the cause', 'We cut power, inspect the unit, and pinpoint whether it is a jam, a leak, a wiring fault, or a dead motor.'],
            ['Repair what we can', 'Stuck flywheels get cleared, resets restored, and loose fittings tightened before any replacement is discussed.'],
            ['Replace if needed', 'When the body or motor is gone, we install a right-sized unit and seal the flange and drain connections.'],
            ['Test and hand back', 'We run the disposal and dishwasher under water, confirm no leaks, and show you safe-use habits.'],
        ],
        'photo'    => 'owner-img_8947',
        'photoAlt' => 'Drain Masters technician installing a new garbage disposal under a kitchen sink in Palm Springs, FL',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters disposal work?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review is real and verifiable&mdash;read them on our Google Business Profile, or leave your own once your kitchen sink is grinding again.',
    ],
    'comparison' => [
        'q'      => 'What makes our disposal repair different from other Palm Springs plumbers?',
        'answer' => 'Plenty of plumbers push a new unit on every call because a swap is quick money. Drain Masters checks the fixable causes first, sizes any replacement to your kitchen, and clears the drain line underneath&mdash;so the problem is actually solved, not just parts-replaced.',
        'rows'   => [
            ['Sell a new unit on every call', 'Repair jams and resets first, replace only when needed'],
            ['Install whatever unit is on the truck', 'Size the disposal to your household and usage'],
            ['Ignore the drain line under the unit', 'Clear the trap and branch line so clogs don\'t return'],
            ['Skip the leak test and rush off', 'Run the sink and dishwasher line under water before leaving'],
            ['Guess at the price up front', 'Free diagnosis and a clear price before any work'],
        ],
    ],
    'faqs' => [
        ['Why does my garbage disposal hum but not spin?', 'A humming disposal has power but a jammed flywheel, usually caught on a fruit pit, bone, or a piece of silverware. Turn it off before it overheats. Drain Masters clears the jam by hand and with the proper wrench, checks the impeller, and resets the unit&mdash;most humming disposals in Palm Springs are a repair, not a replacement.'],
        ['My disposal is completely dead. Can it be fixed?', 'Often, yes. A dead disposal is frequently a tripped reset button on the bottom of the unit or a flipped GFCI outlet, not a failed motor. We check power, wiring, and the reset before condemning it. If the motor truly has burned out, we will tell you straight and install a right-sized replacement the same visit when possible.'],
        ['Should I repair or replace my garbage disposal?', 'It depends on the fault. Jams, tripped resets, and loose connections are repairs. A cracked body, a leaking housing, or a burned-out motor almost always means replacement, since those repairs cost more than a new unit. Drain Masters diagnoses the cause first and gives you an honest repair-or-replace recommendation for your Palm Springs kitchen.'],
        ['Why is my garbage disposal leaking under the sink?', 'Disposal leaks come from three places: the top mounting flange where it meets the sink, the side drain or dishwasher hose connections, or a crack in the unit body. Flange and connection leaks are usually resealed or re-tightened. A cracked housing means the disposal is done. We find the exact source and fix or replace accordingly.'],
        ['How do I keep my disposal from breaking again?', 'Run cold water before, during, and after grinding, and feed food in slowly. Keep out grease, coffee grounds, eggshells, and fibrous or starchy items like celery, potato peels, and rice, which bind the impeller or coat the drain. In Palm Springs\' hard water, a monthly cold-water flush helps. We share these habits on every repair visit.'],
        ['How long does garbage disposal repair or replacement take?', 'Most jams and resets are cleared in under an hour. A full replacement typically takes one to two hours, including removing the old unit, mounting the new one, connecting the drain and dishwasher line, and testing for leaks. Drain Masters offers same-day service across Palm Springs and Palm Beach County whenever the schedule allows.'],
    ],
    'gallery' => [
        ['owner-img_8933', 'Drain Masters of the Palm Beaches on a kitchen service call in Palm Springs, FL'],
        ['owner-img_8819', 'Under-sink plumbing and disposal connections handled by Drain Masters in Palm Beach County'],
        ['owner-img_8946', 'Drain Masters technician completing a garbage disposal job at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Get your kitchen sink grinding again',
        'text'    => 'Humming, leaking, jammed, or dead disposal? Drain Masters of the Palm Beaches diagnoses it fast and fixes or replaces it right&mdash;call now or request a free estimate for garbage disposal repair in Palm Springs and across Palm Beach County.',
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
