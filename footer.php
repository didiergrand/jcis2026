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

?>

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="footer-widgets-area">
				<div class="container">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
			</div>
		<?php endif; ?>
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jcis-forum-2026' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jcis-forum-2026' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jcis-forum-2026' ), 'jcis-forum-2026', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
