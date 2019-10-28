<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
global $d_portfolio;
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<footer class="site-footer" id="colophon">

			<div class="row bg-primary text-white ">

				<div class="col-md-6 d-flex  justify-content-center align-items-center justify-content-md-start py-3">					

						<div class="site-info "> 

							<?php if($d_portfolio['copy_right_text']){echo esc_attr($d_portfolio['copy_right_text']); } ?>

						</div><!-- .site-info -->					

				</div><!--col end -->

				<div class="col-md-6 text-left py-3">					

						<div class="social-info d-flex justify-content-end align-items-center">

							<?php if(count($d_portfolio['social_links']) > 0){
								foreach ($d_portfolio['social_links'] as $key => $value) {
									?>
									<a href="<?php echo esc_url($value); ?>" class="social-info-url"></a>

									<?php
								}
							} ?>

						</div><!-- .site-info -->					

				</div><!--col end -->

			</div><!-- row end -->
		</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

