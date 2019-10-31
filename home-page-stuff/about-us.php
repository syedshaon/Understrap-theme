<?php 

defined( 'ABSPATH' ) || exit;

?>

<section id="about" class="container-fluid bottom-margin align-items-center d-md-flex">
    <div class="row ">
        <div class="col-md-4 offset-md-1">
        <?php global $d_portfolio; 
        if($d_portfolio['about-image']){
            ?>
            <div class="profile-image ">
                <img src="<?php echo $d_portfolio['about-image']['url']; ?>" alt="<?php echo $d_portfolio['about-title']; ?>">
            </div>
        <?php } ?>
        </div>
        <div class="col-md-5 offset-md-1 d-flex align-items-center ">
            <div class="profile-wrapper">
            <?php 
                if($d_portfolio['about-title']){
            ?>
                <div class="section-title mb-4">
                    <?php 
                        $title = $d_portfolio['about-title'];
                        $first_letter = substr($title, 0, 1);
                        $rest_letters = substr($title, 1);
                    ?>
                    <h3 class="h1"><span class="highlight"><?php echo $first_letter ?></span><?php echo $rest_letters ?></h3>
                </div>
                <?php } ?>
                <div class="profile-details">

                <?php  
                    if($d_portfolio['about-details']){
                ?>
                    <div class="d-block mb-3">
                        <?php echo $d_portfolio['about-details']; ?>
                    </div>
                    
                <?php } ?>  


                <?php  
                    if($d_portfolio['about-cta']){
                ?>
                        <a target="_blank" href="<?php echo $d_portfolio['about-cta-url']; ?>" class="btn btn-primary  shadow">
                        <?php echo $d_portfolio['about-cta']; ?>
                        </a>
                <?php } ?>  


                </div>
            </div>
        </div>
    </div>
</section>