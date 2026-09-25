<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Repiping — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'repiping',
    'name'            => 'Repiping',
    'h1'              => 'Repiping in Palm Springs, FL',
    'title'           => 'Repiping in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Whole-home and partial repiping in Palm Springs, FL. Drain Masters replaces corroded galvanized, aging copper and failing polybutylene with PEX or copper. Free estimates — call ' . $phone . '.',
    'heroImage'       => 'owner-img_8819',
    'heroImageAlt'    => 'Drain Masters plumber replacing corroded water supply pipe during a repipe at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches repipes homes across Palm Springs and Palm Beach County, replacing the water supply lines inside walls, ceilings, and under the house. We swap corroded galvanized, aging copper, or failing polybutylene for PEX or copper&mdash;ending the endless leak-repair cycle for good.',
    'heroChips'       => [
        ['wrench', 'Whole-home &amp; partial'],
        ['droplet', 'PEX &amp; copper'],
        ['home', 'Minimal wall opening'],
    ],
    'problem' => [
        'q'         => 'How do you know when your Palm Springs home needs to be repiped?',
        'answer'    => 'When leaks keep returning, water runs rusty or discolored, and pressure drops at several fixtures at once, patching individual spots stops paying off. Those are signs the supply pipe itself is corroding from the inside&mdash;and once one section fails, the rest of the same aging material usually follows.',
        'pullquote' => 'Fixing the fourth pinhole leak in a year isn&rsquo;t maintenance&mdash;it&rsquo;s a pipe telling you the whole line is done.',
        'signs'     => [
            ['Repeated pinhole leaks', 'Once one section springs a leak, the same aging pipe keeps failing elsewhere. Chasing each spot costs more than replacing the line.'],
            ['Rusty or discolored water', 'Brown or yellow-tinted water, especially after the home sits unused, means the inside of galvanized or old copper pipe is corroding.'],
            ['Low pressure everywhere', 'When several fixtures lose pressure at the same time, mineral scale and corrosion are narrowing the pipe interior throughout the house.'],
            ['Old or failing pipe material', 'Galvanized steel, early copper, and polybutylene all have a service life. If your home still has them, replacement is a matter of when.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why do Palm Springs homeowners choose Drain Masters for a repipe?',
        'answer'    => 'A repipe touches every wall your water runs through, so the work has to be planned, clean, and done right the first time. Drain Masters of the Palm Beaches is a locally owned Palm Springs company that maps the route before opening a wall and pressure-tests the new system before we patch anything.',
        'stat'      => 'Est. 2023',
        'statLabel' => 'Locally owned and owner-operated in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs runs on hard, mineral-heavy water, and many homes here were plumbed decades ago with galvanized steel, early copper, or polybutylene. Florida&rsquo;s minerals scale up and corrode those materials from the inside, which is exactly why the leaks keep coming back no matter how many spots you patch.',
            'We replace the supply lines with PEX or copper that shrug off hard water and corrosion, open only the drywall we truly need to, and pressure-test the entire system before it goes back behind the walls&mdash;so the leaks stop for good.',
        ],
        'points' => [
            ['Planned pipe route', 'We map the run through walls, ceilings, and under the home first, so we open the least drywall possible and know every fixture is covered.'],
            ['Right modern material', 'PEX where flexibility and cost make sense, copper where you want it&mdash;both built to outlast Palm Springs&rsquo; hard water.'],
            ['Pressure-tested before patching', 'The new system is charged and tested before a single wall closes, so nothing hides behind fresh drywall.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What is involved in repiping a home?',
        'answer' => 'A Drain Masters repipe means planning the new pipe route, isolating and replacing the supply lines section by section with minimal wall opening, pressure-testing the finished system, then patching and cleaning up the drywall. We can repipe the whole home or just the failing runs, and we protect your floors and belongings throughout.',
        'included' => [
            'Walk-through and plan of the full pipe route before any wall opens',
            'Replacement of supply lines in PEX or copper, whole-home or partial',
            'Minimal, targeted drywall opening only where the pipe runs',
            'Shutoff valves and fixture connections replaced as needed',
            'Full-system pressure test before any wall is closed',
            'Drywall patching and job-site cleanup when the pipe is verified',
        ],
        'process' => [
            ['Plan the route', 'We map where the new pipe runs through walls, ceilings, and under the home to open the least drywall.'],
            ['Replace the lines', 'We isolate and swap the supply pipe section by section in PEX or copper, water off only as needed.'],
            ['Pressure-test', 'The new system is charged and tested for leaks before anything is sealed behind a wall.'],
            ['Patch &amp; clean up', 'We close the drywall we opened and leave the home clean, with pressure and clear water restored.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician installing new PEX water supply lines during a repipe in Palm Springs, FL',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. A repipe is a big decision, so we keep every review honest and verifiable&mdash;read them on our Google Business Profile, or leave your own once your new pipes are in.',
    ],
    'comparison' => [
        'q'      => 'What makes our repiping different from other Palm Springs plumbers?',
        'answer' => 'Many plumbers keep patching leaks or tear open more wall than they need to. Drain Masters plans the route, replaces the failing pipe with the right modern material, and pressure-tests before we close a single wall&mdash;so you get a lasting fix, not another temporary one.',
        'rows'   => [
            ['Patch each leak as it appears', 'Replace the failing line so the leaks end for good'],
            ['Open more wall than necessary', 'Map the route and open only the drywall the pipe needs'],
            ['Reuse whatever material is cheapest', 'Match PEX or copper to your home and water'],
            ['Close walls, then find leaks later', 'Pressure-test the full system before any wall closes'],
            ['Leave drywall and debris behind', 'Patch the openings and clean the job site'],
        ],
    ],
    'faqs' => [
        ['How much does it cost to repipe a house in Palm Springs?', 'Repiping cost depends on the size of the home, the number of fixtures, whether it is a whole-home or partial repipe, and whether you choose PEX or copper. Access to the pipe runs matters too. Drain Masters gives a free on-site assessment and a clear, upfront price before any work begins, with no hidden fees.'],
        ['How long does a whole-home repipe take?', 'Most residential repipes take a few days from start to finished drywall patching. The plumbing itself often goes faster than people expect; patching and cleanup add time. We plan the route to keep your water off for as little as possible and give you a realistic timeline before we start.'],
        ['Should I choose PEX or copper for my repipe?', 'Both resist Florida&rsquo;s hard water far better than old galvanized steel. PEX is flexible, fast to install, and cost-effective; copper is rigid and long proven. After we see your home&rsquo;s layout and how the lines run, we recommend the material that fits your budget and situation instead of pushing one option.'],
        ['Do you have to tear open all my walls to repipe?', 'No. Drain Masters plans the pipe route first and opens only the drywall we genuinely need to reach the lines. A repipe does require some wall and ceiling access, but we keep openings targeted, protect your floors and belongings, and patch everything before we finish the job.'],
        ['Why does my Palm Springs home keep getting pinhole leaks?', 'Repeated pinhole leaks usually mean the pipe material itself is corroding from the inside, not that you have been unlucky. Palm Springs&rsquo; hard, mineral-heavy water is hard on aging galvanized steel and older copper. Once one section fails, the same pipe tends to fail elsewhere, which is when a repipe makes more sense than more patches.'],
        ['Is my water safe if my home still has polybutylene pipe?', 'Polybutylene was widely installed decades ago and is now known to become brittle and fail, often without warning. If your Palm Springs home still has it, we recommend replacing it before a hidden failure floods a wall. Drain Masters can identify polybutylene during a free assessment and lay out your repipe options.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches running new water supply lines during a Palm Springs repipe'],
        ['owner-img_8933', 'Fresh PEX and copper pipe installed by Drain Masters at a Palm Beach County home'],
        ['owner-img_8976', 'Drain Masters technician completing a repipe and pressure test in Palm Springs, FL'],
    ],
    'finalCta' => [
        'heading' => 'Stop patching leaks and repipe it right',
        'text'    => 'Tired of rusty water, weak pressure, and one pinhole leak after another? Drain Masters of the Palm Beaches repipes your home with PEX or copper that lasts&mdash;call now or request a free estimate for repiping in Palm Springs and across Palm Beach County.',
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
