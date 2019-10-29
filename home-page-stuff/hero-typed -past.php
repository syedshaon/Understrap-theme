<?php 
 global $d_portfolio; ?>


<div class="container-fluid" id="hero-typed" style="background-image:url(<?php
  echo $d_portfolio['typed-image']['url'] ?>); color: #054157;">
    <div class="row" style="height:100%;">        
    
   
    <div class="col d-flex justify-content-center align-items-center flex-column">
        <span class="display-1 text-danger"><?php echo $d_portfolio['typed-title']; ?></span>

        <span style="white-space:pre;" id="typed" class="typed h1  p-5 "></span>
    </div>
    </div>
</div>

<div class="screen-reader-text">
    <?php 
$typed_text = $d_portfolio['typed_txt'];
foreach ($typed_text as $key => $value) { ?>

    <span class="span-<?php echo $key; ?>"><?php echo $value; ?></span>
<?php  }

?>

                            
</div>

<script>
$ = jQuery.noConflict();
$(function () {    
    $("#typed").typed({

strings1: ['<?php global $d_portfolio;
$typed_text = $d_portfolio['typed_txt'];
foreach ($typed_text as $key => $value) { 
    echo $value." ^1000\\n ";
 }

?>
'],
        // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)

        

strings: [`<?php echo $d_portfolio['typed_editor']; ?>`],

        stringsElement: null,
        // typing speed
        typeSpeed: 50,
        // time before typing starts
        startDelay: 10,
        // backspacing speed
        backSpeed: 1,
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