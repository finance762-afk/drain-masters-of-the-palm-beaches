<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$currentPage = 'blog';
$pageType = 'blog';
$pageTitle = "Plumbing Tips & Advice Blog | $siteName | Palm Springs, FL";
$metaDescription = "Expert plumbing advice, maintenance tips, and cost guides for Palm Beach County homeowners. Learn how to protect your drains, avoid costly repairs, and keep your plumbing running smoothly.";
$pageDescription = $metaDescription;
$canonicalUrl = $siteUrl . '/blog/';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="hero hero--interior">
    <div class="container-narrow">
        <div class="hero-content">
            <p class="eyebrow">Plumbing Insights</p>
            <h1>Expert Tips from Your Local Plumbers</h1>
            <p class="hero-answer">
                Practical advice on drain maintenance, cost-saving tips, and how to handle Florida's unique plumbing challenges—all from our team's <?php echo $yearsInBusiness; ?> years of hands-on experience in the Palm Beaches.
            </p>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="section">
    <div class="container">
        <div class="blog-grid">
            <?php foreach ($blogPosts as $post): ?>
            <article class="blog-card">
                <a href="/blog/<?php echo $post['slug']; ?>/" class="blog-card-image-link">
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['alt']); ?>" width="960" height="540" loading="lazy" class="blog-card-image">
                </a>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-card-category"><?php echo htmlspecialchars($post['category']); ?></span>
                        <span class="blog-card-dot">•</span>
                        <time datetime="<?php echo $post['dateISO']; ?>"><?php echo $post['date']; ?></time>
                        <span class="blog-card-dot">•</span>
                        <span><?php echo $post['readtime']; ?></span>
                    </div>
                    <h2 class="blog-card-title">
                        <a href="/blog/<?php echo $post['slug']; ?>/">
                            <?php echo htmlspecialchars($post['title']); ?>
                        </a>
                    </h2>
                    <p class="blog-card-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <a href="/blog/<?php echo $post['slug']; ?>/" class="blog-card-link">
                        Read Article
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container">
        <div class="cta-content">
            <h2>Have a Plumbing Question?</h2>
            <p>Our team is here to help. Call for expert advice or schedule a service call today.</p>
        </div>
        <div class="cta-actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn-secondary">
                <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                Call <?php echo $phone; ?>
            </a>
            <button class="btn-primary" data-open-estimate>Get Free Estimate</button>
        </div>
    </div>
</section>

<style>
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: var(--space-2xl);
}

.blog-card {
    background: var(--color-bg);
    border: 1px solid var(--color-border);
    border-radius: var(--radius);
    overflow: hidden;
    transition: var(--transition);
}

.blog-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
}

.blog-card-image-link {
    display: block;
    overflow: hidden;
}

.blog-card-image {
    width: 100%;
    height: 240px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.blog-card:hover .blog-card-image {
    transform: scale(1.05);
}

.blog-card-content {
    padding: var(--space-lg);
}

.blog-card-meta {
    display: flex;
    align-items: center;
    gap: var(--space-xs);
    font-size: var(--fs-sm);
    color: var(--color-text-light);
    margin-bottom: var(--space-md);
}

.blog-card-category {
    font-weight: 600;
    color: var(--color-accent);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-size: 0.75rem;
}

.blog-card-dot {
    opacity: 0.5;
}

.blog-card-title {
    font-size: var(--fs-h4);
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: var(--space-sm);
}

.blog-card-title a {
    color: var(--color-text);
    transition: var(--transition);
}

.blog-card-title a:hover {
    color: var(--color-accent);
}

.blog-card-excerpt {
    color: var(--color-text-light);
    line-height: 1.6;
    margin-bottom: var(--space-md);
}

.blog-card-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-xs);
    color: var(--color-accent);
    font-weight: 600;
    font-size: var(--fs-sm);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    transition: var(--transition);
}

.blog-card-link:hover {
    gap: var(--space-sm);
}

@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "<?php echo htmlspecialchars($siteName); ?> Blog",
    "description": "<?php echo htmlspecialchars($metaDescription); ?>",
    "url": "<?php echo $siteUrl; ?>/blog/",
    "publisher": {
        "@id": "<?php echo $siteUrl; ?>/#organization"
    }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
