//credit: https://codepen.io/angelagiese/full/zvOvzx
var div_top = $('.stickyTimer').offset().top;

$(window).scroll(function() {
    var window_top = $(window).scrollTop() - 0;
    if (window_top > div_top) {
        if (!$('.stickyTimer').is('.sticky')) {
            $('.stickyTimer').addClass('sticky');
        }
    } else {
        $('.stickyTimer').removeClass('sticky');
    }
});