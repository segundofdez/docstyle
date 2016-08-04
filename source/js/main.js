$(function() {

    $('.js-sticky').Stickyfill();

    // State for responsive navigation
    $('.js-navicon').click(function(event){
        $('.page').toggleClass("has-mobile-menu");
        event.preventDefault();
    });

    // Hightlight initialization
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });

    // Mark menu on scroll
    var sections = $('.content > div')
        , nav = $('nav')
        , nav_height = 72;

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function() {
            var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('is-active');
                sections.removeClass('is-active');

                $(this).addClass('is-active');
                nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('is-active');
            }
        });
    });

   nav.find('a').on('click', function () {
        var $el = $(this)
        , id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top - nav_height + 1
        }, 500);

        //return false;
    });

});
