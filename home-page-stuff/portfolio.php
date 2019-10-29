<?php 
 global $d_portfolio; ?>

<section id="portfolio" class="portfolio  my-5 container-fluid">
    <div class="portfolio-info row">
        <div class="col text-center">
            <?php if($d_portfolio['portfoilo-title']){ 
                $p_title = $d_portfolio['portfoilo-title'];
                $first_letter = substr($p_title, 0, 1);
                $rest_letters = substr($p_title, 1);
                ?>
            <h3 class="h1 portfolio-info-title"><span class="highlight"><?php echo $first_letter ?></span><?php echo $rest_letters ?></h3>
            <?php } ?>
            <?php if($d_portfolio['portfoilo-details']){ ?>
            <span><?php  echo $d_portfolio['portfoilo-details']; ?> </span>
            <?php } ?>
        </div>
    </div>

    <div class="portfolio-tab row">
        <div class="col text-center my-3">
            <button class="btn btn-outline-primary  shadow-lg portfolio-tab-item active" onclick="openItem('portfolio-item')">All</button>
    <?php
        $args = array(
            'type'                     => 'portfolio',
            'child_of'                 => 0,
            'parent'                   => '',
            'orderby'                  => 'name',
            'order'                    => 'ASC',
            'hide_empty'               => 1,
            'hierarchical'             => 1,
            'taxonomy'                 => 'category',
            'pad_counts'               => false
            );
        $allCategories = get_categories($args);
        // var_dump($allCategories );
        foreach ($allCategories as $Categories){
                        $category = $Categories->slug;
                        $categoryName = $Categories->name;
                        $categoryId = $Categories->term_id;
                        if("uncategorized" != $category){ ?>
                        <button class="btn btn-outline-primary  shadow-lg portfolio-tab-item " onclick="openItem('<?php echo $category ?>')"><?php echo $categoryName ?></button>        
                        <?php }
        } ?>
        </div>
    </div>

    <div class="portfolio-items-all  container">
        <div class="row">
        <?php            
            // var_dump($allCategories );
            // foreach ($allCategories as $Categories){
            //                 $category = $Categories->slug;
            //                 $categoryName = $Categories->name;
            //                 $categoryId = $Categories->term_id;                     

							$ourProducts = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'portfolio',
							'ignore_sticky_posts' => true,
							'orderby'=> 'order', 							
							 'order' => 'ASC',
							// 'category_name' => $category
                            ));        ?>    
        
        <?php 
        // var_dump($category);

        ?>
        

                <?php
					while ($ourProducts->have_posts()) {
						$ourProducts->the_post(); ?>
										
                            <div class="portfolio-item  text-center col-sm-6 col-md-4 col-xl-3 mb-5  <?php 
                            $allCategories = get_the_category(get_the_ID());
                           foreach ($allCategories as $key => $value) {
                               echo($value->slug)." ";
                           }
                                
                            
                            ?>"> 
                            
                            <?php  //var_dump($allCategories[0]->slug); ?>
                             <?php  the_post_thumbnail("port-thumb",  ['class' => 'img-fluid, shadow-lg portfolio-img'])?> 
                             
                                <div class="portfolio-urls text-center">
                                    
                                <?php if(get_field('git_url')){ ?>
                                <a class="git-url  m-2" href="<?php echo get_field('git_url'); ?>"><i class="fa fa-git-square"></i></a>
                                <?php } ?>
                                <?php if(get_field('website_url')){ ?>
                                <a class="web-url  m-2" href="<?php echo get_field('website_url'); ?>"><i class="fa fa-globe"></i></a>
                                <?php } ?>
                              
                                </div>
                                <a class="post-url h5 mb-0 d-block p-1 bg-primary text-white m-2" href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                            </div>

                    <?php
					}
				?>      

        <?php
        //  } 
        wp_reset_query();
        ?>
        </div>
    </div> 
</section>

<script>

    $ = jQuery.noConflict();

    function openItem(itemName) {
        var i;
        var x = document.getElementsByClassName("portfolio-item");
        var y = document.getElementsByClassName(itemName);
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        // for (i = 0; i < y.length; i++) {
        //     y[i].style.display = "block";
        // }
        for (i = 0; i < 12; i++) {
            y[i].style.display = "block";
        }
    }

    // Show only first 8 child (portfolio)
    $(document).ready(function () {
        $(".portfolio-items-all .portfolio-item").hide();
        $(".portfolio-items-all .portfolio-item:lt(12)").show();

        // This part below is for tabbed navigation for portfolio show
        $(".portfolio-tab-item").click(function () {
            $(".portfolio-tab-item").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
