<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Sewer Line Repair & Replacement — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'sewer-line-repair-replacement',
    'name'            => 'Sewer Line Repair & Replacement',
    'h1'             => 'Sewer Line Repair & Replacement in Palm Springs, FL',
    'title'           => 'Sewer Line Repair & Replacement in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Sewer line repair and replacement in Palm Springs, FL. Drain Masters camera-diagnoses root intrusion, cracks, and collapsed pipe, then repairs or fully replaces the line to code. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8819',
    'heroImageAlt'    => 'Drain Masters plumber excavating a failed main sewer line at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches diagnoses and repairs failing main sewer lines across Palm Springs and Palm Beach County. We camera-inspect the line to pinpoint root intrusion, cracks, or collapse, then spot-repair or fully replace the damaged section&mdash;permitted, dug to code, and flowing right before we backfill.',
    'heroChips'       => [
        ['wrench', 'Repair &amp; full replacement'],
        ['search', 'Camera-diagnosed'],
        ['badge-check', 'Permitted &amp; to code'],
    ],
    'problem' => [
        'q'         => 'What are the signs your Palm Springs home has a failing sewer line?',
        'answer'    => 'When sewage backs up in more than one fixture at once, drains gurgle, or a sewage smell drifts through your yard, the trouble is usually the main sewer line, not a single drain. Roots, corroded cast iron, or a collapsed section stop waste from reaching the county sewer.',
        'pullquote' => 'A cracked sewer line does not heal&mdash;every flush pushes more waste into the soil under your Palm Springs home.',
        'signs'     => [
            ['Backups in multiple fixtures', 'When the toilet, tub, and sink all back up together, the blockage is in the main sewer line, not one drain.'],
            ['Sewage smell in the yard', 'A sewage odor outdoors, or soggy and unusually green patches over the pipe, often means the line is cracked and leaking underground.'],
            ['Gurgling toilets and slow drains', 'Toilets that gurgle when a sink runs, plus whole-house drains slowing at once, point to a failing main line.'],
            ['Clogs that keep returning', 'A main line that clogs again within weeks of clearing usually has roots or a collapsed section a cable cannot fix.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners trust Drain Masters with sewer line work?',
        'answer'    => 'Sewer work is where Drain Masters of the Palm Beaches earns its name. We scope the line before quoting, so you know whether a single cracked section needs a spot repair or the whole run is past saving&mdash;and you never pay to replace pipe that a targeted dig can fix.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Many Palm Springs homes still drain through decades-old cast iron or clay pipe, and Florida humidity, hard mineral water, and shifting sandy soil are hard on all of it. Mature trees send roots into every crack and joint, which is why sewer failures here rarely announce themselves until the yard or the house shows it.',
            'We start every sewer job by scoping the line with a camera, so the dig goes straight to the damage&mdash;then we repair the failed section or replace the run, restore the slope, and confirm flow before backfilling.',
        ],
        'points' => [
            ['Diagnose before we dig', 'We camera-scope the line to find exactly where and why it failed, so the excavation is targeted, not exploratory.'],
            ['Repair vs. replace, honestly', 'If a spot repair will hold, that is what we quote. Full replacement is only for lines that are truly past saving.'],
            ['Permitted and to code', 'Sewer work in Palm Beach County needs permits and inspection; we handle the paperwork and leave the line to code.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in a sewer line repair or replacement?',
        'answer' => 'A Drain Masters sewer job starts with a camera inspection to locate and measure the damage, then a clear plan: excavate and replace the failed section, or replace the full run when the pipe is collapsed. We pull permits, work to code, and confirm proper slope and flow.',
        'included' => [
            'Camera inspection to locate and measure the sewer line damage',
            'Clear diagnosis of root intrusion, cracks, bellies, or collapse',
            'Spot excavation and replacement of the failed pipe section',
            'Full sewer line replacement when the run is past repair',
            'Permits pulled and work completed to Palm Beach County code',
            'Proper slope restored, flow tested, and the site backfilled',
        ],
        'process' => [
            ['Camera inspection', 'We scope the sewer line to find the break, root intrusion, or collapse and mark its exact location.'],
            ['Locate & excavate', 'We dig down to the damaged section, keeping the opening as tight as the pipe and access allow.'],
            ['Repair or replace', 'We replace the failed length, or the full run when needed, with durable pipe joined to code.'],
            ['Test & backfill', 'We reset the correct slope, confirm free flow, then backfill and tidy the site.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician replacing a section of damaged sewer pipe at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters sewer line work?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area homeowners. Sewer line work is disruptive, so we keep every job honest and verifiable&mdash;read the reviews on our Google Business Profile, or add your own once your line is flowing.',
    ],
    'comparison' => [
        'q'      => 'What makes our sewer line repair different from other Palm Springs plumbers?',
        'answer' => 'Some plumbers reach for a full sewer replacement quote before they have even seen inside the pipe. Drain Masters camera-scopes the line first, repairs the specific failed section when that solves it, and only recommends full replacement when the run is genuinely collapsed or beyond a spot fix.',
        'rows'   => [
            ['Quote a full replacement without scoping the line', 'Camera-inspect the pipe before recommending anything'],
            ['Dig a wide, exploratory trench across the yard', 'Locate the damage first so the excavation stays tight'],
            ['Replace the whole run when a section would do', 'Spot-repair when it holds, replace only when needed'],
            ['Skip permits and leave the slope guessed at', 'Pull permits, restore correct slope, work to code'],
            ['Sewer repair is an occasional side job', 'Sewers and drains are our core specialty'],
        ],
    ],
    'faqs' => [
        ['How much does sewer line repair cost in Palm Springs?', 'Cost depends on the depth of the line, the length of pipe involved, and whether a spot repair or full replacement is needed. A single cracked section is far cheaper than replacing an entire run. Drain Masters camera-inspects the line and gives a clear, upfront price before any digging starts, with no hidden fees.'],
        ['How do I know if my sewer line needs repair or full replacement?', 'A camera inspection settles it. If the pipe has one cracked or root-invaded section, we spot-repair that length. If the line is collapsed, bellied in several places, or the old cast iron is corroded end to end, replacement usually costs less over time. We show you the footage and explain the options.'],
        ['What causes sewer lines to fail in Palm Springs homes?', 'Older Palm Springs homes often run on cast iron or clay pipe that corrodes and cracks in Florida humidity. Mature tree roots chase moisture into those cracks, sandy soil shifts and creates low spots called bellies, and years of grease narrow the line. Any one of these can block or break a sewer main.'],
        ['Will you have to dig up my yard to repair the sewer line?', 'For a traditional repair or replacement we excavate down to the damaged section, which does open part of the yard or driveway. We keep the dig as tight as the pipe allows. When conditions suit it, we also offer trenchless options that renew the line with far less digging, so ask us during the inspection.'],
        ['Do you pull permits for sewer line work in Palm Beach County?', 'Yes. Sewer line repair and replacement in Palm Beach County requires permits and inspection, and Drain Masters handles that paperwork for you. We complete the work to code, restore the correct slope so waste flows properly, and make sure the job passes inspection before we backfill and finish the site.'],
        ['How long does a sewer line replacement take?', 'Most residential sewer repairs are completed in a day. A full line replacement typically runs one to three days depending on the length, depth, and access, plus time for permits and inspection. Drain Masters gives you a realistic timeline after the camera inspection so you know what to expect before we start.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches performing sewer line work in Palm Springs, FL'],
        ['owner-img_8933', 'Excavated sewer line repair by Drain Masters in Palm Beach County'],
        ['owner-img_8946', 'Drain Masters technician completing a sewer replacement at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Fix your failing sewer line the right way',
        'text'    => 'Sewage backing up, or a line that clogs no matter how often it is cleared? Drain Masters of the Palm Beaches scopes it, repairs or replaces it, and gets it flowing&mdash;call now or request a free estimate across Palm Springs and Palm Beach County.',
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
