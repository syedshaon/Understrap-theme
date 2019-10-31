$ = jQuery.noConflict();


// To change the bg color of top nav on scroll
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 100px
        $('#navbar').css("position", "fixed");
        $('#navbar').addClass("dark-shadow")
        $('.header-social-info').hide();
    } else {
        $('#navbar').css("position", "static");
        $('#navbar').removeClass("dark-shadow");
        $('.header-social-info').show();
    }
});



// Return to Top

// ===== Scroll to Top ==== 
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function () {      // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0                       // Scroll to top of body
    }, 500);
});