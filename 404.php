<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---- Page-level setup ------------------------------------------------- */
$currentPage = '404';
$pageType    = 'other';

$pageTitle       = 'Page Not Found | Drain Masters of the Palm Beaches';
$metaDescription = '404 - The page you\'re looking for doesn\'t exist. Return to Drain Masters of the Palm Beaches homepage or contact us for drain cleaning and plumbing service in Palm Springs, FL.';
$noindex         = true;  // Don't index 404 pages

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Page-specific composition -->
<style>
  .error-404 { min-height: 60vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: var(--space-3xl) var(--space-xl); background: linear-gradient(135deg, var(--color-bg-alt) 0%, var(--color-white) 100%); }
  .error-404 .error-code { font-size: 8rem; font-weight: 800; line-height: 1; color: var(--color-primary); opacity: 0.15; font-family: var(--font-heading); margin: 0; }
  .error-404 h1 { font-size: var(--font-size-2xl); margin: var(--space-lg) 0 var(--space-sm); }
  .error-404 p { color: var(--color-ink-2); max-width: 50ch; margin: 0 auto var(--space-2xl); }
  .error-404 .error-actions { display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center; }

  .popular-links { list-style: none; margin: var(--space-2xl) auto 0; padding: 0; max-width: 600px; display: grid; gap: var(--space-sm); }
  .popular-links li { background: var(--color-white); border: 1px solid var(--color-line); border-radius: var(--radius); }
  .popular-links a { display: flex; align-items: center; gap: var(--space-sm); padding: var(--space-sm) var(--space-md); color: var(--color-ink); text-decoration: none; transition: background var(--transition), color var(--transition); }
  .popular-links a:hover { background: var(--color-paper-2); color: var(--color-primary); }
  .popular-links svg { color: var(--color-accent-dark); flex: 0 0 auto; }

  @media (max-width: 600px) {
    .error-404 .error-code { font-size: 5rem; }
    .error-404 h1 { font-size: var(--font-size-xl); }
  }
</style>

<main id="main-content">

    <section class="error-404">
        <div class="container container-narrow">
            <div class="error-code">404</div>
            <h1>Page Not Found</h1>
            <p>The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>

            <div class="error-actions">
                <a href="/" class="btn btn-primary btn-lg">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    Go Home
                </a>
                <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-secondary btn-lg">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    Call <?php echo $phone; ?>
                </a>
            </div>

            <ul class="popular-links">
                <li>
                    <a href="/services/">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
                        <span>View All Services</span>
                    </a>
                </li>
                <li>
                    <a href="/services/drain-cleaning/">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
                        <span>Drain Cleaning</span>
                    </a>
                </li>
                <li>
                    <a href="/services/emergency-plumbing/">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                        <span>Emergency Plumbing</span>
                    </a>
                </li>
                <li>
                    <a href="/contact/">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
