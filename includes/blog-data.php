<?php
/**
 * includes/blog-data.php — Single source of truth for all blog posts.
 * Every blog-related component (index, homepage preview, related articles,
 * sitemap.php) reads from this registry. Never hardcode post lists elsewhere.
 */

$blogPosts = [
    [
        'slug'        => 'drain-cleaning-cost-palm-springs',
        'title'       => 'What Does Drain Cleaning Cost in Palm Springs, FL?',
        'excerpt'     => 'Professional drain cleaning in Palm Springs typically runs $150-$400 for standard service, with hydro jetting costing more. Here's what affects the price and what you can expect.',
        'image'       => '/assets/images/owner-img_8947-960.webp',
        'alt'         => 'Professional drain cleaning equipment in Palm Springs home',
        'date'        => 'September 25, 2026',
        'dateISO'     => '2026-09-25',
        'category'    => 'Cost Guides',
        'readtime'    => '5 min read',
    ],
    [
        'slug'        => 'hurricane-season-plumbing-prep',
        'title'       => 'Preparing Your Plumbing for Hurricane Season in South Florida',
        'excerpt'     => 'Hurricane season brings flooding risks and sewer backup threats to Palm Beach County homes. These preventative steps protect your plumbing system before the storm arrives.',
        'image'       => '/assets/images/owner-img_8820-960.webp',
        'alt'         => 'Technician inspecting outdoor plumbing before hurricane season',
        'date'        => 'September 20, 2026',
        'dateISO'     => '2026-09-20',
        'category'    => 'Seasonal Tips',
        'readtime'    => '6 min read',
    ],
];
