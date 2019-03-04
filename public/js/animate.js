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
})