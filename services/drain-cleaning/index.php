<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Drain Cleaning — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'drain-cleaning',
    'name'            => 'Drain Cleaning',
    'h1'             => 'Drain Cleaning in Palm Springs, FL',
    'title'           => 'Drain Cleaning in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Professional drain cleaning in Palm Springs, FL. Drain Masters clears grease, roots and buildup with snaking and cabling to restore full flow. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8820',
    'heroImageAlt'    => 'Drain Masters plumber clearing a clogged drain line at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches clears stubborn kitchen, bathroom, and main-line clogs across Palm Springs and Palm Beach County. Our licensed team snakes and cables the line, removes the blockage at its source, and restores full flow&mdash;usually same day.',
    'heroChips'       => [
        ['droplets', 'Kitchen, bath &amp; main lines'],
        ['clock', 'Same-day service'],
        ['badge-check', 'Free estimates'],
    ],
    'problem' => [
        'q'         => 'What are the signs your Palm Springs home needs professional drain cleaning?',
        'answer'    => 'Slow drains, water backing up in a sink or tub, gurgling pipes, and a sewer-gas smell all point to a clog forming deeper in the line. When a plunger and store-bought cleaner stop working, the blockage is usually grease, mineral scale, or roots that only professional cabling or jetting will clear.',
        'pullquote' => 'A drain that empties slowly today is a kitchen full of standing water next week&mdash;clogs never clear themselves.',
        'signs'     => [
            ['Water drains slowly', 'One slow fixture is a partial clog. Several slow drains at once usually means the problem is in the main line, not the fixture.'],
            ['Gurgling or bubbling', 'Air trapped behind a blockage escapes as gurgling from drains or the toilet when another fixture runs.'],
            ['Recurring clogs', 'A drain that clogs again days after you clear it has buildup on the pipe wall that plunging can\'t reach.'],
            ['Sewer odor indoors', 'A rotten-egg or sewage smell near a drain means waste is sitting in the line instead of flowing to the sewer.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners trust Drain Masters for drain cleaning?',
        'answer'    => 'Drain cleaning is our core trade, not a sideline. Drain Masters of the Palm Beaches is a locally owned Palm Springs company that diagnoses the real cause of a clog before quoting, so you pay to fix the blockage&mdash;not to guess at it.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs runs on hard, mineral-heavy water, and a lot of homes here still drain through decades-old cast iron. That combination scales up the inside of a pipe and grabs grease and debris, which is why clogs come back fast when a line is only partially cleared.',
            'We cable the line all the way to the blockage, pull the pipe wall clean, and confirm full flow before we leave&mdash;so the fix actually holds.',
        ],
        'points' => [
            ['Right tool for the clog', 'Hand augers for fixtures, powered cable machines for main lines, and hydro jetting when grease or roots need scouring.'],
            ['Honest, upfront pricing', 'A free assessment and a clear price before work starts&mdash;no surprise fees added at the end.'],
            ['Camera on stubborn lines', 'If a drain keeps clogging, we can scope it to find roots, bellies, or breaks instead of cabling it again and again.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in a professional drain cleaning?',
        'answer' => 'A Drain Masters drain cleaning includes locating the blockage, clearing it with the right cable or auger for that line, and testing the drain to confirm full flow. On main lines and recurring clogs we can add a camera inspection so you know exactly what caused the backup.',
        'included' => [
            'Assessment of the affected drain and the cause of the clog',
            'Professional snaking or power cabling to the blockage',
            'Removal of grease, soap scale, hair, and debris from the pipe wall',
            'Flow test to confirm the line is fully clear',
            'Camera inspection available on main lines and repeat clogs',
            'Straightforward advice on preventing the next backup',
        ],
        'process' => [
            ['Inspect &amp; locate', 'We find the clogged line and where the blockage sits before touching a tool.'],
            ['Clear the line', 'The right cable or auger cuts through and pulls the clog and buildup out.'],
            ['Confirm full flow', 'We run water to make sure the drain empties fast and stays clear.'],
            ['Prevent the next one', 'You get honest advice&mdash;and a jetting or repair option if the line needs more.'],
        ],
        'photo'    => 'owner-img_8947',
        'photoAlt' => 'Drain Masters technician running a drain cable at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters drain cleaning?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. We keep every review honest and verifiable&mdash;read them on our Google Business Profile, or leave your own after we clear your drain.',
    ],
    'comparison' => [
        'q'      => 'What makes our drain cleaning different from other Palm Springs plumbers?',
        'answer' => 'Most general plumbers treat drain cleaning as a quick add-on. For Drain Masters it is the specialty&mdash;we diagnose the cause, clear the whole line, and confirm the fix instead of clearing just enough to make the water go down.',
        'rows'   => [
            ['Clear only enough for the water to drain', 'Cable the full line and pull the pipe wall clean'],
            ['Quote before knowing the real cause', 'Free assessment and diagnosis before any price'],
            ['Cable the same clog again and again', 'Camera-scope repeat clogs to find the root cause'],
            ['Surprise fees added at the end', 'Upfront, no-surprise pricing agreed before work starts'],
            ['Drains are a sideline service', 'Drains and sewers are our core trade'],
        ],
    ],
    'faqs' => [
        ['How much does drain cleaning cost in Palm Springs?', 'Cost depends on the line and the severity of the clog. A single slow fixture is straightforward; a blocked main line or a clog that needs hydro jetting costs more. Drain Masters gives a free assessment and a clear, upfront price before any work begins, with no hidden fees.'],
        ['How long does drain cleaning take?', 'Most residential drain cleanings take one to two hours. A simple sink or tub clog can be cleared quickly, while a main-line blockage or a line that needs camera inspection and jetting takes longer. We confirm full flow before we consider the job done.'],
        ['Do you offer same-day and emergency drain cleaning?', 'Yes. Drain Masters of the Palm Beaches offers same-day and after-hours drain cleaning across Palm Springs and Palm Beach County. If a drain is backing up into your home, call us and we will get out to you as fast as possible.'],
        ['Is snaking or hydro jetting better for my drain?', 'Snaking or cabling clears most everyday clogs quickly. Hydro jetting is better when grease, mineral scale, or tree roots coat the pipe wall, because high-pressure water scours the line clean. We recommend the right method after we see what is causing the blockage.'],
        ['Why does my drain keep clogging after I clear it?', 'A drain that clogs again soon after clearing usually has buildup, a belly in the line, or roots the cable can\'t fully remove. A camera inspection finds the cause so we can jet the line or repair it instead of cabling the same spot repeatedly.'],
        ['Can drain cleaning damage older pipes?', 'Professional drain cleaning is safe for the cast iron and clay pipe common in older Palm Springs homes when done correctly. We match the tool and pressure to the pipe, and if we find a line that is corroded or cracked, we tell you before doing anything that could make it worse.'],
    ],
    'gallery' => [
        ['owner-img_8933', 'Drain Masters of the Palm Beaches on a residential service call in Palm Springs, FL'],
        ['owner-img_8819', 'Drain and plumbing line work by Drain Masters in Palm Beach County'],
        ['owner-img_8946', 'Drain Masters technician completing a drain job at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Get your drain flowing again today',
        'text'    => 'Slow drain, backed-up sink, or a clog that keeps coming back? Drain Masters of the Palm Beaches clears it fast&mdash;call now or request a free estimate for drain cleaning in Palm Springs and across Palm Beach County.',
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
