<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Trenchless Sewer Repair — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'trenchless-sewer-repair',
    'name'            => 'Trenchless Sewer Repair',
    'h1'              => 'Trenchless Sewer Repair in Palm Springs, FL',
    'title'           => 'Trenchless Sewer Repair in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Trenchless sewer repair in Palm Springs, FL. Drain Masters renews failing sewer lines with pipe lining and pipe bursting—no yard or driveway dig-up. Free estimates, call ' . $phone . '.',
    'heroImage'       => 'owner-img_8976',
    'heroImageAlt'    => 'Drain Masters plumber preparing a trenchless sewer repair at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches renews failing sewer lines with little or no digging. We line or burst the old pipe from small access points, so your Palm Springs lawn, pavers, and driveway stay intact&mdash;a camera inspection first confirms the line is a good trenchless candidate.',
    'heroChips'       => [
        ['hammer', 'Little to no digging'],
        ['home', 'Yard &amp; driveway preserved'],
        ['shield', 'Licensed &amp; insured'],
    ],
    'problem' => [
        'q'         => 'What are the signs a Palm Springs sewer line needs trenchless repair?',
        'answer'    => 'Repeated main-line backups, sewage odor in the yard, gurgling toilets, and drains that clog no matter how often they are cabled all point to a damaged sewer line. When the pipe is cracked, offset, or root-invaded but not fully collapsed, trenchless repair fixes it without excavating your property.',
        'pullquote' => 'A sewer line failing under your driveway does not mean a torn-up driveway&mdash;trenchless repair rebuilds the pipe from the inside.',
        'signs'     => [
            ['Sewage backing up repeatedly', 'A main line that backs up again and again after cabling usually has a structural break or root mass, not a simple clog.'],
            ['Roots keep returning', 'Tree roots pushing into cracked joints are a classic candidate for lining, which seals the pipe so roots can no longer enter.'],
            ['You want to save the yard', 'When the pipe runs under pavers, a driveway, or mature landscaping, trenchless work renews it without trenching across it.'],
            ['Camera shows cracks or offset', 'A scope that reveals cracked, bellied, or offset pipe&mdash;but not a full collapse&mdash;means the line can often be relined or burst.'],
        ],
    ],
    'positioning' => [
        'q'          => 'Why do Palm Springs homeowners choose Drain Masters for trenchless sewer repair?',
        'answer'     => 'Drain Masters of the Palm Beaches scopes the line before recommending anything, so you only pay for trenchless work when it genuinely fits. As a locally owned Palm Springs company, we know the older cast iron and clay sewers under these neighborhoods and how to renew them cleanly.',
        'stat'       => 'Est. 2023',
        'statLabel'  => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Many Palm Springs homes were plumbed with cast iron or clay pipe decades ago, and mature trees plus sandy soil put steady pressure on those aging joints. That combination cracks and separates sewer lines&mdash;exactly the failures trenchless lining and bursting are built to solve without an open trench.',
            'We start every job with a camera inspection so we know the real condition of the pipe. If lining or bursting is the right call, we renew the line from small access points; if the pipe is fully collapsed or access is impossible, we tell you straight that excavation is the honest option.',
        ],
        'points' => [
            ['Camera-first diagnosis', 'We scope the sewer before quoting, so the method matches the actual damage instead of a guess.'],
            ['Landscaping protected', 'Lining and bursting work from small pits&mdash;your lawn, pavers, and driveway stay in place.'],
            ['Straight answers', 'If a line is too far gone for trenchless, we say so rather than sell you a repair that will not hold.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'How does trenchless sewer repair work, and what is included?',
        'answer' => 'Trenchless sewer repair renews a failing line using one of two methods. With pipe lining (CIPP), a resin-saturated liner is inserted and cured in place to form a new seamless pipe inside the old one. With pipe bursting, a new pipe is pulled through while a head breaks apart the old pipe.',
        'included' => [
            'Camera inspection to confirm the line is a good trenchless candidate',
            'Line cleaning so the liner or new pipe seats correctly',
            'Pipe lining (CIPP) where the existing pipe can host a cured-in-place liner',
            'Pipe bursting where a collapsed or undersized pipe must be replaced',
            'Small access pits instead of a trench across your yard or driveway',
            'A final camera pass to verify the renewed line and full flow',
        ],
        'process' => [
            ['Scope the line', 'A camera inspection shows the breaks, roots, or offsets and confirms trenchless is a fit.'],
            ['Clean &amp; prep', 'We clear roots and debris so the liner or bursting head can pass and seat cleanly.'],
            ['Line or burst', 'We cure a new liner in place or pull a new pipe through, renewing the line from small pits.'],
            ['Verify &amp; restore', 'A final camera pass confirms a seamless, full-flow line before we backfill the access points.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician setting up sewer line equipment at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters sewer work?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. Every review comes from a real Palm Beach County homeowner&mdash;read them on our Google Business Profile, or leave your own after we renew your sewer line.',
    ],
    'comparison' => [
        'q'      => 'How is trenchless sewer repair different from traditional dig-and-replace?',
        'answer' => 'Traditional sewer replacement trenches across your property to reach the pipe, then rebuilds whatever it tore up. Trenchless repair renews the line from small access points instead&mdash;faster, far less mess, and your yard and hardscape stay intact.',
        'rows'   => [
            ['Trench the full length of the line', 'Renew the line from small access pits'],
            ['Tear up lawn, pavers, and driveway', 'Preserve your landscaping and hardscape'],
            ['Days of excavation and cleanup', 'A faster job with far less mess'],
            ['Quote before scoping the pipe', 'Camera inspection before any method or price'],
            ['Sell replacement for every failure', 'Recommend excavation only when trenchless truly cannot work'],
        ],
    ],
    'faqs' => [
        ['How much does trenchless sewer repair cost in Palm Springs?', 'Cost depends on the length of the line, its depth, and whether lining or bursting is the right method. Trenchless work often costs less overall than dig-and-replace once you factor in restoring a torn-up yard or driveway. Drain Masters scopes the line first and gives a clear, upfront price with no hidden fees.'],
        ['Is my sewer line a good candidate for trenchless repair?', 'A camera inspection answers that. Cracked, offset, or root-invaded lines that are still structurally intact are strong candidates for lining or bursting. A line that has fully collapsed, or one with no usable access, may still need excavation. Drain Masters scopes the pipe before recommending any trenchless method in your Palm Springs home.'],
        ['What is the difference between pipe lining and pipe bursting?', 'Pipe lining (CIPP) inserts a resin-saturated liner into the existing pipe and cures it in place, creating a new seamless pipe inside the old one. Pipe bursting pulls a new pipe through while a head breaks apart the old one. We choose the method based on the condition and size of your Palm Springs sewer line.'],
        ['Will trenchless repair really save my yard and driveway?', 'That is the whole point. Instead of trenching across your property, trenchless work uses small access pits, so lawns, pavers, mature landscaping, and driveways stay in place. For Palm Springs homes with sewer lines running under hardscape, this often makes trenchless the least disruptive option by far.'],
        ['How long does trenchless sewer repair take?', 'Many trenchless jobs are completed in a day, though larger or deeper lines can take longer. Because there is no full trench to dig and no yard to rebuild afterward, the overall project is usually much faster than traditional dig-and-replace. We give you a realistic timeline after the camera inspection.'],
        ['Does a trenchless-repaired sewer line last?', 'Yes. A cured-in-place liner forms a seamless, jointless pipe that resists the root intrusion and corrosion that failed the original, and a burst-in replacement pipe is new throughout. Both are built to last for decades under normal Palm Springs residential use, which is why they replace aging cast iron and clay so well.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches performing sewer line work in Palm Springs, FL'],
        ['owner-img_8933', 'Sewer and drain line service by Drain Masters in Palm Beach County'],
        ['owner-img_8819', 'Drain Masters technician completing a sewer repair at a Palm Springs home'],
    ],
    'finalCta' => [
        'heading' => 'Fix your sewer line without tearing up the yard',
        'text'    => 'Failing sewer line under your lawn, pavers, or driveway? Drain Masters of the Palm Beaches scopes it and renews it trenchless when it fits&mdash;call now or request a free estimate for trenchless sewer repair in Palm Springs and across Palm Beach County.',
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
