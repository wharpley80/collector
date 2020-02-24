$(document).ready(function() {
    
    var pageUrl      = $(location).attr('href');
    var baseUrl      = document.location.origin;
    var companyName  = $('.company-name').text();
    var platformSlug = pageUrl.split(companyName + '/').pop().split('/')[0];

    setActivePlatform = function() {
        $('.platform-menu .active').removeClass('active');
        $('.platform-' + platformSlug).addClass('active');
    }

    setActiveRegion = function() {
        var region = pageUrl.substring(pageUrl.lastIndexOf('/') + 1, pageUrl.length);
        region = region.split('?', 2)[0];
        $('.region-menu a').removeClass('active');
        $('.region-' + region).addClass('active');
    }

    clearSearchResults = function() {
        //$('#game-search').focusout(function() {
        $('.search-result-list').focusout(function() {
            $('.list-group-item').remove();
            $('#game-search').val('');
        });
    }

    getSearchResults = function() {
        $('#game-search').on('keyup', function() {
            $('.list-group-item').remove();
            var searchText = $('#game-search').val();

            if (searchText.length > 3) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "/sega",
                    method: 'post',
                    data: {
                        text: searchText
                    },
                    success: function(result) {
                        var resultList = $('ul.search-result-list');
                        $.each(result, function(i) {
                            if ($('#game-' + result[i]['id']).length == 0) {
                                var resultUrl = document.location.origin + '/single-game/' + result[i]['platform_slug'] + '/' + result[i]['id'];
                                var resultLink = $('<a/>')
                                    .addClass('ui-all')
                                    .attr('href', resultUrl)
                                    .appendTo(resultList);

                                var li = $('<li/>')
                                    .addClass('list-group-item')
                                    .attr('id', 'game-' + result[i]['id'])
                                    .text(result[i]['display_info'])
                                    .appendTo(resultLink);
                            }
                        });

                        $('.search-result').removeAttr('hidden'); 
                    }
                });
            }
        });
    }

    toggleAddUserGameBoxes = function() {
        $('#purchase-new, #cib, #cart-disc, #game-box, #game-manual').on('change', function() {
            if ($(this).is(':checked')) {
                $(this).attr('value', 1);
            } else {
                $(this).attr('value', 0);
            }
        });
    }

    addUserGame = function() {
        $('.add-game-submit').click(function() {
            var gameData = {};
            var dataValueSplit      = $(this).attr('id').split('-', 2);
            gameData['gameId']      = dataValueSplit[0];
            gameData['companyId']   = dataValueSplit[1];
            gameData['price']       = $.trim($('#purchase-price').val());
            gameData['date']        = $.trim($('#purchase-date').val());
            gameData['location']    = $.trim($('#purchase-location').val());
            gameData['purchaseNew'] = $('#purchase-new').val();
            gameData['cib']         = $('#cib').val();
            gameData['cartDisc']    = $('#cart-disc').val();
            gameData['box']         = $('#game-box').val();
            gameData['manual']      = $('#game-manual').val();
            gameData['condition']   = $('#game-condition').val();
            gameData['comment']     = $.trim($('#comment').val());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery.ajax({
                url: "/single-game",
                method: 'post',
                data: {
                    gameData: gameData
                },
                dataType : 'json',
                success: function(result) {
                    $('#addGameModal').modal('toggle');
                    $('html, body').scrollTop(0);

                    if (result['status'] == 'success') {
                        $('.alert-success').text(result['message']).removeAttr('hidden').delay(5000).fadeOut();
                    }

                    if (result['status'] == 'fail') {
                        $('.alert-danger').text(result['message']).removeAttr('hidden').delay(5000).fadeOut();
                    }
                }
            });
        });
    }

    setActivePlatform();
    setActiveRegion();
    clearSearchResults();
    getSearchResults();
    toggleAddUserGameBoxes();
    addUserGame();

/*
    var prevPageUrl    = $('.paginate-prev').attr('href');
    var nextPageUrl    = $('.paginate-next ').attr('href');
    var currentUrl     = pageUrl.split('=', 2)[0];
    var pageNumber     = parseInt(pageUrl.split('=', 2)[1]);
    var nextPageNumber = pageNumber + 1;

    if (pageNumber > 1) {
        var prevPageNumber = pageNumber - 1;
    } else {
        var prevPageNumber = 1;
    }

    prevPageUrl = prevPageUrl + prevPageNumber;
    nextPageUrl = nextPageUrl + nextPageNumber;

    if (pageNumber > 3) {
        $('.paginate-1').text(pageNumber - 2).attr('href', currentUrl + '='  + (pageNumber - 2));
        $('.paginate-2').text(pageNumber - 1).attr('href', currentUrl + '='  + (pageNumber - 1));
        $('.paginate-3').text(pageNumber).attr('href', currentUrl + '='  + pageNumber);
        $('.paginate-4').text(pageNumber + 1).attr('href', currentUrl + '='  + (pageNumber + 1));
        $('.paginate-5').text(pageNumber + 2).attr('href', currentUrl + '='  + (pageNumber + 2));
    }

    $('.paginate-prev').attr('href', prevPageUrl);
    $('.paginate-next').attr('href', nextPageUrl);

    $('.pagination').children('a').each(function () {
        if (this.text == pageNumber) {
            $('.pagination .active').removeClass('active');
            $(this).addClass('active');
        }
    });
    */
});