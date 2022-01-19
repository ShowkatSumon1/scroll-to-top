(function($){
    jQuery(document).ready(function(){

        jQuery(window).scroll(function(){
            var hight = jQuery(window).scrollTop();

            if(hight > 100){
                jQuery('.scroll-top').fadeIn();
            }else{
                jQuery('.scroll-top').fadeOut();
            }
        });
        jQuery('.scroll-top a').on('click', function(){
            jQuery('html, body').animate({scrollTop : 0}, 500);
            
            return false;
        });

    });
})(jQuery);