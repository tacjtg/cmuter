<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cmuter
 */

?>
	</div><!-- #content -->
	
	<div class="bootstrap-wrapper">
		<div class="container">
			<div class="row footer-widgets">
				<?php if ( is_active_sidebar( 'cmuter-footer' ) ) { dynamic_sidebar( 'cmuter-footer' ); } ?>
			</div>
		</div><!-- .container-->
	</div><!-- .bootstrap-wrapper -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


