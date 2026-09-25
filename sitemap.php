<?php
/**
 * sitemap.php — Dynamic sitemap generator
 * Served at /sitemap.xml via .htaccess rewrite
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Homepage -->
    <url>
        <loc><?php echo $siteUrl; ?>/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Service Pages -->
    <?php foreach ($services as $svc): ?>
    <url>
        <loc><?php echo $siteUrl; ?>/services/<?php echo $svc['slug']; ?>/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php endforeach; ?>

    <!-- Service Areas Overview -->
    <url>
        <loc><?php echo $siteUrl; ?>/service-areas/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <!-- Individual Service Areas -->
    <?php foreach ($serviceAreas as $area): ?>
    <?php
    $areaSlug = getAreaSlug($area);
    $areaPath = $_SERVER['DOCUMENT_ROOT'] . '/service-areas/' . $areaSlug;
    if (is_dir($areaPath)):
    ?>
    <url>
        <loc><?php echo $siteUrl; ?>/service-areas/<?php echo $areaSlug; ?>/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <?php endif; ?>
    <?php endforeach; ?>

    <!-- About -->
    <url>
        <loc><?php echo $siteUrl; ?>/about/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <!-- Blog Index -->
    <url>
        <loc><?php echo $siteUrl; ?>/blog/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>

    <!-- Blog Posts -->
    <?php if (!empty($blogPosts)): ?>
    <?php foreach ($blogPosts as $post): ?>
    <url>
        <loc><?php echo $siteUrl; ?>/blog/<?php echo $post['slug']; ?>/</loc>
        <lastmod><?php echo $post['dateISO']; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <?php endforeach; ?>
    <?php endif; ?>

    <!-- FAQ -->
    <url>
        <loc><?php echo $siteUrl; ?>/faq/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    <!-- Contact -->
    <url>
        <loc><?php echo $siteUrl; ?>/contact/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.6</priority>
    </url>

    <!-- Legal Pages -->
    <url>
        <loc><?php echo $siteUrl; ?>/privacy-policy/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc><?php echo $siteUrl; ?>/terms/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc><?php echo $siteUrl; ?>/cookie-policy/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc><?php echo $siteUrl; ?>/accessibility/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
</urlset>
