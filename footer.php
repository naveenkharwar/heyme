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
		<?php dynamic_sidebar('footer-1');?>
		</div>
		<div class="col-sm">
		<?php dynamic_sidebar('footer-2');?>
		</div>
		<div class="col-sm">
		<?php dynamic_sidebar('footer-3');?>
		</div>
		<div class="col-sm">
		<?php dynamic_sidebar('footer-4');?>
		</div>
		</div>
		<div class="site-info">
				<?php
/**
 * Fires before the hey_me footer text for footer customization.
 *
 * @since Twenty Sixteen 1.0
 */
do_action('hey_me_credits');
?>
				<span class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></span>
				<?php
if (function_exists('the_privacy_policy_link')) {
    the_privacy_policy_link('', '<span role="separator" aria-hidden="true"></span>');
}
?>
				<a href="<?php echo esc_url(__('https://wordpress.org/', 'hey_me')); ?>" class="imprint">
					<?php printf(__('Proudly powered by %s', 'hey_me'), 'WordPress');?>
				</a>
			</div><!-- .site-info -->

	</footer><!-- #colophon -->


<?php wp_footer();?>

</body>
</html>
