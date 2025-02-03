<?php
// Déterminer la catégorie en fonction de la langue active
$lang = pll_current_language(); // Récupère la langue active


$category_slug = ($lang === 'de') ? 'hero-banner-de' : 'hero-banner';

// Récupérer les articles de la catégorie correspondante
$hero_banner_query = new WP_Query(array(
    'category_name' => $category_slug,
    'posts_per_page' => 1, // Limit to one post
));

if ($hero_banner_query->have_posts()) :
    while ($hero_banner_query->have_posts()) : $hero_banner_query->the_post();
?>
<section class="hero-banner">
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <div class="clap mobile"></div>
        <p><?php the_content(); ?></p>
    </div>
</section>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
