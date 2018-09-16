
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


    if ($('body').hasClass('mobile')) {
        var viewportHeight = $('.carousel-item').innerHeight();
        $('.carousel-item').css({ height: viewportHeight });
    }
});


//CHROME VH FIX

var VHChromeFix=function(e){var t=this,i=navigator.userAgent.toLowerCase(),n=/chrome/.test(i)&&/android/.test(i),o=/crios/.test(i);(n||o)&&(this.getElements(e),this.fixAll(),this.windowWidth=window.innerWidth,this.windowHeight=window.innerHeight,window.addEventListener("resize",function(){t.windowWidth!==window.innerWidth&&t.windowHeight!==window.innerHeight&&(t.windowWidth=window.innerWidth,t.windowHeight=window.innerHeight,t.fixAll())}))};VHChromeFix.prototype.getElements=function(e){this.elements=[],e=this.isArray(e)?e:[e];for(var t=0;t<e.length;t++)for(var i=e[t].selector,n=document.querySelectorAll(i),o=0;o<n.length;o++)this.elements.push({domElement:n[o],vh:e[t].vh})},VHChromeFix.prototype.isArray=function(e){return"[object Array]"===Object.prototype.toString.call(e)},VHChromeFix.prototype.fixAll=function(){for(var e=0;e<this.elements.length;e++){var t=this.elements[e];t.domElement.style.height=window.innerHeight*t.vh/100+"px"}};

var options = [
  {
    selector: '.carousel-item', // Mandatory, CSS selector
    vh: 110,  // Mandatory, height in vh units
  }
];

var vhFix = new VHChromeFix(options);