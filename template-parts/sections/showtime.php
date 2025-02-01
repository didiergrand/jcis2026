<?php
// Query posts with the 'herobanner' category
$hero_banner_query = new WP_Query(array(
    'category_name' => 'showtime',
    'posts_per_page' => 1, // Limit to one post
));

if ($hero_banner_query->have_posts()) :
    while ($hero_banner_query->have_posts()) : $hero_banner_query->the_post();
?>
<section class="showtime">
    <div class="container">
        <p><?php the_content(); ?></p>
    </div>
</section>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
