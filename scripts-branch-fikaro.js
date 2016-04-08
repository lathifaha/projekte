var global_SidemenuState = false;
function parallax(){
        var ypos = window.pageYOffset;
        $('.image').css('top',ypos*.3+'px');
        $
    }
    function expandCloseSearch()
    {
        console.log('invoked');
        if($('.search-box').hasClass('expand')) $('.search-box').removeClass('expand');
        else $('.search-box').addClass('expand');
    }
    function stopStartMenu()
    {
        console.log('entered footer');
        var menuBottomOffset = $('.sidemenul').offset().top + $('.sidemenu').height();
        if($('.sidemenu').hasClass('mobile')) return;
        if(menuBottomOffset >= $('#footer').offset().top - 10) $('.sidemenu').css({'position': 'absolute', 'z-index': '9999'}).offset({top : $('#footer').offset().top - ($('.sidemenu').height() + 50)});
        if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top) $('.sidemenu').css({'position' : 'fixed', 'top' : 'auto'});
    }
    
    $(document).ready(function(){
        $('.search-btn').click(function(){
            // Click event
            expandCloseSearch();
        });
        $(document).scroll(function(){
            // Scroll handlers
            parallax();
            stopStartMenu();
        });
        /* Fungsi buka-tutup menu pada mode mobile */
        $('.mobile-nav-btn').click(function(){
            console.log('click invoked');
            var menuLength = $('.sidemenu-wrapper').width();
            console.log(menuLength);
            $('.sidemenu.mobile').toggleClass('expand');
        });
        /* End of function */
    });
        $(document).ready(function(){
         // true means, sidemenu is exposed. false means closed

    });