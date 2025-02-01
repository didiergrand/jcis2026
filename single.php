<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JCIS_Forum_2026
 */

get_header();
?>

	<main id="primary" class="site-main light-section">
		<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jcis-forum-2026' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jcis-forum-2026' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
