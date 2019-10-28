<?php 
 global $d_portfolio;
?>
<section id="contact" class="container-fluid  my-5">
      <div class="row d-md-flex align-items-stretch">
        <div class="col-md-4 card">
            <div class="card-body text-center">
                <i class="fa fa-map-marker text-primary display-4"></i>
                <h3 class="h6 mb-2">MY Address</h3>

                <p class="font-size-sm text-muted"><?php                
                if($d_portfolio['contact-address']){
                    echo $d_portfolio['contact-address'];
                } ?></p>              
                </div>
        </div>
        
        <div class="col-md-4 card">
          <div class="card-body text-center">                
                <i class="fa fa-phone  text-primary display-4"></i>
              <h3 class="h6 mb-3">Phone number</h3>
              <?php                
                if($d_portfolio['contact-phone']){ ?>
                    <a class="nav-link-style" href="tel:<?php echo $d_portfolio['contact-phone'] ?>">
                    <?php echo $d_portfolio['contact-phone'] ?></a>

                <?php } ?>
          </div>
        </div>
        <div class="col-md-4 card">
          <div class="card-body text-center">
            <i class="fa fa-envelope text-primary display-4"></i>
              <h3 class="h6 mb-3">Email Address</h3>
              <?php if($d_portfolio['contact-email']){ ?>
                    <a class="nav-link-style" href="mailto:<?php echo $d_portfolio['contact-email'] ?>">
                    <?php echo $d_portfolio['contact-email'] ?></a>

                <?php } ?>
          </div>
        </div>
      </div>

      <!-- Map and contact form -->    
    
      <div class="row no-gutters pt-5">
        <?php if($d_portfolio['map-short-code']){ ?>
        <div class="col-md-6 d-flex align-items-center">
        <?php echo do_shortcode($d_portfolio['map-short-code']); ?>          
        </div>
        <?php } ?>
        <div class="col-md-6 px-3  ">
            <?php if($d_portfolio['contact-title']){ ?>
              <?php 
                        $c_title = $d_portfolio['contact-title'];;
                        $first_letter = substr($c_title, 0, 1);
                        $rest_letters = substr($c_title, 1);
                    ?>
          <div class="h1 mb-4 text-center contact-title"><span><?php echo $first_letter; ?></span><?php echo $rest_letters; ?> </div>
          <?php } ?>
          <?php if($d_portfolio['contact-form-short-code']){ ?>
          <?php echo do_shortcode($d_portfolio['contact-form-short-code']); ?> 
          <?php } ?>
        </div>

      </div>
</section>