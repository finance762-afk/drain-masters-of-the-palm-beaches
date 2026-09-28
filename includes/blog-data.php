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
        'excerpt'     => 'What drives the price of drain cleaning around Palm Springs, the general ranges homeowners see, and how Drain Masters quotes every job in writing before work starts.',
        'image'       => '/assets/images/dm-shower-drain-cabling-960.webp',
        'imageBase'   => 'dm-shower-drain-cabling',
        'alt'         => 'Drain cable fed into a shower drain from a drum machine to clear a clog',
        'date'        => 'September 25, 2026',
        'dateISO'     => '2026-09-25',
        'category'    => 'Cost Guides',
        'readtime'    => '5 min read',
    ],
    [
        'slug'        => 'hurricane-season-plumbing-prep',
        'title'       => 'Preparing Your Plumbing for Hurricane Season in South Florida',
        'excerpt'     => 'Hurricane season brings flooding risks and sewer backup threats to Palm Beach County homes. These preventative steps protect your plumbing system before the storm arrives.',
        'image'       => '/assets/images/dm-copper-water-line-valves-960.webp',
        'imageBase'   => 'dm-copper-water-line-valves',
        'alt'         => 'New copper water line with shutoff valves plumbed on the outside wall of a home',
        'date'        => 'September 20, 2026',
        'dateISO'     => '2026-09-20',
        'category'    => 'Seasonal Tips',
        'readtime'    => '6 min read',
    ],
];
