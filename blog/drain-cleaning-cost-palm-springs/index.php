<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$currentPage = 'blog';
$pageType = 'blog';
$postSlug = 'drain-cleaning-cost-palm-springs';
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
                <p><strong>Quick answer:</strong> Professional drain cleaning in Palm Springs typically costs $150-$250 for a standard service call with cable snaking, $250-$400 for hydro jetting, and $350-$600+ for main sewer line work or video camera inspection. Most residential clogs fall in the $175-$300 range and take 1-2 hours.</p>
            </div>
        </div>
    </header>

    <div class="blog-post__body">
        <div class="container-narrow">
            <div class="prose">
                <p>
                    When a drain clogs in your Palm Springs home, the first question is usually "how much will this cost to fix?" The honest answer depends on what's causing the blockage, how deep it is, and what equipment is needed to clear it. Here's what you can expect to pay and what factors affect the final bill.
                </p>

                <h2>What Affects Drain Cleaning Costs?</h2>

                <h3>Location and Accessibility</h3>
                <p>
                    A clogged kitchen sink or bathroom drain is usually the cheapest fix—$150-$200—because the blockage is close to the fixture and easy to reach with a hand snake or small auger. Main sewer line clogs cost more ($300-$600) because they require professional-grade equipment and outdoor access through cleanout ports or vent stacks.
                </p>
                <p>
                    If your home doesn't have a cleanout access point, the plumber may need to remove a toilet or access the line through the roof vent, adding $50-$150 to the job.
                </p>

                <h3>Type of Blockage</h3>
                <p>
                    Soft blockages (grease, hair, soap scum) clear quickly with cable snaking. Hard blockages (tree roots, mineral buildup, collapsed pipes) often require hydro jetting or, in severe cases, pipe repair or replacement. If your drain has been slow for months and suddenly backs up completely, it's more likely a stubborn blockage that needs aggressive treatment.
                </p>

                <h3>Equipment Required</h3>
                <p>
                    Basic cable snaking ($150-$250) works for most residential clogs. Hydro jetting ($250-$400) uses high-pressure water to scour pipe walls clean and is recommended for recurring clogs, grease buildup, or root intrusion. Video camera inspection ($200-$350) adds cost but shows exactly what's blocking the line and whether the pipe itself is damaged.
                </p>

                <h2>Typical Drain Cleaning Costs in Palm Springs</h2>
                <ul>
                    <li><strong>Sink or tub drain:</strong> $150-$250</li>
                    <li><strong>Toilet clog:</strong> $175-$275</li>
                    <li><strong>Main sewer line (cable):</strong> $250-$400</li>
                    <li><strong>Main sewer line (hydro jetting):</strong> $350-$600</li>
                    <li><strong>Video camera inspection:</strong> $200-$350</li>
                    <li><strong>Emergency after-hours service:</strong> Add $100-$200</li>
                </ul>

                <h2>When to Skip DIY and Call a Pro</h2>
                <p>
                    A plunger and a $15 hand snake from the hardware store can clear simple hair or food clogs near the drain opening. But if the blockage is deep in the line, you risk pushing it further down or damaging old pipes with too much force. Signs you need professional help:
                </p>
                <ul>
                    <li>Multiple drains backing up at once (main line issue)</li>
                    <li>Water backing up into other fixtures when you flush a toilet</li>
                    <li>Gurgling sounds from drains when water runs elsewhere</li>
                    <li>Recurring clogs in the same drain every few weeks</li>
                    <li>Sewage odor in the yard or near cleanout ports</li>
                </ul>

                <h2>How to Avoid Drain Cleaning Scams</h2>
                <p>
                    Drain cleaning is a common target for unlicensed operators and high-pressure sales tactics. Protect yourself by asking these questions before hiring:
                </p>
                <ul>
                    <li>Are you licensed and insured in Florida? (Ask for proof.)</li>
                    <li>What's your diagnostic fee, and does it apply to the repair if I hire you?</li>
                    <li>Will you give me a written estimate before starting work?</li>
                    <li>What's included in that price, and what could add to it?</li>
                </ul>
                <p>
                    Beware of flat-rate pricing that sounds too good—$99 drain cleaning often comes with hidden fees or aggressive upselling once the plumber arrives. Honest companies charge for their time and equipment, not bait-and-switch tactics.
                </p>

                <h2>What We Charge at Drain Masters</h2>
                <p>
                    We charge a $99 service call fee to diagnose the problem, which includes the first hour of labor. If you approve the work, that fee applies to your total. Most standard drain clogs (sinks, tubs, toilets) run $175-$275 total. Main sewer line work depends on the severity—we'll camera-inspect the line if needed and give you a written quote before we start.
                </p>
                <p>
                    We don't upsell services you don't need. If a $200 cable snaking will clear your drain, we won't push you toward a $500 hydro jetting job. And if we find a bigger problem—like a broken pipe or root invasion—we'll show you the camera footage and explain your options honestly.
                </p>
            </div>

            <div class="blog-post__faq">
                <h2>Common Questions About Drain Cleaning Costs</h2>
                <?php
                $faqs = [
                    [
                        'q' => 'Does homeowners insurance cover drain cleaning?',
                        'a' => 'Usually not. Most policies exclude routine maintenance and clogs caused by normal use. They may cover sudden pipe bursts or sewer backups if they result from a covered peril (like a tree falling and breaking the line), but not slow drains or grease buildup. Check your policy or call your insurer to confirm.'
                    ],
                    [
                        'q' => 'How can I prevent future clogs and save money?',
                        'a' => 'Avoid pouring grease down kitchen drains, use drain screens to catch hair, and run hot water after washing dishes. Schedule professional drain cleaning every 1-2 years as preventative maintenance—clearing buildup before it becomes a full blockage costs less than emergency service. If you have mature trees near your sewer line, ask about root treatment options.'
                    ],
                    [
                        'q' => 'Is hydro jetting worth the extra cost?',
                        'a' => 'For recurring clogs, yes. Cable snaking punches a hole through the blockage but leaves residue on pipe walls. Hydro jetting scours the entire pipe clean, removing grease, mineral scale, and small roots. It lasts longer and reduces the chance of another clog in the same spot within months. For a one-time hair clog, snaking is usually enough.'
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
                <h3>Need Drain Cleaning in Palm Springs?</h3>
                <p>Fast, honest service with upfront pricing. Call us or request a free estimate.</p>
                <a href="tel:<?php echo formatPhone($phone); ?>" class="btn-secondary btn-block">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    Call <?php echo $phone; ?>
                </a>
                <button class="btn-primary btn-block" data-open-estimate>Get Free Estimate</button>
            </div>

            <div class="sidebar-card">
                <h3>Related Services</h3>
                <ul class="sidebar-links">
                    <li><a href="/services/drain-cleaning/">Drain Cleaning</a></li>
                    <li><a href="/services/hydro-jetting/">Hydro Jetting</a></li>
                    <li><a href="/services/sewer-line-repair-replacement/">Sewer Line Repair</a></li>
                    <li><a href="/services/emergency-plumbing/">Emergency Plumbing</a></li>
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
            "keywords": "drain cleaning cost, Palm Springs FL, plumber prices, hydro jetting cost, sewer cleaning"
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
