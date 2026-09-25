<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'contact';
$pageType    = 'contact';

$pageTitle       = 'Contact Us | Drain Masters of the Palm Beaches | Palm Springs, FL Plumber';
$metaDescription = 'Contact Drain Masters of the Palm Beaches for drain cleaning, sewer repair, or emergency plumbing in Palm Springs, FL. Call ' . $phone . ' or request a free estimate online.';
$canonicalUrl    = $siteUrl . '/contact/';

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
            'about' => ['@id' => $siteUrl . '/#organization'],
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
                    'name' => 'Contact',
                    'item' => $canonicalUrl
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition -->
<style>
  .contact-info { display: grid; gap: var(--space-lg); margin-bottom: var(--space-2xl); }
  .contact-info-item { display: flex; gap: var(--space-md); align-items: flex-start; padding: var(--space-md); background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius); }
  .contact-info-item svg { color: var(--color-accent-dark); flex: 0 0 auto; margin-top: 4px; }
  .contact-info-item div { display: grid; gap: var(--space-xs); }
  .contact-info-item strong { color: var(--color-ink); font-size: var(--font-size-base); }
  .contact-info-item a { color: var(--color-primary); text-decoration: none; transition: color var(--transition); }
  .contact-info-item a:hover { color: var(--color-primary-dark); text-decoration: underline; }
  .contact-info-item address { font-style: normal; color: var(--color-ink-2); line-height: 1.6; }

  .contact-form { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-2xl); }
  .contact-form .field { margin-bottom: var(--space-lg); }
  .contact-form label { display: block; font-weight: 600; color: var(--color-ink); margin-bottom: var(--space-xs); font-size: var(--font-size-sm); }
  .contact-form input,
  .contact-form select,
  .contact-form textarea { width: 100%; padding: var(--space-sm) var(--space-md); border: 1px solid var(--color-line); border-radius: var(--radius); font-family: var(--font-body); font-size: var(--font-size-base); color: var(--color-ink); background: var(--color-white); transition: border-color var(--transition), box-shadow var(--transition); }
  .contact-form input:focus,
  .contact-form select:focus,
  .contact-form textarea:focus { outline: none; border-color: var(--color-primary); box-shadow: 0 0 0 3px rgba(var(--color-primary-rgb), 0.1); }
  .contact-form textarea { resize: vertical; min-height: 120px; }
  .contact-form .required-star { color: var(--color-accent-dark); }

  .form-consent-fieldset { border: 1px solid var(--color-line); border-radius: var(--radius); padding: var(--space-md); margin: var(--space-lg) 0; background: rgba(0,0,0,0.02); }
  .form-consent-legend { font-weight: 600; color: var(--color-ink); padding: 0 var(--space-xs); font-size: var(--font-size-sm); }
  .form-consent-item { display: flex; gap: var(--space-sm); align-items: flex-start; margin-bottom: var(--space-md); cursor: pointer; }
  .form-consent-item:last-child { margin-bottom: 0; }
  .form-consent-item input[type="checkbox"] { width: 18px; height: 18px; margin-top: 3px; flex: 0 0 auto; accent-color: var(--color-primary); cursor: pointer; }
  .form-consent-item .consent-label { font-size: var(--font-size-sm); line-height: 1.6; color: var(--color-ink-2); }
  .form-consent-item .consent-label a { color: var(--color-primary); text-decoration: underline; }
  .form-consent-required { font-weight: 600; }

  .map-embed { position: relative; width: 100%; padding-bottom: 56.25%; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-line); margin: var(--space-2xl) 0; }
  .map-embed iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }

  @media (max-width: 767px) {
    .contact-form { padding: var(--space-lg); }
  }
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li aria-hidden="true" class="breadcrumb-sep">/</li>
            <li aria-current="page">Contact</li>
        </ol>
    </div>
</nav>

<main id="main-content">

    <!-- Hero -->
    <section class="hero hero--interior">
        <div class="container">
            <div class="hero-copy">
                <span class="eyebrow">Get In Touch</span>
                <h1>Contact Drain Masters of the Palm Beaches</h1>
                <p class="hero-answer">Need drain cleaning, sewer repair, or emergency plumbing in Palm Springs or the Palm Beaches? Call us now for same-day service, or fill out the form below and we'll get back to you within the hour.</p>
            </div>
        </div>
    </section>

    <!-- Contact Information & Form -->
    <section class="section" style="background:var(--color-white)">
        <div class="container">
            <div class="split">
                <!-- Contact Information -->
                <div>
                    <h2>Reach Out Anytime</h2>
                    <p style="color:var(--color-ink-2); margin-bottom: var(--space-xl);">We're available for same-day service and emergency calls. Here's how to reach us:</p>

                    <div class="contact-info">
                        <div class="contact-info-item">
                            <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                            <div>
                                <strong>Call or Text</strong>
                                <a href="tel:<?php echo formatPhone($phone); ?>"><?php echo $phone; ?></a>
                                <p style="margin:0; font-size: var(--font-size-sm); color: var(--color-ink-2);">Emergency service available 24/7</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                            <div>
                                <strong>Email</strong>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                <p style="margin:0; font-size: var(--font-size-sm); color: var(--color-ink-2);">We respond within 1 business hour</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <strong>Service Area</strong>
                                <address>
                                    <?php if ($addressPublic): ?>
                                    <?php echo $address['street']; ?><br>
                                    <?php endif; ?>
                                    <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?><br>
                                    Serving Palm Springs and the Palm Beaches
                                </address>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <div>
                                <strong>Business Hours</strong>
                                <p style="margin:0; color: var(--color-ink-2);">Monday – Friday: 8am – 5pm<br>Emergency Service Available 24/7</p>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo $directionsUrl; ?>" target="_blank" rel="noopener" class="btn btn-secondary" style="margin-top: var(--space-lg);">
                        <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
                        Get Directions
                    </a>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h2 style="margin-top: 0;">Request a Free Estimate</h2>
                    <p style="color: var(--color-ink-2); margin-bottom: var(--space-xl);">Fill out the form and we'll reply the same day—usually within the hour.</p>

                    <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                        <!-- Honeypot -->
                        <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

                        <!-- Hidden fields -->
                        <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                        <input type="hidden" name="form_location" value="contact">
                        <?php echo getAttributionFields('contact'); ?>
                        <input type="hidden" name="consent_version" value="v2.1">
                        <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

                        <div class="field">
                            <label for="contact-name">Your Name <span class="required-star">*</span></label>
                            <input id="contact-name" type="text" name="name" autocomplete="name" required>
                        </div>

                        <div class="field">
                            <label for="contact-phone">Phone <span class="required-star">*</span></label>
                            <input id="contact-phone" type="tel" name="phone" autocomplete="tel" required>
                        </div>

                        <div class="field">
                            <label for="contact-email">Email <span class="required-star">*</span></label>
                            <input id="contact-email" type="email" name="email" autocomplete="email" required>
                        </div>

                        <div class="field">
                            <label for="contact-service">Service Needed</label>
                            <select id="contact-service" name="service">
                                <option value="">Select a service</option>
                                <?php foreach ($services as $svc): ?>
                                <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="field">
                            <label for="contact-message">Tell Us About Your Plumbing Issue</label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Describe your problem so we can help faster..."></textarea>
                        </div>

                        <!-- THREE CONSENT CHECKBOXES (v2.1 — TCPA 2025/2026 compliance) -->
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
                                <span class="consent-label">I have read and agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>. <span class="required-star">*</span></span>
                            </label>
                        </fieldset>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send My Request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
