<?php 

defined( 'ABSPATH' ) || exit;

?>
<?php 
 global $d_portfolio; ?>


<section class="container-fluid bottom-margin" id="hero-typed" style="background-image:url(<?php
  echo $d_portfolio['typed-image']['url'] ?>); color: #000;">
    <div class="row typed-container" >   
        <div class="col-12 d-flex justify-content-center align-items-center flex-column">
            <span class="display-1 text-primary"><?php echo $d_portfolio['typed-title']; ?></span>

            <div  id="typed" class="typed d-block p-5 "></div>

                    <div class="screen-reader-text">
                        <?php 
                    $typed_text = $d_portfolio['typed_txt'];
                    foreach ($typed_text as $key => $value) { ?>
                        <span class="span-<?php echo $key; ?>"><?php echo $value; ?></span>
                    <?php  } ?>                            
                    </div>

        </div>
        <div class="col-12 header-social-info bg-primary py-2 ">
            <div class="social-info d-flex justify-content-center align-items-center">
                <?php if(count($d_portfolio['social_links']) > 0){
                    foreach ($d_portfolio['social_links'] as $key => $value) {
                        ?>
                        <a href="<?php echo esc_url($value); ?>" class="social-info-url"></a>

                        <?php
                    }
                } ?>

			</div><!-- .site-info -->
        </div>
    </div>
</section>



<script>
$ = jQuery.noConflict();
$(function () {    
    $("#typed").typed({

        // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)

        

strings: [`<?php echo $d_portfolio['typed_editor']; ?>`],

        stringsElement: null,
        // typing speed
        typeSpeed: 50,
        // time before typing starts
        startDelay: 10,
        // backspacing speed
        backSpeed: 0,
        fadeOut: true,
        // time before backspacing
        backDelay: 5000,
        // loop
        loop: true,
        // false = infinite
        loopCount: "infinite",
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: "html",
        // call when done callback function
        callback: function () { },
        // starting callback function before each string
        preStringTyped: function () { },
        //callback for every typed string
        onStringTyped: function () { },
        // callback for reset
        resetCallback: function () { }

    });
});


</script>