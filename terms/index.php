<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'legal';
$pageType    = 'other';

$pageTitle       = 'Terms of Service | Drain Masters of the Palm Beaches';
$metaDescription = 'Terms of Service governing use of drainmastersofthepalmbeaches.com and engagement of Drain Masters of the Palm Beaches for plumbing services.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/terms/';

$lastUpdated = date('F j, Y');

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
                    'name' => 'Terms of Service',
                    'item' => $canonicalUrl
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li aria-hidden="true" class="breadcrumb-sep">/</li>
            <li aria-current="page">Terms of Service</li>
        </ol>
    </div>
</nav>

<main id="main-content">

    <section class="hero hero--legal" aria-label="Terms of Service">
        <div class="container">
            <div class="hero-copy">
                <span class="eyebrow">Legal</span>
                <h1>Terms of Service</h1>
                <p class="hero-answer">Last Updated: <?php echo $lastUpdated; ?></p>
            </div>
        </div>
    </section>

    <article class="legal-prose">

        <h2>1. Agreement to Terms</h2>
        <p>By accessing or using <?php echo $domain; ?> or engaging <?php echo htmlspecialchars($siteName); ?> for services, you agree to these Terms of Service. If you do not agree, do not use this site or our services.</p>

        <h2>2. Use of This Website</h2>
        <p>You may use this Site for personal, non-commercial purposes to learn about our services and contact us.</p>
        <p>You may not:</p>
        <ul>
            <li>Use the Site for unlawful purposes</li>
            <li>Attempt to access non-public systems</li>
            <li>Scrape or copy content without written permission</li>
            <li>Submit false information through our contact form</li>
            <li>Use automated systems to extract data</li>
        </ul>

        <h2>3. Service Estimates and Quotes</h2>
        <p>All estimates are based on information provided and conditions visible at the time of inspection. Final pricing may differ if:</p>
        <ul>
            <li>Project scope changes</li>
            <li>Hidden damage is discovered</li>
            <li>Material costs change between estimate and project start</li>
            <li>Code requirements differ from initial assumptions</li>
        </ul>
        <p>Verbal quotes are non-binding. Only written, signed contracts constitute a final agreement.</p>

        <h2>4. Project Work</h2>
        <ul>
            <li>Work is governed by a written contract specific to each job.</li>
            <li>We comply with applicable <?php echo $address['state']; ?> state and local building codes.</li>
            <li>Work is performed by <?php echo htmlspecialchars($siteName); ?> employees and qualified subcontractors.</li>
            <li>All workers carry workers' compensation insurance as required by <?php echo $address['state']; ?> law.</li>
            <li>We are licensed and insured to operate in the state of <?php echo $address['state']; ?>.</li>
        </ul>

        <h2>5. Warranties</h2>
        <p>Workmanship warranties are detailed in your project contract. Manufacturer warranties on materials are provided by those manufacturers and pass through to you upon project completion.</p>
        <p>Warranties exclude:</p>
        <ul>
            <li>Acts of God beyond manufacturer ratings</li>
            <li>Damage from neglect or alteration by others</li>
            <li>Pre-existing conditions disclosed prior to work</li>
        </ul>

        <h2>6. Payment Terms</h2>
        <p>Payment terms are specified in your project contract. Standard terms include:</p>
        <ul>
            <li>A deposit at contract signing</li>
            <li>Progress payments at milestones where applicable</li>
            <li>Final balance due upon project completion</li>
        </ul>
        <p>We accept check, electronic transfer, and financing through approved third-party providers. Past-due balances may accrue interest as permitted by <?php echo $address['state']; ?> law.</p>

        <h2>7. Cancellation</h2>
        <p>Cancellation terms are specified in your contract. Generally:</p>
        <ul>
            <li><strong>Cancellation prior to materials ordered:</strong> deposit refunded minus administrative costs</li>
            <li><strong>Cancellation after materials ordered:</strong> deposit forfeited; materials become customer property</li>
            <li><strong>Cancellation after work begins:</strong> payment due for work completed plus materials</li>
        </ul>

        <h2>8. Insurance Claim Work</h2>
        <p>For insurance restoration projects, payment terms are typically structured around your insurance carrier's payment schedule. We do NOT serve as a public adjuster or legal representative. We provide repair estimates and complete approved repairs only. Negotiation of claim values and policy interpretation is the homeowner's responsibility.</p>

        <h2>9. Limitation of Liability</h2>
        <p>To the maximum extent permitted by <?php echo $address['state']; ?> law, <?php echo htmlspecialchars($siteName); ?>'s total liability for any claim related to the Site or our services shall not exceed the amount you paid for the specific service giving rise to the claim. We are not liable for indirect, incidental, special, or consequential damages.</p>

        <h2>10. Intellectual Property</h2>
        <p>All content on this Site — text, graphics, photographs, logos — is owned by <?php echo htmlspecialchars($siteName); ?> or used with permission, and is protected by copyright. You may not reproduce, distribute, or create derivative works without written permission.</p>

        <h2>11. Governing Law and Disputes</h2>
        <p>These Terms are governed by the laws of the State of <?php echo $address['state']; ?> without regard to conflict-of-laws principles. Any disputes shall be resolved in the state or federal courts located in <?php echo $address['city']; ?>, <?php echo $address['state']; ?>.</p>

        <h2>12. Changes to These Terms</h2>
        <p>We may update these Terms at any time. The "Last Updated" date will reflect the most recent version. Continued use of the Site after updates constitutes acceptance of revised Terms.</p>

        <h2>13. Contact Us</h2>
        <p>
            <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
            Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
            Phone: <a href="tel:<?php echo formatPhone($phone); ?>"><?php echo $phone; ?></a><br>
            <?php if ($addressPublic): ?>
            Address: <?php echo $address['street']; ?>, <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?>
            <?php endif; ?>
        </p>

        <div class="legal-disclaimer">
            This document is provided as a general template. We recommend reviewing with a licensed <?php echo $address['state']; ?> attorney before publication.
        </div>

    </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
