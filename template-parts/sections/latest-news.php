<?php
// Déterminer la catégorie en fonction de la langue active
$lang = pll_current_language(); // Récupère la langue active


$category_slug = ($lang === 'de') ? 'actualites-de' : 'actualites';

// Récupérer les articles de la catégorie correspondante
$hero_banner_query = new WP_Query(array(
    'category_name' => $category_slug,
    'posts_per_page' => 4,
));

// N'afficher la section que s'il y a des articles
if ($hero_banner_query->have_posts()) :
?>

<section class="news">
    <div class="container">
        <!-- Title -->
        <h3 class="mini-title">
        <?php 
            $category = get_category_by_slug($category_slug);
            echo $category->name;
        ?></h3>

        <!-- News Grid -->
        <h2><?php echo $category->description; ?></h2>
        <div class="news-grid">
            <?php
            while ($hero_banner_query->have_posts()) : $hero_banner_query->the_post();
            ?>
                <div class="news-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="news-card__image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="news-card__content">
                        <h3 class="news-card__title"><?php the_title(); ?></h3>
                        <div class="news-card__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="news-card__link"><?php _e('Lire la suite', 'textdomain'); ?></a>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php 
endif;
wp_reset_postdata();
?>
