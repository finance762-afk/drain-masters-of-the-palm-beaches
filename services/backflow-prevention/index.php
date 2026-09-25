<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Backflow Prevention — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'backflow-prevention',
    'name'            => 'Backflow Prevention',
    'h1'              => 'Backflow Prevention in Palm Springs, FL',
    'title'           => 'Backflow Prevention in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Backflow prevention in Palm Springs, FL. Drain Masters installs, tests, and certifies backflow assemblies to keep contaminated water out of your drinking supply. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8976',
    'heroImageAlt'    => 'Drain Masters plumber servicing a backflow prevention assembly at a Palm Springs, FL property',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches installs, tests, and certifies backflow prevention assemblies that keep contaminated water from reversing into your clean drinking supply. Our licensed Palm Springs team handles the annual testing many local utilities require, repairs failed devices, and files the paperwork&mdash;protecting homes, irrigation systems, and businesses across Palm Beach County.',
    'heroChips'       => [
        ['shield', 'Protects drinking water'],
        ['droplet', 'Certified annual testing'],
        ['badge-check', 'Licensed &amp; insured'],
    ],
    'problem' => [
        'q'         => 'What are the signs your Palm Springs property needs backflow prevention service?',
        'answer'    => 'If you received an annual backflow test notice from your water utility, added an irrigation system, or noticed discolored or odd-tasting water, your assembly needs attention. A device that is leaking or past its test date&mdash;or a new build or remodel&mdash;also requires a certified backflow assembly before the utility will sign off.',
        'pullquote' => 'Backflow gives no warning&mdash;by the time your tap water tastes off, water from an irrigation line has already reversed into the supply you drink from.',
        'signs'     => [
            ['Annual test notice arrived', 'Many local water utilities mail an annual backflow test notice. Miss the deadline and you can face fines or a water shutoff until a certified tester submits passing results.'],
            ['You have an irrigation system', 'Sprinkler and irrigation systems are one of the most common cross-connections on Florida properties, and they require a backflow assembly to protect the clean drinking-water supply.'],
            ['Discolored or odd-tasting water', 'Cloudy, rusty, or strange-tasting tap water can signal that non-potable water has reversed into your clean line through a failed or missing device.'],
            ['Leaking or past-due device', 'A backflow assembly that drips, sticks, or has passed its test date may no longer stop reverse flow and needs repair, a rebuild, or recertification.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs property owners choose Drain Masters for backflow prevention?',
        'answer'    => 'Backflow work must be performed by a certified tester and filed correctly, or the water utility rejects it. Drain Masters of the Palm Beaches is a licensed, locally owned Palm Springs company that installs the right assembly, runs the required annual test, and handles the paperwork your utility demands.',
        'stat'      => 'Palm Springs',
        'statLabel' => 'Licensed and locally owned, serving Palm Springs and Palm Beach County',
        'paragraphs' => [
            'Florida properties lean heavily on irrigation and sprinkler systems, and each one is a potential cross-connection between lawn water and the water you drink. That is why so many Palm Springs homes and businesses are required to keep a certified backflow assembly in good working order.',
            'We install the correct assembly for your setup&mdash;usually a double-check valve or a reduced-pressure-zone (RPZ) assembly&mdash;then perform the annual test the utility requires and submit the certification, so you stay compliant without chasing paperwork.',
        ],
        'points' => [
            ['Certified testing and filing', 'We perform the annual test many local water utilities require and submit the certification paperwork on your behalf.'],
            ['Right assembly for the job', 'Double-check valve or reduced-pressure-zone (RPZ) assembly, sized and installed for irrigation, residential, or commercial use.'],
            ['Repair before replacement', 'If a device fails testing we rebuild or repair it when possible, so you are not paying for a new assembly you do not need.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in backflow prevention service?',
        'answer' => 'A Drain Masters backflow service covers installing or replacing the assembly, performing the certified annual test, and repairing any device that fails. We check the assembly for reverse flow, verify each check valve and relief valve, submit the results to your water utility, and confirm your drinking water stays protected.',
        'included' => [
            'Inspection of the backflow assembly and the cross-connection it protects',
            'Certified annual testing required by many local water utilities',
            'Installation of double-check valve and RPZ assemblies',
            'Repair or rebuild of leaking or failed devices',
            'Test results filed with your water utility for compliance',
            'Assembly sizing for irrigation, residential, and commercial use',
        ],
        'process' => [
            ['Inspect the assembly', 'We locate the backflow device and the cross-connection it protects before any testing begins.'],
            ['Run the certified test', 'A certified tester checks the valves for reverse flow and confirms the device holds pressure.'],
            ['Repair or install', 'We rebuild a failed assembly or install the correct new one when a device cannot be saved.'],
            ['File the certification', 'We submit the passing results to your water utility so your account stays compliant.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters plumber testing a backflow prevention assembly at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review comes from a real Palm Beach County client&mdash;read them on our Google Business Profile, or leave your own after we install or certify your backflow assembly.',
    ],
    'comparison' => [
        'q'      => 'What makes our backflow prevention different from other Palm Springs plumbers?',
        'answer' => 'Some plumbers install a device and leave the required testing and paperwork to you. Drain Masters of the Palm Beaches handles the full job&mdash;we install the correct assembly, perform the certified annual test, and file the results with your water utility so you stay compliant.',
        'rows'   => [
            ['Install a device and leave testing to you', 'Install, test, and file the certification for you'],
            ['Not certified to submit annual test results', 'Certified tester performs and submits the required test'],
            ['Replace any assembly that fails', 'Rebuild or repair a failed device when possible'],
            ['One-size assembly regardless of the setup', 'Right assembly sized for irrigation or building use'],
            ['You track the utility test deadline', 'We flag when your annual recertification is due'],
        ],
    ],
    'faqs' => [
        ['What is backflow and why does it matter?', 'Backflow is when water reverses direction and flows back into the clean drinking-water supply, usually during a pressure drop from a water-main break or heavy demand. It can pull in contaminants from irrigation lines, boilers, or chemicals. A backflow prevention assembly blocks that reverse flow, which is why Palm Springs properties with cross-connections are required to have one.'],
        ['How often does my backflow device need testing in Palm Springs?', 'Many local water utilities in Palm Beach County require certified backflow testing once a year, and they mail a notice when your test is due. A certified tester must perform it and submit the results. Drain Masters of the Palm Beaches runs the annual test, files the paperwork, and reminds you before the next deadline so your account stays compliant.'],
        ['Do I need a backflow preventer if I have a sprinkler system?', 'Almost always, yes. Irrigation and sprinkler systems are one of the most common cross-connections on Florida properties, because lawn water, fertilizer, and pesticides can siphon back into your drinking water. Most Palm Springs water utilities require a backflow assembly on irrigation systems, plus annual certified testing to keep that separation intact.'],
        ['Who can legally test a backflow assembly?', 'A certified backflow tester must perform the test and submit the results to your water utility; a general handyman cannot. Drain Masters of the Palm Beaches is a licensed, insured plumbing company serving Palm Springs and Palm Beach County, and we handle certified testing, repair, and installation so your results are accepted the first time.'],
        ['What happens if my backflow test fails?', 'If your assembly fails the annual test, it is no longer reliably stopping reverse flow and must be repaired or replaced before the utility accepts a passing result. Drain Masters of the Palm Beaches can often rebuild a failed device with new valves and seals instead of replacing it, then retest and file the certification for your Palm Springs property.'],
        ['What does backflow prevention cost in Palm Springs?', 'Cost depends on whether you need annual testing, a repair, or a new assembly, and on the device type and size. A routine certified test is straightforward; installing an RPZ assembly on a commercial line costs more. Drain Masters of the Palm Beaches gives a free, upfront estimate for your Palm Springs property before any work starts.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches installing a backflow prevention assembly in Palm Springs, FL'],
        ['owner-img_8933', 'Backflow device testing by Drain Masters at a Palm Beach County property'],
        ['owner-img_8819', 'Drain Masters plumber completing backflow certification work in Palm Springs, FL'],
    ],
    'finalCta' => [
        'heading' => 'Protect your drinking water with certified backflow prevention',
        'text'    => 'Got an annual test notice, a new irrigation system, or a device that failed? Drain Masters of the Palm Beaches installs, tests, and certifies backflow assemblies across Palm Springs and Palm Beach County&mdash;call now or request your free estimate.',
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
