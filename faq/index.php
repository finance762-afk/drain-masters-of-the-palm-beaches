<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'faq';
$pageType    = 'faq';

$pageTitle       = 'Frequently Asked Questions | Drain Masters of the Palm Beaches';
$metaDescription = 'Get answers to common questions about drain cleaning, sewer repair, plumbing costs, and emergency service in Palm Springs, FL. Call Drain Masters at ' . $phone . '.';
$canonicalUrl    = $siteUrl . '/faq/';

/* FAQ data */
$faqs = [
    /* General */
    ['category' => 'General', 'q' => 'What services does Drain Masters of the Palm Beaches provide?', 'a' => 'Drain Masters provides drain cleaning, hydro jetting, sewer line repair and replacement, trenchless sewer repair, leak detection and slab leak repair, water heater installation and repair, whole-home repiping, toilet and faucet repair, garbage disposal service, sump pump installation and repair, gas line repair, backflow prevention, and emergency plumbing across Palm Springs and Palm Beach County.'],
    ['category' => 'General', 'q' => 'Are you licensed and insured?', 'a' => 'Yes. Drain Masters of the Palm Beaches is a Florida-licensed plumbing contractor with full liability insurance and workers\' compensation coverage. You can verify our license and credentials before we start work.'],
    ['category' => 'General', 'q' => 'Do you offer emergency plumbing service?', 'a' => 'Yes, we provide same-day and after-hours emergency service across Palm Springs and the Palm Beaches. Plumbing emergencies like burst pipes, sewer backups, and major leaks can\'t wait—call us and we\'ll get out to you as fast as possible.'],
    ['category' => 'General', 'q' => 'What areas do you serve?', 'a' => 'Drain Masters is based in Palm Springs, FL and serves homeowners and businesses throughout Palm Beach County, including Lake Worth, West Palm Beach, Greenacres, Boynton Beach, Wellington, Lantana, and Royal Palm Beach.'],

    /* Pricing */
    ['category' => 'Pricing', 'q' => 'How much does drain cleaning cost?', 'a' => 'Drain cleaning costs depend on the line and the severity of the clog. A single slow fixture is straightforward; a blocked main line or a clog that needs hydro jetting costs more. We provide a free assessment and a clear, upfront price before any work begins—no hidden fees.'],
    ['category' => 'Pricing', 'q' => 'Do you charge for estimates?', 'a' => 'No. Drain Masters provides free assessments and transparent estimates with no hidden fees. We\'ll explain your options and the cost before starting work, so there are no surprises.'],
    ['category' => 'Pricing', 'q' => 'Do you offer financing or payment plans?', 'a' => 'Contact us to discuss payment options. We work with homeowners to find a solution that fits your budget for larger projects like sewer line replacement or whole-home repiping.'],

    /* Drain & Sewer */
    ['category' => 'Drain & Sewer', 'q' => 'What are the signs I need professional drain cleaning?', 'a' => 'Common signs include slow drains, recurring clogs, gurgling sounds from pipes, water backing up, or foul odors. If plunging doesn\'t solve the problem, professional cleaning is usually needed to clear debris, roots, or mineral buildup deeper in the line.'],
    ['category' => 'Drain & Sewer', 'q' => 'How often should I have my drains professionally cleaned?', 'a' => 'Most homes benefit from professional drain cleaning every 1-2 years as preventative maintenance. Homes with trees nearby, older pipes, or frequent clogs may need annual service. We can assess your system and recommend a schedule.'],
    ['category' => 'Drain & Sewer', 'q' => 'Is snaking or hydro jetting better for my drain?', 'a' => 'Snaking or cabling clears most everyday clogs quickly. Hydro jetting is better when grease, mineral scale, or tree roots coat the pipe wall, because high-pressure water scours the line clean. We recommend the right method after we see what is causing the blockage.'],
    ['category' => 'Drain & Sewer', 'q' => 'Why does my drain keep clogging after I clear it?', 'a' => 'A drain that clogs again soon after clearing usually has buildup, a belly in the line, or roots the cable can\'t fully remove. A camera inspection finds the cause so we can jet the line or repair it instead of cabling the same spot repeatedly.'],
    ['category' => 'Drain & Sewer', 'q' => 'Can drain cleaning damage older pipes?', 'a' => 'Professional drain cleaning is safe for the cast iron and clay pipe common in older Palm Springs homes when done correctly. We match the tool and pressure to the pipe, and if we find a line that is corroded or cracked, we tell you before doing anything that could make it worse.'],
    ['category' => 'Drain & Sewer', 'q' => 'How do I know if I need sewer line replacement or just repair?', 'a' => 'We use camera inspection to assess the condition of your sewer line. If the damage is localized—a single break or root intrusion—spot repair or pipe lining may solve it. If the line has multiple breaks, extensive corrosion, or collapsed sections, full replacement is usually the more cost-effective long-term solution.'],

    /* Water Heaters & Leaks */
    ['category' => 'Water Heaters & Leaks', 'q' => 'How long does a water heater last?', 'a' => 'Most tank water heaters last 8-12 years, and tankless units can last 15-20 years with proper maintenance. If your water heater is over 10 years old and showing signs of failure (rusty water, leaks, inconsistent hot water), replacement is usually the smarter choice than repair.'],
    ['category' => 'Water Heaters & Leaks', 'q' => 'Should I choose a tank or tankless water heater?', 'a' => 'Tank water heaters cost less upfront and are reliable, but they run out of hot water if demand is high. Tankless water heaters never run out and take up less space, but they cost more to install. We\'ll help you choose based on your household size, usage, and budget.'],
    ['category' => 'Water Heaters & Leaks', 'q' => 'How do you find hidden leaks?', 'a' => 'Drain Masters uses electronic leak detection equipment that pinpoints leaks inside walls, under floors, and in slab foundations without tearing up your entire home. Once we locate the leak, we perform a targeted repair that minimizes damage and cost.'],
    ['category' => 'Water Heaters & Leaks', 'q' => 'What is a slab leak and is it serious?', 'a' => 'A slab leak is a leak in a water line that runs under your home\'s concrete foundation. It\'s serious because it can waste water, damage the foundation, and cause mold. Signs include unexplained water bills, wet floors, or cracks in the foundation. Drain Masters can detect and repair slab leaks quickly.'],

    /* Process & Scheduling */
    ['category' => 'Process & Scheduling', 'q' => 'How quickly can you get to me?', 'a' => 'We offer same-day service for most calls in Palm Springs and the Palm Beaches. For emergencies like sewer backups or burst pipes, we\'ll get out to you as fast as possible—often within a couple hours.'],
    ['category' => 'Process & Scheduling', 'q' => 'How long does a typical drain cleaning take?', 'a' => 'Most residential drain cleanings take one to two hours. A simple sink or tub clog can be cleared quickly, while a main-line blockage or a line that needs camera inspection and jetting takes longer. We confirm full flow before we consider the job done.'],
    ['category' => 'Process & Scheduling', 'q' => 'Will I need to be home during the service?', 'a' => 'Usually, yes. We need access to drains, shutoffs, and the affected areas. If you can\'t be home, we can arrange for secure access—just let us know when you schedule.'],
];

/* Group FAQs by category */
$faqsByCategory = [];
foreach ($faqs as $faq) {
    $faqsByCategory[$faq['category']][] = $faq;
}

/* FAQPage Schema */
$faqSchemaItems = [];
foreach ($faqs as $faq) {
    $faqSchemaItems[] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['a']
        ]
    ];
}

$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'FAQPage',
            '@id' => $canonicalUrl . '#faqpage',
            'mainEntity' => $faqSchemaItems
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonicalUrl . '#breadcrumb',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $siteUrl . '/'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'FAQ',
                    'item' => $canonicalUrl
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition -->
<style>
  .faq-categories { display: grid; gap: var(--space-2xl); }
  .faq-category h2 { font-size: var(--font-size-xl); color: var(--color-primary); margin-bottom: var(--space-lg); border-bottom: 2px solid var(--color-accent-dark); padding-bottom: var(--space-xs); }
  .faq-list { list-style: none; margin: 0; padding: 0; display: grid; gap: var(--space-md); }
  .faq-item { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius); overflow: hidden; }
  .faq-question { display: flex; justify-content: space-between; align-items: center; gap: var(--space-md); padding: var(--space-md) var(--space-lg); font-weight: 600; color: var(--color-ink); cursor: pointer; user-select: none; transition: background var(--transition); }
  .faq-question:hover { background: var(--color-paper-3); }
  .faq-question svg { flex: 0 0 auto; transition: transform 0.3s ease; }
  .faq-item.is-open .faq-question svg { transform: rotate(180deg); }
  .faq-answer { padding: 0 var(--space-lg) var(--space-md) var(--space-lg); color: var(--color-ink-2); line-height: 1.7; display: none; }
  .faq-item.is-open .faq-answer { display: block; }

  @media (max-width: 767px) {
    .faq-question { padding: var(--space-sm) var(--space-md); font-size: var(--font-size-sm); }
    .faq-answer { padding: 0 var(--space-md) var(--space-sm) var(--space-md); }
  }
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li aria-hidden="true" class="breadcrumb-sep">/</li>
            <li aria-current="page">FAQ</li>
        </ol>
    </div>
</nav>

<main id="main-content">

    <!-- Hero -->
    <section class="hero hero--interior">
        <div class="container">
            <div class="hero-copy">
                <span class="eyebrow">Questions & Answers</span>
                <h1>Frequently Asked Questions</h1>
                <p class="hero-answer">Get answers to common questions about drain cleaning, plumbing repairs, costs, and service areas. Don't see your question? Call us at <?php echo $phone; ?> or <a href="/contact/" style="color:inherit; text-decoration: underline;">send us a message</a>.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Sections -->
    <section class="section" style="background:var(--color-white)">
        <div class="container container-narrow">
            <div class="faq-categories">
                <?php foreach ($faqsByCategory as $category => $categoryFaqs): ?>
                <div class="faq-category">
                    <h2><?php echo htmlspecialchars($category); ?></h2>
                    <ul class="faq-list">
                        <?php foreach ($categoryFaqs as $faq): ?>
                        <li class="faq-item">
                            <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                                <span><?php echo htmlspecialchars($faq['q']); ?></span>
                                <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                            <div class="faq-answer">
                                <p><?php echo htmlspecialchars($faq['a']); ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <div class="container">
            <div class="cta-content">
                <div>
                    <span class="eyebrow">Still Have Questions?</span>
                    <h2>We're Here to Help</h2>
                    <p>Can't find the answer you're looking for? Call Drain Masters of the Palm Beaches and speak to a licensed plumber who can answer your specific question and provide a free, no-obligation estimate.</p>
                </div>
                <div class="cta-actions">
                    <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-primary btn-lg">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <a href="/contact/" class="btn btn-secondary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- FAQ Accordion Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function(item) {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', function() {
            const isOpen = item.classList.contains('is-open');

            // Close all other FAQ items
            faqItems.forEach(function(otherItem) {
                if (otherItem !== item) {
                    otherItem.classList.remove('is-open');
                    otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle current item
            if (isOpen) {
                item.classList.remove('is-open');
                question.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('is-open');
                question.setAttribute('aria-expanded', 'true');
            }
        });

        // Keyboard support
        question.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                question.click();
            }
        });
    });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
