<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'about';
$pageType    = 'about';

$pageTitle       = 'About Us | Drain Masters of the Palm Beaches';
$metaDescription = 'Learn about Drain Masters of the Palm Beaches — a locally owned Palm Springs, FL plumbing company specializing in drain cleaning, sewer repair, and emergency plumbing since 2023.';
$canonicalUrl    = $siteUrl . '/about/';

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
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $siteUrl . '/'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'About',
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
  .about-values { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: var(--space-lg); margin: var(--space-2xl) 0; }
  .about-values .value-card { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-lg); display: grid; gap: var(--space-sm); }
  .about-values .value-card svg { color: var(--color-accent-dark); }
  .about-values .value-card h3 { font-size: var(--font-size-lg); color: var(--color-ink); margin: 0; }
  .about-values .value-card p { margin: 0; color: var(--color-ink-2); line-height: 1.6; }

  .about-story { display: grid; gap: var(--space-xl); }
  .about-story p { line-height: 1.7; color: var(--color-ink-2); }

  .about-credentials { list-style: none; margin: var(--space-lg) 0 0; padding: 0; display: grid; gap: var(--space-sm); }
  .about-credentials li { display: flex; gap: var(--space-sm); align-items: flex-start; color: var(--color-ink-2); }
  .about-credentials svg { color: var(--color-accent-dark); flex: 0 0 auto; margin-top: 3px; }

  @media (max-width: 767px) {
    .about-values { grid-template-columns: 1fr; }
  }
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li aria-hidden="true" class="breadcrumb-sep">/</li>
            <li aria-current="page">About</li>
        </ol>
    </div>
</nav>

<main id="main-content">

    <!-- Hero -->
    <section class="hero hero--interior">
        <div class="container">
            <div class="hero-copy">
                <span class="eyebrow">About Drain Masters</span>
                <h1>Licensed Palm Springs Plumber Since 2023</h1>
                <p class="hero-answer">Drain Masters of the Palm Beaches is a locally owned plumbing company serving Palm Springs and Palm Beach County. We specialize in drain cleaning, sewer line repair, leak detection, and emergency plumbing—delivering fast, reliable service when you need it most.</p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="section" style="background:var(--color-white)">
        <div class="container">
            <div class="split">
                <div>
                    <?php echo renderPicture('owner-img_8820', 'Drain Masters of the Palm Beaches owner and team at a job site in Palm Springs, FL', 800, 600, '(min-width: 1024px) 50vw, 100vw', ['class' => 'img-diagonal']); ?>
                </div>
                <div class="about-story">
                    <div>
                        <span class="eyebrow">Our Story</span>
                        <h2>Built on a Foundation of Honest Work</h2>
                    </div>
                    <p>Drain Masters of the Palm Beaches was founded in 2023 by <?php echo htmlspecialchars($ownerName); ?>, a licensed Florida plumber who saw too many homeowners frustrated by overpriced quotes, missed appointments, and plumbing "fixes" that didn't last. We built this business around a simple idea: diagnose the real problem, quote it fairly, and fix it right the first time.</p>
                    <p>Palm Springs and the surrounding Palm Beach County communities have unique plumbing challenges—hard water that scales pipes, older homes with cast iron drains, and tree roots that invade sewer lines. We've made those issues our specialty, investing in the right tools (from high-pressure hydro jetters to electronic leak detection equipment) and the training to use them correctly.</p>
                    <p>Today, Drain Masters serves homeowners and businesses across the Palm Beaches with drain cleaning, sewer repair, leak detection, water heater service, and emergency plumbing. We're still locally owned, still owner-operated, and still committed to the same honest approach that started this company.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="section" style="background:var(--color-bg-alt)">
        <div class="container">
            <div class="section-head text-center">
                <span class="eyebrow">What We Stand For</span>
                <h2>How We Work</h2>
                <p class="section-answer">Every call, every job, every customer—we operate on the same core principles that built this business.</p>
            </div>
            <div class="about-values">
                <div class="value-card">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                    <h3>Honest Diagnosis</h3>
                    <p>We tell you what's actually wrong—not what costs the most to fix. If a simple repair will solve it, that's what we recommend.</p>
                </div>
                <div class="value-card">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    <h3>Same-Day Response</h3>
                    <p>Plumbing emergencies don't wait. We offer same-day and after-hours service across Palm Springs and the Palm Beaches so your problem gets fixed fast.</p>
                </div>
                <div class="value-card">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="m15 19-3 3-3-3"/><path d="m19 15 3-3-3-3"/><path d="M2 12h20"/><path d="m5 9 3-3 3 3"/><path d="m9 5 3-3 3 3"/></svg>
                    <h3>Upfront Pricing</h3>
                    <p>A free assessment and a clear price before work begins. No surprise fees, no hourly padding—you know what you're paying before we start.</p>
                </div>
                <div class="value-card">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
                    <h3>The Right Tools</h3>
                    <p>Professional drain cleaning requires professional equipment. We use powered cable machines, high-pressure hydro jetters, and camera inspection systems—not just a hand auger.</p>
                </div>
                <div class="value-card">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                    <h3>Local Expertise</h3>
                    <p>We're based in Palm Springs and serve the entire Palm Beach County area. We know the water, the soil, the homes, and the common plumbing issues in this region.</p>
                </div>
                <div class="value-card">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                    <h3>Guarantees Honored</h3>
                    <p>Our work is guaranteed. If a repair doesn't hold or a drain clogs again soon after we clear it, we come back and make it right—no argument.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Credentials -->
    <section class="section" style="background:var(--color-white)">
        <div class="container container-narrow">
            <div class="split-content">
                <div>
                    <span class="eyebrow">Qualifications</span>
                    <h2>Licensed, Insured & Ready to Serve</h2>
                    <p>Drain Masters of the Palm Beaches holds all state and local licensing required to provide plumbing services across Palm Beach County. We carry full liability insurance and workers' compensation coverage to protect your property and our team on every job.</p>
                    <ul class="about-credentials">
                        <li>
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                            <span><strong>Florida Licensed Plumber</strong> — fully licensed to provide drain cleaning, sewer repair, leak detection, and all residential plumbing services</span>
                        </li>
                        <li>
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                            <span><strong>Liability Insurance</strong> — general liability coverage protects your home during service</span>
                        </li>
                        <li>
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                            <span><strong>Workers' Compensation Coverage</strong> — so you're never liable if someone is injured on your property</span>
                        </li>
                        <li>
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                            <span><strong>Background Checked</strong> — every technician is vetted before entering your home</span>
                        </li>
                        <li>
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                            <span><strong>5.0-Star Google Rating</strong> — 6 verified customer reviews from Palm Springs and Palm Beach County homeowners</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <?php echo renderPicture('owner-img_8947', 'Drain Masters technician on a drain cleaning job in Palm Springs, FL', 800, 600, '(min-width: 1024px) 50vw, 100vw', []); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <div class="container">
            <div class="cta-content">
                <div>
                    <span class="eyebrow">Get Started Today</span>
                    <h2>Fast, Honest Plumbing Service You Can Trust</h2>
                    <p>Drain clog, sewer backup, or plumbing emergency? Drain Masters of the Palm Beaches is ready to help. Call now for same-day service or request a free estimate online.</p>
                </div>
                <div class="cta-actions">
                    <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-primary btn-lg">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <button type="button" class="btn btn-secondary btn-lg" data-open-estimate>Free Estimate</button>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
