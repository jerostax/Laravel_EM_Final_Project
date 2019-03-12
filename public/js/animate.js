$(document).ready(function(){
    $(window).scroll( function(){
        $('.hideR').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('fadeInRight');
            }

        }); 

    });
    $(window).scroll( function(){
        $('.hideL').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('fadeInLeft');
            }

        }); 

    });
    $(window).scroll( function(){
        $('.hideU').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('fadeInUpBig');
            }

        }); 

    });
    $(window).scroll( function(){
        $('.hideD').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('fadeInDownBig');
            }

        }); 

    });
    $(window).scroll( function(){
        $('.hideZ').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('zoomIn');
            }

        }); 

    });
    $(window).scroll( function(){
        $('.hideBL').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('bounceInLeft');
            }

        }); 

    });
    $(window).scroll( function(){
        $('.hideBR').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('bounceInRight');
            }

        }); 

    });
    $(window).scroll(function(){

        var scroll = $(window).scrollTop();
      
        if (scroll > 0 ) {
          $('.logo').addClass('logo-scrolled');

        }
      
        if (scroll <= 0 ) {
          $('.logo').removeClass('logo-scrolled');
       }
      
      });
      
        if($(window).innerWidth() < 650){
            $('.hideL').removeClass('hideL');
            $('.hideR').removeClass('hideR');
            $('.hideZ').removeClass('hideZ');
            $('.hideU').removeClass('hideU');
            $('.hideD').removeClass('hideD');
            $('.hideBR').removeClass('hideBR');
            $('.hideBL').removeClass('hideBL');
        }
        
        $('.search').click(function(){
            
            $('.search-bar').toggle();
            
        })
     
})