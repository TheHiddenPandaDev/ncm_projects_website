$(document).ready(function(){



    $(".faq-question").click(function(){
        console.log('Clicking faq-question');
        $(this).closest('.faq').find('.faq-response').slideToggle('slow');
    });
});