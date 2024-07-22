define(['jquery', 'local_select2/select2'], function ($, select2) {
    return {
        init: function (selector, min_results = 5) {
            $(selector).select2({
                minimumResultsForSearch: min_results,
                theme: 'bootstrap-5'
            });
        }
    }
});