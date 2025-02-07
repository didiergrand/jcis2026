<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JCIS_Forum_2026
 */

 $lang = pll_current_language(); // Récupère la langue active


?>

	<footer id="colophon" class="site-footer">

	<?php if ( is_active_sidebar( 'prefooter-widgets-left' ) || is_active_sidebar( 'prefooter-widgets-right' ) ) : ?>
		<div class="prefooter-widgets-area">
			<div class="container">
				<div class="prefooter-grid">
					<div class="prefooter-column">
						<?php if ($lang === 'de') : ?>
							<?php dynamic_sidebar( 'prefooter-widgets-left-de' ); ?>
						<?php else : ?>
							<?php dynamic_sidebar( 'prefooter-widgets-left' ); ?>
						<?php endif; ?>
					</div>
					<div class="prefooter-column">
						<?php if ($lang === 'de') : ?>
							<?php dynamic_sidebar( 'prefooter-widgets-right-de' ); ?>
						<?php else : ?>
							<?php dynamic_sidebar( 'prefooter-widgets-right' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="footer-widgets-area">
				<div class="container">
					<h2><?php if ($lang === 'de') : ?>Sponsoren<?php else : ?>Sponsors<?php endif; ?></h2>
					<div class="sponsors-logos">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
		<div class="container">
		<div class="site-info">
		<div>Jeune Chambre Internationale de la Veveyse | </div><div><img src="<?php echo get_template_directory_uri(); ?>/images/digitalgarage.svg" alt="Digitalgarage - Création web & stratégie digitale" width="16"> webdesign & code : Didier Grand - <a href="https://digitalgarage.ch?ref=jcis-forum-2026" target="_blank" title="Digitalgarage - Création web & stratégie digitale">digitalgarage.ch</a>
		</div></div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
