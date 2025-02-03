<?php
// Déterminer la catégorie en fonction de la langue active
$lang = pll_current_language(); // Récupère la langue active


$category_slug = ($lang === 'de') ? 'billetterie-de' : 'billetterie';

// Récupérer les articles de la catégorie correspondante
$hero_banner_query = new WP_Query(array(
    'category_name' => $category_slug,
    'posts_per_page' => 4,
));

if ($hero_banner_query->have_posts()) :
    while ($hero_banner_query->have_posts()) : $hero_banner_query->the_post();
?>
<div class="light-section">
<section class="tickets">
    <div class="container">
        <h3 class="mini-title"><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
    </div>
</section>
</div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
