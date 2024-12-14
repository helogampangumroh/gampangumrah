'use strict';

new TomSelect('#input-tag', {
    persist: false,
    createOnBlur: true,
    create: true,
});
new TomSelect('#select-beast', {
    create: true,
    sortField: {
        field: 'text',
        direction: 'asc',
    },
});
new TomSelect('#select-beast-disabled');
new TomSelect('#select-beast-single-disabled', {
    create: true,
    sortField: { field: 'text' },
});
new TomSelect('#select-state', {
    maxItems: 3,
});
new TomSelect('#select-links', {
    valueField: 'id',
    searchField: 'title',
    options: [
        { id: 1, title: 'DIY', url: 'https://diy.org' },
        { id: 2, title: 'Google', url: 'http://google.com' },
        { id: 3, title: 'Yahoo', url: 'http://yahoo.com' },
    ],
    render: {
        option: function (data, escape) {
            return (
                '<div>' +
                '<span class="title">' +
                escape(data.title) +
                '</span>' +
                '<span class="url">' +
                escape(data.url) +
                '</span>' +
                '</div>'
            );
        },
        item: function (data, escape) {
            return '<div title="' + escape(data.url) + '">' + escape(data.title) + '</div>';
        },
    },
});

new TomSelect('#custom_js', {
    create: true,
    render: {
        option: function (data) {
            const div = document.createElement('div');
            div.className = 'd-flex align-items-center';

            const span = document.createElement('span');
            span.className = 'flex-grow-1';
            span.innerText = data.text;
            div.append(span);

            const a = document.createElement('a');
            a.innerText = '#';
            a.className = 'btn btn-sm btn-light';
            div.append(a);
            a.addEventListener('click', function (evt) {
                evt.stopPropagation();
                alert(`You clicked # within the "${data.text}" option`);
            });

            return div;
        },
    },
});
var REGEX_EMAIL =
    "([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@" +
    '(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

var formatName = function (item) {
    return ((item.first || '') + ' ' + (item.last || '')).trim();
};

new TomSelect('#select-to', {
    persist: false,
    maxItems: null,
    valueField: 'email',
    labelField: 'name',
    searchField: ['first', 'last', 'email'],
    sortField: [
        { field: 'first', direction: 'asc' },
        { field: 'last', direction: 'asc' },
    ],
    options: [
        { email: 'nikola@tesla.com', first: 'Nikola', last: 'Tesla' },
        { email: 'brian@thirdroute.com', first: 'Brian', last: 'Reavis' },
        { email: 'someone@gmail.com' },
        { email: 'example@gmail.com' },
    ],
    render: {
        item: function (item, escape) {
            var name = formatName(item);
            return (
                '<div>' +
                (name ? '<span class="name">' + escape(name) + '</span>' : '') +
                (item.email ? '<span class="email">' + escape(item.email) + '</span>' : '') +
                '</div>'
            );
        },
        option: function (item, escape) {
            var name = formatName(item);
            var label = name || item.email;
            var caption = name ? item.email : null;
            return (
                '<div>' +
                '<span class="label">' +
                escape(label) +
                '</span>' +
                (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                '</div>'
            );
        },
    },
    createFilter: function (input) {
        var regexpA = new RegExp('^' + REGEX_EMAIL + '$', 'i');
        var regexpB = new RegExp('^([^<]*)<' + REGEX_EMAIL + '>$', 'i');
        return regexpA.test(input) || regexpB.test(input);
    },
    create: function (input) {
        if (new RegExp('^' + REGEX_EMAIL + '$', 'i').test(input)) {
            return { email: input };
        }
        var match = input.match(new RegExp('^([^<]*)<' + REGEX_EMAIL + '>$', 'i'));
        if (match) {
            var name = match[1].trim();
            var pos_space = name.indexOf(' ');
            var first = name.substring(0, pos_space);
            var last = name.substring(pos_space + 1);

            return {
                email: match[2],
                first: first,
                last: last,
            };
        }
        alert('Invalid email address.');
        return false;
    },
});

new TomSelect('#select-person', {
    create: true,
    sortField: {
        field: 'text',
        direction: 'asc',
    },
});
var my_select = new TomSelect('#select-bootstrap');
// Example starter JavaScript for disabling form submissions if there are invalid fields
var form = document.getElementById('bootstrap-form');
form.addEventListener(
    'submit',
    function (event) {
        // add was-validated to display custom colors
        form.classList.add('was-validated');

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
    },
    false
);

new TomSelect('#input-tags', {
    persist: false,
    create: true,
});
new TomSelect('#select-beasts');
new TomSelect('#select-words-regex', {
    create: true,
    createFilter: document.getElementById('regex').value,
});
new TomSelect('#select-words-length', {
    create: true,
    createFilter: function (input) {
        return input.length >= parseInt(document.getElementById('length').value, 10);
    },
});
var unique = new TomSelect('#select-words-unique', {
    create: true,
    createFilter: function (input) {
        input = input.toLowerCase();
        return !(input in this.options);
    },
});
var control = new TomSelect('#select-tools', {
    maxItems: null,
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
    options: [
        {
            id: 1,
            title: 'Spectrometer',
            url: 'http://en.wikipedia.org/wiki/Spectrometers',
        },
        {
            id: 2,
            title: 'Star Chart',
            url: 'http://en.wikipedia.org/wiki/Star_chart',
        },
        {
            id: 3,
            title: 'Electrical Tape',
            url: 'http://en.wikipedia.org/wiki/Electrical_tape',
        },
    ],
    create: false,
});

document.getElementById('button-clear').addEventListener('click', function () {
    control.clear();
});

document.getElementById('button-clearoptions').addEventListener('click', function () {
    control.clearOptions();
});

document.getElementById('button-addoption').addEventListener('click', function () {
    control.addOption({
        id: 4,
        title: 'Something New',
        url: 'http://google.com',
    });
});

document.getElementById('button-additem').addEventListener('click', function () {
    control.addItem(2);
});

document.getElementById('button-setvalue').addEventListener('click', function () {
    control.setValue([2, 3]);
});
var letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUV';
var options = [];
for (var i = 0; i < 15000; i++) {
    var title = [];
    for (var j = 0; j < 8; j++) {
        title.push(letters.charAt(Math.round((letters.length - 1) * Math.random())));
    }
    options.push({
        id: i + '-' + title.join(''),
        title: title.join(''),
    });
}

new TomSelect('#select-junk', {
    maxItems: null,
    maxOptions: 100,
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
    sortField: 'title',
    options: options,
    create: false,
});

new TomSelect('#select-locked-single').lock();
new TomSelect('#select-locked').lock();
new TomSelect('#select-gear', {
    sortField: 'text',
});
new TomSelect('#select-gear-disabled', {
    sortField: 'text',
});
new TomSelect('#select-repeated-options', {
    sortField: 'text',
    hideSelected: false,
    duplicates: true,
});
new TomSelect('#select-animal', {
    options: [
        { class: 'mammal', value: 'dog', name: 'Dog' },
        { class: 'mammal', value: 'cat', name: 'Cat' },
        { class: 'mammal', value: 'horse', name: 'Horse' },
        { class: 'mammal', value: 'kangaroo', name: 'Kangaroo' },
        { class: 'bird', value: 'duck', name: 'Duck' },
        { class: 'bird', value: 'chicken', name: 'Chicken' },
        { class: 'bird', value: 'ostrich', name: 'Ostrich' },
        { class: 'bird', value: 'seagull', name: 'Seagull' },
        { class: 'reptile', value: 'snake', name: 'Snake' },
        { class: 'reptile', value: 'lizard', name: 'Lizard' },
        { class: 'reptile', value: 'alligator', name: 'Alligator' },
        { class: 'reptile', value: 'turtle', name: 'Turtle' },
    ],
    optgroups: [
        { value: 'mammal', label: 'Mammal', label_scientific: 'Mammalia' },
        { value: 'bird', label: 'Bird', label_scientific: 'Aves' },
        { value: 'reptile', label: 'Reptile', label_scientific: 'Reptilia' },
    ],
    optgroupField: 'class',
    labelField: 'name',
    searchField: ['name'],
    render: {
        optgroup_header: function (data, escape) {
            return (
                '<div class="optgroup-header">' +
                escape(data.label) +
                ' <span class="scientific">' +
                escape(data.label_scientific) +
                '</span></div>'
            );
        },
    },
});
new TomSelect('#select-tool', {
    maxItems: null,
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
    options: [
        {
            id: 1,
            title: 'Spectrometer',
            url: 'http://en.wikipedia.org/wiki/Spectrometers',
        },
        {
            id: 2,
            title: 'Star Chart',
            url: 'http://en.wikipedia.org/wiki/Star_chart',
        },
        {
            id: 3,
            title: 'Electrical Tape',
            url: 'http://en.wikipedia.org/wiki/Electrical_tape',
        },
    ],
    create: false,
});
new TomSelect('#data-attr', {
    render: {
        option: function (data, escape) {
            return `<div><img class="me-2" src="${data.src}">${data.text}</div>`;
        },
        item: function (item, escape) {
            return `<div><img class="me-2" src="${item.src}">${item.text}</div>`;
        },
    },
});

new TomSelect('#select-repo', {
    valueField: 'url',
    labelField: 'name',
    searchField: 'name',
    // fetch remote data
    load: function (query, callback) {
        var url = 'https://api.github.com/search/repositories?q=' + encodeURIComponent(query);
        fetch(url)
            .then((response) => response.json())
            .then((json) => {
                callback(json.items);
            })
            .catch(() => {
                callback();
            });
    },
    // custom rendering functions for options and items
    render: {
        option: function (item, escape) {
            return `<div class="py-2 d-flex">
                        <div class="icon me-3">
                            <img class="img-fluid" src="${item.owner.avatar_url}" />
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="h4">
                                    ${escape(item.name)}
                                </span>
                                <span class="text-muted">by ${escape(item.owner.login)}</span>
                            </div>
                             <div class="description">${escape(item.description)}</div>
                        </div>
                    </div>`;
        },
        item: function (item, escape) {
            return `<div class="py-2 d-flex">
                        <div class="icon me-3">
                            <img class="img-fluid" src="${item.owner.avatar_url}" />
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="h4">
                                    ${escape(item.name)}
                                </span>
                                <span class="text-muted">by ${escape(item.owner.login)}</span>
                            </div>
                             <div class="description">${escape(item.description)}</div>
                        </div>
                    </div>`;
        },
    },
});
new TomSelect('#select-states', {
    valueField: 'label',
    labelField: 'label',
    searchField: ['label', 'type'],
    // fetch remote data
    load: function (query, callback) {
        var self = this;
        if (self.loading > 1) {
            callback();
            return;
        }

        var url = 'https://whatcms.org/API/List';
        fetch(url)
            .then((response) => response.json())
            .then((json) => {
                callback(json.result.list);
                self.settings.load = null;
            })
            .catch(() => {
                callback();
            });
    },
    // custom rendering function for options
    render: {
        option: function (item, escape) {
            return `<div class="py-2 d-flex">
                        <div class="mb-1">
                            <span class="h5">
                                ${escape(item.label)}
                            </span>
                        </div>
                         <div class="ms-auto">${escape(item.type.join(', '))}</div>
                    </div>`;
        },
    },
});
TomSelect.define('no_close', function () {
    this.close = function () {};
});

new TomSelect('#select-repo2', {
    valueField: 'url',
    labelField: 'name',
    searchField: ['name', 'description'],
    options: [],
    create: false,
    maxOptions: 10,
    dropdownParent: '#select-repo-inline',
    plugins: ['no_close'],
    // minimum query length
    shouldLoad: function (query) {
        return query.length > 1;
    },
    // custom scoring
    score: function (search) {
        var score = this.getScoreFunction(search);
        return function (item) {
            return score(item) * (1 + Math.min(item.watchers / 100, 1));
        };
    },
    // fetch remote data
    load: function (query, callback) {
        var url = 'https://api.github.com/search/repositories?q=' + encodeURIComponent(query);
        fetch(url)
            .then((response) => response.json())
            .then((json) => {
                callback(json.items);
            })
            .catch(() => {
                callback();
            });
    },
    // custom rendering functions for options and items
    render: {
        option: function (item, escape) {
            return `<div class="row border-bottom py-2">
							<div class="col-md-1">
								<img class="img-fluid" src="${item.owner.avatar_url}" />
							</div>
							<div class="col-md-11">
								<div class="mt-0">${escape(item.name)}
									<span class="small text-muted">by ${escape(item.owner.login)}</span>
								</div>
								<div class="mb-1">${escape(item.description)}</div>
								<div class="d-flex text-muted">
									<div class="me-3"><i class="ib fa-code"></i> ${escape(item.language)}</div>
									<div class="me-3"><i class="ib fa-flash"></i> ${escape(item.forks_count)} Forks</div>
									<div class="me-3"><i class="ib fa-star"></i> ${escape(item.stargazers_count)} Stars</div>
									<div class="me-3"><i class="ib fa-eye"></i> ${item.watchers_count} Watchers</div>
								</div>
							</div>
						</div>`;
        },
        item: function (item, escape) {
            return `<div class="py-2 d-flex">
							<div class="icon me-3">
								<img class="img-fluid" src="${item.owner.avatar_url}" />
							</div>
							<div>
								<div class="mb-1">
									<span class="h4">
										${escape(item.name)}
									</span>
									<span class="text-muted">by ${escape(item.owner.login)}</span>
								</div>
                                <div class="description">${escape(item.description)}</div>
			                </div>
			         </div>`;
        },
    },
});

var eventHandler = function (name) {
    return function () {
        // console.log(name, arguments);
        document.getElementById('log').innerHTML += `<div><span class="name">${name}</span></div>`;
    };
};
new TomSelect('#select-st', {
    create: true,
    onChange: eventHandler('onChange'),
    onItemAdd: eventHandler('onItemAdd'),
    onItemRemove: eventHandler('onItemRemove'),
    onOptionAdd: eventHandler('onOptionAdd'),
    onOptionRemove: eventHandler('onOptionRemove'),
    onDropdownOpen: eventHandler('onDropdownOpen'),
    onDropdownClose: eventHandler('onDropdownClose'),
    onFocus: eventHandler('onFocus'),
    onBlur: eventHandler('onBlur'),
    onInitialize: eventHandler('onInitialize'),
});

new TomSelect('#inpt-tags', {
    delimiter: ',',
    persist: false,
    onDelete: function (values) {
        return confirm(
            values.length > 1
                ? 'Are you sure you want to remove these ' + values.length + ' items?'
                : 'Are you sure you want to remove ' + values[0] + '?'
        );
    },
});
