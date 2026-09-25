<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'legal';
$pageType    = 'other';

$pageTitle       = 'Cookie Policy | Drain Masters of the Palm Beaches';
$metaDescription = 'How Drain Masters of the Palm Beaches uses cookies and tracking technologies on our website.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';

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
                    'name' => 'Cookie Policy',
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
            <li aria-current="page">Cookie Policy</li>
        </ol>
    </div>
</nav>

<main id="main-content">

    <section class="hero hero--legal" aria-label="Cookie Policy">
        <div class="container">
            <div class="hero-copy">
                <span class="eyebrow">Legal</span>
                <h1>Cookie Policy</h1>
                <p class="hero-answer">Last Updated: <?php echo $lastUpdated; ?></p>
            </div>
        </div>
    </section>

    <article class="legal-prose">

        <h2>1. What Are Cookies?</h2>
        <p>Cookies are small text files stored on your device when you visit a website. They are used to make websites work more efficiently and provide information to site owners about how visitors use the site.</p>

        <h2>2. Cookies We Use</h2>

        <h3>Strictly Necessary</h3>
        <p>Essential for site functionality (form submission, security). These cannot be disabled. Example: session cookies during form submission.</p>

        <h3>Analytics (Google Analytics 4)</h3>
        <p>We use Google Analytics 4 to understand how visitors use our site. GA4 sets cookies prefixed with <code>_ga</code> and <code>_gid</code>. Data is anonymized via IP truncation.</p>

        <h3>Third-Party Embeds</h3>
        <p>Our site may embed tools and content from third parties (industry partners, review widgets, maps, etc.). These services may set their own cookies subject to their own privacy policies.</p>

        <h2>3. How to Control Cookies</h2>
        <p>Most browsers allow you to view, delete, or block cookies. You can block third-party cookies or block all cookies (note: site functionality may break). Browser-specific instructions are available from Google, Mozilla, Apple, and Microsoft.</p>

        <h2>4. Opt Out of Google Analytics</h2>
        <p>You can opt out of GA4 tracking site-wide by installing the Google Analytics Opt-out Browser Add-on at <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">https://tools.google.com/dlpage/gaoptout</a>.</p>

        <h2>5. Our Cookie Notice</h2>
        <p>We display a brief banner notifying visitors of our cookie use. Once dismissed, the banner is suppressed for future visits via localStorage. You can re-enable the banner by clearing your browser's site data.</p>

        <h2>6. Changes to This Policy</h2>
        <p>We may update this Cookie Policy from time to time. The "Last Updated" date at the top will reflect the most recent change.</p>

        <h2>7. Contact Us</h2>
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
