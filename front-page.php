<?php
/**
 * The template for Home page content. 
 * By default it will create content for home page whatever you set as page/post as homepage will not matter.
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php 
				get_template_part('home-page-stuff/hero-slider');
			?>

			<?php 
				get_template_part('home-page-stuff/about-us');
			?>
			<?php 
				get_template_part('home-page-stuff/services');
			?>

			<?php 
				get_template_part('home-page-stuff/contact');
			?>

			

			<main class="site-main" id="main">

				<?php while ( have_posts() ) { the_post(); ?>

					<?php // get_template_part( 'loop-templates/content', 'page' ); ?>
					

                <?php } // end of the loop. ?>

			</main><!-- #main -->

			

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
