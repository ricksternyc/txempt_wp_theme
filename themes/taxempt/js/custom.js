
$(function() {//DOM ready

  $('.carousel').carousel({
      interval: 2000
    })
    
    


//CARD BOUNCE
    $('.card_bounce').each( function(i){

        /*change position of each card*/
        $(this).css("margin-top","120px");

        //current viewport's top position
        var scrollTop = $('.trick-out').scrollTop(); 
        var height = $('.trick-out').height();
        var obj = $(this).position().top + $(this).outerHeight();
        //current viewport's bottom position
        var scrollBottom = scrollTop + height+$(this).height();

        if(scrollBottom > obj){
            $(this)
                .animate({'opacity':'1'},{queue:false,duration: 1200})
                .animate({'marginTop':'0px'},600,"easeOutBack")}    
    }); 

    /* scrolling to bottom: if visible in viewport, fade div in with delay */
    $(window).scroll( function(){

        $('.card_bounce').each( function(i){

            var scrollTop = $(window).scrollTop();
            var height = $(window).height();
            var obj = $(this).position().top + $(this).outerHeight();
            var scrollBottom = scrollTop + height +$(this).height();

            if(scrollBottom > obj){
                $(this).delay(600)
                    .animate({'opacity':'1'},{queue:false,duration: 1100})
                    .animate({'marginTop':'20px'},{queue:false,duration: 1600, easing:"easeOutElastic"})}      

        }); 

    });




});