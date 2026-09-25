<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Leak Detection & Slab Leak Repair — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'leak-detection-slab-leak-repair',
    'name'            => 'Leak Detection & Slab Leak Repair',
    'h1'             => 'Leak Detection & Slab Leak Repair in Palm Springs, FL',
    'title'           => 'Leak Detection & Slab Leak Repair in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Non-invasive leak detection and slab leak repair in Palm Springs, FL. Drain Masters pinpoints hidden leaks with acoustic and thermal tools before opening a wall or floor. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8820',
    'heroImageAlt'    => 'Drain Masters plumber pinpointing a hidden slab leak at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches finds hidden water leaks inside walls, underground, and under the concrete slab of Palm Springs homes. We use acoustic listening gear, thermal imaging, and line pressure testing to locate the leak first&mdash;then repair only that spot, so your floors and walls stay intact.',
    'heroChips'       => [
        ['search', 'Electronic leak location'],
        ['droplet', 'Slab leak specialists'],
        ['badge-check', 'Free estimates'],
    ],
    'problem' => [
        'q'         => 'What are the signs of a hidden or slab leak in your Palm Springs home?',
        'answer'    => 'A water bill that jumps for no reason, the sound of running water when every fixture is off, a warm patch on the floor, or low pressure all point to a hidden leak. In slab-on-grade Palm Springs homes the leak is often in a pipe running beneath the concrete foundation, where you never see the water.',
        'pullquote' => 'A slab leak hides under the foundation and quietly soaks the ground for weeks&mdash;by the time the floor feels warm, gallons are already gone.',
        'signs'     => [
            ['Unexplained water bill spike', 'A bill that climbs with no change in usage means water is escaping somewhere you can\'t see, often a line under the slab.'],
            ['Running water with taps off', 'A faint hiss or trickle when everything is shut off is water still moving through a cracked or pinholed pipe.'],
            ['Warm spot on the floor', 'A warm patch on tile or laminate usually marks a hot-water line leaking directly under the concrete slab.'],
            ['Low pressure or damp floors', 'Dropping pressure, damp carpet, or a musty mildew smell in Florida humidity all signal water pooling out of sight.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners trust Drain Masters to find leaks?',
        'answer'    => 'Finding a leak without tearing up a home takes the right equipment and patience. Drain Masters of the Palm Beaches is a locally owned Palm Springs company that pinpoints the exact leak location electronically before any concrete or drywall is opened&mdash;so you pay to fix the leak, not to go hunting for it.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Most homes across Palm Springs and Palm Beach County are built slab-on-grade, meaning the water lines run through or beneath a poured concrete foundation. Add Florida\'s hard, mineral-heavy water and a high water table, and copper lines corrode and develop pinhole leaks that hide under the slab for months.',
            'We isolate the system, listen for the leak with acoustic sensors, confirm it with thermal imaging and a pressure test, and mark the exact spot&mdash;so the repair is a small, targeted opening instead of a demolished floor.',
        ],
        'points' => [
            ['Locate before we open', 'Acoustic listening, thermal cameras, and pressure testing pin the leak down to the spot before a single tile comes up.'],
            ['Honest, upfront pricing', 'A free assessment and a clear price before work starts&mdash;no surprise charges added after the concrete is open.'],
            ['Repair options explained', 'For a slab leak we walk you through spot repair versus rerouting the line, so you choose the fix that fits your home and budget.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in professional leak detection and slab leak repair?',
        'answer' => 'A Drain Masters leak service includes locating the leak with non-invasive electronic equipment, confirming the source, and repairing it with the least disruption possible. For a slab leak that means choosing between a targeted spot repair or rerouting the affected line, then verifying the system holds pressure before we finish.',
        'included' => [
            'Full assessment of the leak symptoms and affected water lines',
            'Acoustic listening and thermal imaging to pinpoint the leak',
            'Line pressure testing to confirm the leak source and severity',
            'Precise location marking to keep any opening as small as possible',
            'Slab leak spot repair or line reroute based on the pipe condition',
            'Pressure re-test to confirm the leak is fully sealed',
        ],
        'process' => [
            ['Listen & locate', 'We isolate the plumbing and use acoustic and thermal tools to find the leak without opening anything.'],
            ['Confirm the source', 'A pressure test verifies the exact line and how severe the leak is before any repair.'],
            ['Repair on target', 'We access only the marked spot for a slab repair or reroute the line when that is the smarter fix.'],
            ['Test & verify', 'We re-pressurize the system to confirm the leak is sealed and the line holds.'],
        ],
        'photo'    => 'owner-img_8947',
        'photoAlt' => 'Drain Masters technician pressure testing a water line at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters leak detection?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. We keep every review honest and verifiable&mdash;read them on our Google Business Profile, or leave your own after we track down and fix your leak.',
    ],
    'comparison' => [
        'q'      => 'What makes our leak detection different from other Palm Springs plumbers?',
        'answer' => 'Many plumbers open a wall or floor to chase a leak by guesswork. Drain Masters locates the leak electronically first, so the repair is aimed at one spot&mdash;we protect your slab, floors, and walls instead of demolishing them to find the problem.',
        'rows'   => [
            ['Break open floors to hunt for the leak', 'Pinpoint the leak electronically before opening anything'],
            ['Quote before the real source is known', 'Free assessment and confirmed source before any price'],
            ['Patch one spot and hope it holds', 'Pressure-test the line to confirm the fix actually seals'],
            ['Only offer to jackhammer the slab', 'Explain spot repair versus rerouting so you can choose'],
            ['Leak work is an occasional add-on', 'Slab and hidden leaks are a core part of our trade'],
        ],
    ],
    'faqs' => [
        ['How much does leak detection cost in Palm Springs?', 'Cost depends on how accessible the leak is and whether it sits under the slab, in a wall, or underground. Electronic detection is a set diagnostic step; the repair price depends on whether a spot fix or a line reroute is needed. Drain Masters gives a free assessment and a clear, upfront price before any work begins.'],
        ['How do you find a leak without breaking the wall or floor?', 'We use non-invasive electronic tools. Acoustic sensors listen for the sound of water escaping a pressurized pipe, a thermal camera reveals temperature differences from a hot-water leak, and a line pressure test confirms which pipe is losing water. That lets us mark the exact spot before opening anything.'],
        ['What exactly is a slab leak?', 'A slab leak is a water pipe leaking beneath the concrete foundation your home sits on. Because so many Palm Springs homes are built slab-on-grade, the supply lines run through or under that concrete, so a corroded or cracked pipe leaks directly into the ground under your floor where it stays hidden.'],
        ['Should a slab leak be spot-repaired or the line rerouted?', 'It depends on the pipe. If a single spot has failed and the rest of the line is sound, a targeted spot repair works well. If the pipe is corroding in several places, rerouting a fresh line above the slab often costs less over time. We inspect the line and explain both options before you decide.'],
        ['Are slab leaks common in Palm Springs and Palm Beach County?', 'Yes. Most homes here are built on concrete slabs, and Florida\'s hard, mineral-heavy water combined with a high water table corrodes copper pipes over the years. That is why hidden pinhole and slab leaks are one of the most frequent calls we get from Palm Springs, Lake Worth, and Greenacres homeowners.'],
        ['How do I know if a hidden leak is urgent?', 'If you hear running water with everything off, see a warm floor spot, notice damp carpet or a mildew smell, or your bill spikes, treat it as urgent. A hidden leak keeps soaking the ground or your home\'s structure every hour it runs. Call Drain Masters and we will locate it before the water damage grows.'],
    ],
    'gallery' => [
        ['owner-img_8933', 'Drain Masters of the Palm Beaches locating a hidden leak at a Palm Springs, FL home'],
        ['owner-img_8819', 'Water line and slab leak repair work by Drain Masters in Palm Beach County'],
        ['owner-img_8946', 'Drain Masters technician completing a leak repair at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Find that hidden leak before it costs you',
        'text'    => 'Water bill climbing, floor warm underfoot, or the sound of running water with everything off? Drain Masters of the Palm Beaches pinpoints the leak fast&mdash;call now or request a free estimate for leak detection and slab leak repair in Palm Springs and across Palm Beach County.',
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
