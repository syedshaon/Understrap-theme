<?php 

defined( 'ABSPATH' ) || exit;

?>

<section id="service" class="container-fluid  bottom-margin align-items-center d-md-flex">
      <div class="row ">
          <div class="offset-md-1 col-md-4 d-flex align-items-center justify-content-center">
              <div class="service-title">
                  <?php 
                    global $d_portfolio;
                    $heading = $d_portfolio['service-heading'];
                    $first_letter = substr($heading, 0, 1);
                    $rest_letters = substr($heading, 1);
                    $rest_words = explode(" ", $rest_letters);
                    ?>

                <span class="service-title-first"><?php echo $first_letter;?></span><?php foreach ($rest_words as $key => $value) {?><span><?php echo $value; ?> </span><br>
                <?php } ?>
              </div>
          </div>
          <div class=" col-md-6">
            <?php if($d_portfolio['service-title-1']){ ?>
                <div class="row shadow mb-2 py-3">
                    <div class="col-2 d-flex display-4 justify-content-center align-items-center">
                        <i class="fa <?php echo $d_portfolio['service-icon-1']; ?> text-primary "></i>
                    </div>
                    <div class="col-10">
                        <h6 class="h6 mb-1 text-primary"><?php echo $d_portfolio['service-title-1']; ?></h2>
                        <p class="mb-1">
                            <?php echo $d_portfolio['service-desc-1']; ?>                            
                        </p>
                    </div>
                </div>
            <?php } ?>
            <?php if($d_portfolio['service-title-2']){ ?>
                <div class="row shadow mb-2 py-3">
                    <div class="col-2 d-flex display-4 justify-content-center align-items-center">
                        <i class="fa <?php echo $d_portfolio['service-icon-2']; ?> text-danger "></i>
                    </div>
                    <div class="col-10">
                        <h6  class="h6 mb-1 text-danger"><?php echo $d_portfolio['service-title-2']; ?></h6>
                        <p class="mb-1">
                            <?php echo $d_portfolio['service-desc-2']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <?php if($d_portfolio['service-title-3']){ ?>
                <div class="row shadow mb-2 py-3">
                    <div class="col-2 d-flex display-4 justify-content-center align-items-center">
                        <i class="fa <?php echo $d_portfolio['service-icon-3']; ?> text-primary "></i>
                    </div>
                    <div class="col-10">
                        <h6  class="h6 mb-1  text-primary"><?php echo $d_portfolio['service-title-3']; ?></h6>
                        <p class="mb-1">
                            <?php echo $d_portfolio['service-desc-3']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <?php if($d_portfolio['service-title-4']){ ?>
                <div class="row shadow mb-2 py-3">
                    <div class="col-2 d-flex display-4 justify-content-center align-items-center">
                        <i class="fa <?php echo $d_portfolio['service-icon-4']; ?> text-danger "></i>
                    </div>
                    <div class="col-10">
                        <h6  class="h6 mb-1  text-danger"><?php echo $d_portfolio['service-title-4']; ?></h6>
                        <p class="mb-1">
                            <?php echo $d_portfolio['service-desc-4']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <?php if($d_portfolio['service-title-5']){ ?>
                <div class="row shadow mb-2 py-3">
                    <div class="col-2 d-flex display-4 justify-content-center align-items-center">
                        <i class="fa <?php echo $d_portfolio['service-icon-5']; ?> text-primary "></i>
                    </div>
                    <div class="col-10">
                        <h6  class="h6 mb-1  text-primary"><?php echo $d_portfolio['service-title-5']; ?></h6>
                        <p class="mb-1">
                            <?php echo $d_portfolio['service-desc-5']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <?php if($d_portfolio['service-title-6']){ ?>
                <div class="row shadow mb-2 py-3">
                    <div class="col-2 d-flex display-4 justify-content-center align-items-center">
                        <i class="fa <?php echo $d_portfolio['service-icon-6']; ?> text-danger "></i>
                    </div>
                    <div class="col-10">
                        <h2  class="h5 text-danger"><?php echo $d_portfolio['service-title-6']; ?></h2>
                        <p class="mb-1">
                            <?php echo $d_portfolio['service-desc-6']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
          </div>
    </div>
</section>