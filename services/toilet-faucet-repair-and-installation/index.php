<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Toilet & Faucet Repair and Installation — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'toilet-faucet-repair-and-installation',
    'name'            => 'Toilet & Faucet Repair and Installation',
    'h1'              => 'Toilet & Faucet Repair and Installation in Palm Springs, FL',
    'title'           => 'Toilet & Faucet Repair and Installation in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Toilet & faucet repair and installation in Palm Springs, FL. Drain Masters fixes running toilets, base leaks, and dripping faucets, and installs new fixtures. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8976',
    'heroImageAlt'    => 'Drain Masters plumber repairing a bathroom faucet at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches repairs and installs toilets, faucets, and fixtures across Palm Springs and Palm Beach County. We stop running toilets, base leaks, and dripping faucets at the source, then set new fixtures level and leak-free&mdash;usually in a single visit.',
    'heroChips'       => [
        ['droplet', 'Toilets, faucets &amp; fixtures'],
        ['clock', 'Often same-day'],
        ['badge-check', 'Free estimates'],
    ],
    'problem' => [
        'q'         => 'How do you know a toilet or faucet in your Palm Springs home needs a plumber?',
        'answer'    => 'A toilet that keeps running, water pooling around the base, and a faucet that drips or will not shut off fully are the clearest signs. Each one quietly wastes water and money every day, and worn flappers, fill valves, cartridges, and wax rings only get worse until they are replaced.',
        'pullquote' => 'A toilet that runs and a faucet that drips are not annoyances&mdash;they are your water bill leaking, drop by drop, around the clock.',
        'signs'     => [
            ['Toilet runs or refills on its own', 'A tank that hisses, refills for no reason, or never stops usually has a worn flapper or fill valve wasting gallons every hour.'],
            ['Water on the floor at the base', 'Pooling around the toilet base points to a failed wax ring or seal, and letting it sit can rot the subfloor beneath.'],
            ['Faucet drips or won\'t shut fully', 'A steady drip or a handle you have to crank means the cartridge, O-rings, or washers inside are worn out.'],
            ['Low flow or mineral crust', 'Weak pressure and white scale on the spout come from Palm Springs hard water clogging the aerator and fixture internals.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners call Drain Masters for toilets and faucets?',
        'answer'    => 'Drain Masters of the Palm Beaches is a locally owned Palm Springs plumbing company that fixes fixtures right the first time. We diagnose the real part that failed, replace it with quality components, and confirm there are no leaks&mdash;so a repair actually holds up to Florida water.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs runs on hard, mineral-heavy water, and that scale is rough on fixture internals. It corrodes valves, stiffens cartridges, and cakes aerators&mdash;which is why bargain-bin parts fail fast here and a proper repair uses components built to last in our water.',
            'Whether we are rebuilding the guts of a toilet or setting a brand-new faucet, we test under real water pressure and check every connection before we pack up&mdash;no callbacks for a drip we could have caught.',
        ],
        'points' => [
            ['We fix the actual cause', 'A running toilet gets the failed flapper, fill valve, or flush valve replaced&mdash;not a guess that leaves it running.'],
            ['Quality parts that last', 'We use durable cartridges, valves, and seals that hold up to Palm Springs hard water instead of the cheapest fit.'],
            ['Clean, leak-tested installs', 'New toilets and faucets are set level, sealed, and pressure-tested so you leave with zero drips.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is included in a toilet or faucet repair and installation?',
        'answer' => 'A Drain Masters visit covers diagnosing the fixture, replacing the worn part or setting the new unit, and testing under full water pressure for leaks. For installs we shut off the water, remove the old fixture, set the new one level, connect the supply, and confirm a clean, drip-free finish.',
        'included' => [
            'Diagnosis of the running toilet, leak, or dripping faucet',
            'Toilet rebuilds: flapper, fill valve, flush valve, and wax ring',
            'Faucet repair: cartridge, O-rings, washers, and aerator cleaning',
            'Installation of new toilets, faucets, and shutoff valves',
            'Full pressure test to confirm no leaks at any connection',
            'Cleanup and honest advice on preventing the next leak',
        ],
        'process' => [
            ['Diagnose the fixture', 'We pinpoint the exact worn part or confirm the fixture is past a repair before quoting.'],
            ['Repair or replace', 'We rebuild the toilet or faucet, or shut off the water and set the new unit level.'],
            ['Seal &amp; connect', 'Wax rings, cartridges, and supply lines go in fresh so every joint is watertight.'],
            ['Pressure-test the work', 'We run the fixture under full pressure and check for drips before we call it done.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician installing a new toilet at a Palm Springs, FL home',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters fixture work?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review is real and verifiable&mdash;read them on our Google Business Profile, or leave your own after we stop that running toilet or dripping faucet.',
    ],
    'comparison' => [
        'q'      => 'What makes our toilet and faucet work different from other Palm Springs plumbers?',
        'answer' => 'Plenty of plumbers swap a part and hope the drip stops. Drain Masters diagnoses which component actually failed, replaces it with parts that survive Palm Springs hard water, and pressure-tests the fixture&mdash;so you are not calling someone back next week.',
        'rows'   => [
            ['Swap a part and hope the drip stops', 'Diagnose the exact failed component first'],
            ['Install cheapest builder-grade parts', 'Use quality parts built for Florida hard water'],
            ['Leave without checking for leaks', 'Pressure-test every connection before leaving'],
            ['Vague pricing after the work is done', 'Free assessment and upfront price before work'],
            ['Fixtures are a minor add-on job', 'Fixture repair and installs are everyday work'],
        ],
    ],
    'faqs' => [
        ['How much does it cost to fix a running toilet in Palm Springs?', 'It depends on which part failed. A worn flapper is a small, quick fix, while a full tank rebuild with a new fill valve and flush valve costs more. Drain Masters of the Palm Beaches gives a free assessment and a clear, upfront price before any work starts, with no hidden fees added at the end.'],
        ['Why does my faucet keep dripping after I tightened it?', 'Tightening a handle rarely stops a drip because the real cause is inside. Worn cartridges, O-rings, or washers no longer seal, and Palm Springs hard water speeds that wear. We replace the failed internal part with a quality component and pressure-test the faucet so the drip is gone for good.'],
        ['Can you install a toilet or faucet I bought myself?', 'Yes. Drain Masters installs customer-supplied toilets, faucets, and fixtures across Palm Springs and Palm Beach County. We shut off the water, remove the old unit, set the new one level, connect the supply lines and shutoff valves, and pressure-test everything so you leave with a clean, leak-free fixture.'],
        ['Is water pooling around my toilet base an emergency?', 'It needs prompt attention. Water at the base usually means a failed wax ring or seal, and standing water can rot the subfloor and spread mold in Florida humidity. Call us and we will reset the toilet with a fresh wax ring and check the flange so it seals properly and stays dry.'],
        ['Why is the water pressure low at just one faucet?', 'Low flow at a single faucet is almost always a clogged aerator or mineral scale from Palm Springs hard water building up inside the fixture. We clean or replace the aerator and check the internals and supply lines, and if the cartridge is corroded we swap it so full pressure comes back.'],
        ['Should I repair my old toilet or replace it?', 'If the tank or bowl is cracked, the toilet wobbles from a bad flange, or it wastes water with every flush, replacing it usually costs less over time than repeated repairs. We will tell you honestly whether a rebuild makes sense or a new comfort-height, low-flow toilet is the smarter call for your home.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches installing a new faucet in Palm Springs, FL'],
        ['owner-img_8933', 'Toilet repair and fixture work by Drain Masters in Palm Beach County'],
        ['owner-img_8819', 'Drain Masters technician finishing a bathroom fixture job at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Stop that running toilet or dripping faucet',
        'text'    => 'Running toilet, leak at the base, or a faucet that won\'t quit dripping? Drain Masters of the Palm Beaches fixes and installs fixtures fast&mdash;call now or request a free estimate for toilet &amp; faucet work in Palm Springs and across Palm Beach County.',
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
