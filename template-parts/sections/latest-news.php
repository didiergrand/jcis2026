<?php
// Query posts with the 'actualites' category
$hero_banner_query = new WP_Query(array(
    'category_name' => 'actualites',
    'posts_per_page' => 4,
));
?>
<section class="news">
    <div class="container">
<!-- Title -->
<h3 class="mini-title"><?php 
    $category = get_category_by_slug('actualites');
    echo $category->name; 
?></h3>
<!-- News Grid -->
<h2>Les dernières informations</h2>
        <div class="news-grid">
            <?php
            if ($hero_banner_query->have_posts()) :
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
                        <a href="<?php the_permalink(); ?>" class="news-card__link">Lire la suite</a>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>



