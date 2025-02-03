<?php
/**
 * Template Name: Archive Hébergement
 * Description: Page qui affiche tous les posts de la catégorie hébergement
 */
// Déterminer la catégorie en fonction de la langue active
$lang = pll_current_language(); // Récupère la langue active


$category_slug = ($lang === 'de') ? 'hebergement-de' : 'hebergement';
get_header(); ?>

<main id="primary" class="site-main light-section">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => $category_slug,
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class="hebergement-grid">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="hebergement-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="hebergement-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="hebergement-content">
                            <h3 class="hebergement-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="hebergement-excerpt">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php wp_reset_postdata(); ?>
            
        <?php else : ?>
            <p>Aucun hébergement trouvé.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?> 