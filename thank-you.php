<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = 'thank-you';
$pageType    = 'other';

$pageTitle       = 'Thank You | Drain Masters of the Palm Beaches';
$metaDescription = 'Thank you for contacting Drain Masters of the Palm Beaches. We\'ll respond to your inquiry within the hour.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/thank-you';
$noindex         = true;  // Don't index thank-you pages

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition -->
<style>
  .thank-you { min-height: 60vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: var(--space-3xl) var(--space-xl); background: linear-gradient(135deg, var(--color-bg-alt) 0%, var(--color-white) 100%); }
  .thank-you .icon-checkmark { width: 80px; height: 80px; border-radius: 50%; background: var(--color-accent-dark); color: var(--color-white); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-xl); }
  .thank-you h1 { font-size: var(--font-size-2xl); margin: 0 0 var(--space-sm); }
  .thank-you p { color: var(--color-ink-2); max-width: 55ch; margin: 0 auto var(--space-2xl); line-height: 1.7; }
  .thank-you .next-steps { background: var(--color-white); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-xl); max-width: 600px; margin: 0 auto var(--space-2xl); text-align: left; }
  .thank-you .next-steps h2 { font-size: var(--font-size-lg); margin: 0 0 var(--space-md); }
  .thank-you .next-steps ol { margin: 0; padding-left: var(--space-lg); color: var(--color-ink-2); }
  .thank-you .next-steps li { margin-bottom: var(--space-sm); line-height: 1.6; }
  .thank-you .actions { display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center; }

  @media (max-width: 600px) {
    .thank-you h1 { font-size: var(--font-size-xl); }
    .thank-you .icon-checkmark { width: 60px; height: 60px; }
  }
</style>

<main id="main-content">

    <section class="thank-you">
        <div class="container container-narrow">
            <div class="icon-checkmark">
                <svg aria-hidden="true" width="48" height="48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
            </div>

            <h1>Request Received!</h1>
            <p>Thank you for contacting Drain Masters of the Palm Beaches. We've received your request and will get back to you within the hour—usually much sooner. If your issue is urgent, call us now at <a href="tel:<?php echo formatPhone($phone); ?>" style="color: var(--color-primary); text-decoration: underline;"><?php echo $phone; ?></a>.</p>

            <div class="next-steps">
                <h2>What Happens Next?</h2>
                <ol>
                    <li>A member of our team will review your request within the hour.</li>
                    <li>We'll call or email you to confirm details and schedule a time that works for you.</li>
                    <li>Our licensed plumber will arrive on time, diagnose the issue, and provide an upfront quote before starting any work.</li>
                    <li>We'll fix the problem right and clean up when we're done—guaranteed.</li>
                </ol>
            </div>

            <div class="actions">
                <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-primary btn-lg">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    Call Now: <?php echo $phone; ?>
                </a>
                <a href="/" class="btn btn-secondary btn-lg">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    Return Home
                </a>
            </div>

            <?php if (!empty($reviewRequestUrl)): ?>
            <div style="margin-top: var(--space-2xl); padding-top: var(--space-2xl); border-top: 1px solid var(--color-line);">
                <p style="font-size: var(--font-size-sm); color: var(--color-ink-2); margin-bottom: var(--space-md);">Already a customer? We'd love to hear from you:</p>
                <a href="<?php echo $reviewRequestUrl; ?>" target="_blank" rel="noopener" class="btn btn-outline">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    Leave a Google Review
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
