'use strict';
var gridData = [
    {
        id: 549731,
        name: 'Beautiful Lies',
        artist: 'Birdy',
        release: '2016.03.26',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Pop',
        genreCode: '1',
        grade: '2',
        price: 10000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 436461,
        name: 'X',
        artist: 'Ed Sheeran',
        release: '2014.06.24',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Pop',
        genreCode: '1',
        grade: '3',
        price: 20000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 295651,
        name: 'Moves Like Jagger',
        release: '2011.08.08',
        artist: 'Maroon5',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop,Rock',
        genreCode: '1,2',
        grade: '2',
        price: 7000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 541713,
        name: 'A Head Full Of Dreams',
        artist: 'Coldplay',
        release: '2015.12.04',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Rock',
        genreCode: '2',
        grade: '3',
        price: 25000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 265289,
        name: '21',
        artist: 'Adele',
        release: '2011.01.21',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Pop,R&B',
        genreCode: '1,3',
        grade: '3',
        price: 15000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 555871,
        name: 'Warm On A Cold Night',
        artist: 'HONNE',
        release: '2016.07.22',
        type: 'EP',
        typeCode: '1',
        genre: 'R&B,Electronic',
        genreCode: '3,4',
        grade: '2',
        price: 11000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 550571,
        name: 'Take Me To The Alley',
        artist: 'Gregory Porter',
        release: '2016.09.02',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Jazz',
        genreCode: '5',
        grade: '3',
        price: 30000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 544128,
        name: 'Make Out',
        artist: 'LANY',
        release: '2015.12.11',
        type: 'EP',
        typeCode: '2',
        genre: 'Electronic',
        genreCode: '4',
        grade: '2',
        price: 12000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 366374,
        name: 'Get Lucky',
        artist: 'Daft Punk',
        release: '2013.04.23',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop,Funk',
        genreCode: '1,5',
        grade: '3',
        price: 9000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 8012747,
        name: 'Valtari',
        artist: 'Sigur Rós',
        release: '2012.05.31',
        type: 'EP',
        typeCode: '3',
        genre: 'Rock',
        genreCode: '2',
        grade: '3',
        price: 10000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 502792,
        name: 'Bush',
        artist: 'Snoop Dogg',
        release: '2015.05.12',
        type: 'EP',
        typeCode: '2',
        genre: 'Hiphop',
        genreCode: '5',
        grade: '3',
        price: 18000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 294574,
        name: '2',
        artist: 'Beyoncé',
        release: '2011.07.26',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Pop',
        genreCode: '1',
        grade: '3',
        price: 12000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 317659,
        name: "I Won't Give Up",
        artist: 'Jason Mraz',
        release: '2012.01.03',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop',
        genreCode: '1',
        grade: '2',
        price: 7000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 583551,
        name: 'Following My Intuition',
        artist: 'Craig David',
        release: '2016.10.01',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'R&B,Electronic',
        genreCode: '3,4',
        grade: '3',
        price: 15000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 490500,
        name: 'Blue Skies',
        release: '2015.03.18',
        artist: 'Lenka',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop,Rock',
        genreCode: '1,2',
        grade: '3',
        price: 6000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 587871,
        name: 'This Is Acting',
        artist: 'Sia',
        release: '2016.10.22',
        type: 'EP',
        typeCode: '2',
        genre: 'Pop',
        genreCode: '1',
        grade: '3',
        price: 20000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 504288,
        name: 'Blurryface',
        artist: 'Twenty One Pilots',
        release: '2015.05.19',
        type: 'EP',
        typeCode: '2',
        genre: 'Rock',
        genreCode: '2',
        grade: '1',
        price: 13000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 450720,
        name: "I'm Not The Only One",
        artist: 'Sam Smith',
        release: '2014.09.15',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop,R&B',
        genreCode: '1,3',
        grade: '2',
        price: 8000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 498896,
        name: 'The Magic Whip',
        artist: 'Blur',
        release: '2015.04.27',
        type: 'EP',
        typeCode: '2',
        genre: 'Rock',
        genreCode: '2',
        grade: '3',
        price: 15000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 491379,
        name: 'Chaos And The Calm',
        artist: 'James Bay',
        release: '2015.03.23',
        type: 'EP',
        typeCode: '2',
        genre: 'Pop,Rock',
        genreCode: '1,2',
        grade: '3',
        price: 12000,
        downloadCount: 1000,
        listenCount: 5000,
    },
];
{
    const grid = new tui.Grid({
        el: document.getElementById('grid1'),
        data: gridData,
        scrollX: false,
        scrollY: false,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid2'),
        scrollX: false,
        scrollY: false,
        data: gridData,
        header: {
            height: 160,
            complexColumns: [
                {
                    header: 'Basic',
                    name: 'mergeColumn1',
                    childNames: ['name', 'artist'],
                },
                {
                    header: 'Extra',
                    name: 'mergeColumn2',
                    childNames: ['type', 'release', 'genre'],
                },
                {
                    header: 'Detail',
                    name: 'mergeColumn3',
                    childNames: ['mergeColumn1', 'mergeColumn2'],
                },
                {
                    header: 'Count',
                    name: 'mergeColumn4',
                    childNames: ['downloadCount', 'listenCount'],
                },
                {
                    header: 'Album Info',
                    name: 'mergeColumn5',
                    childNames: ['price', 'mergeColumn3', 'mergeColumn4'],
                },
            ],
        },
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
            {
                header: 'Price',
                name: 'price',
            },
            {
                header: 'Download',
                name: 'downloadCount',
            },
            {
                header: 'Listen',
                name: 'listenCount',
            },
        ],
    });
}
{
    class CustomTextEditor {
        constructor(props) {
            const el = document.createElement('input');
            const { maxLength } = props.columnInfo.editor.options;

            el.type = 'text';
            el.maxLength = maxLength;
            el.value = String(props.value);

            this.el = el;
        }

        getElement() {
            return this.el;
        }

        getValue() {
            return this.el.value;
        }

        mounted() {
            this.el.select();
        }
    }

    const grid = new tui.Grid({
        el: document.getElementById('grid3'),
        scrollX: false,
        scrollY: false,
        columns: [
            {
                header: 'Name',
                name: 'name',
                editor: 'text',
            },
            {
                header: 'Artist',
                name: 'artist',
                editor: {
                    type: CustomTextEditor,
                    options: {
                        maxLength: 10,
                    },
                },
            },
            {
                header: 'Type',
                name: 'typeCode',
                formatter: 'listItemText',
                editor: {
                    type: 'select',
                    options: {
                        listItems: [
                            { text: 'Deluxe', value: '1' },
                            { text: 'EP', value: '2' },
                            { text: 'Single', value: '3' },
                        ],
                    },
                },
            },
            {
                header: 'Genre',
                name: 'genreCode',
                formatter: 'listItemText',
                editor: {
                    type: 'checkbox',
                    options: {
                        listItems: [
                            { text: 'Pop', value: '1' },
                            { text: 'Rock', value: '2' },
                            { text: 'R&B', value: '3' },
                            { text: 'Electronic', value: '4' },
                            { text: 'etc.', value: '5' },
                        ],
                    },
                },
                copyOptions: {
                    useListItemText: true, // when this option is used, the copy value is concatenated text
                },
            },
            {
                header: 'Grade',
                name: 'grade',
                copyOptions: {
                    useListItemText: true,
                },
                formatter: 'listItemText',
                editor: {
                    type: 'radio',
                    options: {
                        listItems: [
                            { text: '★☆☆', value: '1' },
                            { text: '★★☆', value: '2' },
                            { text: '★★★', value: '3' },
                        ],
                    },
                },
            },
        ],
    });
    grid.on('beforeChange', (ev) => {
        console.log('before change:', ev);
    });
    grid.on('afterChange', (ev) => {
        console.log('after change:', ev);
    });
    grid.resetData(gridData);
}
{
    class CustomSliderRenderer {
        constructor(props) {
            const el = document.createElement('input');
            const { min, max } = props.columnInfo.renderer.options;

            el.type = 'range';
            el.min = String(min);
            el.max = String(max);
            el.disabled = true;

            this.el = el;
            this.render(props);
        }

        getElement() {
            return this.el;
        }

        render(props) {
            this.el.value = String(props.value);
        }
    }

    const grid = new tui.Grid({
        el: document.getElementById('grid4'),
        scrollX: false,
        scrollY: false,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Grade',
                name: 'grade',
                renderer: {
                    type: CustomSliderRenderer,
                    options: {
                        min: 1,
                        max: 5,
                    },
                },
            },
        ],
    });

    grid.resetData(gridData);
}
{
    const twoDepthData = {
        '01': [
            { text: 'Select', value: '' },
            { text: 'Balad/Dance/Pop', value: '01_01' },
            { text: 'Hiphop/R&B', value: '01_02' },
            { text: 'Indie', value: '01_03' },
        ],
        '02': [
            { text: 'Select', value: '' },
            { text: 'Pop', value: '02_01' },
            { text: 'Hiphop', value: '02_02' },
            { text: 'R&B', value: '02_03' },
        ],
        '03': [
            { text: 'Select', value: '' },
            { text: 'OST', value: '03_01' },
            { text: 'Classic', value: '03_02' },
            { text: 'New Age', value: '03_03' },
        ],
    };

    const threeDepthData = {
        '01_01': [
            { text: 'Select', value: '' },
            { text: 'I Miss You', value: '01_01_0001' },
            { text: 'Russian Roulette', value: '01_01_0002' },
            { text: 'TT', value: '01_01_0003' },
            { text: 'Beautiful', value: '01_01_0004' },
            { text: 'KNOCK KNOCK', value: '01_01_0005' },
            { text: 'Rookie', value: '01_01_0006' },
            { text: 'Round And Round', value: '01_01_0007' },
        ],
        '01_02': [
            { text: 'Select', value: '' },
            { text: 'BERMUDA TRIANGLE', value: '01_02_0001' },
            { text: 'Day Day', value: '01_02_0002' },
            { text: 'Bye bye my blue', value: '01_02_0003' },
            { text: 'Comedian', value: '01_02_0004' },
            { text: 'what2do', value: '01_02_0005' },
            { text: 'Bye bye my blue', value: '01_02_0006' },
            { text: 'I NEED U', value: '01_02_0007' },
        ],
        '01_03': [
            { text: 'Select', value: '' },
            { text: 'Madeleine Love', value: '01_03_0001' },
            { text: 'Mood Indigo', value: '01_03_0002' },
            { text: "I Don't Wanna Love You", value: '01_03_0003' },
            { text: 'Come Back Home', value: '01_03_0004' },
            { text: 'MONSTER', value: '01_03_0005' },
            { text: 'Free Somebody', value: '01_03_0006' },
            { text: 'Vineyard', value: '01_03_0007' },
        ],
        '02_01': [
            { text: 'Select', value: '' },
            { text: 'Cave Me In', value: '02_01_0001' },
            { text: 'Hello', value: '02_01_0002' },
            { text: 'When We Were Young', value: '02_01_0003' },
            { text: 'Stay With Me', value: '02_01_0004' },
            { text: "I'm Not The Only One", value: '02_01_0005' },
            { text: 'Youth', value: '02_01_0006' },
            { text: 'Love On Top', value: '02_01_0007' },
        ],
        '02_02': [
            { text: 'Select', value: '' },
            { text: 'Love The Way You Lie', value: '02_02_0001' },
            { text: 'Flower Dance', value: '02_02_0002' },
            { text: 'I Feel It Coming', value: '02_02_0003' },
            { text: 'Love The Way You Lie', value: '02_02_0004' },
            { text: 'I Feel It Coming', value: '02_02_0005' },
            { text: 'GDFR', value: '02_02_0006' },
            { text: 'Love Me In Everything', value: '02_02_0007' },
        ],
        '02_03': [
            { text: 'Select', value: '' },
            { text: 'Marry You', value: '02_03_0001' },
            { text: 'Hello', value: '02_03_0002' },
            { text: 'Coastal Love', value: '02_03_0003' },
            { text: 'Happy', value: '02_03_0004' },
            { text: 'If You Wonder', value: '02_03_0005' },
            { text: 'Want To Want Me', value: '02_03_0006' },
            { text: 'Get Lucky', value: '02_03_0007' },
        ],
        '03_01': [
            { text: 'Select', value: '' },
            { text: 'City Of Stars', value: '03_01_0001' },
            { text: 'You Are My Everything', value: '03_01_0002' },
            { text: 'Summer Montage / Madeline', value: '03_01_0003' },
            { text: 'Memory', value: '03_01_0004' },
            { text: 'A Lovely Night', value: '03_01_0005' },
        ],
        '03_02': [
            { text: 'Select', value: '' },
            {
                text: 'Ravel: Pavane Pour Une Infant Defunte',
                value: '03_02_0001',
            },
            { text: 'Elgar: Salut D`amour', value: '03_02_0002' },
            { text: 'Refuse', value: '03_02_0003' },
            { text: 'Liebestraume S541: No. 3 in A flat', value: '03_02_0004' },
            { text: 'Three Romances Op94: nr 2 in A', value: '03_02_0005' },
        ],
        '03_03': [
            { text: 'Select', value: '' },
            { text: 'Kiss The Rain', value: '03_03_0001' },
            { text: 'Blind Film', value: '03_03_0002' },
            { text: 'Merry Christmas Mr.Lawrence', value: '03_03_0003' },
            { text: 'After The Play', value: '03_03_0004' },
            { text: 'River Flows In You', value: '03_03_0005' },
        ],
    };

    const grid = new tui.Grid({
        el: document.getElementById('grid5'),
        scrollX: false,
        scrollY: false,
        rowHeight: 40,
        minBodyHeight: 120,
        columns: [
            {
                header: 'Category1',
                name: 'category1',
                formatter: 'listItemText',
                editor: {
                    type: 'select',
                    options: {
                        listItems: [
                            { text: 'Select', value: '' },
                            { text: 'Domestic', value: '01' },
                            { text: 'Overseas', value: '02' },
                            { text: 'Etc', value: '03' },
                        ],
                    },
                },
                relations: [
                    {
                        targetNames: ['category2'],
                        listItems({ value }) {
                            return twoDepthData[value];
                        },
                        disabled({ value }) {
                            return !value;
                        },
                    },
                ],
            },
            {
                header: 'Category2',
                name: 'category2',
                formatter: 'listItemText',
                editor: {
                    type: 'select',
                    options: {
                        listItems: [],
                    },
                },
                relations: [
                    {
                        targetNames: ['category3'],
                        listItems({ value }) {
                            return threeDepthData[value];
                        },
                        disabled({ value }) {
                            return !value;
                        },
                    },
                ],
            },
            {
                header: 'Category3',
                name: 'category3',
                formatter: 'listItemText',
                editor: {
                    type: 'select',
                    options: {
                        listItems: [],
                    },
                },
            },
        ],
    });

    const gridData = [
        // initial data
        {
            category1: '',
            category2: '',
            category3: '',
        },
        {
            category1: '02',
            category2: '02_03',
            category3: '02_03_0001',
        },
        {
            category1: '03',
            category2: '03_01',
            category3: '03_01_0001',
        },
    ];

    grid.resetData(gridData);
}
{
    const gridData = [
        {
            name: 'Beautiful Lies',
            artist: 'Birdy',
            release: '2016.03.26',
            type: 'Deluxe',
            genre: 'Pop',
        },
        {
            name: 'X',
            artist: 'Ed Sheeran',
            release: '2014.06.24',
            type: 'Deluxe',
            genre: 'Pop',
            _attributes: {
                disabled: true, // A current row is disabled
            },
        },
        {
            name: 'Moves Like Jagger',
            release: '2011.08.08',
            artist: 'Maroon5',
            type: 'Single',
            genre: 'Pop,Rock',
            _attributes: {
                checkDisabled: true, // A checkbox is disabled only
            },
        },
        {
            name: 'A Head Full Of Dreams',
            artist: 'Coldplay',
            release: '2015.12.04',
            type: 'Deluxe',
            genre: 'Rock',
            _attributes: {
                checked: true, // A checkbox is already checked while rendering
                className: {
                    // Add class name on a row
                    row: ['red'],
                },
            },
        },
        {
            name: '19',
            artist: 'Adele',
            release: '2008.01.27',
            type: 'EP',
            genre: 'Pop,R&B',
            _attributes: {
                rowSpan: {
                    // Merge rows
                    artist: 3,
                    genre: 2,
                },
            },
        },
        {
            name: '21',
            artist: 'Adele',
            release: '2011.01.21',
            type: 'Deluxe',
            genre: 'Pop,R&B',
        },
        {
            name: '25',
            artist: 'Adele',
            release: '2015.11.20',
            type: 'EP',
            genre: 'Pop',
            _attributes: {
                className: {
                    // Add class name on each columns
                    column: {
                        type: ['blue'],
                        genre: ['blue'],
                    },
                },
            },
        },
    ];

    const grid = new tui.Grid({
        el: document.getElementById('grid6'),
        data: gridData,
        scrollX: false,
        scrollY: false,
        rowHeaders: ['checkbox'],
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
    });
}
{
    const gridData = [
        {
            c1: '100013',
            c2: 'Mustafa Cosme',
            c3: 291232,
        },
        {
            c1: '201212',
            c2: 'Gunnar Fausto',
            c3: 32123,
        },
        {
            c1: '241221',
            c2: 'Junior Morgan',
            c3: 88823,
        },
        {
            c1: '991232',
            c2: 'Tódor Ingo',
            c3: 9981,
        },
        {
            c1: '299921',
            c2: 'Zezé Obadiah',
            c3: 140212,
        },
        {
            c1: '772193',
            c2: 'Alfwin Damir',
            c3: 30012,
        },
        {
            c1: '991232',
            c2: 'Feroz Fredrik',
            c3: 111023,
        },
        {
            c1: '572812',
            c2: 'Archer Beniamino',
            c3: 229123,
        },
        {
            c1: '310832',
            c2: 'Dado Shaul',
            c3: 123,
        },
        {
            c1: '321232',
            c2: 'Svetoslav Eder',
            c3: 81252,
        },
        {
            c1: '229123',
            c2: 'Lauri Gligor',
            c3: 230923,
        },
        {
            c1: '589282',
            c2: 'Ruben Bèr',
            c3: 11523,
        },
        {
            c1: '321234',
            c2: 'Vicenç Hadrien',
            c3: 29912,
        },
        {
            c1: '632123',
            c2: 'Borna Rochus',
            c3: 62842,
        },

        {
            c1: '122123',
            c2: 'Kristijonas Tate',
            c3: 199823,
        },
        {
            c1: '211232',
            c2: 'Kumara Archimedes',
            c3: 112522,
        },
        {
            c1: '487297',
            c2: 'Hershel Radomil',
            c3: 399123,
        },
        {
            c1: '232123',
            c2: 'Toma Levan',
            c3: 231253,
        },
        {
            c1: '828723',
            c2: 'Njord Thoko',
            c3: 89123,
        },
    ];

    const grid = new tui.Grid({
        el: document.getElementById('grid7'),
        scrollX: false,
        scrollY: false,
        rowHeight: 35,
        rowHeaders: ['rowNum'],
        header: {
            height: 40,
        },
        columns: [
            {
                header: 'ID',
                name: 'c1',
            },
            {
                header: 'Name',
                defaultValue: 2,
                name: 'c2',
            },
            {
                header: 'Score',
                name: 'c3',
            },
        ],
        data: gridData,
    });

    Array.prototype.forEach.call(document.querySelectorAll('.btn-theme'), (el) => {
        el.addEventListener('click', (ev) => {
            const preset = ev.target.getAttribute('data-preset');
            tui.Grid.applyTheme(preset);
        });
    });

    document.querySelector('.btn-custom').addEventListener('click', () => {
        const options = eval(`(${document.getElementById('custom-text').value})`);
        tui.Grid.applyTheme('default', options);
    });
}
{
    const gridData = [
        {
            c1: '1992/03/25',
            c2: '12/06/2019',
            c3: '2014-04-16',
            c4: '2019-11-19 09:00 AM',
            c5: '2019-11-19 09:00 AM',
            c6: '2019-01',
            c7: '2019',
        },
    ];

    const grid = new tui.Grid({
        el: document.getElementById('grid8'),
        scrollX: false,
        scrollY: false,
        data: gridData,
        columns: [
            {
                header: 'DatePicker (Default)',
                name: 'c1',
                editor: 'datePicker',
            },
            {
                header: 'DatePicker (Using options)',
                name: 'c2',
                editor: {
                    type: 'datePicker',
                    options: {
                        format: 'dd/MM/yyyy',
                    },
                },
            },
            {
                header: 'DatePicker (selectableRanges)',
                name: 'c3',
                editor: {
                    type: 'datePicker',
                    options: {
                        selectableRanges: [[new Date(2014, 3, 10), new Date(2014, 5, 20)]],
                    },
                },
            },
            {
                header: 'Date-TimePicker',
                name: 'c4',
                editor: {
                    type: 'datePicker',
                    options: {
                        format: 'yyyy-MM-dd HH:mm A',
                        timepicker: true,
                    },
                },
            },
            {
                header: 'Date-TimePicker With tab',
                name: 'c5',
                editor: {
                    type: 'datePicker',
                    options: {
                        format: 'yyyy-MM-dd HH:mm A',
                        timepicker: {
                            layoutType: 'tab',
                            inputType: 'spinbox',
                        },
                    },
                },
            },
            {
                header: 'MonthPicker',
                name: 'c6',
                editor: {
                    type: 'datePicker',
                    options: {
                        format: 'yyyy-MM',
                        type: 'month',
                    },
                },
            },
            {
                header: 'YearPicker',
                name: 'c7',
                editor: {
                    type: 'datePicker',
                    options: {
                        format: 'yyyy',
                        type: 'year',
                    },
                },
            },
        ],
    });
}
{
    const gridData = [];
    (function () {
        for (let i = 0; i < 120; i += 1) {
            gridData.push({
                c1: 'User' + (i + 1),
                c2: ((i + 5) % 8) * 100 + i,
                c3: ((i + 3) % 7) * 60,
            });
        }
    })();

    const grid = new tui.Grid({
        el: document.getElementById('grid9'),
        data: gridData,
        scrollX: false,
        bodyHeight: 300,
        rowHeaders: ['rowNum'],
        columns: [
            {
                header: 'User ID',
                name: 'c1',
                align: 'center',
                editor: 'text',
            },
            {
                header: 'Score',
                name: 'c2',
                className: 'clickable',
                editor: 'text',
            },
            {
                header: 'Item Count',
                name: 'c3',
                editor: 'text',
            },
        ],
        summary: {
            height: 40,
            position: 'bottom', // or 'top'
            columnContent: {
                c2: {
                    template: function (valueMap) {
                        return `MAX: ${valueMap.max}<br>MIN: ${valueMap.min}`;
                    },
                },
                c3: {
                    template: function (valueMap) {
                        return `TOTAL: ${valueMap.sum} <br>AVG: ${valueMap.avg.toFixed(2)}`;
                    },
                },
            },
        },
    });
}

{
    class RowNumberRenderer {
        constructor(props) {
            const el = document.createElement('span');
            el.innerHTML = `No.${props.formattedValue}`;
            this.el = el;
        }

        getElement() {
            return this.el;
        }

        render(props) {
            this.el.innerHTML = `No.${props.formattedValue}`;
        }
    }

    class CheckboxRenderer {
        constructor(props) {
            const { grid, rowKey } = props;

            const label = document.createElement('label');
            label.className = 'checkbox tui-grid-row-header-checkbox';
            label.setAttribute('for', String(rowKey));

            const hiddenInput = document.createElement('input');
            hiddenInput.className = 'hidden-input';
            hiddenInput.id = String(rowKey);

            const customInput = document.createElement('span');
            customInput.className = 'custom-input';

            label.appendChild(hiddenInput);
            label.appendChild(customInput);

            hiddenInput.type = 'checkbox';
            label.addEventListener('click', (ev) => {
                ev.preventDefault();

                if (ev.shiftKey) {
                    grid[!hiddenInput.checked ? 'checkBetween' : 'uncheckBetween'](rowKey);
                    return;
                }

                grid[!hiddenInput.checked ? 'check' : 'uncheck'](rowKey);
            });

            this.el = label;

            this.render(props);
        }

        getElement() {
            return this.el;
        }

        render(props) {
            const hiddenInput = this.el.querySelector('.hidden-input');
            const checked = Boolean(props.value);

            hiddenInput.checked = checked;
        }
    }

    const grid = new tui.Grid({
        el: document.getElementById('grid11'),
        data: gridData,
        rowHeaders: [
            {
                type: 'rowNum',
                renderer: {
                    type: RowNumberRenderer,
                },
            },
            {
                type: 'checkbox',
                header: `
            <label for="all-checkbox" class="checkbox">
              <input type="checkbox" id="all-checkbox" class="hidden-input" name="_checked" />
              <span class="custom-input"></span>
            </label>
          `,
                renderer: {
                    type: CheckboxRenderer,
                },
            },
        ],
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
    });

    grid.on('check', function (ev) {
        console.log('check', ev);
    });

    grid.on('uncheck', function (ev) {
        console.log('uncheck', ev);
    });
}
{
    let gridData = [];
    (function () {
        for (let i = 0; i < 10; i += 1) {
            const text = 'grid         example\ngrid newline and clipboard example\n\ngrid example';
            gridData.push({
                nowrap: text,
                normal: text,
                pre: text,
                preWrap: text,
                preLine: text,
            });
        }
    })();
    const grid = new tui.Grid({
        el: document.getElementById('grid12'),
        data: gridData,
        scrollX: true,
        scrollY: true,
        rowHeight: 'auto',
        columns: [
            {
                header: "whiteSpace: 'nowrap'",
                name: 'nowrap',
                editor: 'text',
            },
            {
                header: "whiteSpace: 'normal'",
                name: 'normal',
                whiteSpace: 'normal',
                editor: 'text',
            },
            {
                header: "whiteSpace: 'pre'",
                name: 'pre',
                whiteSpace: 'pre',
                editor: 'text',
            },
            {
                header: "whiteSpace: 'pre-wrap'",
                name: 'preWrap',
                whiteSpace: 'pre-wrap',
                editor: 'text',
            },
            {
                header: "whiteSpace: 'pre-line'",
                name: 'preLine',
                whiteSpace: 'pre-line',
                editor: 'text',
            },
        ],
    });
}
/* eslint-disable */
var treeData = [
    {
        id: 549731,
        name: 'Beautiful Lies',
        artist: 'Birdy',
        release: '2016.03.26',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Pop',
        genreCode: '1',
        grade: '4',
        price: 10000,
        downloadCount: 1000,
        listenCount: 5000,
        _attributes: {
            expanded: true,
        },
        _children: [
            {
                id: 491379,
                name: 'Chaos And The Calm',
                artist: 'James Bay',
                release: '2015.03.23',
                type: 'EP',
                typeCode: '2',
                genre: 'Pop,Rock',
                genreCode: '1,2',
                grade: '5',
                price: 12000,
                downloadCount: 1000,
                listenCount: 5000,
                _children: [],
            },
            {
                id: 498896,
                name: 'The Magic Whip',
                artist: 'Blur',
                release: '2015.04.27',
                type: 'EP',
                typeCode: '2',
                genre: 'Rock',
                genreCode: '2',
                grade: '3',
                price: 15000,
                downloadCount: 1000,
                listenCount: 5000,
                _attributes: {
                    expanded: false,
                },
            },
            {
                id: 450720,
                name: "I'm Not The Only One",
                artist: 'Sam Smith',
                release: '2014.09.15',
                type: 'Single',
                typeCode: '3',
                genre: 'Pop,R&B',
                genreCode: '1,3',
                grade: '4',
                price: 8000,
                downloadCount: 1000,
                listenCount: 5000,
                _attributes: {
                    expanded: true,
                },
                _children: [
                    {
                        id: 587871,
                        name: 'This Is Acting',
                        artist: 'Sia',
                        release: '2016.10.22',
                        type: 'EP',
                        typeCode: '2',
                        genre: 'Pop',
                        genreCode: '1',
                        grade: '3',
                        price: 20000,
                        downloadCount: 1000,
                        listenCount: 5000,
                        _attributes: {
                            expanded: true,
                        },
                        _children: [
                            {
                                id: 490500,
                                name: 'Blue Skies',
                                release: '2015.03.18',
                                artist: 'Lenka',
                                type: 'Single',
                                typeCode: '3',
                                genre: 'Pop,Rock',
                                genreCode: '1,2',
                                grade: '5',
                                price: 6000,
                                downloadCount: 1000,
                                listenCount: 5000,
                            },
                            {
                                id: 317659,
                                name: "I Won't Give Up",
                                artist: 'Jason Mraz',
                                release: '2012.01.03',
                                type: 'Single',
                                typeCode: '3',
                                genre: 'Pop',
                                genreCode: '1',
                                grade: '2',
                                price: 7000,
                                downloadCount: 1000,
                                listenCount: 5000,
                            },
                            {
                                id: 583551,
                                name: 'Following My Intuition',
                                artist: 'Craig David',
                                release: '2016.10.01',
                                type: 'Deluxe',
                                typeCode: '1',
                                genre: 'R&B,Electronic',
                                genreCode: '3,4',
                                grade: '5',
                                price: 15000,
                                downloadCount: 1000,
                                listenCount: 5000,
                            },
                        ],
                    },
                ],
            },
        ],
    },
    {
        id: 436461,
        name: 'X',
        artist: 'Ed Sheeran',
        release: '2014.06.24',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Pop',
        genreCode: '1',
        grade: '5',
        price: 20000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 295651,
        name: 'Moves Like Jagger',
        release: '2011.08.08',
        artist: 'Maroon5',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop,Rock',
        genreCode: '1,2',
        grade: '2',
        price: 7000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 541713,
        name: 'A Head Full Of Dreams',
        artist: 'Coldplay',
        release: '2015.12.04',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Rock',
        genreCode: '2',
        grade: '3',
        price: 25000,
        downloadCount: 1000,
        listenCount: 5000,
        _attributes: {
            expanded: false,
        },
        _children: [
            {
                id: 294574,
                name: '4',
                artist: 'Beyoncé',
                release: '2011.07.26',
                type: 'Deluxe',
                typeCode: '1',
                genre: 'Pop',
                genreCode: '1',
                grade: '3',
                price: 12000,
                downloadCount: 1000,
                listenCount: 5000,
            },
            {
                id: 265289,
                name: '21',
                artist: 'Adele',
                release: '2011.01.21',
                type: 'Deluxe',
                typeCode: '1',
                genre: 'Pop,R&B',
                genreCode: '1,3',
                grade: '5',
                price: 15000,
                downloadCount: 1000,
                listenCount: 5000,
            },
        ],
    },
    {
        id: 555871,
        name: 'Warm On A Cold Night',
        artist: 'HONNE',
        release: '2016.07.22',
        type: 'EP',
        typeCode: '1',
        genre: 'R&B,Electronic',
        genreCode: '3,4',
        grade: '4',
        price: 11000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 550571,
        name: 'Take Me To The Alley',
        artist: 'Gregory Porter',
        release: '2016.09.02',
        type: 'Deluxe',
        typeCode: '1',
        genre: 'Jazz',
        genreCode: '5',
        grade: '3',
        price: 30000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 544128,
        name: 'Make Out',
        artist: 'LANY',
        release: '2015.12.11',
        type: 'EP',
        typeCode: '2',
        genre: 'Electronic',
        genreCode: '4',
        grade: '2',
        price: 12000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 366374,
        name: 'Get Lucky',
        artist: 'Daft Punk',
        release: '2013.04.23',
        type: 'Single',
        typeCode: '3',
        genre: 'Pop,Funk',
        genreCode: '1,5',
        grade: '3',
        price: 9000,
        downloadCount: 1000,
        listenCount: 5000,
    },
    {
        id: 8012747,
        name: 'Valtari',
        artist: 'Sigur Rós',
        release: '2012.05.31',
        type: 'EP',
        typeCode: '3',
        genre: 'Rock',
        genreCode: '2',
        grade: '5',
        price: 10000,
        downloadCount: 1000,
        listenCount: 5000,
    },
];

{
    const grid = new tui.Grid({
        el: document.getElementById('grid14'),
        data: treeData,
        rowHeaders: ['checkbox'],
        bodyHeight: 500,
        treeColumnOptions: {
            name: 'name',
            useCascadingCheckbox: true,
        },
        columns: [
            {
                header: 'Name',
                name: 'name',
                width: 300,
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
    });

    grid.on('expand', (ev) => {
        const { rowKey } = ev;
        const descendantRows = grid.getDescendantRows(rowKey);
        if (!descendantRows.length) {
            grid.appendRow(
                {
                    name: 'dynamic loading data',
                    _children: [
                        {
                            name: 'leaf row',
                        },
                        {
                            name: 'internal row',
                            _children: [],
                        },
                    ],
                },
                { parentRowKey: rowKey }
            );
        }
    });

    grid.on('collapse', (ev) => {
        const { rowKey } = ev;
        const descendantRows = grid.getDescendantRows(rowKey);

        // console.log("rowKey: " + rowKey);
        // console.log("descendantRows: " + descendantRows);
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid15'),
        data: gridData,
        rowHeaders: ['checkbox'],
        scrollX: false,
        scrollY: false,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
            {
                header: 'Release',
                name: 'release',
            },
        ],
    });

    grid.on('check', (ev) => {
        console.log('check!', ev);
    });

    grid.on('uncheck', (ev) => {
        console.log('uncheck!', ev);
    });

    grid.on('focusChange', (ev) => {
        console.log('change focused cell!', ev);
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid16'),
        data: gridData,
        scrollX: true,
        scrollY: true,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        columnOptions: {
            frozenCount: 1,
            frozenBorderWidth: 2,
            minWidth: 300,
        },
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid17'),
        data: gridData.slice(0, 6),
        bodyHeight: 350,
        scrollX: true,
        scrollY: true,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        showDummyRows: true,
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid18'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type(resizable x)',
                name: 'type',
                resizable: false,
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        columnOptions: {
            resizable: true,
        },
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid19'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name(desc)',
                name: 'name',
                sortingType: 'desc',
                sortable: true,
            },
            {
                header: 'Artist(asc)',
                name: 'artist',
                sortingType: 'asc',
                sortable: true,
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
    });
}
{
    gridData[0].name = '';
    gridData[4].name = '';
    gridData[0].artist = 100;
    gridData[5].artist = 100;
    gridData[0].type = 'a_z';

    const grid = new tui.Grid({
        el: document.getElementById('grid20'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
                editor: 'text',
                validation: { required: true },
            },
            {
                header: 'Artist',
                name: 'artist',
                validation: { dataType: 'string' },
            },
            {
                header: 'Price',
                name: 'price',
                validation: {
                    min: 10000,
                    max: 10500,
                    validatorFn: (value, row, columnName) => value !== 11000,
                },
            },
            {
                header: 'Type',
                name: 'type',
                validation: {
                    regExp: /[a-z]+_[a-z]/,
                },
            },
        ],
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid21'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        header: {
            align: 'left',
            valign: 'top',
            columns: [
                {
                    name: 'name',
                    valign: 'middle',
                },
                {
                    name: 'type',
                    valign: 'bottom',
                },
                {
                    name: 'artist',
                    align: 'right',
                },
            ],
        },
    });
}
{
    const columnData = [
        {
            header: 'Name',
            name: 'name',
        },
        {
            header: 'Artist',
            name: 'artist',
        },
        {
            header: 'Type',
            name: 'type',
        },
        {
            header: 'Release',
            name: 'release',
        },
        {
            header: 'Genre',
            name: 'genre',
        },
    ];

    function createGrid(width, height) {
        return new tui.Grid({
            el: document.getElementById('grid22'),
            data: gridData,
            scrollX: false,
            bodyHeight: 350,
            columns: createColumns(width),
            ...createRowHeight(height),
        });
    }

    function createColumns(width) {
        const columns = [];

        columnData.forEach(({ header, name }) => {
            const column = {
                header,
                name,
                width,
            };
            // If the width is less than 50, minWidth should be set.
            if (width < 50) {
                column.minWidth = width;
            }
            columns.push(column);
        });

        // console.log("columns option", columns);
        return columns;
    }

    function createRowHeight(height) {
        const option = { rowHeight: height };

        // If the height is less than 40, minRowHeight should be set.
        if (height < 40) {
            option.minRowHeight = height;
        }

        // console.log("rowHeight option", option);
        return option;
    }

    let width = 150;
    let height = 70;
    let grid = createGrid(width, height);

    document.getElementById('width').addEventListener('change', (ev) => {
        width = Number(ev.target.value);

        if (grid) {
            grid.destroy();
            document.getElementById('grid12').style.width = `${width * 5 + 18}px`;
        }

        grid = createGrid(width, height);
    });

    document.getElementById('height').addEventListener('change', (ev) => {
        height = Number(ev.target.value);

        if (grid) {
            grid.destroy();
            document.getElementById('grid12').style.height = `${height * 20 + 17}px`;
        }

        grid = createGrid(width, height);
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid23'),
        data: gridData,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        rowHeaders: ['rowNum'],
        pageOptions: {
            useClient: true,
            perPage: 5,
        },
    });

    const appendBtn = document.getElementById('appendBtn');
    const prependBtn = document.getElementById('prependBtn');

    const appendedData = {
        name: 'Music',
        artist: 'Lee',
        type: 'Deluxe',
        release: '2019.09.09',
        genre: 'Pop',
    };

    appendBtn.addEventListener('click', () => {
        grid.appendRow(appendedData);
    });

    prependBtn.addEventListener('click', () => {
        grid.prependRow(appendedData);
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid24'),
        data: gridData,
        bodyHeight: 500,
        columns: [
            {
                header: 'Name',
                name: 'name',
                filter: {
                    type: 'text',
                    showApplyBtn: true,
                    showClearBtn: true,
                },
            },
            {
                header: 'Artist',
                name: 'artist',
                filter: 'select',
            },
            {
                header: 'Price',
                name: 'price',
                filter: 'number',
            },
            {
                header: 'Release',
                name: 'release',
                filter: {
                    type: 'date',
                    options: {
                        format: 'yyyy.MM.dd',
                    },
                },
            },
            {
                header: 'Genre',
                name: 'genre',
                filter: {
                    type: 'text',
                    operator: 'OR',
                },
            },
        ],
    });
}
{
    const ROW_COUNT = 1000;
    const COL_COUNT = 10;

    const data = [];
    const columns = [];

    for (let i = 0; i < ROW_COUNT; i += 1) {
        const row = { id: i };
        for (let j = 0; j < COL_COUNT; j += 1) {
            row[`c${j}`] = (Math.random() * 100000000000).toFixed();
        }
        data.push(row);
    }

    for (let i = 0; i < COL_COUNT; i += 1) {
        const name = `c${i}`;
        columns.push({ name, header: name });
    }

    const grid = new tui.Grid({
        el: document.getElementById('grid25'),
        data: data,
        bodyHeight: 500,
        columns: columns,
    });
}
{
    function createRows() {
        const rows = [];
        for (let i = 0; i < 50; i += 1) {
            const row = {};
            for (let j = 0; j < 5; j += 1) {
                row[`c${j}`] = (Math.random() * 100000000000).toFixed();
            }
            rows.push(row);
        }
        return rows;
    }

    const columns = [];

    for (let i = 0; i < 5; i += 1) {
        const name = `c${i}`;
        columns.push({ name, header: name });
    }

    const grid = new tui.Grid({
        el: document.getElementById('grid26'),
        bodyHeight: 500,
        data: createRows(),
        columns,
        rowHeaders: ['rowNum'],
    });

    grid.on('scrollEnd', () => {
        grid.appendRows(createRows());
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid27'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        contextMenu: ({ rowKey, columnName }) => [
            [
                {
                    name: 'export',
                    label: 'Export',
                    subMenu: [
                        {
                            name: 'default',
                            label: 'Default',
                            subMenu: [
                                {
                                    name: 'csvExport',
                                    label: 'CSV export',
                                    action: () => {
                                        grid.export('csv');
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xlsx)',
                                    action: () => {
                                        grid.export('xlsx');
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xls)',
                                    action: () => {
                                        grid.export('xls');
                                    },
                                },
                            ],
                        },
                        {
                            name: 'includeHeader',
                            label: 'includeHeader: false',
                            subMenu: [
                                {
                                    name: 'csvExport',
                                    label: 'CSV export',
                                    action: () => {
                                        grid.export('csv', {
                                            includeHeader: false,
                                        });
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xlsx)',
                                    action: () => {
                                        grid.export('xlsx', {
                                            includeHeader: false,
                                        });
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xls)',
                                    action: () => {
                                        grid.export('xls', {
                                            includeHeader: false,
                                        });
                                    },
                                },
                            ],
                        },
                        {
                            name: 'columnNames',
                            label: `['name', 'artist']`,
                            subMenu: [
                                {
                                    name: 'csvExport',
                                    label: 'CSV export',
                                    action: () => {
                                        grid.export('csv', {
                                            columnNames: ['name', 'artist'],
                                        });
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xlsx)',
                                    action: () => {
                                        grid.export('xlsx', {
                                            columnNames: ['name', 'artist'],
                                        });
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xls)',
                                    action: () => {
                                        grid.export('xls', {
                                            columnNames: ['name', 'artist'],
                                        });
                                    },
                                },
                            ],
                        },
                        {
                            name: 'onlySelected',
                            label: 'onlySelected: true',
                            subMenu: [
                                {
                                    name: 'csvExport',
                                    label: 'CSV export',
                                    action: () => {
                                        grid.export('csv', {
                                            onlySelected: true,
                                        });
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xlsx)',
                                    action: () => {
                                        grid.export('xlsx', {
                                            onlySelected: true,
                                        });
                                    },
                                },
                                {
                                    name: 'excelExport',
                                    label: 'Excel export(xls)',
                                    action: () => {
                                        grid.export('xls', {
                                            onlySelected: true,
                                        });
                                    },
                                },
                            ],
                        },
                    ],
                },
            ],
        ],
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid28'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
            },
            {
                header: 'Artist',
                name: 'artist',
            },
            {
                header: 'Type',
                name: 'type',
            },
            {
                header: 'Release',
                name: 'release',
            },
            {
                header: 'Genre',
                name: 'genre',
            },
        ],
        draggable: true,
    });
}
{
    const grid = new tui.Grid({
        el: document.getElementById('grid29'),
        data: gridData,
        scrollX: false,
        bodyHeight: 350,
        columns: [
            {
                header: 'Name',
                name: 'name',
                sortable: true,
                filter: 'text',
                rowSpan: true,
            },
            {
                header: 'Artist',
                name: 'artist',
                sortable: true,
                filter: 'text',
                rowSpan: true,
            },
            {
                header: 'Type',
                name: 'type',
                sortable: true,
                filter: 'select',
                rowSpan: true,
            },
            {
                header: 'Release',
                name: 'release',
                sortable: true,
                rowSpan: true,
            },
            {
                header: 'Genre',
                name: 'genre',
                sortable: true,
                rowSpan: true,
            },
        ],
        draggable: true,
    });
}
