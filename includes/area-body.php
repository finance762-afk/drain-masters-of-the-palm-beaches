<?php
/**
 * includes/area-body.php — shared body for /service-areas/{city}/ pages (v7 scaffold classes).
 * Included by each city page AFTER its inline hero. Renders the proof strip, neighborhoods split,
 * ticker, city services grid, why-trust, optional FAQ, CTA band, nearby areas and the schema.
 * All copy is unique per city via $ap (see area-init.php); structure/tokens are shared and every
 * class used here exists in assets/css/framework.css plus the small page-scoped <style> below.
 */
if (!isset($ap) || !isset($apIcons)) { return; }
?>
<!-- Page-specific composition (tokens only; every structural class is framework.css) -->
<style>
  .area-hero .btn-outline-white { color: #fff; }
  .area-hero .hero-chips li { background: rgba(255,255,255,.08); border-color: rgba(255,255,255,.2); color: #fff; }
  .area-hero .hero-chips svg { color: var(--color-accent-bright); }
  .area-hero .floating-ring { right: -140px; top: -120px; opacity: .12; }
  .area-hero .hero-glow { position: absolute; inset: auto -10% -40% 45%; height: 140%; z-index: -1; pointer-events: none; background: radial-gradient(closest-side, color-mix(in srgb, var(--color-accent) 18%, transparent), transparent 70%); }
  .area-hero .hero-form-card .consent { color: var(--color-ink-2); }

  .area-intro .about-copy p { color: var(--color-ink); }
  .area-intro .about-copy h2 { margin-bottom: var(--space-xs); }
  .area-frame--wide .frame__img { aspect-ratio: 4 / 3.3; }
  .area-intro .frame__card { display: grid; gap: .1rem; min-width: 150px; }
  .area-intro .frame__card .stat-number { font-size: 1.5rem; }

  .area-svc .services-grid { grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
  .area-svc .service-card-with-image { height: 100%; }
  .area-svc .service-card__body { gap: var(--space-sm); padding: var(--space-xl); }
  .area-svc .services-cta { display: flex; justify-content: center; margin-top: var(--space-2xl); }
  @media (max-width: 1000px) { .area-svc .services-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 600px) { .area-svc .services-grid { grid-template-columns: 1fr; } }

  .area-trust .split { align-items: start; }
  .area-trust .prose p { color: var(--color-ink-2); }
  .area-trust .card { position: relative; overflow: clip; }
  .area-trust .card .eyebrow-label { margin-bottom: var(--space-sm); }
  .area-trust .card .process-steps { margin-top: var(--space-md); }

  .area-faq .faq-grid { grid-template-columns: 1fr; max-width: 820px; margin-inline: auto; }

  .area-cta .cta-copy { display: grid; gap: var(--space-sm); }

  .area-nearby .service-links { grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); }
  .area-nearby .service-link-card { display: flex; align-items: center; gap: var(--space-sm); }
  .area-nearby .service-link-card svg { color: var(--color-accent-dark); flex: 0 0 auto; }
  .area-nearby .service-link-card:hover svg { color: var(--color-primary); }
</style>

<!-- ============ PROOF STRIP (verifiable intake facts only) ============ -->
<section class="stats-band slant-top" aria-label="Company facts">
    <div class="container">
        <div class="stats-row">
            <div class="stat-item">
                <span class="stat-number">Est. <span>2023</span></span>
                <span class="stat-label">Locally owned in Palm Springs, FL</span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><span>5.0</span> &#9733;</span>
                <span class="stat-label">Rated across 6 Google reviews</span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><span>Same-day</span></span>
                <span class="stat-label">Emergency service in <?php echo ap_e($apName); ?></span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><span>Free</span> estimates</span>
                <span class="stat-label">Upfront pricing, no hidden fees</span>
            </div>
        </div>
    </div>
</section>

<!-- ============ NEIGHBORHOODS / HOUSING STOCK (asymmetric split + framed photo) ============ -->
<section class="section section--light area-intro" aria-label="<?php echo ap_e($ap['intro']['h2']); ?>">
    <div class="container-wide">
        <div class="grid-asymmetric">
            <div class="about-copy reveal-left">
                <span class="eyebrow-label"><?php echo ap_e($ap['intro']['eyebrow']); ?></span>
                <h2><?php echo ap_e($ap['intro']['h2']); ?></h2>
                <?php foreach ($ap['intro']['paragraphs'] as $apPara): ?>
                <p><?php echo ap_e($apPara); ?></p>
                <?php endforeach; ?>
            </div>
            <div class="frame reveal-right<?php echo !empty($ap['photoWide']) ? ' area-frame--wide' : ''; ?>">
                <div class="frame__img img-reveal">
                    <?php echo renderPicture($ap['photo'], ap_d($ap['photoAlt']), 600, !empty($ap['photoWide']) ? 495 : 660, '(max-width: 900px) 100vw, 460px'); ?>
                </div>
                <?php if (!empty($ap['fact'])): ?>
                <div class="frame__card">
                    <span class="stat-number"><span><?php echo ap_e($ap['fact'][0]); ?></span></span>
                    <span class="stat-label"><?php echo ap_e($ap['fact'][1]); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($ap['neighborhoods'])): ?>
<!-- ============ NEIGHBORHOOD TICKER (names from the research block) ============ -->
<div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
        <?php for ($apPass = 0; $apPass < 2; $apPass++): ?>
        <span><?php echo $apIcons['map-pin']; ?> Serving <?php echo ap_e($apName); ?></span>
        <?php foreach ($ap['neighborhoods'] as $apHood): ?>
        <span><?php echo $apIcons['map-pin']; ?> <?php echo ap_e($apHood); ?></span>
        <?php endforeach; endfor; ?>
    </div>
</div>
<?php endif; ?>

<!-- ============ SERVICES FOR THIS CITY (tinted card grid, links to service pages) ============ -->
<section class="section area-svc" aria-label="Plumbing services in <?php echo ap_e($apName); ?>">
    <div class="container">
        <div class="section-title reveal-up">
            <span class="eyebrow-label">What We Do Here</span>
            <h2><?php echo ap_e($ap['services']['h2'][0]); ?> <span class="text-accent"><?php echo ap_e($ap['services']['h2'][1]); ?></span></h2>
            <?php if (!empty($ap['services']['intro'])): ?>
            <p class="hero-answer"><?php echo ap_e($ap['services']['intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="services-grid">
            <?php foreach ($ap['services']['items'] as $si => $apSvc):
                $apSvcHref = is_dir($_SERVER['DOCUMENT_ROOT'] . '/services/' . $apSvc[2]) ? '/services/' . $apSvc[2] . '/' : '/services/';
            ?>
            <a href="<?php echo $apSvcHref; ?>" class="service-card-with-image card-tint-<?php echo ($si % 3) + 1; ?> reveal-up reveal-delay-<?php echo ($si % 3) + 1; ?>">
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $apIcons[$apSvc[3]] ?? $apIcons['wrench']; ?></div>
                    <h3><?php echo ap_e($apSvc[0]); ?></h3>
                    <p class="service-card__desc"><?php echo ap_e($apSvc[1]); ?></p>
                    <span class="service-card__cta">Learn more</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="services-cta">
            <a href="/services/" class="btn btn-secondary btn-lg">View All <?php echo count($services); ?> Services <?php echo $apIcons['badge-check']; ?></a>
        </div>
    </div>
</section>

<!-- ============ WHY TRUST US (two columns: city copy + numbered process) ============ -->
<section class="section section--light edge-wave-top area-trust" aria-label="Why homeowners in <?php echo ap_e($apName); ?> trust Drain Masters">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <div class="section-title">
                    <span class="eyebrow-label">Local &amp; Accountable</span>
                    <h2><?php echo ap_e($ap['trust']['h2']); ?></h2>
                </div>
                <div class="prose">
                    <?php foreach ($ap['trust']['paragraphs'] as $apPara): ?>
                    <p><?php echo ap_e($apPara); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card reveal-right">
                <span class="eyebrow-label">How Every Job Works</span>
                <h3>Four steps, no surprises</h3>
                <ol class="process-steps">
                    <li><b>Inspect</b><span>We assess the line, often with a camera, to find the real problem.</span></li>
                    <li><b>Diagnose &amp; Quote</b><span>You get a clear explanation and an upfront, no-surprise estimate.</span></li>
                    <li><b>Repair</b><span>Our crew completes the work cleanly and to code.</span></li>
                    <li><b>Confirm</b><span>We test the line and confirm full flow before we leave.</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($apFaqs)): ?>
<!-- ============ CITY FAQ (visible accordion mirrors the FAQPage schema) ============ -->
<section class="section area-faq" aria-label="Frequently asked questions">
    <div class="container">
        <div class="section-title reveal-up" style="margin-inline: auto; text-align: center;">
            <span class="eyebrow-label" style="justify-content: center;">Good to Know</span>
            <h2><?php echo ap_e($ap['faqHeading'] ?? ('Plumbing questions from ' . $apName . ' homeowners')); ?></h2>
        </div>
        <div class="faq-grid">
            <?php foreach ($apFaqs as $fi => $apFaq): ?>
            <details class="faq"<?php echo $fi < 1 ? ' open' : ''; ?>>
                <summary><?php echo ap_e($apFaq[0]); ?></summary>
                <p><?php echo ap_e($apFaq[1]); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============ CTA BAND (dark, grain) ============ -->
<section class="closing-cta texture-grain edge-curve-top area-cta" aria-label="Get started">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="cta-copy">
            <span class="eyebrow-label">Ready when you are</span>
            <h2><?php echo ap_e($ap['cta']['h2']); ?></h2>
            <p><?php echo ap_e($ap['cta']['text']); ?></p>
        </div>
        <div class="actions">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-accent btn-lg"><?php echo $apIcons['phone']; ?> Call <?php echo $phone; ?></a>
            <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request an estimate</button>
        </div>
    </div>
</section>

<?php if (!empty($apNearby)): ?>
<!-- ============ NEARBY AREAS ============ -->
<section class="section area-nearby" aria-label="Nearby service areas">
    <div class="container">
        <div class="section-head section-head--row reveal-up">
            <div>
                <span class="eyebrow-label">Also Nearby</span>
                <h2>Other Palm Beach County cities we serve</h2>
            </div>
            <a href="/service-areas/" class="btn btn-secondary">All service areas <?php echo $apIcons['arrow-right']; ?></a>
        </div>
        <div class="service-links reveal-up">
            <?php foreach ($apNearby as $apNb): ?>
            <a href="/service-areas/<?php echo $apNb[1]; ?>/" class="service-link-card"><?php echo $apIcons['map-pin']; ?> Plumber in <?php echo ap_e($apNb[0]); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- BreadcrumbList + LocalBusiness (+ FAQPage) schema -->
<script type="application/ld+json">
<?php echo $apSchemaJson; ?>
</script>
