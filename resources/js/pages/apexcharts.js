(function ($) {
    'use strict';

    var options = {
        chart: {
            height: 350,
            type: 'line',
            stacked: false,
        },
        dataLabels: {
            enabled: false,
        },
        colors: ['#FF1654', '#247BA0'],
        series: [
            {
                name: 'Series A',
                data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6],
            },
            {
                name: 'Series B',
                data: [20, 29, 37, 36, 44, 45, 50, 58],
            },
        ],
        stroke: {
            width: [4, 4],
        },
        plotOptions: {
            bar: {
                columnWidth: '20%',
            },
        },
        xaxis: {
            categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
        },
        yaxis: [
            {
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: '#FF1654',
                },
                labels: {
                    style: {
                        colors: '#FF1654',
                    },
                },
                title: {
                    text: 'Series A',
                    style: {
                        color: '#FF1654',
                    },
                },
            },
            {
                opposite: true,
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: '#247BA0',
                },
                labels: {
                    style: {
                        colors: '#247BA0',
                    },
                },
                title: {
                    text: 'Series B',
                    style: {
                        color: '#247BA0',
                    },
                },
            },
        ],
        tooltip: {
            shared: false,
            intersect: true,
            x: {
                show: false,
            },
        },
        legend: {
            horizontalAlign: 'left',
            offsetX: 40,
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart1'), options);

    chart.render();

    var options = {
        chart: {
            height: 280,
            type: 'area',
        },
        dataLabels: {
            enabled: false,
        },
        series: [
            {
                name: 'Series 1',
                data: [45, 52, 38, 45, 19, 23, 2],
            },
        ],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.9,
                stops: [0, 90, 100],
            },
        },
        xaxis: {
            categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan'],
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart2'), options);

    chart.render();
    var options = {
        series: [
            {
                name: 'Marine Sprite',
                data: [44, 55, 41, 37, 22, 43, 21],
            },
            {
                name: 'Striking Calf',
                data: [53, 32, 33, 52, 13, 43, 32],
            },
            {
                name: 'Tank Picture',
                data: [12, 17, 11, 9, 15, 11, 20],
            },
            {
                name: 'Bucket Slope',
                data: [9, 7, 5, 8, 6, 9, 4],
            },
            {
                name: 'Reborn Kid',
                data: [25, 12, 19, 32, 25, 24, 10],
            },
        ],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
        },
        plotOptions: {
            bar: {
                horizontal: true,
                dataLabels: {
                    total: {
                        enabled: true,
                        offsetX: 0,
                        style: {
                            fontSize: '13px',
                            fontWeight: 900,
                        },
                    },
                },
            },
        },
        stroke: {
            width: 1,
            colors: ['#fff'],
        },
        title: {
            text: 'Fiction Books Sales',
        },
        xaxis: {
            categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014],
            labels: {
                formatter: function (val) {
                    return val + 'K';
                },
            },
        },
        yaxis: {
            title: {
                text: undefined,
            },
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + 'K';
                },
            },
        },
        fill: {
            opacity: 1,
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left',
            offsetX: 40,
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart3'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'Website Blog',
                type: 'column',
                data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160],
            },
            {
                name: 'Social Media',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16],
            },
        ],
        chart: {
            height: 350,
            type: 'line',
        },
        stroke: {
            width: [0, 4],
        },
        title: {
            text: 'Traffic Sources',
        },
        dataLabels: {
            enabled: true,
            enabledOnSeries: [1],
        },
        labels: [
            '01 Jan 2001',
            '02 Jan 2001',
            '03 Jan 2001',
            '04 Jan 2001',
            '05 Jan 2001',
            '06 Jan 2001',
            '07 Jan 2001',
            '08 Jan 2001',
            '09 Jan 2001',
            '10 Jan 2001',
            '11 Jan 2001',
            '12 Jan 2001',
        ],
        xaxis: {
            type: 'datetime',
        },
        yaxis: [
            {
                title: {
                    text: 'Website Blog',
                },
            },
            {
                opposite: true,
                title: {
                    text: 'Social Media',
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector('#chart4'), options);
    chart.render();
    var options = {
        series: [
            {
                type: 'rangeArea',
                name: 'Team B Range',

                data: [
                    {
                        x: 'Jan',
                        y: [1100, 1900],
                    },
                    {
                        x: 'Feb',
                        y: [1200, 1800],
                    },
                    {
                        x: 'Mar',
                        y: [900, 2900],
                    },
                    {
                        x: 'Apr',
                        y: [1400, 2700],
                    },
                    {
                        x: 'May',
                        y: [2600, 3900],
                    },
                    {
                        x: 'Jun',
                        y: [500, 1700],
                    },
                    {
                        x: 'Jul',
                        y: [1900, 2300],
                    },
                    {
                        x: 'Aug',
                        y: [1000, 1500],
                    },
                ],
            },

            {
                type: 'rangeArea',
                name: 'Team A Range',
                data: [
                    {
                        x: 'Jan',
                        y: [3100, 3400],
                    },
                    {
                        x: 'Feb',
                        y: [4200, 5200],
                    },
                    {
                        x: 'Mar',
                        y: [3900, 4900],
                    },
                    {
                        x: 'Apr',
                        y: [3400, 3900],
                    },
                    {
                        x: 'May',
                        y: [5100, 5900],
                    },
                    {
                        x: 'Jun',
                        y: [5400, 6700],
                    },
                    {
                        x: 'Jul',
                        y: [4300, 4600],
                    },
                    {
                        x: 'Aug',
                        y: [2100, 2900],
                    },
                ],
            },

            {
                type: 'line',
                name: 'Team B Median',
                data: [
                    {
                        x: 'Jan',
                        y: 1500,
                    },
                    {
                        x: 'Feb',
                        y: 1700,
                    },
                    {
                        x: 'Mar',
                        y: 1900,
                    },
                    {
                        x: 'Apr',
                        y: 2200,
                    },
                    {
                        x: 'May',
                        y: 3000,
                    },
                    {
                        x: 'Jun',
                        y: 1000,
                    },
                    {
                        x: 'Jul',
                        y: 2100,
                    },
                    {
                        x: 'Aug',
                        y: 1200,
                    },
                    {
                        x: 'Sep',
                        y: 1800,
                    },
                    {
                        x: 'Oct',
                        y: 2000,
                    },
                ],
            },
            {
                type: 'line',
                name: 'Team A Median',
                data: [
                    {
                        x: 'Jan',
                        y: 3300,
                    },
                    {
                        x: 'Feb',
                        y: 4900,
                    },
                    {
                        x: 'Mar',
                        y: 4300,
                    },
                    {
                        x: 'Apr',
                        y: 3700,
                    },
                    {
                        x: 'May',
                        y: 5500,
                    },
                    {
                        x: 'Jun',
                        y: 5900,
                    },
                    {
                        x: 'Jul',
                        y: 4500,
                    },
                    {
                        x: 'Aug',
                        y: 2400,
                    },
                    {
                        x: 'Sep',
                        y: 2100,
                    },
                    {
                        x: 'Oct',
                        y: 1500,
                    },
                ],
            },
        ],
        chart: {
            height: 350,
            type: 'rangeArea',
            animations: {
                speed: 500,
            },
        },
        colors: ['#d4526e', '#33b2df', '#d4526e', '#33b2df'],
        dataLabels: {
            enabled: false,
        },
        fill: {
            opacity: [0.24, 0.24, 1, 1],
        },
        forecastDataPoints: {
            count: 2,
        },
        stroke: {
            curve: 'straight',
            width: [0, 0, 2, 2],
        },
        legend: {
            show: true,
            customLegendItems: ['Team B', 'Team A'],
            inverseOrder: true,
        },
        title: {
            text: 'Range Area with Forecast Line (Combo)',
        },
        markers: {
            hover: {
                sizeOffset: 5,
            },
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart5'), options);
    chart.render();

    var options = {
        series: [
            {
                name: 'Bob',
                data: [
                    {
                        x: 'Design',
                        y: [new Date('2019-03-05').getTime(), new Date('2019-03-08').getTime()],
                    },
                    {
                        x: 'Code',
                        y: [new Date('2019-03-02').getTime(), new Date('2019-03-05').getTime()],
                    },
                    {
                        x: 'Code',
                        y: [new Date('2019-03-05').getTime(), new Date('2019-03-07').getTime()],
                    },
                    {
                        x: 'Test',
                        y: [new Date('2019-03-03').getTime(), new Date('2019-03-09').getTime()],
                    },
                    {
                        x: 'Test',
                        y: [new Date('2019-03-08').getTime(), new Date('2019-03-11').getTime()],
                    },
                    {
                        x: 'Validation',
                        y: [new Date('2019-03-11').getTime(), new Date('2019-03-16').getTime()],
                    },
                    {
                        x: 'Design',
                        y: [new Date('2019-03-01').getTime(), new Date('2019-03-03').getTime()],
                    },
                ],
            },
            {
                name: 'Joe',
                data: [
                    {
                        x: 'Design',
                        y: [new Date('2019-03-02').getTime(), new Date('2019-03-05').getTime()],
                    },
                    {
                        x: 'Test',
                        y: [new Date('2019-03-06').getTime(), new Date('2019-03-16').getTime()],
                        goals: [
                            {
                                name: 'Break',
                                value: new Date('2019-03-10').getTime(),
                                strokeColor: '#CD2F2A',
                            },
                        ],
                    },
                    {
                        x: 'Code',
                        y: [new Date('2019-03-03').getTime(), new Date('2019-03-07').getTime()],
                    },
                    {
                        x: 'Deployment',
                        y: [new Date('2019-03-20').getTime(), new Date('2019-03-22').getTime()],
                    },
                    {
                        x: 'Design',
                        y: [new Date('2019-03-10').getTime(), new Date('2019-03-16').getTime()],
                    },
                ],
            },
            {
                name: 'Dan',
                data: [
                    {
                        x: 'Code',
                        y: [new Date('2019-03-10').getTime(), new Date('2019-03-17').getTime()],
                    },
                    {
                        x: 'Validation',
                        y: [new Date('2019-03-05').getTime(), new Date('2019-03-09').getTime()],
                        goals: [
                            {
                                name: 'Break',
                                value: new Date('2019-03-07').getTime(),
                                strokeColor: '#CD2F2A',
                            },
                        ],
                    },
                ],
            },
        ],
        chart: {
            height: 450,
            type: 'rangeBar',
        },
        plotOptions: {
            bar: {
                horizontal: true,
                barHeight: '80%',
            },
        },
        xaxis: {
            type: 'datetime',
        },
        stroke: {
            width: 1,
        },
        fill: {
            type: 'solid',
            opacity: 0.6,
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left',
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart6'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'Funnel Series',
                data: [1380, 1100, 990, 880, 740, 548, 330, 200],
            },
        ],
        chart: {
            type: 'bar',
            height: 350,
        },
        plotOptions: {
            bar: {
                borderRadius: 0,
                horizontal: true,
                barHeight: '80%',
                isFunnel: true,
            },
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opt) {
                return opt.w.globals.labels[opt.dataPointIndex] + ':  ' + val;
            },
            dropShadow: {
                enabled: true,
            },
        },
        title: {
            text: 'Recruitment Funnel',
            align: 'middle',
        },
        xaxis: {
            categories: [
                'Sourced',
                'Screened',
                'Assessed',
                'HR Interview',
                'Technical',
                'Verify',
                'Offered',
                'Hired',
            ],
        },
        legend: {
            show: false,
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart7'), options);
    chart.render();
    var options = {
        series: [
            {
                data: [
                    {
                        x: new Date(1538778600000),
                        y: [6629.81, 6650.5, 6623.04, 6633.33],
                    },
                    {
                        x: new Date(1538780400000),
                        y: [6632.01, 6643.59, 6620, 6630.11],
                    },
                    {
                        x: new Date(1538782200000),
                        y: [6630.71, 6648.95, 6623.34, 6635.65],
                    },
                    {
                        x: new Date(1538784000000),
                        y: [6635.65, 6651, 6629.67, 6638.24],
                    },
                    {
                        x: new Date(1538785800000),
                        y: [6638.24, 6640, 6620, 6624.47],
                    },
                    {
                        x: new Date(1538787600000),
                        y: [6624.53, 6636.03, 6621.68, 6624.31],
                    },
                    {
                        x: new Date(1538789400000),
                        y: [6624.61, 6632.2, 6617, 6626.02],
                    },
                    {
                        x: new Date(1538791200000),
                        y: [6627, 6627.62, 6584.22, 6603.02],
                    },
                    {
                        x: new Date(1538793000000),
                        y: [6605, 6608.03, 6598.95, 6604.01],
                    },
                    {
                        x: new Date(1538794800000),
                        y: [6604.5, 6614.4, 6602.26, 6608.02],
                    },
                    {
                        x: new Date(1538796600000),
                        y: [6608.02, 6610.68, 6601.99, 6608.91],
                    },
                    {
                        x: new Date(1538798400000),
                        y: [6608.91, 6618.99, 6608.01, 6612],
                    },
                    {
                        x: new Date(1538800200000),
                        y: [6612, 6615.13, 6605.09, 6612],
                    },
                    {
                        x: new Date(1538802000000),
                        y: [6612, 6624.12, 6608.43, 6622.95],
                    },
                    {
                        x: new Date(1538803800000),
                        y: [6623.91, 6623.91, 6615, 6615.67],
                    },
                    {
                        x: new Date(1538805600000),
                        y: [6618.69, 6618.74, 6610, 6610.4],
                    },
                    {
                        x: new Date(1538807400000),
                        y: [6611, 6622.78, 6610.4, 6614.9],
                    },
                    {
                        x: new Date(1538809200000),
                        y: [6614.9, 6626.2, 6613.33, 6623.45],
                    },
                    {
                        x: new Date(1538811000000),
                        y: [6623.48, 6627, 6618.38, 6620.35],
                    },
                    {
                        x: new Date(1538812800000),
                        y: [6619.43, 6620.35, 6610.05, 6615.53],
                    },
                    {
                        x: new Date(1538814600000),
                        y: [6615.53, 6617.93, 6610, 6615.19],
                    },
                    {
                        x: new Date(1538816400000),
                        y: [6615.19, 6621.6, 6608.2, 6620],
                    },
                    {
                        x: new Date(1538818200000),
                        y: [6619.54, 6625.17, 6614.15, 6620],
                    },
                    {
                        x: new Date(1538820000000),
                        y: [6620.33, 6634.15, 6617.24, 6624.61],
                    },
                    {
                        x: new Date(1538821800000),
                        y: [6625.95, 6626, 6611.66, 6617.58],
                    },
                    {
                        x: new Date(1538823600000),
                        y: [6619, 6625.97, 6595.27, 6598.86],
                    },
                    {
                        x: new Date(1538825400000),
                        y: [6598.86, 6598.88, 6570, 6587.16],
                    },
                    {
                        x: new Date(1538827200000),
                        y: [6588.86, 6600, 6580, 6593.4],
                    },
                    {
                        x: new Date(1538829000000),
                        y: [6593.99, 6598.89, 6585, 6587.81],
                    },
                    {
                        x: new Date(1538830800000),
                        y: [6587.81, 6592.73, 6567.14, 6578],
                    },
                    {
                        x: new Date(1538832600000),
                        y: [6578.35, 6581.72, 6567.39, 6579],
                    },
                    {
                        x: new Date(1538834400000),
                        y: [6579.38, 6580.92, 6566.77, 6575.96],
                    },
                    {
                        x: new Date(1538836200000),
                        y: [6575.96, 6589, 6571.77, 6588.92],
                    },
                    {
                        x: new Date(1538838000000),
                        y: [6588.92, 6594, 6577.55, 6589.22],
                    },
                    {
                        x: new Date(1538839800000),
                        y: [6589.3, 6598.89, 6589.1, 6596.08],
                    },
                    {
                        x: new Date(1538841600000),
                        y: [6597.5, 6600, 6588.39, 6596.25],
                    },
                    {
                        x: new Date(1538843400000),
                        y: [6598.03, 6600, 6588.73, 6595.97],
                    },
                    {
                        x: new Date(1538845200000),
                        y: [6595.97, 6602.01, 6588.17, 6602],
                    },
                    {
                        x: new Date(1538847000000),
                        y: [6602, 6607, 6596.51, 6599.95],
                    },
                    {
                        x: new Date(1538848800000),
                        y: [6600.63, 6601.21, 6590.39, 6591.02],
                    },
                    {
                        x: new Date(1538850600000),
                        y: [6591.02, 6603.08, 6591, 6591],
                    },
                    {
                        x: new Date(1538852400000),
                        y: [6591, 6601.32, 6585, 6592],
                    },
                    {
                        x: new Date(1538854200000),
                        y: [6593.13, 6596.01, 6590, 6593.34],
                    },
                    {
                        x: new Date(1538856000000),
                        y: [6593.34, 6604.76, 6582.63, 6593.86],
                    },
                    {
                        x: new Date(1538857800000),
                        y: [6593.86, 6604.28, 6586.57, 6600.01],
                    },
                    {
                        x: new Date(1538859600000),
                        y: [6601.81, 6603.21, 6592.78, 6596.25],
                    },
                    {
                        x: new Date(1538861400000),
                        y: [6596.25, 6604.2, 6590, 6602.99],
                    },
                    {
                        x: new Date(1538863200000),
                        y: [6602.99, 6606, 6584.99, 6587.81],
                    },
                    {
                        x: new Date(1538865000000),
                        y: [6587.81, 6595, 6583.27, 6591.96],
                    },
                    {
                        x: new Date(1538866800000),
                        y: [6591.97, 6596.07, 6585, 6588.39],
                    },
                    {
                        x: new Date(1538868600000),
                        y: [6587.6, 6598.21, 6587.6, 6594.27],
                    },
                    {
                        x: new Date(1538870400000),
                        y: [6596.44, 6601, 6590, 6596.55],
                    },
                    {
                        x: new Date(1538872200000),
                        y: [6598.91, 6605, 6596.61, 6600.02],
                    },
                    {
                        x: new Date(1538874000000),
                        y: [6600.55, 6605, 6589.14, 6593.01],
                    },
                    {
                        x: new Date(1538875800000),
                        y: [6593.15, 6605, 6592, 6603.06],
                    },
                    {
                        x: new Date(1538877600000),
                        y: [6603.07, 6604.5, 6599.09, 6603.89],
                    },
                    {
                        x: new Date(1538879400000),
                        y: [6604.44, 6604.44, 6600, 6603.5],
                    },
                    {
                        x: new Date(1538881200000),
                        y: [6603.5, 6603.99, 6597.5, 6603.86],
                    },
                    {
                        x: new Date(1538883000000),
                        y: [6603.85, 6605, 6600, 6604.07],
                    },
                    {
                        x: new Date(1538884800000),
                        y: [6604.98, 6606, 6604.07, 6606],
                    },
                ],
            },
        ],
        chart: {
            type: 'candlestick',
            height: 350,
        },
        title: {
            text: 'CandleStick Chart',
            align: 'left',
        },
        xaxis: {
            type: 'datetime',
        },
        yaxis: {
            tooltip: {
                enabled: true,
            },
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart8'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'box',
                type: 'boxPlot',
                data: [
                    {
                        x: new Date('2017-01-01').getTime(),
                        y: [54, 66, 69, 75, 88],
                    },
                    {
                        x: new Date('2018-01-01').getTime(),
                        y: [43, 65, 69, 76, 81],
                    },
                    {
                        x: new Date('2019-01-01').getTime(),
                        y: [31, 39, 45, 51, 59],
                    },
                    {
                        x: new Date('2020-01-01').getTime(),
                        y: [39, 46, 55, 65, 71],
                    },
                    {
                        x: new Date('2021-01-01').getTime(),
                        y: [29, 31, 35, 39, 44],
                    },
                ],
            },
            {
                name: 'outliers',
                type: 'scatter',
                data: [
                    {
                        x: new Date('2017-01-01').getTime(),
                        y: 32,
                    },
                    {
                        x: new Date('2018-01-01').getTime(),
                        y: 25,
                    },
                    {
                        x: new Date('2019-01-01').getTime(),
                        y: 64,
                    },
                    {
                        x: new Date('2020-01-01').getTime(),
                        y: 27,
                    },
                    {
                        x: new Date('2020-01-01').getTime(),
                        y: 78,
                    },
                    {
                        x: new Date('2021-01-01').getTime(),
                        y: 15,
                    },
                ],
            },
        ],
        chart: {
            type: 'boxPlot',
            height: 350,
        },
        colors: ['#008FFB', '#FEB019'],
        title: {
            text: 'BoxPlot - Scatter Chart',
            align: 'left',
        },
        xaxis: {
            type: 'datetime',
            tooltip: {
                formatter: function (val) {
                    return new Date(val).getFullYear();
                },
            },
        },
        tooltip: {
            shared: false,
            intersect: true,
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart9'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'Series 1',
                data: [80, 50, 30, 40, 100, 20],
            },
            {
                name: 'Series 2',
                data: [20, 30, 40, 80, 20, 80],
            },
            {
                name: 'Series 3',
                data: [44, 76, 78, 13, 43, 10],
            },
        ],
        chart: {
            height: 350,
            type: 'radar',
            dropShadow: {
                enabled: true,
                blur: 1,
                left: 1,
                top: 1,
            },
        },
        title: {
            text: 'Radar Chart - Multi Series',
        },
        stroke: {
            width: 2,
        },
        fill: {
            opacity: 0.1,
        },
        markers: {
            size: 0,
        },
        yaxis: {
            stepSize: 20,
        },
        xaxis: {
            categories: ['2011', '2012', '2013', '2014', '2015', '2016'],
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart10'), options);
    chart.render();

    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
            width: 380,
            type: 'donut',
            dropShadow: {
                enabled: true,
                color: '#111',
                top: -1,
                left: 3,
                blur: 3,
                opacity: 0.2,
            },
        },
        stroke: {
            width: 0,
        },
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        total: {
                            showAlways: true,
                            show: true,
                        },
                    },
                },
            },
        },
        labels: ['Comedy', 'Action', 'SciFi', 'Drama', 'Horror'],
        dataLabels: {
            dropShadow: {
                blur: 3,
                opacity: 0.8,
            },
        },
        fill: {
            type: 'pattern',
            opacity: 1,
            pattern: {
                enabled: true,
                style: ['verticalLines', 'squares', 'horizontalLines', 'circles', 'slantedLines'],
            },
        },
        states: {
            hover: {
                filter: 'none',
            },
        },
        theme: {
            palette: 'palette2',
        },
        title: {
            text: 'Favourite Movie Type',
        },
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: 'bottom',
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector('#chart11'), options);
    chart.render();
    var options = {
        series: [44, 55, 13, 43, 22],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: 'bottom',
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector('#chart12'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'Bubble1',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60,
                }),
            },
            {
                name: 'Bubble2',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60,
                }),
            },
            {
                name: 'Bubble3',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60,
                }),
            },
            {
                name: 'Bubble4',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60,
                }),
            },
        ],
        chart: {
            height: 350,
            type: 'bubble',
        },
        dataLabels: {
            enabled: false,
        },
        fill: {
            opacity: 0.8,
        },
        title: {
            text: 'Simple Bubble Chart',
        },
        xaxis: {
            tickAmount: 12,
            type: 'category',
        },
        yaxis: {
            max: 70,
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart13'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'SAMPLE A',
                data: [
                    [16.4, 5.4],
                    [21.7, 2],
                    [25.4, 3],
                    [19, 2],
                    [10.9, 1],
                    [13.6, 3.2],
                    [10.9, 7.4],
                    [10.9, 0],
                    [10.9, 8.2],
                    [16.4, 0],
                    [16.4, 1.8],
                    [13.6, 0.3],
                    [13.6, 0],
                    [29.9, 0],
                    [27.1, 2.3],
                    [16.4, 0],
                    [13.6, 3.7],
                    [10.9, 5.2],
                    [16.4, 6.5],
                    [10.9, 0],
                    [24.5, 7.1],
                    [10.9, 0],
                    [8.1, 4.7],
                    [19, 0],
                    [21.7, 1.8],
                    [27.1, 0],
                    [24.5, 0],
                    [27.1, 0],
                    [29.9, 1.5],
                    [27.1, 0.8],
                    [22.1, 2],
                ],
            },
            {
                name: 'SAMPLE B',
                data: [
                    [36.4, 13.4],
                    [1.7, 11],
                    [5.4, 8],
                    [9, 17],
                    [1.9, 4],
                    [3.6, 12.2],
                    [1.9, 14.4],
                    [1.9, 9],
                    [1.9, 13.2],
                    [1.4, 7],
                    [6.4, 8.8],
                    [3.6, 4.3],
                    [1.6, 10],
                    [9.9, 2],
                    [7.1, 15],
                    [1.4, 0],
                    [3.6, 13.7],
                    [1.9, 15.2],
                    [6.4, 16.5],
                    [0.9, 10],
                    [4.5, 17.1],
                    [10.9, 10],
                    [0.1, 14.7],
                    [9, 10],
                    [12.7, 11.8],
                    [2.1, 10],
                    [2.5, 10],
                    [27.1, 10],
                    [2.9, 11.5],
                    [7.1, 10.8],
                    [2.1, 12],
                ],
            },
            {
                name: 'SAMPLE C',
                data: [
                    [21.7, 3],
                    [23.6, 3.5],
                    [24.6, 3],
                    [29.9, 3],
                    [21.7, 20],
                    [23, 2],
                    [10.9, 3],
                    [28, 4],
                    [27.1, 0.3],
                    [16.4, 4],
                    [13.6, 0],
                    [19, 5],
                    [22.4, 3],
                    [24.5, 3],
                    [32.6, 3],
                    [27.1, 4],
                    [29.6, 6],
                    [31.6, 8],
                    [21.6, 5],
                    [20.9, 4],
                    [22.4, 0],
                    [32.6, 10.3],
                    [29.7, 20.8],
                    [24.5, 0.8],
                    [21.4, 0],
                    [21.7, 6.9],
                    [28.6, 7.7],
                    [15.4, 0],
                    [18.1, 0],
                    [33.4, 0],
                    [16.4, 0],
                ],
            },
        ],
        chart: {
            height: 350,
            type: 'scatter',
            zoom: {
                enabled: true,
                type: 'xy',
            },
        },
        xaxis: {
            tickAmount: 10,
            labels: {
                formatter: function (val) {
                    return parseFloat(val).toFixed(1);
                },
            },
        },
        yaxis: {
            tickAmount: 7,
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart14'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'Metric1',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric2',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric3',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric4',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric5',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric6',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric7',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric8',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
            {
                name: 'Metric9',
                data: generateData2(18, {
                    min: 0,
                    max: 90,
                }),
            },
        ],
        chart: {
            height: 350,
            type: 'heatmap',
        },
        dataLabels: {
            enabled: false,
        },
        colors: ['#008FFB'],
        title: {
            text: 'HeatMap Chart (Single color)',
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart15'), options);
    chart.render();
    var options = {
        series: [
            {
                data: [
                    {
                        x: 'New Delhi',
                        y: 218,
                    },
                    {
                        x: 'Kolkata',
                        y: 149,
                    },
                    {
                        x: 'Mumbai',
                        y: 184,
                    },
                    {
                        x: 'Ahmedabad',
                        y: 55,
                    },
                    {
                        x: 'Bangaluru',
                        y: 84,
                    },
                    {
                        x: 'Pune',
                        y: 31,
                    },
                    {
                        x: 'Chennai',
                        y: 70,
                    },
                    {
                        x: 'Jaipur',
                        y: 30,
                    },
                    {
                        x: 'Surat',
                        y: 44,
                    },
                    {
                        x: 'Hyderabad',
                        y: 68,
                    },
                    {
                        x: 'Lucknow',
                        y: 28,
                    },
                    {
                        x: 'Indore',
                        y: 19,
                    },
                    {
                        x: 'Kanpur',
                        y: 29,
                    },
                ],
            },
        ],
        legend: {
            show: false,
        },
        chart: {
            height: 350,
            type: 'treemap',
        },
        title: {
            text: 'Distibuted Treemap (different color for each cell)',
            align: 'center',
        },
        colors: [
            '#3B93A5',
            '#F7B844',
            '#ADD8C7',
            '#EC3C65',
            '#CDD7B6',
            '#C1F666',
            '#D43F97',
            '#1E5D8C',
            '#421243',
            '#7F94B0',
            '#EF6537',
            '#C0ADDB',
        ],
        plotOptions: {
            treemap: {
                distributed: true,
                enableShades: false,
            },
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart16'), options);
    chart.render();
    var options = {
        series: [
            {
                name: 'Blue',
                data: [
                    {
                        x: 'Category 1',
                        y: 503,
                    },
                    {
                        x: 'Category 2',
                        y: 580,
                    },
                    {
                        x: 'Category 3',
                        y: 135,
                    },
                ],
            },
            {
                name: 'Green',
                data: [
                    {
                        x: 'Category 1',
                        y: 733,
                    },
                    {
                        x: 'Category 2',
                        y: 385,
                    },
                    {
                        x: 'Category 3',
                        y: 715,
                    },
                ],
            },
            {
                name: 'Orange',
                data: [
                    {
                        x: 'Category 1',
                        y: 255,
                    },
                    {
                        x: 'Category 2',
                        y: 211,
                    },
                    {
                        x: 'Category 3',
                        y: 441,
                    },
                ],
            },
            {
                name: 'Red',
                data: [
                    {
                        x: 'Category 1',
                        y: 428,
                    },
                    {
                        x: 'Category 2',
                        y: 749,
                    },
                    {
                        x: 'Category 3',
                        y: 559,
                    },
                ],
            },
        ],
        chart: {
            height: 350,
            width: 450,
            type: 'line',
        },
        plotOptions: {
            line: {
                isSlopeChart: true,
            },
        },
        tooltip: {
            followCursor: true,
            intersect: false,
            shared: true,
        },
        dataLabels: {
            background: {
                enabled: true,
            },
            formatter(val, opts) {
                const seriesName = opts.w.config.series[opts.seriesIndex].name;
                return val !== null ? seriesName : '';
            },
        },
        yaxis: {
            show: true,
            labels: {
                show: true,
            },
        },
        xaxis: {
            position: 'bottom',
        },
        legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'left',
        },
        stroke: {
            width: [2, 3, 4, 2],
            dashArray: [0, 0, 5, 2],
            curve: 'smooth',
        },
    };

    var chart = new ApexCharts(document.querySelector('#chart17'), options);
    chart.render();
    function generateData(baseval, count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
            var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

            series.push([x, y, z]);
            baseval += 86400000;
            i++;
        }
        return series;
    }
    function generateData2(count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = (i + 1).toString();
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

            series.push({
                x: x,
                y: y,
            });
            i++;
        }
        return series;
    }
})(jQuery);
