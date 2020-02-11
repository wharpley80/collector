$(document).ready(function() {

    var pageUrl        = $(location).attr('href');
    var prevPageUrl    = $('.paginate-prev').attr('href');
    var nextPageUrl    = $('.paginate-next ').attr('href');
    var pageNumber     = parseInt(pageUrl.split('=', 2)[1]);
    var baseUrl        = pageUrl.split('=', 2)[0];
    var nextPageNumber = pageNumber + 1;
    var platformId     = pageUrl.split('platform/').pop().split('/')[0];

    $('.platform-menu .active').removeClass('active');
    $('#platform-' + platformId).addClass('active');

    if (pageNumber > 1) {
        var prevPageNumber = pageNumber - 1;
    } else {
        var prevPageNumber = 1;
    }

    prevPageUrl = prevPageUrl + prevPageNumber;
    nextPageUrl = nextPageUrl + nextPageNumber;

    if (pageNumber > 3) {
        $('.paginate-1').text(pageNumber - 2).attr('href', baseUrl + '='  + (pageNumber - 2));
        $('.paginate-2').text(pageNumber - 1).attr('href', baseUrl + '='  + (pageNumber - 1));
        $('.paginate-3').text(pageNumber).attr('href', baseUrl + '='  + pageNumber);
        $('.paginate-4').text(pageNumber + 1).attr('href', baseUrl + '='  + (pageNumber + 1));
        $('.paginate-5').text(pageNumber + 2).attr('href', baseUrl + '='  + (pageNumber + 2));
    }

    $('.paginate-prev').attr('href', prevPageUrl);
    $('.paginate-next').attr('href', nextPageUrl);

    $('.pagination').children('a').each(function () {
        if (this.text == pageNumber) {
            $('.pagination .active').removeClass('active');
            $(this).addClass('active');
        }
    });
});