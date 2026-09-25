<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Hydro Jetting — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'hydro-jetting',
    'name'            => 'Hydro Jetting',
    'h1'             => 'Hydro Jetting in Palm Springs, FL',
    'title'           => 'Hydro Jetting in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Hydro jetting in Palm Springs, FL. Drain Masters scours grease, mineral scale, and tree roots off the full pipe wall with high-pressure water. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8933',
    'heroImageAlt'    => 'Drain Masters plumber hydro jetting a sewer line at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches hydro jets kitchen, laundry, and main sewer lines across Palm Springs and Palm Beach County. High-pressure water scours grease, sludge, mineral scale, and tree roots off the entire pipe wall&mdash;so a line that keeps clogging finally flows freely again.',
    'heroChips'       => [
        ['waves', 'Thousands of PSI'],
        ['search', 'Camera-checked before &amp; after'],
        ['badge-check', 'Free estimates'],
    ],
    'problem' => [
        'q'         => 'When does a Palm Springs drain need hydro jetting instead of snaking?',
        'answer'    => 'When a line clogs again days after it was cabled, jetting is the answer. A snake punches a hole through the blockage; hydro jetting blasts the full pipe wall clean of the grease, scale, and roots that a cable slides right past&mdash;so the flow lasts far longer.',
        'pullquote' => 'A snake makes a hole in the clog. Hydro jetting removes the clog&mdash;and the buildup it grew from.',
        'signs'     => [
            ['Clogs come right back', 'A drain that backs up again within days of being snaked has a coated pipe wall that only high-pressure water will strip clean.'],
            ['Grease-heavy kitchen line', 'Years of cooking grease harden into the pipe like candle wax; jetting melts and flushes it where a cable just bores through.'],
            ['Tree roots in the main', 'Roots creeping into an older Palm Springs sewer line grow back after cabling&mdash;jetting shears them off the full pipe wall.'],
            ['Several slow drains at once', 'When tubs, sinks, and toilets all drain slowly together, the main line is coated or blocked and needs a full-wall cleaning.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners choose Drain Masters for hydro jetting?',
        'answer'    => 'Drains and sewers are our specialty, not an add-on. Drain Masters of the Palm Beaches scopes a line with a camera before jetting, matches the nozzle and pressure to the pipe, and shows you the clean wall on camera afterward&mdash;so you see exactly what you paid for.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs runs on hard, mineral-heavy water, and plenty of homes here still drain through decades-old cast iron and clay pipe. That combination lays down scale and grabs grease, and older clay joints invite tree roots&mdash;exactly the buildup that jetting is built to remove and a cable can only skim.',
            'We never jet blind. A camera inspection first confirms the pipe is sound enough to take the pressure; if a line is corroded, cracked, or collapsed, we tell you and repair it instead of jetting something that could fail.',
        ],
        'points' => [
            ['Camera before we jet', 'We scope the line first so a fragile or broken pipe gets repaired&mdash;not blasted with high pressure it can\'t handle.'],
            ['Right nozzle, right pressure', 'Root-cutting heads for the main, degreasing heads for kitchen lines&mdash;pressure matched to the pipe material and the problem.'],
            ['Proof on camera after', 'We can re-scope the line when we finish so you see a pipe wall cleaned end to end, not just a drain that swallows water.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in a professional hydro jetting service?',
        'answer' => 'A Drain Masters hydro jetting starts with a camera inspection, then feeds a high-pressure hose fitted with the right nozzle through the line. The water scours grease, scale, and roots off the full pipe wall, and we flow-test&mdash;and can re-camera&mdash;to confirm the line is clean end to end.',
        'included' => [
            'Camera inspection to confirm the pipe can safely take the pressure',
            'Access through a cleanout so the jetting reaches the whole line',
            'High-pressure water jetting at thousands of PSI to strip the pipe wall',
            'Removal of grease, sludge, mineral scale, and tree roots',
            'Flow test to confirm the full line drains freely',
            'Post-jetting camera check available so you see the cleaned pipe',
        ],
        'process' => [
            ['Scope the line', 'We run a camera first to find the buildup and make sure the pipe is sound enough to jet.'],
            ['Set the nozzle', 'We choose the head and pressure for your pipe&mdash;root-cutting for the main, degreasing for kitchen lines.'],
            ['Jet the pipe wall', 'High-pressure water scours grease, scale, and roots off the full wall and flushes it downstream.'],
            ['Verify it\'s clean', 'We flow-test and can re-camera the line so you see a pipe cleaned end to end.'],
        ],
        'photo'    => 'owner-img_8976',
        'photoAlt' => 'Drain Masters technician running a hydro jetting hose into a sewer cleanout in Palm Beach County',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters hydro jetting?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review is honest and verifiable&mdash;read them on our Google Business Profile, or leave your own after we jet your line back to full flow.',
    ],
    'comparison' => [
        'q'      => 'What makes our hydro jetting different from other Palm Springs plumbers?',
        'answer' => 'Plenty of plumbers jet a line without ever looking inside it first. Drain Masters cameras the pipe before and after, matches the pressure to the pipe material, and repairs a fragile line instead of blasting it&mdash;so jetting solves the problem without creating a new one.',
        'rows'   => [
            ['Jet the line without inspecting it first', 'Camera-scope the pipe before jetting to confirm it\'s sound'],
            ['One-size pressure on every pipe', 'Nozzle and PSI matched to the pipe material and clog'],
            ['Blast a cracked or corroded line anyway', 'Repair a fragile pipe instead of jetting what could fail'],
            ['Snake it again and call it done', 'Scour the full pipe wall so the flow actually lasts'],
            ['No proof the line is clean', 'Optional after-camera shows the pipe cleaned end to end'],
        ],
    ],
    'faqs' => [
        ['How much does hydro jetting cost in Palm Springs?', 'Cost depends on the line, its length, and how much grease, scale, or root intrusion is inside. A single grease-clogged kitchen line is straightforward; a root-filled main sewer takes more time and a heavier nozzle. Drain Masters gives a free assessment and a clear, upfront price before any jetting begins, with no hidden fees.'],
        ['Is hydro jetting better than snaking my drain?', 'For a coated or recurring clog, yes. Snaking punches a hole through the blockage so water moves again, but the grease, scale, and roots stay on the pipe wall and clog returns. Hydro jetting scours the entire wall clean, so in Palm Springs homes with grease-heavy or root-invaded lines the flow lasts far longer.'],
        ['Can hydro jetting damage older pipes?', 'It can if a plumber jets blind. Many older Palm Springs homes have cast iron and clay pipe, so Drain Masters cameras the line first to confirm it is sound enough to take the pressure. If we find a corroded, cracked, or collapsed pipe, we tell you and repair it rather than jetting something that could fail.'],
        ['Does hydro jetting remove tree roots from a sewer line?', 'Yes. Roots work into older clay and cast iron sewer joints across Palm Beach County, and a cable only shaves them back so they regrow fast. A root-cutting jetting nozzle shears roots off the full pipe wall and flushes them out, giving you a much longer stretch of clear flow before they return.'],
        ['How long does a hydro jetting service take?', 'Most residential jetting jobs take one to two hours. A single grease-heavy kitchen or laundry line is faster; a long main sewer that needs a camera inspection first, a root-cutting nozzle, and an after-camera check takes longer. We confirm the full line flows freely before we consider the job finished.'],
        ['How often should I have my line hydro jetted?', 'It depends on your pipes and habits. A busy kitchen line in an older Palm Springs home that cooks with a lot of grease may benefit every year or two, while a root-prone main sewer is set by how fast roots return. After we jet and camera your line, we give you an honest interval instead of a guess.'],
    ],
    'gallery' => [
        ['owner-img_8820', 'Drain Masters of the Palm Beaches on a hydro jetting service call in Palm Springs, FL'],
        ['owner-img_8947', 'Sewer line jetting and cleanout work by Drain Masters in Palm Beach County'],
        ['owner-img_8819', 'Drain Masters technician finishing a hydro jetting job at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Get your line jetted clean and flowing',
        'text'    => 'Clog that keeps coming back, grease-packed kitchen line, or roots in the main? Drain Masters of the Palm Beaches scours it clean with high-pressure water&mdash;call now or request a free estimate for hydro jetting in Palm Springs and across Palm Beach County.',
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
