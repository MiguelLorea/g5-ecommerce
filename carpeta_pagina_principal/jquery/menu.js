
$(document).ready(function(){

    $(".submenu").click(function(){

        $(this).children("ul").slideToggle();
        
    });
    
    $("ul").click(function(p){
    
        p.stopPropagation();
    })

   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});


});
 
    




