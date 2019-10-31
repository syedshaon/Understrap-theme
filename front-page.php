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

<!-- <div class="wrapper" id="page-wrapper"> -->



	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">
					<?php 
					// get_template_part('home-page-stuff/hero-slider');
				?>
				

				<?php 
					global $d_portfolio;
					$show_section = $d_portfolio['home_page_layout']['enabled'];
					// var_dump($show_section);

					foreach ($show_section as $key => $value) {
						// echo $key;
						if($key == 'staticpage'){
							while(have_posts()){
								the_post(); ?>
								
								<div class="container">
									<?php the_content(); ?>
								</div>

								<?php
							}
						}
						 get_template_part("home-page-stuff/$key");
					}
				?>

				<?php 
					// get_template_part('home-page-stuff/hero-typed');
				
					// get_template_part('home-page-stuff/about-us');
				
					// get_template_part('home-page-stuff/services');
				
					// get_template_part('home-page-stuff/portfolio');
				
					// get_template_part('home-page-stuff/feedback');
				
					// get_template_part('home-page-stuff/contact');
				?>

				<?php while ( have_posts() ) { the_post(); ?>

					<?php // get_template_part( 'loop-templates/content', 'page' ); ?>
					

                <?php } // end of the loop. ?>

			</main><!-- #main -->

			

		</div><!-- .row -->

	</div><!-- #content -->

<!-- </div> #page-wrapper -->

<?php get_footer();
