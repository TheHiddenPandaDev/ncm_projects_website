$(document).ready(function(){



    $(".faq-question").click(function(){
        console.log('Clicking faq-question');
        $(this).closest('.faq').find('.faq-response').slideToggle('slow');
    });

    $("div.duraluxe-menu div.dropdown").click(function() {
        $("div.duraluxe-menu div.dropdown div.sub-menu").toggle();
        $("div.duraluxe-menu div.dropdown span.nav-link i").toggleClass('fa-caret-up fa-caret-down');
    });

    $("div.duraluxe-menu-button").click(function() {
        $("div.duraluxe-menu").toggle("slow");
    });

    /*** NEWSLETTER ANIMATION ***/
    $("div.newsletter-popup").fadeIn('slow');
    $("body").addClass('newsletter');

    $("span.close-newsletter-popup").click(function() {
        $("div.newsletter-popup").fadeOut('slow');
        $("body").removeClass('newsletter');
    });




});