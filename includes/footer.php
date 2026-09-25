</main>
<!-- Main content ends -->

<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: About -->
                <div class="footer-col">
                    <div class="footer-logo">
                        <strong class="logo-mark">Drain Masters</strong>
                        <span class="logo-tagline">of the Palm Beaches</span>
                    </div>
                    <p class="footer-tagline"><?php echo htmlspecialchars($tagline); ?></p>
                    <p class="footer-description">Licensed drain cleaning and plumbing experts serving Palm Springs and the Palm Beaches. Fast response, fair pricing, work guaranteed.</p>

                    <div class="footer-trust-badges">
                        <div class="trust-badge">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" /><path d="m9 12 2 2 4-4" /></svg>
                            <span>Licensed & Insured</span>
                        </div>
                        <div class="trust-badge">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" /></svg>
                            <span>Emergency Service Available</span>
                        </div>
                        <div class="trust-badge">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="m15 9-6 6" /><path d="m9 9 6 6" /></svg>
                            <span>Free Estimates</span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Services -->
                <div class="footer-col">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-links">
                        <?php
                        $halfCount = ceil(count($services) / 2);
                        foreach (array_slice($services, 0, $halfCount) as $footSvc):
                        ?>
                        <li>
                            <a href="/services/<?php echo $footSvc['slug']; ?>/">
                                <?php echo htmlspecialchars($footSvc['name']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Column 3: More Services / Areas -->
                <div class="footer-col">
                    <h3 class="footer-heading">More Services</h3>
                    <ul class="footer-links">
                        <?php foreach (array_slice($services, $halfCount) as $footSvc): ?>
                        <li>
                            <a href="/services/<?php echo $footSvc['slug']; ?>/">
                                <?php echo htmlspecialchars($footSvc['name']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <h3 class="footer-heading" style="margin-top: var(--space-lg);">Service Areas</h3>
                    <ul class="footer-links">
                        <?php foreach (array_slice($serviceAreas, 0, 5) as $footArea): ?>
                        <?php
                        $areaSlug = getAreaSlug($footArea);
                        $areaPath = $_SERVER['DOCUMENT_ROOT'] . '/service-areas/' . $areaSlug;
                        $areaExists = is_dir($areaPath);
                        ?>
                        <li>
                            <a href="<?php echo $areaExists ? '/service-areas/' . $areaSlug . '/' : '/service-areas/#' . $areaSlug; ?>">
                                <?php echo htmlspecialchars($footArea); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <li><a href="/service-areas/" class="footer-link-view-all">View All Areas <svg aria-hidden="true" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg></a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div class="footer-col">
                    <h3 class="footer-heading">Contact Us</h3>

                    <div class="footer-contact">
                        <div class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                            <a href="tel:<?php echo formatPhone($phone); ?>"><?php echo $phone; ?></a>
                        </div>

                        <div class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" /><rect x="2" y="4" width="20" height="16" rx="2" /></svg>
                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </div>

                        <div class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" /><circle cx="12" cy="10" r="3" /></svg>
                            <address>
                                <?php if ($addressPublic): ?>
                                <?php echo $address['street']; ?><br>
                                <?php endif; ?>
                                <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?>
                            </address>
                        </div>

                        <div class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" /></svg>
                            <span>Monday - Friday: 8am - 5pm<br>Emergency Service Available 24/7</span>
                        </div>
                    </div>

                    <button class="btn-primary" style="margin-top: var(--space-lg); width: 100%;" data-open-estimate>
                        Request Free Estimate
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- AEO Entity Block -->
    <div class="footer-entity">
        <div class="container">
            <div itemscope itemtype="https://schema.org/Plumber">
                <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
                <meta itemprop="url" content="<?php echo $siteUrl; ?>">
                <meta itemprop="telephone" content="<?php echo $phone; ?>">
                <p class="entity-description">
                    <strong itemprop="name"><?php echo htmlspecialchars($siteName); ?></strong> is a licensed Florida plumbing contractor based in <?php echo $address['city']; ?>, serving homeowners and businesses across the Palm Beaches with professional drain cleaning, sewer repair, leak detection, and emergency plumbing services. With <?php echo $yearsInBusiness; ?> years of hands-on experience, our team brings reliable solutions to the area's toughest plumbing challenges—from stubborn clogs to full sewer line replacements.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Legal Row (REQUIRED v6.1) -->
    <div class="footer-legal-row">
        <div class="container">
            <nav aria-label="Legal">
                <a href="/privacy-policy/">Privacy Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="/terms/">Terms of Service</a>
                <span class="footer-legal-divider">|</span>
                <a href="/cookie-policy/">Cookie Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="/accessibility/">Accessibility</a>
                <span class="footer-legal-divider">|</span>
                <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
                <span class="footer-legal-divider">|</span>
                <a href="/sitemap.xml">Sitemap</a>
            </nav>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom-bar">
        <div class="container">
            <p class="footer-copyright">
                &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.
            </p>
            <p class="footer-credit">
                <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a>
            </p>
        </div>
    </div>

    <!-- Verified Local Partner Badge (v6.3 — 2026-09-17) -->
    <?php include __DIR__ . '/partner-badge.php'; ?>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" aria-label="Back to top" style="display: none;">
    <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6" /></svg>
</button>

<!-- Mobile Sticky CTA Bar -->
<div class="mobile-cta-bar">
    <a href="tel:<?php echo formatPhone($phone); ?>" class="mobile-cta-btn mobile-cta-call">
        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        <span>Call Now</span>
    </a>
    <button class="mobile-cta-btn mobile-cta-estimate" data-open-estimate>
        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2" /><path d="M9 11h6" /><path d="M9 15h6" /></svg>
        <span>Free Estimate</span>
    </button>
</div>

<!-- Estimate Dialog (shared — every [data-open-estimate] opens this; wired in main.js) -->
<dialog class="estimate-dialog" id="estimate-dialog" aria-labelledby="estimate-dialog-title">
    <div class="dialog-head">
        <div>
            <h3 id="estimate-dialog-title">Get a free estimate</h3>
            <p class="footnote">We reply the same day.</p>
        </div>
        <button type="button" class="dialog-close" aria-label="Close" data-close-estimate>
            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>
    <div class="dialog-body">
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
            <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
            <input type="hidden" name="form_location" value="dialog">
            <?php echo getAttributionFields('dialog'); ?>
            <input type="hidden" name="consent_version" value="v2.1">
            <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

            <div class="form-grid">
                <div class="field">
                    <label for="dlg-name">Your Name</label>
                    <input id="dlg-name" type="text" name="name" autocomplete="name" required>
                </div>
                <div class="field">
                    <label for="dlg-phone">Phone</label>
                    <input id="dlg-phone" type="tel" name="phone" autocomplete="tel" required>
                </div>
                <div class="field full">
                    <label for="dlg-email">Email</label>
                    <input id="dlg-email" type="email" name="email" autocomplete="email" required>
                </div>
                <div class="field full">
                    <label for="dlg-service">Service Needed</label>
                    <select id="dlg-service" name="service">
                        <option value="">Select a service</option>
                        <?php foreach ($services as $dlgSvc): ?>
                        <option value="<?php echo htmlspecialchars($dlgSvc['name']); ?>"><?php echo htmlspecialchars($dlgSvc['name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field full">
                    <label for="dlg-message">How can we help?</label>
                    <textarea id="dlg-message" name="message" rows="3"></textarea>
                </div>
            </div>

            <fieldset class="form-consent-fieldset">
                <legend class="form-consent-legend">Communication Consent</legend>
                <label class="form-consent-item">
                    <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                    <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, and promotions. I can unsubscribe anytime.</span>
                </label>
                <label class="form-consent-item">
                    <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                    <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive texts from <?php echo htmlspecialchars($siteName); ?> at the number provided (reminders, updates, offers). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                </label>
                <label class="form-consent-item form-consent-required">
                    <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                    <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
                </label>
            </fieldset>

            <button type="submit" class="btn btn-primary btn-block">Send my request</button>
        </form>
    </div>
</dialog>

<!-- Cookie Bar (slim, appears after first scroll; dismissal remembered in localStorage) -->
<div class="cookie-bar" id="cookie-bar" role="region" aria-label="Cookie notice">
    <p>We use cookies to run this site and understand traffic. See our <a href="/cookie-policy/">Cookie Policy</a>.</p>
    <button type="button">Got it</button>
</div>

<!-- Scripts (v6.3 — all with defer) -->
<script src="/assets/js/main.js" defer></script>

<!-- Back-to-top inline script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const backToTop = document.querySelector('.back-to-top');
    if (!backToTop) return;

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.style.display = 'flex';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>

</body>
</html>
