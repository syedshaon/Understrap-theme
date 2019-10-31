<?php 

defined( 'ABSPATH' ) || exit;

?>
<?php
global $d_portfolio;
?>
<!-- Feedback SEction -->
<section id="feedback" class="container-fluid bottom-margin align-items-center d-md-flex">
    <div class="row ">
        
        <!-- Feedback Here -->
        <div class="order-1 order-lg-0 col-md-6 offset-md-1 px-5 d-flex align-items-center justify-content-center">
             
            <div class="row feedback-carousel slide" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php if($d_portfolio['feedback-1']){ ?>
                            <div class="single-feedback mb-5 active card border-0 col-lg-5 mx-auto">
                                <div class="card-body justify-content-between d-flex flex-column border border-info p-0">
                                    <p class="card-text text-center mb-0  text-primary p-5">“<?php echo $d_portfolio['feedback-1']; ?>”</p>
                                    <div class="row  bg-secondary m-0 p-3">
                                        <div class="col-3 p-0 provider-image">
                                            <img class="img-fluid" src="<?php echo $d_portfolio['provider-image-1']['url']; ?>" alt="">                                            
                                        </div>
                                        <div class="col-9 text-primary provider-detils align-items-start d-flex flex-column justify-content-center">
                                            <h5 class="provider-name"><?php echo $d_portfolio['provider-name-1']; ?></h5>
                                            <span class="provider-title">
                                            <?php echo $d_portfolio['provider-title-1']; ?>
                                            </span>                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php } ?>

                            <?php if($d_portfolio['feedback-2']){ ?>
                            <div class="single-feedback mb-5 card border-0 col-lg-5  mx-auto">
                                <div class="card-body justify-content-between d-flex flex-column border border-info p-0">
                                    <p class="card-text text-center mb-0  text-primary p-5">“<?php echo $d_portfolio['feedback-2']; ?>”</p>
                                    <div class="row bg-secondary m-0 p-3">
                                        <div class="col-3 p-0 provider-image">
                                        <img class="img-fluid" src="<?php echo $d_portfolio['provider-image-2']['url']; ?>" alt="">
                                            
                                        </div>
                                        <div class="col-9 text-primary provider-detils align-items-start d-flex flex-column justify-content-center">
                                        <h5 class="provider-name"><?php echo $d_portfolio['provider-name-2']; ?></h5>
                                        <span class="provider-title">
                                        <?php echo $d_portfolio['provider-title-2']; ?>
                                        </span>  
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <?php if($d_portfolio['feedback-5']){ ?>
                            <div class="single-feedback mb-5 card border-0 col-lg-5  mx-auto">
                                <div class="card-body justify-content-between d-flex flex-column border border-info p-0">
                                    <p class="card-text text-center mb-0  text-primary p-5">“<?php echo $d_portfolio['feedback-5']; ?>”</p>
                                    <div class="row bg-secondary m-0 p-3">
                                        <div class="col-3 p-0 provider-image">
                                            <img class="img-fluid" src="<?php echo $d_portfolio['provider-image-5']['url']; ?>" alt="">                                            
                                        </div>
                                        <div class="col-9 text-primary provider-detils align-items-start d-flex flex-column justify-content-center">
                                            <h5 class="provider-name"><?php echo $d_portfolio['provider-name-5']; ?></h5>
                                            <span class="provider-title">
                                            <?php echo $d_portfolio['provider-title-5']; ?>
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if($d_portfolio['feedback-6']){ ?>
                            <div class="single-feedback mb-5 card border-0 col-lg-5  mx-auto">
                                <div class="card-body justify-content-between d-flex flex-column border border-info p-0">
                                    <p class="card-text text-center mb-0  text-primary p-5">“<?php echo $d_portfolio['feedback-6']; ?>”</p>
                                    <div class="row bg-secondary m-0 p-3">
                                        <div class="col-3 p-0 provider-image">
                                        <img class="img-fluid" src="<?php echo $d_portfolio['provider-image-6']['url']; ?>" alt="">
                                            
                                        </div>
                                        <div class="col-9 text-primary provider-detils align-items-start d-flex flex-column justify-content-center">
                                        <h5 class="provider-name"><?php echo $d_portfolio['provider-name-6']; ?></h5>
                                        <span class="provider-title">
                                        <?php echo $d_portfolio['provider-title-6']; ?>
                                        </span>  
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="row">
                            <?php if($d_portfolio['feedback-3']){ ?>
                            <div class="single-feedback mb-5 card border-0 col-lg-5  mx-auto">
                                <div class="card-body justify-content-between d-flex flex-column border border-info p-0">
                                    <p class="card-text text-center mb-0  text-primary p-5">“<?php echo $d_portfolio['feedback-3']; ?>”</p>
                                    <div class="row bg-secondary m-0 p-3">
                                        <div class="col-3 p-0 provider-image">
                                            <img class="img-fluid" src="<?php echo $d_portfolio['provider-image-3']['url']; ?>" alt="">                                            
                                        </div>
                                        <div class="col-9 text-primary provider-detils align-items-start d-flex flex-column justify-content-center">
                                            <h5 class="provider-name"><?php echo $d_portfolio['provider-name-3']; ?></h5>
                                            <span class="provider-title">
                                            <?php echo $d_portfolio['provider-title-3']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php } ?>

                            <?php if($d_portfolio['feedback-4']){ ?>
                            <div class="single-feedback mb-5 card border-0 col-lg-5  mx-auto">
                                <div class="card-body justify-content-between d-flex flex-column border border-info p-0">
                                    <p class="card-text text-center mb-0  text-primary p-5">“<?php echo $d_portfolio['feedback-4']; ?>”</p>
                                    <div class="row bg-secondary m-0 p-3">
                                        <div class="col-3 p-0 provider-image">
                                            <img class="img-fluid" src="<?php echo $d_portfolio['provider-image-4']['url']; ?>" alt="">                                            
                                        </div>
                                        <div class="col-9 text-primary provider-detils align-items-start d-flex flex-column justify-content-center">
                                            <h5 class="provider-name"><?php echo $d_portfolio['provider-name-4']; ?></h5>
                                            <span class="provider-title">
                                            <?php echo $d_portfolio['provider-title-4']; ?>
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    

                </div><!-- carousel-inner ends here -->
            </div><!-- feedback-carousel ends here -->
        </div><!-- Feedback ends here -->
        
        <!-- Feedback Title Here -->
        <div class="order-0 order-lg-1 mb-5 col-md-4 mx-auto d-flex align-items-center justify-content-center">
              <div class="service-title">
                  <?php 
                    
                    $feedback_heading = $d_portfolio['feedback-heading'];
                    $first_letter = substr($feedback_heading, 0, 1);
                    $rest_letters = substr($feedback_heading, 1);
                    $rest_words = explode(" ", $rest_letters);
                    ?>

                <span class="service-title-first"><?php echo $first_letter;?></span><?php foreach ($rest_words as $key => $value) {?><span><?php echo $value; ?> </span><br>
                <?php } ?>
              </div>
        </div>
         <!-- Feedback Title Ends Here -->
    </div><!-- Parent ROW ends here -->
        <script>
            $ = jQuery.noConflict();
        $(function () {
                $('.feedback-carousel').carousel()
                            });
        
        </script>
</section>
<!-- End of Feedback SEction  -->