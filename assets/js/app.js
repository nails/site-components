/* global Mustache */
var _APP;
_APP = function()
{
    var base = this;

    // --------------------------------------------------------------------------

    base.searchTimeout = null;
    base.searchDelay   = 750;
    base.searchString  = '';

    // --------------------------------------------------------------------------

    base.__construct = function()
    {
        base.initSearch();
        $('#search-term').focus();
    };

    // --------------------------------------------------------------------------

    base.initSearch = function()
    {
        base.searchTimeout = null;

        $('#search-term').on('keyup', function() {

            var searchTerm = $.trim($('#search-term').val());

            //  If the string hasn't changed, or it's empty, don't do anything
            if (searchTerm.length ===0 || searchTerm === base.searchString) {

                return;
            }

            //  Clear out any existing call
            if (base.searchTimeout !== null) {

                clearTimeout(base.searchTimeout);
            }

            //  Do the search
            $('#search-searching').addClass('searching');
            base.searchString  = searchTerm;
            base.searchTimeout = setTimeout(function() {

                base.doSearch();

            }, base.searchDelay);
        });

        $('#include-module, #include-driver, #include-skin').on('change', function()
        {
            //  Clear out any existing call
            if (base.searchTimeout !== null) {

                clearTimeout(base.searchTimeout);
            }

            $('#search-searching').addClass('searching');
            base.searchTimeout = setTimeout(function() {

                base.doSearch();

            }, base.searchDelay);
        });
    };

    // --------------------------------------------------------------------------

    base.doSearch = function() {

        $('#search-results')
            .removeClass('no-results');

        var searchTerm = $.trim($('#search-term').val());

        if (searchTerm.length === 0) {

            $('#search-searching')
                .removeClass('searching');

        } else {

            var data = {
                'term': searchTerm,
                'include': {
                    'module': $('#include-module').is(':checked'),
                    'driver': $('#include-driver').is(':checked'),
                    'skin': $('#include-skin').is(':checked')
                }
            };

            $.ajax({
                'url': window.SITE_URL + 'api/search',
                'data': data,
                'success': function(data)
                {
                    if (data.results.length > 0) {

                        var tplResult = $('#tplResult').html();
                        var result = '';

                        $('#search-results')
                            .empty();

                        $('#search-searching')
                            .removeClass('searching');

                        for (var key in data.results) {

                            result = Mustache.render(tplResult, data.results[key]);
                            $('#search-results').append(result);
                        }

                    } else {

                        $('#search-results')
                            .empty()
                            .addClass('no-results');

                        $('#search-searching')
                            .removeClass('searching');
                    }
                }
            });
        }
    };

    // --------------------------------------------------------------------------

    return base.__construct();
}();
