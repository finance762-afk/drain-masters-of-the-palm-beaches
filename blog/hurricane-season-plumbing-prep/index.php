<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$currentPage = 'blog';
$pageType = 'blog';
$postSlug = 'hurricane-season-plumbing-prep';
$post = array_values(array_filter($blogPosts, fn($p) => $p['slug'] === $postSlug))[0] ?? null;

if (!$post) {
    header('HTTP/1.1 404 Not Found');
    include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
    exit;
}

$pageTitle = $post['title'] . " | $siteName";
$metaDescription = $post['excerpt'];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<article class="blog-post">
    <header class="blog-post__header">
        <div class="container-narrow">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="/">Home</a>
                <span class="breadcrumb-sep">/</span>
                <a href="/blog/">Blog</a>
                <span class="breadcrumb-sep">/</span>
                <span aria-current="page"><?php echo htmlspecialchars($post['title']); ?></span>
            </nav>

            <div class="blog-post__meta">
                <span class="blog-post__category"><?php echo htmlspecialchars($post['category']); ?></span>
                <span class="blog-post__dot">•</span>
                <time datetime="<?php echo $post['dateISO']; ?>"><?php echo $post['date']; ?></time>
                <span class="blog-post__dot">•</span>
                <span><?php echo $post['readtime']; ?></span>
            </div>

            <h1><?php echo htmlspecialchars($post['title']); ?></h1>

            <div class="answer-block">
                <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                <p><strong>Quick answer:</strong> Before hurricane season hits Palm Beach County (June 1 - November 30), shut off exterior water supplies, clear yard drains and gutters, anchor outdoor fixtures, know where your main water shutoff is, and consider a backwater valve to prevent sewer backups during flooding. These steps take 1-2 hours and can prevent thousands in water damage.</p>
            </div>
        </div>
    </header>

    <div class="blog-post__body">
        <div class="container-narrow">
            <div class="prose">
                <p>
                    Hurricane season in South Florida runs from June through November, and Palm Beach County sees its share of tropical storms and near-miss hurricanes. While most homeowners focus on boarding windows and stocking supplies, your plumbing system needs attention too—flooding and power outages can cause sewer backups, burst pipes, and contaminated water that turns a storm cleanup into a months-long insurance fight.
                </p>

                <h2>What Hurricane Conditions Do to Plumbing</h2>
                <p>
                    Heavy rain overwhelms municipal sewer systems, causing water to back up through floor drains and toilets. Wind-driven debris clogs yard drains and downspouts, turning your property into a temporary pond. Power outages disable sump pumps and well pumps, leaving basements vulnerable to flooding. And post-storm water main breaks can introduce contaminated water into your supply lines.
                </p>
                <p>
                    The damage isn't always immediate. Water that pools around your home's foundation can seep into slab cracks and cause leaks weeks later. Tree roots that invade sewer lines during normal conditions can rupture entirely when saturated soil shifts during a storm. And corroded pipes that held up under normal pressure can burst when water surges through the system after power is restored.
                </p>

                <h2>Pre-Storm Plumbing Checklist</h2>

                <h3>1. Shut Off Exterior Water Supplies</h3>
                <p>
                    Turn off hose bibs, irrigation systems, and outdoor sinks 24-48 hours before the storm arrives. Flying debris can shear off exterior faucets and flood your yard—or worse, send pressurized water into your walls if the break happens inside the exterior wall.
                </p>

                <h3>2. Clear Yard Drains and Downspouts</h3>
                <p>
                    Walk your property and remove leaves, dirt, and debris from every drain opening, gutter, and downspout. Even a small clog can redirect stormwater toward your foundation instead of away from it. If you have French drains or a sump pump discharge line, make sure they're clear and draining properly.
                </p>

                <h3>3. Anchor or Remove Loose Outdoor Fixtures</h3>
                <p>
                    Pool equipment, outdoor showers, and decorative fountains can become projectiles in high winds. If you can't bring them inside, turn off their water supply and secure them with straps or anchors. The last thing you want is a heavy fixture crashing through a window with water still flowing.
                </p>

                <h3>4. Locate Your Main Water Shutoff</h3>
                <p>
                    Every adult in your household should know where the main water shutoff valve is and how to turn it off. In Palm Springs, it's usually near the street in a concrete or plastic box, or inside your garage near the water heater. If a pipe bursts during the storm, you may have only minutes to stop the flow before serious damage occurs.
                </p>

                <h3>5. Fill Bathtubs and Containers with Clean Water</h3>
                <p>
                    If the municipal water system loses power or becomes contaminated, you'll need water for flushing toilets and washing. Fill bathtubs, sinks, and clean containers before the storm. Once the water is off or the boil-water order goes into effect, it's too late.
                </p>

                <h3>6. Test Your Sump Pump (If You Have One)</h3>
                <p>
                    Pour a bucket of water into the sump pit to make sure the pump kicks on and drains properly. If it's slow or doesn't start, replace it before the storm—hurricane season is the worst time to discover your basement flood protection doesn't work.
                </p>

                <h3>7. Consider a Backwater Valve</h3>
                <p>
                    If your home has a history of sewer backups during heavy rain, a backwater valve (or backflow preventer) can stop contaminated water from entering through floor drains and toilets. Installation takes a few hours and costs $500-$1500, but it can prevent tens of thousands in cleanup and health hazards.
                </p>

                <h2>What to Do During the Storm</h2>
                <p>
                    Once the storm hits, stay inside and away from windows. Do not use plumbing during the height of the storm unless absolutely necessary—power surges and pressure changes can damage fixtures and water heaters. If you lose power, avoid flushing toilets more than necessary, as your sewer system may not be draining properly without power to lift stations.
                </p>
                <p>
                    If you hear running water inside your walls or see water pooling where it shouldn't be, shut off the main water supply immediately and wait for the storm to pass before investigating. Do not attempt outdoor repairs during high winds or flooding.
                </p>

                <h2>After the Storm: What to Check</h2>
                <ul>
                    <li><strong>Inspect for leaks:</strong> Walk through your home and check under sinks, around water heaters, and near exterior walls for new leaks or water stains.</li>
                    <li><strong>Test water quality:</strong> If power was out for more than a few hours, run cold water taps for 2-3 minutes to flush out stagnant water. Follow any boil-water orders issued by the county.</li>
                    <li><strong>Check your water heater:</strong> If it was submerged or knocked loose, do not turn it back on—call a plumber to inspect it first. Gas water heaters require special attention after flooding.</li>
                    <li><strong>Look for sewer backup signs:</strong> Sewage odor, slow drains, or water backing up into tubs when you flush are all signs of a blocked or damaged sewer line. Stop using water and call a plumber immediately.</li>
                    <li><strong>Inspect yard drainage:</strong> Make sure French drains, yard drains, and downspouts are still intact and draining away from your foundation.</li>
                </ul>

                <h2>When to Call a Plumber</h2>
                <p>
                    If you discover a burst pipe, sewer backup, or major leak after the storm, shut off your main water supply and call a licensed plumber. Do not attempt DIY repairs on gas lines, sewer lines, or water heaters—those require professional tools and licensing. And if your home flooded, have a plumber inspect all fixtures and supply lines before resuming normal use. Contaminated floodwater can introduce bacteria into your plumbing system that standard cleaning won't remove.
                </p>
            </div>

            <div class="blog-post__faq">
                <h2>Hurricane Plumbing FAQs</h2>
                <?php
                $faqs = [
                    [
                        'q' => 'Should I turn off my water heater before a hurricane?',
                        'a' => 'If you\'re evacuating or expect flooding, yes. Turn off the power (circuit breaker for electric, gas valve for gas) and shut off the cold water supply to the heater. This prevents damage if the unit is knocked over or submerged. Do not turn it back on until a professional inspects it if it was flooded.'
                    ],
                    [
                        'q' => 'What should I do if my toilet backs up during the storm?',
                        'a' => 'Stop using all plumbing immediately—flushing more will make it worse. If water is rising in the bowl or backing up into other drains, it\'s a sewer line issue, not a simple clog. Wait until the storm passes and the municipal system is back online, then call a plumber if the problem persists.'
                    ],
                    [
                        'q' => 'How do I know if my water is safe to drink after a hurricane?',
                        'a' => 'Follow Palm Beach County\'s boil-water advisories, which are issued after major storms if the water system is compromised. Even if no advisory is issued, run cold taps for 2-3 minutes to flush stagnant water from your pipes. If your home flooded, have your well tested (if applicable) or ask a plumber about backflow contamination before drinking tap water.'
                    ],
                ];
                ?>
                <?php foreach ($faqs as $faq): ?>
                <details class="faq-item">
                    <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
                    <div class="faq-answer">
                        <p><?php echo $faq['a']; ?></p>
                    </div>
                </details>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Sidebar CTA -->
        <aside class="blog-post__sidebar">
            <div class="sidebar-card sidebar-card--cta">
                <h3>Storm Damage or Emergency Plumbing?</h3>
                <p>We're here to help after the storm. Call for emergency repairs or schedule an inspection.</p>
                <a href="tel:<?php echo formatPhone($phone); ?>" class="btn-secondary btn-block">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    Call <?php echo $phone; ?>
                </a>
                <button class="btn-primary btn-block" data-open-estimate>Request Service</button>
            </div>

            <div class="sidebar-card">
                <h3>Related Services</h3>
                <ul class="sidebar-links">
                    <li><a href="/services/emergency-plumbing/">Emergency Plumbing</a></li>
                    <li><a href="/services/sewer-line-repair-replacement/">Sewer Line Repair</a></li>
                    <li><a href="/services/leak-detection-slab-leak-repair/">Leak Detection</a></li>
                    <li><a href="/services/backflow-prevention/">Backflow Prevention</a></li>
                </ul>
            </div>
        </aside>
    </div>

    <!-- Related Articles -->
    <section class="blog-post__related">
        <div class="container-narrow">
            <h2>Related Articles</h2>
            <div class="related-posts">
                <?php
                $relatedPosts = array_filter($blogPosts, fn($p) => $p['slug'] !== $postSlug);
                foreach (array_slice($relatedPosts, 0, 2) as $related):
                ?>
                <article class="related-post-card">
                    <a href="/blog/<?php echo $related['slug']; ?>/">
                        <img src="<?php echo $related['image']; ?>" alt="<?php echo htmlspecialchars($related['alt']); ?>" width="960" height="540" loading="lazy">
                    </a>
                    <div class="related-post-content">
                        <span class="related-post-category"><?php echo htmlspecialchars($related['category']); ?></span>
                        <h3><a href="/blog/<?php echo $related['slug']; ?>/"><?php echo htmlspecialchars($related['title']); ?></a></h3>
                        <p><?php echo htmlspecialchars($related['excerpt']); ?></p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</article>

<link rel="stylesheet" href="/assets/css/blog-post.css?v=1">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "BlogPosting",
            "headline": "<?php echo htmlspecialchars($post['title']); ?>",
            "description": "<?php echo htmlspecialchars($post['excerpt']); ?>",
            "image": "<?php echo $siteUrl . $post['image']; ?>",
            "datePublished": "<?php echo $post['dateISO']; ?>",
            "dateModified": "<?php echo $post['dateISO']; ?>",
            "author": {
                "@type": "Organization",
                "name": "<?php echo htmlspecialchars($siteName); ?>",
                "@id": "<?php echo $siteUrl; ?>/#organization"
            },
            "publisher": {
                "@id": "<?php echo $siteUrl; ?>/#organization"
            },
            "keywords": "hurricane preparation, plumbing, South Florida, Palm Beach County, storm prep, flood prevention"
        },
        {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "<?php echo $siteUrl; ?>/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Blog",
                    "item": "<?php echo $siteUrl; ?>/blog/"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "<?php echo htmlspecialchars($post['title']); ?>"
                }
            ]
        },
        {
            "@type": "FAQPage",
            "mainEntity": [
                <?php foreach ($faqs as $i => $faq): ?>
                {
                    "@type": "Question",
                    "name": "<?php echo htmlspecialchars($faq['q']); ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo htmlspecialchars($faq['a']); ?>"
                    }
                }<?php if ($i < count($faqs) - 1) echo ','; ?>
                <?php endforeach; ?>
            ]
        }
    ]
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
