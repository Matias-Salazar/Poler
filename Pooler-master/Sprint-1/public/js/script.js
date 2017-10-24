$(document).ready(function () {
    var link = $('.menu').find('.nav-link');

    link.click(function (e) {
        e.preventDefault();

        var sectionLink = $(this).attr('href');

        $('body').animate({
            scrollTop: $(sectionLink).position().top
        },800, 'swing')

    });
});