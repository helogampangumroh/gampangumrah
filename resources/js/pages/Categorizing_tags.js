(function ($) {
    'use strict';
    var citynames = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: {
            url: '../js/tags_data/citynames.json',
            filter: function (list) {
                return $.map(list, function (cityname) {
                    return { name: cityname };
                });
            },
        },
    });
    citynames.initialize();

    var cities = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '../js/tags_data/cities.json',
    });
    cities.initialize();

    /**
     * Typeahead
     */
    var elt = $('.example_typeahead > > input');
    elt.tagsinput({
        tagClass: 'badge bg-info',
        typeaheadjs: {
            name: 'citynames',
            displayKey: 'name',
            valueKey: 'name',
            source: citynames.ttAdapter(),
        },
    });

    /**
     * Objects as tags
     */
    var cities1 = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '../js/tags_data/cities.json',
    });
    cities1.initialize();
    elt = $('.example_objects_as_tags > >  input');
    elt.tagsinput({
        itemValue: 'value',
        itemText: 'text',
        tagClass: 'badge bg-info',
        typeaheadjs: {
            name: 'cities1',
            displayKey: 'text',
            source: cities1.ttAdapter(),
        },
    });

    elt.tagsinput('add', { value: 1, text: 'Amsterdam', continent: 'Europe' });
    elt.tagsinput('add', { value: 4, text: 'Washington', continent: 'America' });
    elt.tagsinput('add', { value: 7, text: 'Sydney', continent: 'Australia' });
    elt.tagsinput('add', { value: 10, text: 'Beijing', continent: 'Asia' });
    elt.tagsinput('add', { value: 13, text: 'Cairo', continent: 'Africa' });

    /**
     * Categorizing tags
     */
    elt = $('.example_tagclass > > input');
    elt.tagsinput({
        tagClass: function (item) {
            switch (item.continent) {
                case 'Europe':
                    return 'badge bg-primary';
                case 'America':
                    return 'badge bg-danger';
                case 'Australia':
                    return 'badge bg-success';
                case 'Africa':
                    return 'badge bg-secondary';
                case 'Asia':
                    return 'badge bg-warning';
            }
        },
        itemValue: 'value',
        itemText: 'text',
        // typeaheadjs: {
        //   name: 'cities',
        //   displayKey: 'text',
        //   source: cities.ttAdapter()
        // }
        typeaheadjs: [
            {
                hint: true,
                highlight: true,
                minLength: 2,
            },
            {
                name: 'cities',
                displayKey: 'text',
                source: cities.ttAdapter(),
            },
        ],
    });
    elt.tagsinput('add', { value: 1, text: 'Amsterdam', continent: 'Europe' });
    elt.tagsinput('add', { value: 4, text: 'Washington', continent: 'America' });
    elt.tagsinput('add', { value: 7, text: 'Sydney', continent: 'Australia' });
    elt.tagsinput('add', { value: 10, text: 'Beijing', continent: 'Asia' });
    elt.tagsinput('add', { value: 13, text: 'Cairo', continent: 'Africa' });

    // HACK: overrule hardcoded display inline-block of typeahead.js
    $('.twitter-typeahead').css('display', 'inline');

    elt = $('.example_markup > >  input');
    elt.tagsinput({ tagClass: 'badge bg-info' });
    elt = $('.example_multivalue > >  select');
    elt.tagsinput({ tagClass: 'badge bg-info' });
})(jQuery);
