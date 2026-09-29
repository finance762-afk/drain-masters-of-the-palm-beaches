<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // Compute canonical URL from request URI
    // Always the production origin ($siteUrl = https://$domain), never the request's scheme/host: http://, www.
    // and CDN/preview hosts must all point Google at the one live URL. A page that set $canonicalUrl keeps it.
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    if (empty($canonicalUrl)) $canonicalUrl = $siteUrl . strtok($uri, '?');

    // Build page title
    $pageTitle = isset($pageTitle) ? $pageTitle : "$siteName | $primaryKeyword | {$address['city']}, {$address['state']}";
    $metaDescription = isset($metaDescription) ? $metaDescription : "Drain cleaning and plumbing in {$address['city']}, FL. Drain Masters handles drains, sewers, leaks, water heaters and emergencies. Call $phone.";
    ?>

    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:image" content="<?php echo $siteUrl; ?>/assets/images/og-image-v2.jpg">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
    <meta property="og:locale" content="en_US">

    <?php if (isset($noindex) && $noindex): ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">

    <!-- Font preload (v6.2 — self-hosted, heading face only) -->
    <link rel="preload" href="/assets/fonts/bricolage-grotesque.woff2" as="font" type="font/woff2" crossorigin>

    <?php if (!empty($heroPreload)): ?>
    <!-- Hero image preload (v6.3 — avif with srcset) -->
    <link rel="preload" as="image" type="image/avif" imagesrcset="<?php echo $heroPreload['srcset']; ?>" imagesizes="<?php echo $heroPreload['sizes']; ?>" fetchpriority="high">
    <?php endif; ?>

    <!-- Critical CSS (v6.3 — inline, then async load framework.css) -->
    <style><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/critical.css'; ?></style>
    <link rel="preload" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>"></noscript>

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Plumber",
        "@id": "<?php echo $siteUrl; ?>/#organization",
        "name": "<?php echo htmlspecialchars($siteName); ?>",
        "url": "<?php echo $siteUrl; ?>",
        "telephone": "<?php echo $phone; ?>",
        "email": "<?php echo $email; ?>",
        "description": "<?php echo htmlspecialchars($metaDescription); ?>",
        "address": {
            "@type": "PostalAddress",
            <?php if ($addressPublic): ?>
            "streetAddress": "<?php echo $address['street']; ?>",
            <?php endif; ?>
            "addressLocality": "<?php echo $address['city']; ?>",
            "addressRegion": "<?php echo $address['state']; ?>",
            "postalCode": "<?php echo $address['zip']; ?>",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "26.6343",
            "longitude": "-80.0967"
        },
        "hasMap": "<?php echo $gbpProfileUrl; ?>",
        "image": "<?php echo $siteUrl; ?>/assets/images/og-image-v2.jpg",
        "priceRange": "$$",
        "areaServed": [
            <?php
            $areaCount = count($serviceAreas);
            foreach ($serviceAreas as $index => $area):
            ?>
            {
                "@type": "City",
                "name": "<?php echo htmlspecialchars($area); ?>",
                "containedInPlace": {
                    "@type": "State",
                    "name": "Florida"
                }
            }<?php if ($index < $areaCount - 1) echo ','; ?>
            <?php endforeach; ?>
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Plumbing Services",
            "itemListElement": [
                <?php
                $serviceCount = count($services);
                foreach ($services as $index => $svc):
                ?>
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "<?php echo htmlspecialchars($svc['name']); ?>",
                        "description": "<?php echo htmlspecialchars($svc['description']); ?>"
                    }
                }<?php if ($index < $serviceCount - 1) echo ','; ?>
                <?php endforeach; ?>
            ]
        }
    }
    </script>

    <!-- Google Analytics (placeholder — replace with actual ID post-launch) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo $googleAnalyticsId; ?>');
    </script> -->

    <script>
        // Remove no-js class for CSS feature detection
        document.documentElement.classList.remove('no-js');
    </script>
  <?php if (!empty($googleAnalyticsId) && preg_match('/^G-[A-Z0-9]{6,}$/', $googleAnalyticsId) && strpos($googleAnalyticsId, 'XXXX') === false): ?>
  <!-- Google Analytics 4 (ga4-fleet) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId, ENT_QUOTES, 'UTF-8'); ?>"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?php echo htmlspecialchars($googleAnalyticsId, ENT_QUOTES, 'UTF-8'); ?>');</script>
  <?php endif; ?>
</head>
<body>
