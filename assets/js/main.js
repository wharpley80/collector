$(document).ready(function() {
    
    var pageUrl      = $(location).attr('href');
    var baseUrl      = document.location.origin;
    var companyName  = $('.company-name').text();
    var platformSlug = pageUrl.split(companyName + '/').pop().split('/')[0];

    activateToolTips = function() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    }

    ajaxConfig = function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

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
        $(document).on('click', function (e) {
            var clickId = $(e.target).attr('id');
            var searchResultLength = $(e.target).parents('.search-result').length;

            if (searchResultLength === 0 && clickId !== 'game-search') {
                $('.list-group-item').remove();
            }
        });
    }

    getSearchResults = function() {
        $('#game-search').on('keyup', function() {
            $('.list-group-item').remove();
            var searchText = $('#game-search').val();
            returnSearchResults(searchText, '/search');
        });
    }

    getMySearchResults = function() {
        $('#my-game-search').on('keyup', function() {
            $('.list-group-item').remove();
            var searchText = $('#my-game-search').val();
            returnSearchResults(searchText, '/search/search-my-collection');
        });
    }

    returnSearchResults = function(text, url) {
        if (text.length > 3) {
            ajaxConfig();

            jQuery.ajax({
                url: url,
                method: 'post',
                data: {
                    text: text
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
            ajaxConfig();

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
                        setTimeout(function() {
                            window.location.href = '/my-collection';
                        }, 2000);
                    }

                    if (result['status'] == 'fail') {
                        $('.alert-danger').text(result['message']).removeAttr('hidden').delay(5000).fadeOut();
                    }
                }
            });
        });
    }

    deleteUserGame = function() {
        $('.delete-my-single').click(function(e) {
            var userGameId = $(this).attr('id');
            ajaxConfig();

            jQuery.ajax({
                url: "/api/user_game/" + userGameId,
                method: 'delete',
                success: function(result) {
                    console.log('hhhhhhhh');
                    console.log(result.data['id']);
                    if (result.data['id'] == userGameId) {
                        $('#confirmDeleteModal').modal('toggle');
                        $('html, body').scrollTop(0);
                        $('.alert-success').text('The game was successfully removed from your collection.').removeAttr('hidden').delay(5000).fadeOut();
                        setTimeout(function() {
                            window.location.href = '/my-collection';
                        }, 2000);
                    } else {
                        $('.alert-danger').text('We were unable to delete this game from your collection.').removeAttr('hidden').delay(5000).fadeOut();
                    }   
                }
            });
        });
    }

    activateToolTips();
    setActivePlatform();
    setActiveRegion();
    clearSearchResults();
    getSearchResults();
    getMySearchResults();
    toggleAddUserGameBoxes();
    addUserGame();
    deleteUserGame();
});