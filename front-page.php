<?php
/**
 * The front page template file
 *
 * @package YourThemeName
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Banner Section -->
    <?php get_template_part('template-parts/sections/hero-banner'); ?>

    <!-- Ticker Banner Section -->
    <?php get_template_part('template-parts/sections/ticker-banner'); ?>

    <!-- Showtime Section -->
    <?php get_template_part('template-parts/sections/showtime'); ?>

    <!-- Tickets Section -->
    <?php get_template_part('template-parts/sections/tickets'); ?>

    <!-- Latest News Section -->
    <?php get_template_part('template-parts/sections/latest-news'); ?>
</main>

<?php get_footer(); ?>
