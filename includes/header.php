<!-- Skip to content (accessibility) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
    <nav class="navbar" aria-label="Main navigation">
        <div class="navbar-inner container">
            <!-- Logo -->
            <a href="/" class="site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> Home">
                <span class="logo-text">
                    <strong class="logo-mark">Drain Masters</strong>
                    <span class="logo-tagline">of the Palm Beaches</span>
                </span>
            </a>

            <!-- Desktop Navigation Links -->
            <ul class="navbar-links">
                <li><a href="/" <?php if (isActivePage('home')) echo 'aria-current="page"'; ?>>Home</a></li>

                <li class="has-dropdown">
                    <button class="dropdown-trigger" aria-expanded="false" aria-haspopup="true">
                        Services
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                    </button>
                    <ul class="dropdown" role="menu" style="display:none">
                        <?php foreach ($services as $navSvc): ?>
                        <li role="none">
                            <a href="/services/<?php echo $navSvc['slug']; ?>/" role="menuitem">
                                <?php echo htmlspecialchars($navSvc['name']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li class="has-dropdown">
                    <button class="dropdown-trigger" aria-expanded="false" aria-haspopup="true">
                        Service Areas
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                    </button>
                    <ul class="dropdown" role="menu" style="display:none">
                        <?php foreach ($serviceAreas as $footArea): ?>
                        <?php
                        $areaSlug = getAreaSlug($footArea);
                        $areaPath = $_SERVER['DOCUMENT_ROOT'] . '/areas/' . $areaSlug;
                        $areaExists = is_dir($areaPath);
                        ?>
                        <li role="none">
                            <a href="<?php echo $areaExists ? '/areas/' . $areaSlug . '/' : '/service-areas/#' . $areaSlug; ?>" role="menuitem">
                                <?php echo htmlspecialchars($footArea); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li><a href="/about/" <?php if (isActivePage('about')) echo 'aria-current="page"'; ?>>About</a></li>
                <li><a href="/blog/" <?php if (isActivePage('blog')) echo 'aria-current="page"'; ?>>Blog</a></li>
                <li><a href="/contact/" <?php if (isActivePage('contact')) echo 'aria-current="page"'; ?>>Contact</a></li>
            </ul>

            <!-- Desktop CTA -->
            <div class="navbar-cta">
                <a href="tel:<?php echo formatPhone($phone); ?>" class="navbar-phone" aria-label="Call <?php echo $phone; ?>">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                    <?php echo $phone; ?>
                </a>
                <button class="btn-primary" data-open-estimate>Free Estimate</button>
            </div>

            <!-- Mobile Hamburger -->
            <button class="hamburger" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </nav>
</header>

<!-- Mobile Menu (outside header to avoid backdrop-filter containment) -->
<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu-links">
            <li><a href="/">Home</a></li>

            <!-- Services submenu -->
            <li class="mobile-submenu-trigger">
                <span>Services</span>
            </li>
            <?php foreach ($services as $navSvc): ?>
            <li class="mobile-submenu-item">
                <a href="/services/<?php echo $navSvc['slug']; ?>/">
                    <?php echo htmlspecialchars($navSvc['name']); ?>
                </a>
            </li>
            <?php endforeach; ?>

            <!-- Service Areas submenu -->
            <li class="mobile-submenu-trigger">
                <span>Service Areas</span>
            </li>
            <?php foreach ($serviceAreas as $footArea): ?>
            <?php
            $areaSlug = getAreaSlug($footArea);
            $areaPath = $_SERVER['DOCUMENT_ROOT'] . '/areas/' . $areaSlug;
            $areaExists = is_dir($areaPath);
            ?>
            <li class="mobile-submenu-item">
                <a href="<?php echo $areaExists ? '/areas/' . $areaSlug . '/' : '/service-areas/#' . $areaSlug; ?>">
                    <?php echo htmlspecialchars($footArea); ?>
                </a>
            </li>
            <?php endforeach; ?>

            <li><a href="/about/">About</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="/contact/">Contact</a></li>
        </ul>

        <div class="mobile-menu-cta">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn-secondary btn-block">
                <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                Call <?php echo $phone; ?>
            </a>
            <button class="btn-primary btn-block" data-open-estimate>Free Estimate</button>
        </div>
    </div>
</div>

<!-- Main content starts -->
<main id="main-content">
