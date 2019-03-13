$(document).ready(function(){

    //Change opacité pour affichage du contenu progressif et ajoute une animation
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
    //Change opacité pour affichage du contenu progressif et ajoute une animation
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
    //Change opacité pour affichage du contenu progressif et ajoute une animation
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
    //Change opacité pour affichage du contenu progressif et ajoute une animation
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
    //Change opacité pour affichage du contenu progressif et ajoute une animation
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
    //Change opacité pour affichage du contenu progressif et ajoute une animation
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
    //Change opacité pour affichage du contenu progressif et ajoute une animation
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

    //Réduit la taille du logo quand on est pas au top de la page pour réduire le menu aussi
    $(window).scroll(function(){

        var scroll = $(window).scrollTop();
      
        if (scroll > 0 ) {
          $('.logo').addClass('logo-scrolled');

        }
      
        if (scroll <= 0 ) {
          $('.logo').removeClass('logo-scrolled');
       }
      
      });
      
        //Retire les animations + opacité on scroll en dessous de 650 px
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

        //Flux instagram
        let userFeed = new Instafeed({
            get: 'user',
            userId: '7983810479',
            accessToken: '7983810479.1677ed0.aaadb05b044548f48aed1794e16533ca',
            limit: '10',
            template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>'
            
        });
        userFeed.run();

        //Affiche année en cours en bas du footer
        let date = new Date();
        let year = date.getFullYear();

        $('.year').text(year);
     
})