<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hey_Me
 */

?>

	</div><!-- #content -->
	</div><!-- #page -->
	<footer id="colophon" class="site-footer">
		<div class="row widgets-footer">
		<div class="col-sm">
		<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
		<div class="col-sm">
		<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
		<div class="col-sm">
		<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div class="col-sm">
		<?php dynamic_sidebar( 'footer-4' ); ?>
		</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hey_me' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'hey_me' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'hey_me' ), 'Hey Me', '<a href="http://underscores.me/">Naveen Kharwar</a>' );
				?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
