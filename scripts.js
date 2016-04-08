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
        if($('.sidemenu').hasClass('mobile')){
            var menuBottomOffset = $('.sidemenu').offset().top + $('.sidemenu').height();
            if($('.sidemenu').hasClass('mobile')) return;
            if(menuBottomOffset >= $('#footer').offset().top - 10) $('.sidemenu').css({'position': 'absolute', 'z-index': '9999'}).offset({top : $('#footer').offset().top - ($('.sidemenu').height() + 50)});
            if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top) $('.sidemenu').css({'position' : 'fixed', 'top' : 'auto'});
        }
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
    });
    $(document).ready(function(){
        $(".burger-nav").on("click", function(){
            console.log('invoked');
            $(".burger-nav, .search-item, .sidemenu").toggleClass("open");
            $('#footer').toggleClass('slide');
        });
    });