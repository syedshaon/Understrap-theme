<?php
/**
 * hero setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<!-- ******************* The Hero Widget Area ******************* -->
<div class="container-fluid bottom-margin">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

		<div class="carousel-inner" role="listbox">

			<!-- Sliders here -->
            <?php 
            global $d_portfolio;
                if($d_portfolio['hero_slides']){
                    $sliders = $d_portfolio['hero_slides'];
                    ?>
                      <ol class="carousel-indicators">
                        <?php 
                        foreach ($sliders as $key => $value) { 
                        ?>
                            <li data-target="#carouselExampleControls" data-slide-to="<?php echo $key; ?>" ></li>
                        <?php 
                        }
                        ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php 
                        foreach ($sliders as $key => $value) { 
                            ?>
                            <div class="carousel-item <?php echo "carousel-item-".$key; ?>">
                                
                                <img class="d-block w-100" src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
                                <div class="carousel-caption d-none mb-5 d-md-block">
                                    <?php if($value['title']){ ?>
                                    <h3><?php echo $value['title'] ?></h3>
                                    <?php } ?>
                                     <?php if($value['description']){ ?>
                                    <span><?php echo $value['description'] ?></span><br>
                                    <?php } ?>
                                     <?php if($value['url']){ ?>
                                    <a class="btn btn-danger mt-3  shadow-lg" href="<?php  echo $value['url'] ?>">Know More</a>
                                    <?php } ?>
                                </div>
                                
                            </div>

                            <?php 
                        }
                        ?>
                    </div><!-- carousel-inner ends -->                    
                    <?php 
                }
            ?>

		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

			<span class="carousel-control-prev-icon" aria-hidden="true"></span>

			<span class="sr-only"><?php esc_html_e( 'Previous', 'understrap' ); ?></span>

		</a>

		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

			<span class="carousel-control-next-icon" aria-hidden="true"></span>

			<span class="sr-only"><?php esc_html_e( 'Next', 'understrap' ); ?></span>

		</a>

	</div><!-- .carousel -->
</div>

	<script>
	jQuery( ".carousel-item" ).first().addClass( "active" );
    jQuery( ".carousel-indicators" ).first().addClass( "active" );    
	</script>