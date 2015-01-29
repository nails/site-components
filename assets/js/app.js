/* global Mustache */
var _APP;
_APP = function()
{
    var base = this;

    // --------------------------------------------------------------------------

    base.searchTimeout = null;
    base.searchString = '';

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

            //  If the string hasn't changed, don't do anything
            if ($('#search-term').val() === base.searchString) {

                return;
            }

            //  Clear out any existing call
            if (base.searchTimeout !== null) {

                clearTimeout(base.searchTimeout);
            }

            //  Do the search
            base.searchString  = $('#search-term').val();
            base.searchTimeout = setTimeout(function() { base.doSearch(); }, 250);
        });

        $('#include-module, #include-driver, #include-skin').on('change', function()
        {
            //  Clear out any existing call
            if (base.searchTimeout !== null) {

                clearTimeout(base.searchTimeout);
            }

            base.searchTimeout = setTimeout(function() { base.doSearch(); }, 250);
        });
    };

    // --------------------------------------------------------------------------

    base.doSearch = function() {

        $('#search-results')
            .removeClass('no-results');
        $('#search-searching')
            .addClass('searching');

        if ($('#search-term').val().length === 0) {

            $('#search-searching')
                .removeClass('searching');

        } else {

            var data = {
                'term': $('#search-term').val(),
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
