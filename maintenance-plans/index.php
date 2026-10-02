<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'maintenance-plans';
$pageType    = 'other';

$pageTitle       = 'Plumbing Maintenance Plans | Drain Masters | Palm Springs, FL';
$metaDescription = 'Plumbing maintenance plans from $30 a month for Palm Beach County homes, restaurants, commercial buildings and condos. Inspections, member rates, priority help. Call ' . $phone . '.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/maintenance-plans/';

/* Plan content (revision 2, 2026-10-02) — taken from Luis Noda's own plan notes.
   Prices and inclusions are his; nothing here is invented. */
$homePlans = [
    [
        'id'    => 'standard',
        'name'  => 'Standard Home Plan',
        'price' => 30,
        'lede'  => 'The yearly checkup, the flushes and a member rate on every service call.',
        'items' => [
            'Full home plumbing inspection every year',
            'Fixtures checked for flow and function: showers, faucets, toilets and washing machine',
            'Pop-up drains unclogged and toilets re-caulked',
            'Leak check throughout the home',
            'Water heater flush at no charge',
            'Water filters visually inspected',
            'AC drain line cleaning at no charge',
            'Sewer camera inspection included at the 7-month mark',
            '10% off every service call',
            'No trip charge',
            'Weekend rates waived',
        ],
    ],
    [
        'id'    => 'premium',
        'name'  => 'Premium Home Plan',
        'price' => 50,
        'badge' => 'Most complete',
        'lede'  => 'Everything a home needs looked at, first place in line, and 20% off service calls.',
        'items' => [
            'Priority scheduling and a same-day response window',
            'Full home plumbing inspection every year',
            'Every fixture checked: tub, shower, faucets, water heater, hose bibs, garbage disposal, dishwasher, refrigerator water line and washing machine',
            'Pop-up drains unclogged; toilets and fixtures re-caulked where caulk is missing',
            'Leak check throughout the home',
            'Leaking P-traps replaced at no charge',
            'Water heater flush at no charge',
            'Water filters visually inspected',
            'One AC drain line cleaning every year',
            'Sewer camera inspection included at the 4-month mark',
            '20% off every service call',
            'No trip charges and no hidden fees',
            'Weekend and holiday rates waived',
            'No after-hours charge on emergency calls after 5 PM',
            'Free delivery on parts for future jobs',
        ],
    ],
];

$commercialVisit = [
    'Sink drains, water lines, vent pipes and all accessible piping inspected every month',
    'Every sink plunged and every toilet hand-snaked',
    'Commercial-grade degreaser down floor sinks and floor drains',
    'No rushed visits: every fixture gets looked at',
    'Camera inspection of the building\'s pipes once a year at no charge',
    '20% off service calls between visits',
    'After-hours emergency rates waived',
    'Priority scheduling',
];

$restaurantExtras = [
    'Floor drains and floor sinks flushed and jetted every quarter',
    'Dishwashing station and bar sink lines degreased and cleared',
    'Done with a compact jetter, so the kitchen stays workable',
];

$restroomExtras = [
    'Flushometers on toilets and urinals inspected every month',
    'A parts list matched to your fixtures, kept ready for same-visit replacement',
    'Failed flushometer parts swapped during your monthly visit with no labor charge; you pay for the parts only',
    'Grab bars checked, with anything loose or damaged reported to you',
];

$condoSchedule = [
    ['when' => 'Monthly',        'what' => 'Main water lines, exposed piping, valves, leaks, pressure, mechanical rooms and common-area plumbing inspected. Issues are noted and repairs scheduled.'],
    ['when' => 'Quarterly',      'what' => 'Backflow assemblies inspected and tested where required, floor drains inspected, problem drains cleaned, deficiencies documented.'],
    ['when' => 'Twice a year',   'what' => 'Sewer camera inspection of selected sections; lift and ejector pumps, sump systems and cleanouts inspected.'],
    ['when' => 'Yearly',         'what' => 'Building-wide plumbing inspection, water heater inspection, shutoff valves exercised, drain system evaluated, written condition report delivered.'],
    ['when' => 'Unit rotation',  'what' => 'A share of the units inspected each year, so the whole community is covered over a set cycle.'],
    ['when' => 'Emergencies',    'what' => 'Priority response for leaks, sewer backups, loss of water, failed pumps and other plumbing emergencies.'],
    ['when' => 'Records',        'what' => 'An asset list of every backflow, valve, water heater, pump, cleanout and major component, with inspection dates and recommended repairs.'],
];

$planOptions = [
    'Maintenance plan: Standard Home ($30/month)',
    'Maintenance plan: Premium Home ($50/month)',
    'Maintenance plan: Restaurant / Commercial ($70/month)',
    'Maintenance plan: Restaurant with hydro jetting add-on',
    'Maintenance plan: Condo / HOA program (quote)',
    'Not sure yet, help me choose',
];

$faqs = [
    [
        'q' => 'How much does a Drain Masters plumbing maintenance plan cost?',
        'a' => 'Drain Masters of the Palm Beaches offers home maintenance plans at $30 a month (Standard) and $50 a month (Premium), and a restaurant and commercial plan at $70 a month. Condo and HOA programs are quoted per community because buildings differ in size and equipment.',
    ],
    [
        'q' => 'What is the difference between the Standard and Premium home plans?',
        'a' => 'Both plans include a yearly home plumbing inspection, a water heater flush, a leak check and no trip charge. Premium adds priority scheduling, a wider fixture inspection, free replacement of leaking P-traps, an earlier sewer camera inspection, waived holiday and after-hours rates, and 20% off service calls instead of 10%.',
    ],
    [
        'q' => 'Are repairs included in the monthly price?',
        'a' => 'The monthly price covers the inspections and maintenance items listed for your plan. Repairs outside that list are quoted before work starts and billed at your member rate: 10% off on the Standard Home Plan and 20% off on the Premium and commercial plans.',
    ],
    [
        'q' => 'What does the restaurant hydro jetting add-on include?',
        'a' => 'Restaurants on the $70 monthly plan can add hydro jetting every three months for $350 per visit, a job that normally runs about $800. Each visit includes a grease trap check, and Drain Masters will help schedule any pump-outs you need.',
    ],
    [
        'q' => 'Is a maintenance plan a home warranty or insurance?',
        'a' => 'No. A Drain Masters maintenance plan is a scheduled plumbing maintenance and member-rate program. It is not a home warranty, a service contract for appliance replacement, or an insurance policy.',
    ],
    [
        'q' => 'How do I sign up?',
        'a' => 'Call ' . $phone . ' or send the form on this page. Drain Masters confirms your property, walks through the plan details and terms with you, and schedules your first visit.',
    ],
];
$faqSchema = generateFAQSchema($faqs);

/* Schema markup */
$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
            'about' => ['@id' => $siteUrl . '/#organization'],
            'description' => $metaDescription,
            'breadcrumb' => ['@id' => $canonicalUrl . '#breadcrumb'],
            'inLanguage' => 'en-US'
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonicalUrl . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Maintenance Plans', 'item' => $canonicalUrl]
            ]
        ],
        [
            '@type' => 'OfferCatalog',
            '@id' => $canonicalUrl . '#plans',
            'name' => 'Drain Masters plumbing maintenance plans',
            'itemListElement' => [
                ['@type' => 'Offer', 'name' => 'Standard Home Plan', 'price' => '30.00', 'priceCurrency' => 'USD', 'description' => 'Monthly home plumbing maintenance plan', 'seller' => ['@id' => $siteUrl . '/#organization']],
                ['@type' => 'Offer', 'name' => 'Premium Home Plan', 'price' => '50.00', 'priceCurrency' => 'USD', 'description' => 'Monthly home plumbing maintenance plan with priority scheduling', 'seller' => ['@id' => $siteUrl . '/#organization']],
                ['@type' => 'Offer', 'name' => 'Restaurant and Commercial Plan', 'price' => '70.00', 'priceCurrency' => 'USD', 'description' => 'Monthly preventative plumbing maintenance for restaurants and commercial buildings', 'seller' => ['@id' => $siteUrl . '/#organization']],
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$mpCheck = '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>';
$mpStar  = '<svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition (tokens only) -->
<style>
  .mp-jump { display: flex; flex-wrap: wrap; gap: var(--space-sm); margin-top: var(--space-lg); padding: 0; list-style: none; }
  .mp-jump a { display: inline-flex; align-items: center; padding: var(--space-xs) var(--space-md); border-radius: 999px; border: 1px solid color-mix(in srgb, var(--color-white) 35%, transparent); color: var(--color-white); font-weight: 600; font-size: var(--font-size-sm); text-decoration: none; transition: var(--transition); }
  .mp-jump a:hover { background: var(--color-white); color: var(--color-dark); }

  .mp-hero-grid { display: grid; grid-template-columns: minmax(0, 1.3fr) minmax(0, 1fr); gap: var(--space-2xl); align-items: center; }
  .mp-member-card { justify-self: center; width: min(380px, 100%); aspect-ratio: 1.586; display: grid; align-content: space-between; justify-items: start; gap: var(--space-xs); padding: var(--space-lg); border-radius: var(--radius-lg); color: var(--color-ink); background: linear-gradient(160deg, var(--color-white) 0%, var(--color-white) 52%, color-mix(in srgb, var(--color-accent) 30%, var(--color-white)) 100%); box-shadow: 0 30px 60px -24px color-mix(in srgb, var(--color-black) 70%, transparent), 0 0 0 6px color-mix(in srgb, var(--color-white) 8%, transparent); transform: rotate(-5deg); transition: transform .5s cubic-bezier(.2, .8, .2, 1); }
  .mp-member-card:hover { transform: rotate(-1deg) translateY(-6px); }
  .mp-member-card img { width: 78%; height: auto; filter: none; }
  .mp-member-card-title { font-family: var(--font-accent); font-weight: 700; letter-spacing: .14em; text-transform: uppercase; font-size: var(--font-size-sm); color: var(--color-primary); }
  .mp-member-card-line { font-size: var(--font-size-sm); color: var(--color-ink-2); }
  .mp-member-card-phone { justify-self: end; font-family: var(--font-heading); font-weight: 800; color: var(--color-primary); font-variant-numeric: tabular-nums; }
  .mp-numbers { padding-block: var(--space-xl); border-top: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent); }
  .mp-numbers-row { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: var(--space-xl); }
  .mp-numbers .big { display: block; font-family: var(--font-heading); font-weight: 800; font-size: clamp(2.2rem, 3.6vw, 3rem); line-height: 1; color: var(--color-accent-bright); font-variant-numeric: tabular-nums; }
  .mp-numbers .big small { font-size: .5em; font-weight: 800; }
  .mp-numbers .label { display: block; margin-top: var(--space-xs); font-size: var(--font-size-sm); color: color-mix(in srgb, var(--color-white) 86%, transparent); }
  .mp-plan { transition: transform .35s cubic-bezier(.2, .8, .2, 1), box-shadow .35s ease; }
  .mp-plan:hover { transform: translateY(-8px); box-shadow: var(--shadow-lg); }
  @media (max-width: 900px) { .mp-hero-grid { grid-template-columns: 1fr; gap: var(--space-xl); } .mp-member-card { width: min(300px, 86%); transform: rotate(-3deg); } .mp-numbers-row { grid-template-columns: 1fr 1fr; gap: var(--space-lg); } }
  @media (prefers-reduced-motion: reduce) { .mp-plan, .mp-member-card { transition: none; } }

  .mp-plans { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.12fr); gap: var(--space-xl); align-items: start; margin-top: var(--space-2xl); }
  .mp-plan { position: relative; background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-xl); box-shadow: var(--shadow-sm); display: grid; gap: var(--space-md); }
  .mp-plan--featured { border: 2px solid var(--color-primary); box-shadow: var(--shadow-lg); background: linear-gradient(180deg, var(--color-card-tint-1) 0%, var(--color-surface) 38%); }
  .mp-badge { position: absolute; top: calc(var(--space-sm) * -1); right: var(--space-lg); background: var(--color-primary); color: var(--color-white); font-family: var(--font-accent); font-size: var(--fs-eyebrow); font-weight: 700; letter-spacing: .12em; text-transform: uppercase; padding: var(--space-1) var(--space-sm); border-radius: 999px; }
  .mp-plan h3 { font-size: var(--font-size-h3); margin: 0; }
  .mp-price { display: flex; align-items: baseline; gap: var(--space-xs); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; line-height: 1; font-variant-numeric: tabular-nums; }
  .mp-price .amount { font-size: clamp(2.6rem, 5vw, 3.6rem); }
  .mp-price .per { font-family: var(--font-body); font-size: var(--font-size-base); font-weight: 600; color: var(--color-ink-2); }
  .mp-lede { margin: 0; color: var(--color-ink-2); }
  .mp-list { list-style: none; margin: 0; padding: var(--space-md) 0 0; border-top: 1px solid var(--color-line); display: grid; gap: var(--space-sm); }
  .mp-list li { display: grid; grid-template-columns: auto 1fr; gap: var(--space-sm); align-items: start; color: var(--color-ink); line-height: 1.5; }
  .mp-list svg { color: var(--color-accent); margin-top: var(--space-1); }
  .mp-plan .btn { justify-self: start; }

  .mp-biz { background: var(--color-paper-2); }
  .mp-biz-grid { display: grid; grid-template-columns: minmax(0, 1.25fr) minmax(0, 1fr); gap: var(--space-xl); align-items: start; margin-top: var(--space-2xl); }
  .mp-biz-side { display: grid; gap: var(--space-lg); }
  .mp-sub { background: var(--color-surface); border: 1px solid var(--color-line); border-left: 4px solid var(--color-accent); border-radius: var(--radius-lg); padding: var(--space-lg); display: grid; gap: var(--space-sm); }
  .mp-sub h3 { font-size: var(--font-size-lg); margin: 0; }
  .mp-sub .mp-list { border-top: 0; padding-top: 0; }
  .mp-addon { margin-top: var(--space-xl); border-radius: var(--radius-lg); padding: var(--space-xl); display: grid; grid-template-columns: minmax(0, 1.4fr) auto; gap: var(--space-xl); align-items: center; }
  .mp-addon h3 { color: var(--color-white); font-size: var(--font-size-h3); margin: 0 0 var(--space-sm); }
  .mp-addon p { margin: 0; color: color-mix(in srgb, var(--color-white) 88%, transparent); }
  .mp-addon-price { text-align: center; padding: var(--space-lg) var(--space-xl); border-radius: var(--radius-lg); background: color-mix(in srgb, var(--color-white) 10%, transparent); border: 1px solid color-mix(in srgb, var(--color-white) 22%, transparent); }
  .mp-addon-price .was { display: block; font-size: var(--font-size-sm); color: color-mix(in srgb, var(--color-white) 78%, transparent); }
  .mp-addon-price .was s { text-decoration-thickness: 2px; }
  .mp-addon-price .now { display: block; font-family: var(--font-heading); font-weight: 800; font-size: clamp(2.6rem, 5vw, 3.6rem); line-height: 1.05; color: var(--color-white); font-variant-numeric: tabular-nums; }
  .mp-addon-price .unit { display: block; font-size: var(--font-size-sm); color: var(--color-accent-bright); font-weight: 600; }

  .mp-schedule { margin: var(--space-2xl) 0 0; padding: 0; list-style: none; border: 1px solid var(--color-line); border-radius: var(--radius-lg); overflow: hidden; background: var(--color-surface); }
  .mp-schedule li { display: grid; grid-template-columns: 11rem 1fr; gap: var(--space-lg); padding: var(--space-md) var(--space-lg); border-top: 1px solid var(--color-line); align-items: start; }
  .mp-schedule li:first-child { border-top: 0; }
  .mp-schedule li:nth-child(odd) { background: var(--color-card-tint-neutral); }
  .mp-schedule .when { font-family: var(--font-accent); font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--color-primary); }
  .mp-schedule .what { color: var(--color-ink-2); line-height: 1.6; }
  .mp-condo-perks { display: flex; flex-wrap: wrap; gap: var(--space-sm); margin: var(--space-lg) 0 0; padding: 0; list-style: none; }
  .mp-condo-perks li { display: inline-flex; align-items: center; gap: var(--space-xs); padding: var(--space-xs) var(--space-md); border-radius: 999px; background: var(--color-card-tint-3); color: var(--color-ink); font-weight: 600; font-size: var(--font-size-sm); }
  .mp-condo-perks svg { color: var(--color-accent); }
  .mp-condo-cta { margin-top: var(--space-xl); }

  .mp-join { background: var(--color-paper-2); }
  .mp-join-grid { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.1fr); gap: var(--space-2xl); align-items: start; }
  .mp-steps { list-style: none; counter-reset: mp-step; margin: var(--space-lg) 0 0; padding: 0; display: grid; gap: var(--space-md); }
  .mp-steps li { counter-increment: mp-step; display: grid; grid-template-columns: auto 1fr; gap: var(--space-md); align-items: start; }
  .mp-steps li::before { content: counter(mp-step); display: grid; place-items: center; width: 2.25rem; height: 2.25rem; border-radius: 50%; background: var(--color-primary); color: var(--color-white); font-family: var(--font-heading); font-weight: 800; }
  .mp-steps strong { display: block; color: var(--color-ink); }
  .mp-steps span { color: var(--color-ink-2); }
  .mp-review { margin: var(--space-xl) 0 0; padding: var(--space-lg); background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); display: grid; gap: var(--space-sm); }
  .mp-review .stars { display: inline-flex; gap: var(--space-1); color: var(--color-star); }
  .mp-review blockquote { margin: 0; color: var(--color-ink); line-height: 1.6; }
  .mp-review figcaption { font-size: var(--font-size-sm); color: var(--color-ink-2); }
  .mp-review figcaption a { color: var(--color-accent-dark); font-weight: 600; }

  .mp-form { background: var(--color-surface); border: 1px solid var(--color-line); border-top: 4px solid var(--color-primary); border-radius: var(--radius-lg); padding: var(--space-xl); box-shadow: var(--shadow); }
  .mp-form h2 { font-size: var(--font-size-h3); margin: 0 0 var(--space-xs); }
  .mp-form > p { margin: 0 0 var(--space-lg); color: var(--color-ink-2); }
  .mp-form .mp-fields { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); }
  .mp-form .field--wide { grid-column: 1 / -1; }
  .mp-form label { display: block; font-weight: 600; color: var(--color-ink); margin-bottom: var(--space-xs); font-size: var(--font-size-sm); }
  .mp-form input[type="text"], .mp-form input[type="tel"], .mp-form input[type="email"], .mp-form select, .mp-form textarea { width: 100%; padding: var(--space-sm) var(--space-md); border: 1px solid var(--color-line); border-radius: var(--radius); font-family: var(--font-body); font-size: var(--font-size-base); color: var(--color-ink); background: var(--color-white); }
  .mp-form input:focus, .mp-form select:focus, .mp-form textarea:focus { border-color: var(--color-accent); outline: none; box-shadow: 0 0 0 3px color-mix(in srgb, var(--color-accent) 22%, transparent); }
  .mp-form .form-consent-fieldset { margin: var(--space-lg) 0; }
  .mp-form .required-star { color: var(--color-danger); }

  .mp-faq .faq-list { list-style: none; margin: var(--space-xl) 0 0; padding: 0; display: grid; gap: var(--space-md); }
  .mp-faq details { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius); }
  .mp-faq summary { display: flex; justify-content: space-between; align-items: center; gap: var(--space-md); padding: var(--space-md) var(--space-lg); font-weight: 600; color: var(--color-ink); cursor: pointer; list-style: none; }
  .mp-faq summary::-webkit-details-marker { display: none; }
  .mp-faq summary svg { flex: 0 0 auto; transition: transform .3s ease; }
  .mp-faq details[open] summary svg { transform: rotate(180deg); }
  .mp-faq details p { margin: 0; padding: 0 var(--space-lg) var(--space-md); color: var(--color-ink-2); line-height: 1.7; }
  .mp-terms { margin: var(--space-xl) 0 0; font-size: var(--font-size-sm); color: var(--color-muted); line-height: 1.6; }

  @media (max-width: 900px) {
    .mp-plans, .mp-biz-grid, .mp-join-grid, .mp-addon { grid-template-columns: 1fr; }
    .mp-plan--featured { order: -1; }
    .mp-schedule li { grid-template-columns: 1fr; gap: var(--space-xs); }
    .mp-form .mp-fields { grid-template-columns: 1fr; }
    .mp-plan, .mp-form { padding: var(--space-lg); }
  }
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li aria-hidden="true" class="breadcrumb-sep">/</li>
            <li aria-current="page">Maintenance Plans</li>
        </ol>
    </div>
</nav>

    <!-- Hero -->
    <section class="hero hero--interior">
        <div class="container mp-hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">Maintenance Plans</span>
                <h1>Plumbing Maintenance Plans in Palm Beach County</h1>
                <p class="hero-answer">Drain Masters of the Palm Beaches offers monthly plumbing maintenance plans from $30 for homes and $70 for restaurants and commercial buildings. Each plan includes scheduled inspections, member rates on service calls and help when something breaks.</p>
                <ul class="mp-jump" aria-label="Jump to a plan type">
                    <li><a href="#home-plans">Homes</a></li>
                    <li><a href="#business-plans">Restaurants &amp; commercial</a></li>
                    <li><a href="#condo-plans">Condos &amp; HOAs</a></li>
                </ul>
            </div>
            <div class="mp-member-card">
                <img src="/assets/images/logo-hero-v2-480.webp" alt="Drain Masters of the Palm Beaches maintenance plan member card" width="480" height="191" loading="eager" decoding="async">
                <span class="mp-member-card-title">Maintenance Plan Member</span>
                <span class="mp-member-card-line">Priority &middot; Savings &middot; Peace of mind</span>
                <span class="mp-member-card-phone"><?php echo $phone; ?></span>
            </div>
        </div>
    </section>

    <!-- Member savings in numbers -->
    <section class="mp-numbers on-dark" aria-label="Member savings">
        <div class="container">
            <div class="mp-numbers-row">
                <div><span class="big">$0</span><span class="label">Trip charge on both home plans</span></div>
                <div><span class="big">20%<small> off</small></span><span class="label">Every service call on Premium and commercial plans</span></div>
                <div><span class="big">$350</span><span class="label">Restaurant hydro jetting for members, normally about $800</span></div>
                <div><span class="big">$0</span><span class="label">Water heater flush on both home plans</span></div>
            </div>
        </div>
    </section>

    <!-- Home plans -->
    <section class="section section--light" id="home-plans" aria-label="Home maintenance plans">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">For Your Home</span>
                <h2>Which home plumbing <span class="text-accent">maintenance plan</span> fits your house?</h2>
                <p class="section-answer">Drain Masters has two home plans. Standard covers the yearly inspection, the flushes and a 10% member rate. Premium checks every fixture, puts you first in the schedule and takes 20% off every service call.</p>
            </div>
            <div class="mp-plans" data-p1-dynamic>
                <?php foreach ($homePlans as $mpPlan): ?>
                <article class="mp-plan<?php echo !empty($mpPlan['badge']) ? ' mp-plan--featured' : ''; ?>">
                    <?php if (!empty($mpPlan['badge'])): ?><span class="mp-badge"><?php echo htmlspecialchars($mpPlan['badge']); ?></span><?php endif; ?>
                    <h3><?php echo htmlspecialchars($mpPlan['name']); ?></h3>
                    <p class="mp-price"><span class="amount">$<?php echo (int) $mpPlan['price']; ?></span><span class="per">per month</span></p>
                    <p class="mp-lede"><?php echo htmlspecialchars($mpPlan['lede']); ?></p>
                    <ul class="mp-list">
                        <?php foreach ($mpPlan['items'] as $mpItem): ?>
                        <li><?php echo $mpCheck; ?><span><?php echo htmlspecialchars($mpItem); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="btn <?php echo !empty($mpPlan['badge']) ? 'btn-primary' : 'btn-secondary'; ?> btn-lg" href="#join">Ask about this plan</a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Restaurant / commercial -->
    <section class="section mp-biz slant-top" id="business-plans" aria-label="Restaurant and commercial maintenance plans">
        <div class="container-wide">
            <div class="section-head">
                <span class="eyebrow">For Restaurants &amp; Commercial Buildings</span>
                <h2>What does the $70 monthly <span class="text-accent">commercial plumbing plan</span> cover?</h2>
                <p class="section-answer">Drain Masters visits your business every month for preventative plumbing maintenance: drains, water lines, vents and every fixture on the property. Anything that needs fixing before or after your scheduled visit is a service call at 20% off.</p>
            </div>
            <div class="mp-biz-grid">
                <article class="mp-plan">
                    <h3>Restaurant &amp; Commercial Plan</h3>
                    <p class="mp-price"><span class="amount">$70</span><span class="per">per month</span></p>
                    <p class="mp-lede">A monthly preventative visit that keeps drains moving and catches problems before a busy shift does.</p>
                    <ul class="mp-list" data-p1-dynamic>
                        <?php foreach ($commercialVisit as $mpItem): ?>
                        <li><?php echo $mpCheck; ?><span><?php echo htmlspecialchars($mpItem); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="btn btn-primary btn-lg" href="#join">Ask about this plan</a>
                </article>
                <div class="mp-biz-side">
                    <div class="mp-sub">
                        <h3>Restaurants: quarterly kitchen line cleaning</h3>
                        <ul class="mp-list" data-p1-dynamic>
                            <?php foreach ($restaurantExtras as $mpItem): ?>
                            <li><?php echo $mpCheck; ?><span><?php echo htmlspecialchars($mpItem); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="mp-sub">
                        <h3>Commercial restrooms</h3>
                        <ul class="mp-list" data-p1-dynamic>
                            <?php foreach ($restroomExtras as $mpItem): ?>
                            <li><?php echo $mpCheck; ?><span><?php echo htmlspecialchars($mpItem); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mp-addon on-dark">
                <div>
                    <span class="eyebrow">Restaurant Add-On</span>
                    <h3>Hydro jetting every three months</h3>
                    <p>Add preventative <a href="/services/hydro-jetting/">hydro jetting</a> to the $70 plan and Drain Masters jets your lines four times a year, so a grease blockage does not shut the kitchen down in the middle of a rush. Each visit includes a grease trap check for flow and function, and we help schedule any pump-outs you need.</p>
                </div>
                <div class="mp-addon-price">
                    <span class="was">Normally about <s>$800</s></span>
                    <span class="now">$350</span>
                    <span class="unit">per visit, 4 times a year</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Condo / HOA -->
    <section class="section section--light" id="condo-plans" aria-label="Condominium preventative maintenance program">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">For Condos &amp; HOAs</span>
                <h2>How does the <span class="text-accent">condo plumbing maintenance</span> program work?</h2>
                <p class="section-answer">Drain Masters runs a preventative maintenance and asset management program for condominium communities in Palm Beach County. The building's plumbing is inspected on a set schedule, problems are documented, and repairs are scheduled before they turn into leaks and backups.</p>
            </div>
            <ul class="mp-condo-perks">
                <li><?php echo $mpCheck; ?> Priority scheduling</li>
                <li><?php echo $mpCheck; ?> 20% off service calls</li>
                <li><?php echo $mpCheck; ?> Weekend and holiday rates waived</li>
            </ul>
            <ul class="mp-schedule" data-p1-dynamic>
                <?php foreach ($condoSchedule as $mpRow): ?>
                <li><span class="when"><?php echo htmlspecialchars($mpRow['when']); ?></span><span class="what"><?php echo htmlspecialchars($mpRow['what']); ?></span></li>
                <?php endforeach; ?>
            </ul>
            <p class="mp-condo-cta"><a class="btn btn-primary btn-lg" href="#join">Request a quote for your community</a></p>
        </div>
    </section>

    <!-- How to join + form -->
    <section class="section mp-join edge-curve-top" id="join" aria-label="Join a maintenance plan">
        <div class="container-wide">
            <div class="mp-join-grid">
                <div>
                    <span class="eyebrow">How to Join</span>
                    <h2>Three steps to get on a plan</h2>
                    <ol class="mp-steps">
                        <li><div><strong>Tell us about the property</strong><span>Call <a href="tel:<?php echo formatPhone($phone); ?>"><?php echo $phone; ?></a> or send the form. A home, a restaurant, a commercial building or a condo community.</span></div></li>
                        <li><div><strong>Pick the plan that fits</strong><span>We go through what each plan includes and the terms, and answer your questions before you commit.</span></div></li>
                        <li><div><strong>Schedule your first visit</strong><span>Your first inspection goes on the calendar and your member rate starts.</span></div></li>
                    </ol>

                    <figure class="mp-review">
                        <span class="stars" aria-label="5 out of 5 stars"><?php echo str_repeat($mpStar, 5); ?></span>
                        <blockquote>&ldquo;I can&rsquo;t speak highly enough of Luigi. He&rsquo;s hard-working, honest, reasonable priced and always does what he says he&rsquo;s going to do. My hot water heater went out on Friday. I texted him and he came Saturday. By 4 PM. I had a new replacement. Now that&rsquo;s what I call fabulous service.&rdquo;</blockquote>
                        <figcaption>Marty Schaerer, Google review, August 2026 &middot; <a href="<?php echo htmlspecialchars($gbpProfileUrl); ?>" target="_blank" rel="noopener">Read all reviews on Google</a></figcaption>
                    </figure>
                </div>

                <div class="mp-form">
                    <h2>Ask about a maintenance plan</h2>
                    <p>No obligation. We reply the same day.</p>
                    <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                        <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                        <input type="hidden" name="form_location" value="maintenance-plans">
                        <?php echo p1_attribution_fields('maintenance-plans'); ?>
                        <input type="hidden" name="consent_version" value="v2.1">
                        <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

                        <div class="mp-fields">
                            <div class="field">
                                <label for="mp-name">Your Name <span class="required-star">*</span></label>
                                <input id="mp-name" type="text" name="name" autocomplete="name" required>
                            </div>
                            <div class="field">
                                <label for="mp-phone">Phone <span class="required-star">*</span></label>
                                <input id="mp-phone" type="tel" name="phone" autocomplete="tel" required>
                            </div>
                            <div class="field field--wide">
                                <label for="mp-email">Email <span class="required-star">*</span></label>
                                <input id="mp-email" type="email" name="email" autocomplete="email" required>
                            </div>
                            <div class="field field--wide">
                                <label for="mp-plan">Plan You Are Interested In</label>
                                <select id="mp-plan" name="service">
                                    <option value="">Select a plan</option>
                                    <?php foreach ($planOptions as $mpOpt): ?>
                                    <option value="<?php echo htmlspecialchars($mpOpt); ?>"><?php echo htmlspecialchars($mpOpt); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="field field--wide">
                                <label for="mp-message">About the Property</label>
                                <textarea id="mp-message" name="message" rows="3" placeholder="Home, restaurant, building or community, and anything we should know"></textarea>
                            </div>
                        </div>

                        <fieldset class="form-consent-fieldset">
                            <legend class="form-consent-legend">Communication Consent</legend>
                            <label class="form-consent-item">
                                <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                                <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, and promotions. I can unsubscribe anytime.</span>
                            </label>
                            <label class="form-consent-item">
                                <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                                <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive texts from <?php echo htmlspecialchars($siteName); ?> at the number provided (reminders, updates, offers). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                            </label>
                            <label class="form-consent-item form-consent-required">
                                <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                                <span class="consent-label">I have read and agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>. <span class="required-star">*</span></span>
                            </label>
                        </fieldset>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send My Request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section--light mp-faq" aria-label="Maintenance plan questions">
        <div class="container container-narrow">
            <div class="section-head">
                <span class="eyebrow">Plan Questions</span>
                <h2>Maintenance plan FAQs</h2>
            </div>
            <ul class="faq-list" data-p1-dynamic>
                <?php foreach ($faqs as $mpFaq): ?>
                <li>
                    <details>
                        <summary><span><?php echo htmlspecialchars($mpFaq['q']); ?></span><svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></summary>
                        <p><?php echo htmlspecialchars($mpFaq['a']); ?></p>
                    </details>
                </li>
                <?php endforeach; ?>
            </ul>
            <p class="mp-terms">Plans are billed monthly. Repairs and work outside the items listed for your plan are quoted before work starts and billed separately at your member rate. Scheduling, including same-day response, is subject to availability. A Drain Masters maintenance plan is a maintenance and member-rate program, not a home warranty or an insurance policy. Full plan terms are confirmed with you before you enroll. See also our <a href="/faq/">plumbing FAQ</a> and <a href="/services/">full list of services</a>.</p>
        </div>
    </section>

</main>

<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
</script>
<script type="application/ld+json">
<?php echo $faqSchema; ?>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
