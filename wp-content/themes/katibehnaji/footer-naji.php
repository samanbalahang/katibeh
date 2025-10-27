<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */
?>
<footer class="border-t-1 py-5 w-full text-xs! leading-8">
	<div class="w-100 md:w-80/100 mx-auto">
		<div class="flex flex-wrap">
			<div class="w-full md:w-1/4">
				<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
			</div>
			<div class="w-full md:w-1/4">
				<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>

<script src="<?= get_template_directory_uri()?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?= get_template_directory_uri()?>/assets/js/naji.js"></script>


<?php
	wp_footer();
?>
	</body>
</html>