<?php
/**
 * includes/service-body.php — shared editorial body for /services/{slug}/ pages.
 * Included by each service page AFTER the inline hero. Renders sections 2–8
 * (problem, positioning, breakdown, proof, comparison, FAQ, recent work) plus the
 * required "Other Services" cards and the Service/FAQ/Breadcrumb schema. All copy
 * is unique per service via $sp; structure/tokens are shared. Requires the vars
 * defined in includes/service-init.php ($spIcons, sp_e/sp_d, $spName, $spRelatedRecords,
 * $svcPhotos, $spServiceMeta, $spSchemaJson).
 */
if (!isset($sp) || !isset($spIcons)) { return; }
?>
<!-- Page-specific composition (tokens only) -->
<style>
  .sp-problem .pull-quote { margin-bottom: var(--space-lg); }
  .sp-signs { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: var(--space-md); margin-top: var(--space-lg); }
  .sp-sign { display: grid; gap: var(--space-xs); padding: var(--space-lg); border-radius: var(--radius-lg); background: var(--color-surface); border: 1px solid var(--color-line); border-top: 3px solid var(--color-accent); }
  .sp-sign .sp-sign-icon { width: 40px; height: 40px; border-radius: 10px; display: grid; place-items: center; color: var(--color-accent-dark); background: color-mix(in srgb, var(--color-accent) 14%, white); }
  .sp-sign h3 { font-size: 1.02rem; }
  .sp-sign p { margin: 0; font-size: .9rem; color: var(--color-ink-2); }

  .sp-positioning .sp-pos-grid { display: grid; grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr); gap: clamp(2rem, 5vw, 4rem); align-items: center; }
  .sp-pos-stat { display: grid; gap: var(--space-xs); padding: var(--space-xl); border-radius: var(--radius-lg); background: color-mix(in srgb, var(--color-primary) 8%, white); border: 1px solid var(--color-line); }
  .sp-pos-stat .stat-number { font-family: var(--font-accent); font-size: clamp(2.4rem, 6vw, 3.6rem); font-weight: 700; line-height: 1; color: var(--color-primary); }
  .sp-pos-stat .stat-label { font-size: var(--font-size-sm); color: var(--color-ink-2); }
  .sp-points { list-style: none; margin: var(--space-lg) 0 0; padding: 0; display: grid; gap: var(--space-md); }
  .sp-points li { display: grid; grid-template-columns: 28px 1fr; gap: var(--space-sm); }
  .sp-points svg { color: var(--color-accent-dark); margin-top: 2px; }
  .sp-points b { display: block; font-family: var(--font-heading); }
  .sp-points span { color: var(--color-ink-2); font-size: .95rem; }
  @media (max-width: 900px) { .sp-positioning .sp-pos-grid { grid-template-columns: 1fr; } }

  .sp-breakdown .sp-break-grid { display: grid; grid-template-columns: minmax(0, 1.1fr) minmax(0, .9fr); gap: clamp(2rem, 5vw, 4rem); align-items: start; }
  .sp-included { list-style: none; margin: var(--space-md) 0 0; padding: 0; display: grid; gap: var(--space-sm); }
  .sp-included li { display: grid; grid-template-columns: 24px 1fr; gap: var(--space-sm); align-items: start; font-size: .95rem; color: var(--color-ink-2); }
  .sp-included svg { color: var(--color-primary); margin-top: 2px; }
  @media (max-width: 900px) { .sp-breakdown .sp-break-grid { grid-template-columns: 1fr; } }

  .sp-proof .sp-proof-card { display: grid; grid-template-columns: auto 1fr; gap: var(--space-lg); align-items: center; padding: var(--space-xl); border-radius: var(--radius-lg); background: var(--color-surface); border: 1px solid var(--color-line); box-shadow: var(--shadow); }
  .sp-proof .sp-rating-num { font-family: var(--font-accent); font-size: clamp(2.8rem, 7vw, 4rem); font-weight: 700; line-height: 1; color: var(--color-primary); }
  .sp-proof .stars { display: inline-flex; gap: 2px; color: var(--color-star); }
  .sp-proof .sp-rating-side { display: grid; gap: var(--space-xs); }
  .sp-proof .sp-rating-actions { display: flex; flex-wrap: wrap; gap: var(--space-sm); margin-top: var(--space-sm); }
  @media (max-width: 560px) { .sp-proof .sp-proof-card { grid-template-columns: 1fr; text-align: center; justify-items: center; } }

  .sp-compare .sp-compare-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-lg); }
  .sp-compare-col { border-radius: var(--radius-lg); padding: var(--space-xl); border: 1px solid var(--color-line); }
  .sp-compare-col--others { background: var(--color-paper-2); }
  .sp-compare-col--us { background: color-mix(in srgb, var(--color-primary) 8%, white); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
  .sp-compare-col h3 { font-size: 1.1rem; margin-bottom: var(--space-md); }
  .sp-compare-col ul { list-style: none; margin: 0; padding: 0; display: grid; gap: var(--space-sm); }
  .sp-compare-col li { display: grid; grid-template-columns: 22px 1fr; gap: var(--space-sm); align-items: start; font-size: .93rem; }
  .sp-compare-col--others svg { color: var(--color-ink-2); opacity: .7; }
  .sp-compare-col--us svg { color: var(--color-primary); }
  @media (max-width: 720px) { .sp-compare .sp-compare-grid { grid-template-columns: 1fr; } }

  .sp-faq .faq-grid { display: grid; gap: var(--space-sm); max-width: 820px; margin-inline: auto; }
  .sp-related .services-cta { display: flex; justify-content: center; margin-top: var(--space-2xl); }
</style>

<!-- ============ 2. PROBLEM STATEMENT ============ -->
<section class="section section--light sp-problem" aria-label="When you need <?php echo sp_e($spName); ?>">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">Know the Signs</span>
            <h2><?php echo $sp['problem']['q']; ?></h2>
            <p class="answer-block"><?php echo $sp['problem']['answer']; ?></p>
        </div>
        <p class="pull-quote reveal-up"><?php echo $sp['problem']['pullquote']; ?></p>
        <div class="sp-signs">
            <?php foreach ($sp['problem']['signs'] as $si => $sign): ?>
            <div class="sp-sign reveal-up reveal-delay-<?php echo ($si % 3) + 1; ?>">
                <div class="sp-sign-icon"><?php echo $spIcons['alert-triangle']; ?></div>
                <h3><?php echo sp_e($sign[0]); ?></h3>
                <p><?php echo sp_e($sign[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ 3. EXPERT POSITIONING ============ -->
<section class="section sp-positioning" aria-label="Why choose Drain Masters">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">Local Expertise</span>
            <h2><?php echo $sp['positioning']['q']; ?></h2>
            <p class="answer-block"><?php echo $sp['positioning']['answer']; ?></p>
        </div>
        <div class="sp-pos-grid">
            <div class="sp-pos-stat reveal-left">
                <span class="stat-number"><?php echo $sp['positioning']['stat']; ?></span>
                <span class="stat-label"><?php echo sp_e($sp['positioning']['statLabel']); ?></span>
            </div>
            <div class="reveal-right">
                <?php foreach ($sp['positioning']['paragraphs'] as $pp): ?>
                <p><?php echo $pp; ?></p>
                <?php endforeach; ?>
                <ul class="sp-points">
                    <?php foreach ($sp['positioning']['points'] as $pt): ?>
                    <li><?php echo $spIcons['badge-check']; ?><span><b><?php echo sp_e($pt[0]); ?></b><?php echo sp_e($pt[1]); ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ 4. SERVICE BREAKDOWN ============ -->
<section class="section section--light sp-breakdown" aria-label="What's included">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">What's Included</span>
            <h2><?php echo $sp['breakdown']['q']; ?></h2>
            <p class="answer-block"><?php echo $sp['breakdown']['answer']; ?></p>
        </div>
        <div class="sp-break-grid">
            <div class="reveal-left">
                <ul class="sp-included">
                    <?php foreach ($sp['breakdown']['included'] as $inc): ?>
                    <li><?php echo $spIcons['check']; ?><span><?php echo sp_e($inc); ?></span></li>
                    <?php endforeach; ?>
                </ul>
                <ol class="process-steps" style="margin-top: var(--space-xl);">
                    <?php foreach ($sp['breakdown']['process'] as $step): ?>
                    <li><b><?php echo sp_e($step[0]); ?></b><span><?php echo sp_e($step[1]); ?></span></li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="frame reveal-right">
                <div class="frame__img">
                    <?php echo renderPicture($sp['breakdown']['photo'], sp_d($sp['breakdown']['photoAlt']), 600, 660, '(max-width: 900px) 100vw, 460px'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ 5. PROOF / REVIEWS (real GBP rating — never fabricated) ============ -->
<section class="section sp-proof" aria-label="Customer reviews">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">Proof</span>
            <h2><?php echo $sp['proof']['q']; ?></h2>
            <p class="answer-block"><?php echo $sp['proof']['answer']; ?></p>
        </div>
        <div class="sp-proof-card reveal-up">
            <div>
                <div class="sp-rating-num">5.0</div>
                <div class="stars"><?php echo str_repeat($spIcons['star'], 5); ?></div>
            </div>
            <div class="sp-rating-side">
                <p><strong>Rated 5.0 stars across 6 Google reviews.</strong> Drain Masters of the Palm Beaches is a locally owned, owner-operated plumbing company in Palm Springs, Florida&mdash;every review comes from a real Palm Beach County customer.</p>
                <div class="sp-rating-actions">
                    <a href="<?php echo htmlspecialchars($gbpProfileUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener"><?php echo $spIcons['star']; ?> Read our Google reviews</a>
                    <a href="<?php echo htmlspecialchars($reviewRequestUrl); ?>" class="btn btn-ghost" target="_blank" rel="noopener">Leave a review</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ 6. COMPARISON ============ -->
<section class="section section--light sp-compare" aria-label="How we compare">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2><?php echo $sp['comparison']['q']; ?></h2>
            <p class="answer-block"><?php echo $sp['comparison']['answer']; ?></p>
        </div>
        <div class="sp-compare-grid">
            <div class="sp-compare-col sp-compare-col--others reveal-left">
                <h3>Other plumbers</h3>
                <ul>
                    <?php foreach ($sp['comparison']['rows'] as $row): ?>
                    <li><?php echo $spIcons['x']; ?><span><?php echo sp_e($row[0]); ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="sp-compare-col sp-compare-col--us reveal-right">
                <h3>Drain Masters of the Palm Beaches</h3>
                <ul>
                    <?php foreach ($sp['comparison']['rows'] as $row): ?>
                    <li><?php echo $spIcons['check']; ?><span><?php echo sp_e($row[1]); ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ 7. FAQ ============ -->
<section class="section sp-faq" aria-label="Frequently asked questions">
    <div class="container">
        <div class="section-title reveal-up" style="margin-inline: auto; text-align: center;">
            <span class="eyebrow-label" style="justify-content: center;">Good to Know</span>
            <h2><?php echo $sp['faqHeading'] ?? ('What do Palm Springs homeowners ask about ' . sp_e($spName) . '?'); ?></h2>
        </div>
        <div class="faq-grid">
            <?php foreach ($sp['faqs'] as $fi => $faq): ?>
            <details class="faq"<?php echo $fi < 1 ? ' open' : ''; ?>>
                <summary><?php echo sp_e($faq[0]); ?></summary>
                <p><?php echo sp_e($faq[1]); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if (!empty($sp['gallery']) && count($sp['gallery']) >= 3): ?>
<!-- ============ 7b. RECENT WORK ============ -->
<section class="section section--light sp-gallery" aria-label="Recent work">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">Recent Work</span>
            <h2><?php echo $sp['galleryHeading'] ?? 'Recent plumbing work across the Palm Beaches'; ?></h2>
        </div>
        <div class="sp-gallery-grid" data-p1-dynamic>
            <?php foreach (array_slice($sp['gallery'], 0, 3) as $g): ?>
            <figure class="sp-gallery-item">
                <?php echo renderPicture($g[0], sp_d($g[1]), 800, 600, '(max-width: 700px) 100vw, 33vw'); ?>
                <figcaption><?php echo sp_e($g[1]); ?></figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============ 8. FINAL CTA ============ -->
<section class="closing-cta texture-grain edge-curve-top sp-final-cta" aria-label="Get started">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container-wide">
        <div class="cta-copy">
            <span class="eyebrow-label">Ready when you are</span>
            <h2><?php echo sp_e($sp['finalCta']['heading']); ?></h2>
            <p><?php echo $sp['finalCta']['text']; ?></p>
        </div>
        <div class="actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-accent btn-lg"><?php echo $spIcons['phone']; ?> Call <?php echo $phone; ?></a>
            <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request an estimate</button>
        </div>
    </div>
</section>

<!-- ============ OTHER SERVICES YOU MAY NEED (required component — 3 cards) ============ -->
<section class="section sp-related" aria-label="Other services">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>What other <span class="text-accent">plumbing services</span> can Drain Masters handle for your Palm Springs home?</h2>
            <p class="hero-answer">Drain Masters of the Palm Beaches is a full-service plumbing company&mdash;beyond <?php echo sp_e(strtolower($spName)); ?>, our licensed Palm Springs crew repairs sewers, installs water heaters, finds hidden leaks, and answers emergency calls across Palm Beach County.</p>
        </div>
        <div class="services-grid">
            <?php
            $spTint = [1, 2, 3];
            foreach ($spRelatedRecords as $ri => $rsvc):
                $rmeta  = $spServiceMeta[$rsvc['slug']] ?? ['icon' => 'wrench', 'bullets' => []];
                $rphoto = $svcPhotos[$ri % count($svcPhotos)] ?? 'owner-img_8820';
            ?>
            <article class="service-card-with-image card-tint-<?php echo $spTint[$ri % 3]; ?> reveal-up reveal-delay-<?php echo ($ri % 3) + 1; ?>">
                <div class="service-card__image">
                    <?php echo renderPicture($rphoto, $rsvc['name'] . ' by Drain Masters of the Palm Beaches in Palm Springs, FL', 600, 360, '(max-width: 768px) 100vw, 300px'); ?>
                </div>
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $spIcons[$rmeta['icon']]; ?></div>
                    <h3><?php echo sp_e($rsvc['name']); ?></h3>
                    <p class="service-card__desc"><?php echo sp_e($rsvc['description']); ?></p>
                    <ul>
                        <?php foreach ($rmeta['bullets'] as $rb): ?>
                        <li><?php echo sp_e($rb); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/services/<?php echo $rsvc['slug']; ?>/" class="service-card__cta">Learn more</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <div class="services-cta">
            <a href="/services/" class="btn btn-secondary btn-lg">View All <?php echo count($services); ?> Services <?php echo $spIcons['badge-check']; ?></a>
        </div>
    </div>
</section>

<!-- Service + FAQPage + BreadcrumbList schema (@graph) -->
<script type="application/ld+json">
<?php echo $spSchemaJson; ?>
</script>
