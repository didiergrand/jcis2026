<?php
// Query posts with the 'herobanner' category
$hero_banner_query = new WP_Query(array(
    'category_name' => 'billetterie',
    'posts_per_page' => 1, // Limit to one post
));

if ($hero_banner_query->have_posts()) :
    while ($hero_banner_query->have_posts()) : $hero_banner_query->the_post();
?>
<div class="light-section">
<section class="tickets">
    <div class="container">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
    </div>
</section>
</div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
