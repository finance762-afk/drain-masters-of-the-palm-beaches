<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ============================================================================
 * Service page: Gas Line Repair — Palm Springs, FL
 * All copy below is unique to this service (no city-swap / no service-swap).
 * Structure + schema are rendered by includes/service-body.php from $sp (init in service-init.php).
 * ========================================================================== */
$sp = [
    'slug'            => 'gas-line-repair',
    'name'            => 'Gas Line Repair',
    'h1'              => 'Gas Line Repair in Palm Springs, FL',
    'title'           => 'Gas Line Repair in Palm Springs, FL | Drain Masters of the Palm Beaches',
    'metaDescription' => 'Licensed gas line repair, installation, and leak testing in Palm Springs, FL. Drain Masters services natural gas and propane lines to code for water heaters, ranges, and more. Call ' . $phone . '.',
    'heroImage'       => 'owner-img_8819',
    'heroImageAlt'    => 'Drain Masters plumber inspecting a gas line connection at a Palm Springs, FL home',
    'heroAnswer'      => 'Drain Masters of the Palm Beaches installs, repairs, and leak-tests natural gas and propane lines across Palm Springs and Palm Beach County. If you ever smell gas, leave the house and call 911 or your gas utility first&mdash;then call us to find, fix, and pressure-test the line to code.',
    'heroChips'       => [
        ['flame', 'Natural gas &amp; propane'],
        ['shield', 'Licensed &amp; leak-tested'],
        ['badge-check', 'Permitted, to-code work'],
    ],
    'problem' => [
        'q'         => 'How do you know if you have a gas line problem in your Palm Springs home?',
        'answer'    => 'A rotten-egg or sulfur smell, a hissing sound near a line or appliance, dead grass over a buried pipe, an unexplained jump in your gas bill, or a pilot light that won\'t stay lit all point to a leak or failing line. If you smell gas, leave and call 911 or your utility before anything else.',
        'pullquote' => 'A gas leak is never a wait-and-see problem&mdash;if you smell it, get everyone out and call 911 or your gas utility before you call a plumber.',
        'signs'     => [
            ['Rotten-egg or sulfur smell', 'Utilities add that odor to gas on purpose. If you smell it indoors or outside near a line, leave and call 911 or your gas company first.'],
            ['Hissing near a line', 'A faint hiss at a fitting, meter, or appliance connection means gas is escaping under pressure and the line needs testing right away.'],
            ['Dead grass over the pipe', 'Yellow, dead, or discolored vegetation in a line over a buried gas pipe can signal an underground leak corroding the line.'],
            ['Pilot light or bill trouble', 'A pilot that keeps going out or a gas bill that spikes with no change in use often traces back to a leak or a failing line.'],
        ],
    ],
    'positioning' => [
        'q'         => 'Why should Palm Springs homeowners hire a licensed plumber for gas line work?',
        'answer'    => 'Gas line work is not a DIY or handyman job&mdash;it is life-safety work that must be permitted, done to code, and pressure-tested afterward. Drain Masters of the Palm Beaches is a licensed, insured, locally owned company that treats every gas line the way the code requires.',
        'stat'      => 'Licensed &amp; Insured',
        'statLabel' => 'Gas line work permitted and pressure-tested to code in Palm Springs, Florida',
        'paragraphs' => [
            'Palm Springs sits in humid, salty coastal air, and that moisture is hard on gas piping&mdash;especially outdoor and underground runs feeding pool heaters, generators, and outdoor kitchens. Corrosion at fittings and along buried steel is one of the most common reasons a line starts to leak here.',
            'We locate the fault, repair or replace the affected section with the right material, pull the proper permit, and finish with a pressure and leak test before the gas goes back on&mdash;so the fix is safe and verifiable, not a guess.',
        ],
        'points' => [
            ['Every job leak-tested', 'After any repair or new line, we pressure-test and leak-check the piping before restoring service&mdash;no exceptions.'],
            ['Permitted and to code', 'We pull the required permit and build to the fuel-gas code so the work passes inspection and keeps your home safe.'],
            ['Natural gas and propane', 'We handle both fuels for water heaters, ranges, dryers, outdoor kitchens, pool heaters, and standby generators.'],
        ],
    ],
    'breakdown' => [
        'q'      => 'What does professional gas line repair and installation include?',
        'answer' => 'Drain Masters locates the problem, repairs or replaces the failing line or fitting, and pressure-tests the piping before restoring gas. We also run new lines to add or relocate an appliance, all done under permit and finished with a documented leak test so you know the system is tight.',
        'included' => [
            'Inspection of the line, fittings, and appliance connections',
            'Leak location on indoor, outdoor, and buried gas lines',
            'Repair or replacement of corroded, damaged, or aging pipe',
            'New line installation for a range, water heater, or outdoor appliance',
            'Proper permitting and work built to the fuel-gas code',
            'Pressure and leak test before gas service is restored',
        ],
        'process' => [
            ['Test &amp; locate', 'We check the system, pinpoint the leak or fault, and confirm which section of line needs work.'],
            ['Repair or run new pipe', 'We replace the failed section or install the new line with the correct material and fittings.'],
            ['Permit &amp; pressure-test', 'We pull the permit and pressure-test the piping to prove there are no leaks.'],
            ['Restore &amp; verify', 'We bring gas back safely, relight appliances, and confirm everything holds before we leave.'],
        ],
        'photo'    => 'owner-img_8820',
        'photoAlt' => 'Drain Masters technician repairing a gas line fitting at a Palm Springs, FL property',
    ],
    'proof' => [
        'q'      => 'What do Palm Springs customers say about Drain Masters?',
        'answer' => 'Drain Masters of the Palm Beaches holds a 5.0-star rating across 6 Google reviews from Palm Springs-area customers. For safety-critical work like gas lines, that track record matters&mdash;read the reviews on our Google Business Profile, or leave your own after we finish your job.',
    ],
    'comparison' => [
        'q'      => 'What makes our gas line work different from other Palm Springs plumbers?',
        'answer' => 'Some crews will patch a gas line and leave without testing it. Drain Masters treats gas as life-safety work&mdash;we permit the job, build to code, and pressure-test the line before restoring service, so the fix is safe and provable, not a shortcut.',
        'rows'   => [
            ['Skip the permit to save time', 'Pull the required permit on every gas job'],
            ['Restore gas without a pressure test', 'Pressure and leak test before gas goes back on'],
            ['Patch a corroded line and move on', 'Replace failing pipe with the correct material'],
            ['Guess at where the leak is', 'Locate the exact leak before opening anything'],
            ['Handle only indoor natural gas', 'Service natural gas and propane, indoor and buried'],
        ],
    ],
    'faqs' => [
        ['What should I do if I smell gas in my Palm Springs home?', 'Leave the house right away and take everyone with you. Do not flip light switches, use your phone indoors, or light anything. Once you are safely outside and away, call 911 or your gas utility first so they can shut off supply. After the area is made safe, call Drain Masters to locate, repair, and pressure-test the line.'],
        ['Do you work on both natural gas and propane lines?', 'Yes. Drain Masters of the Palm Beaches repairs and installs both natural gas and propane lines throughout Palm Springs and Palm Beach County. We service lines feeding water heaters, ranges and cooktops, dryers, outdoor kitchens and grills, pool heaters, and standby generators, and we leak-test every line before restoring service.'],
        ['Do you pull a permit for gas line work?', 'Yes, and it matters. Gas line repair and installation are code-regulated life-safety work in Florida, so we pull the required permit and build to the fuel-gas code. That keeps the job inspectable and safe, and it protects the value of your home. Unpermitted gas work can void insurance and create real hazards.'],
        ['Can you run a new gas line for a range or outdoor kitchen?', 'Absolutely. We extend or run new gas lines for ranges, cooktops, dryers, pool heaters, generators, and outdoor kitchens across the Palm Beaches. We size the line for the appliance\'s demand, install it to code under permit, and pressure-test the whole run so your new appliance gets safe, reliable fuel.'],
        ['Why do gas lines fail in the Palm Springs area?', 'The humid, salty coastal air here is tough on gas piping. Corrosion at fittings and along outdoor or buried lines is common, especially on older steel. Physical damage from digging or ground settling, loose or faulty connections, and simple age all cause leaks too. We find the real cause instead of just patching the symptom.'],
        ['How do you know a gas line repair is safe after the work?', 'We prove it. After any repair or new installation, we pressure-test the piping and leak-check every connection before we turn the gas back on. Only once the line holds pressure do we restore service, relight appliances, and confirm everything is tight. You get work that is tested and verifiable, not taken on faith.'],
    ],
    'gallery' => [
        ['owner-img_8947', 'Drain Masters of the Palm Beaches servicing a gas line at a Palm Springs, FL home'],
        ['owner-img_8933', 'Licensed gas and plumbing work by Drain Masters in Palm Beach County'],
        ['owner-img_8976', 'Drain Masters technician completing a gas line job in Palm Springs, FL'],
    ],
    'finalCta' => [
        'heading' => 'Get your gas line repaired safely and to code',
        'text'    => 'Smell gas? Leave and call 911 or your utility first. For repairs, new lines, and leak testing, Drain Masters of the Palm Beaches does licensed, permitted, pressure-tested gas work&mdash;call now or request a free estimate across Palm Springs and Palm Beach County.',
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
