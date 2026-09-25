<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Emergency Plumbing — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'emergency-plumbing',
    'name'            => 'Emergency Plumbing',
    'h1'              => 'Emergency Plumbing in Palm Springs, FL',
    'title'           => 'Emergency Plumbing in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Emergency plumbing in Palm Springs, FL. Drain Masters answers burst pipes, sewer backups, and major leaks with same-day and after-hours service. Call ' . $phone . '.',
    'heroImage'       => 'owner-img_8820',
    'heroImageAlt'    => 'Drain Masters plumber responding to an emergency water leak at a Palm Springs, FL home',
    'heroAnswer'      => 'When a pipe bursts or sewage backs up, Drain Masters of the Palm Beaches answers with same-day and after-hours emergency service across Palm Springs and Palm Beach County. Our licensed team gets on site as fast as possible, stops the water, and limits the damage to your home.',
    'heroChips'       => [
        ['alert-triangle', 'Burst pipes &amp; backups'],
        ['clock', 'Same-day &amp; after-hours'],
        ['phone', 'Call ' . $phone],
    ],
    'problem' => [
        'q'         => 'When does a plumbing problem become a real emergency?',
        'answer'    => 'A plumbing problem is an emergency when water is actively flooding or spraying, sewage is backing up indoors, a pipe has burst, or you have lost all water to the house. These do not wait until morning&mdash;every minute the water runs adds to the damage, so shut off the main valve and call right away.',
        'pullquote' => 'A burst pipe can pour hundreds of gallons into your home before morning&mdash;shutting off the main and calling fast is what saves the floors.',
        'signs'     => [
            ['Water flooding or spraying', 'A burst line or a fixture pouring water is an emergency. Shut off the main valve, then call so we can stop the source before it soaks walls and flooring.'],
            ['Sewage backing up indoors', 'Waste rising in a tub, toilet, or floor drain is a health hazard and a main-line failure. Stop using water and call for immediate help.'],
            ['No water to the house', 'A total loss of water can mean a broken main, a failed valve, or a hidden break. It leaves you without plumbing and needs same-day diagnosis.'],
            ['Water heater leaking', 'A tank leaking or flooding the garage or closet can damage the floor and the unit. Shut its supply valve and call before it fails completely.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners call Drain Masters first in an emergency?',
        'answer'    => 'When water is running and the clock matters, you want a licensed local plumber who actually answers. Drain Masters of the Palm Beaches is owner-operated in Palm Springs, so your call reaches people who work here every day&mdash;not a distant call center or an overnight voicemail.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Emergencies do not keep business hours, which is why we offer same-day and after-hours response across Palm Springs, Lake Worth, West Palm Beach, and the surrounding Palm Beaches. When you call, we help you shut off the water over the phone if needed, then head your way as fast as possible.',
            'Because we are local and owner-operated, the person who answers understands your problem and knows the area&mdash;so we arrive ready to stop the water and start repairs, not just to look and quote.',
        ],
        'points' => [
            ['Same-day &amp; after-hours', 'We answer urgent calls when other plumbers have gone home, so a burst pipe or backup never has to wait until morning.'],
            ['Licensed &amp; insured', 'Every emergency is handled by a licensed, insured Palm Springs plumber&mdash;so the fast fix is also the correct one.'],
            ['Local response', 'We work throughout Palm Beach County daily, so we know the routes and the older housing stock that makes fast response possible.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What does Drain Masters do on an emergency plumbing call?',
        'answer' => 'On an emergency call, Drain Masters of the Palm Beaches finds and stops the source of the water first, then diagnoses the failure and repairs it or makes it safe. We keep you informed the whole way, explain the fix and the cost before we start, and confirm the problem is contained before we leave.',
        'included' => [
            'Rapid phone triage and guidance to shut off your water',
            'Same-day and after-hours dispatch across the Palm Beaches',
            'Locating and stopping the leak, burst, or backup at the source',
            'Diagnosis of the failed pipe, valve, water heater, or drain line',
            'On-the-spot repair or a safe temporary fix with a clear plan',
            'A straightforward price explained before any work begins',
        ],
        'process' => [
            ['Call &amp; triage', 'We answer, help you shut off the water if needed, and head your way as fast as possible.'],
            ['Stop the water', 'On site, we find and shut down the source to stop the flooding and limit the damage.'],
            ['Diagnose &amp; price', 'We pinpoint the failure and give you a clear price before we touch a repair.'],
            ['Repair &amp; confirm', 'We fix it or make it safe, then check that the leak or backup is fully contained.'],
        ],
        'photo'    => 'owner-img_8947',
        'photoAlt' => 'Drain Masters technician making an emergency pipe repair at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'Can Palm Springs homeowners count on Drain Masters in an emergency?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. When something goes wrong at the worst time, those reviews come from real Palm Beach County neighbors we have already helped&mdash;read them, or leave your own after we handle your emergency.',
    ],
    'comparison' => [
        'q'      => 'How is our emergency service different from other Palm Springs plumbers?',
        'answer' => 'Many plumbers treat after-hours calls as an afterthought and route them to voicemail. Drain Masters of the Palm Beaches answers urgent calls, helps you stop the water right away, and shows up as fast as possible to contain the damage&mdash;because in an emergency, response time is the whole job.',
        'rows'   => [
            ['After-hours calls go to voicemail', 'We answer urgent calls and get moving right away'],
            ['You wait days for the next opening', 'Same-day and after-hours emergency response'],
            ['A far-off dispatcher takes the call', 'A local, owner-operated Palm Springs team responds'],
            ['Arrive only to look and quote later', 'Come ready to stop the water and start repairs'],
            ['Surprise emergency fees at the end', 'A clear price explained before any work starts'],
        ],
    ],
    'faqs' => [
        ['What counts as a plumbing emergency in Palm Springs?', 'A burst or leaking pipe, a major water leak, sewage backing up into your home, an overflowing toilet, a leaking water heater, or a total loss of water all count as emergencies. If water is actively flooding or you cannot stop it, do not wait&mdash;shut off the main valve and call Drain Masters of the Palm Beaches for same-day and after-hours help.'],
        ['Do you offer after-hours and same-day emergency plumbing?', 'Yes. Drain Masters of the Palm Beaches offers same-day and after-hours emergency plumbing across Palm Springs, Lake Worth, West Palm Beach, Greenacres, and the surrounding Palm Beaches. When you call, we help you shut off the water if needed and get to you as fast as possible to stop the damage and begin repairs.'],
        ['How do I shut off the water during a plumbing emergency?', 'Find your main shutoff valve&mdash;usually where the water line enters the home or near the meter&mdash;and turn it clockwise until it stops. For a water-heater emergency, also close the valve on its cold supply line. Shutting off the water stops the flooding while you wait, then call Drain Masters and we will guide you if you cannot find the valve.'],
        ['What should I do while I wait for the plumber to arrive?', 'Shut off the main water valve, move belongings away from the water, and mop or towel up standing water to protect your floors. Avoid using drains or toilets if sewage is backing up. Important: if the emergency involves gas or any risk to your safety, call 911 or your gas utility first, then call us for the plumbing repair.'],
        ['What areas do you serve for emergency plumbing?', 'Drain Masters of the Palm Beaches responds to emergencies across Palm Springs, Lake Worth, West Palm Beach, Greenacres, Boynton Beach, Wellington, Lantana, and Royal Palm Beach. We are based in Palm Springs and work throughout Palm Beach County daily, which is what lets us respond to urgent calls as fast as possible.'],
        ['How much does an emergency plumbing call cost?', 'The cost depends on what failed and what the repair takes&mdash;a broken valve is different from a burst pipe or a flooded water heater. Drain Masters of the Palm Beaches diagnoses the problem on site and gives you a clear price before any work begins, so even in an emergency there are no surprise fees added at the end.'],
    ],
    'gallery' => [
        ['owner-img_8933', 'Drain Masters of the Palm Beaches on an emergency service call in Palm Springs, FL'],
        ['owner-img_8819', 'Emergency pipe and leak repair by Drain Masters in Palm Beach County'],
        ['owner-img_8976', 'Drain Masters plumber completing an urgent repair at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Plumbing emergency? Call now',
        'text'    => 'Burst pipe, sewer backup, or water you cannot stop? Shut off your main valve, then call Drain Masters of the Palm Beaches&mdash;same-day and after-hours emergency plumbing across Palm Springs and Palm Beach County, on site as fast as possible.',
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
