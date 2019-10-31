<?php 

defined( 'ABSPATH' ) || exit;

?>

<?php 
 global $d_portfolio;
?>
<section id="contact" class="container-fluid  d-md-flex">
  <div class="container-fluid">
    <?php if(1 == 2){ ?>
      <div id="contact-details" class="row d-md-flex align-items-stretch">
        <div class="col-md-4 card">
            <div class="card-body text-center p-1">
                <span class="display-4"><i class="fa fa-map-marker text-primary"></i></span>
                <h6 class="h6 mb-2">MY Address</h6>

                <p class="font-size-sm text-muted"><?php                
                if($d_portfolio['contact-address']){
                    echo $d_portfolio['contact-address'];
                } ?></p>              
                </div>
        </div>
        
        <div class="col-md-4 card">
          <div class="card-body text-center p-1">                
                <span class="display-4"><i class="fa fa-phone  text-primary"></i></span>
              <h6 class="h6 mb-2">Phone number</h6>
              <?php                
                if($d_portfolio['contact-phone']){ ?>
                    <a class="nav-link-style" href="tel:<?php echo $d_portfolio['contact-phone'] ?>">
                    <?php echo $d_portfolio['contact-phone'] ?></a>

                <?php } ?>
          </div>
        </div>
        <div class="col-md-4 card">
          <div class="card-body text-center p-1">
            <span class="display-4"><i class="fa fa-envelope text-primary"></i></span>
              <h6 class="h6 mb-2">Email Address</h6>
              <?php if($d_portfolio['contact-email']){ ?>
                    <a class="nav-link-style" href="mailto:<?php echo $d_portfolio['contact-email'] ?>">
                    <?php echo $d_portfolio['contact-email'] ?></a>

                <?php } ?>
          </div>
        </div>
      </div>

              <?Php } ?>

      <!-- Map and contact form -->    
    
      <div id="contact-form" class="row no-gutters pt-5">
        <?php if($d_portfolio['map-short-code']){ ?>
        <div class="col-sm-6 col-lg-6  px-3   d-flex align-items-center">
        <?php echo do_shortcode($d_portfolio['map-short-code']); ?>          
        </div>
        <?php } ?>
        <div class="col-sm-6 col-lg-6  px-3  ">
            <?php if($d_portfolio['contact-title']){ ?>
              <?php 
                        $c_title = $d_portfolio['contact-title'];;
                        $first_letter = substr($c_title, 0, 1);
                        $rest_letters = substr($c_title, 1);
                    ?>
          <div class="h1 mb-2 text-center contact-title"><span><?php echo $first_letter; ?></span><?php echo $rest_letters; ?> </div>
          <?php } ?>
          <?php if($d_portfolio['contact-form-short-code']){ ?>
          <?php echo do_shortcode($d_portfolio['contact-form-short-code']); ?> 
          <?php } ?>
        </div>

      </div>
      </div>
</section>