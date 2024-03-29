/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard Init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    var colors = $(chartId).attr("data-colors");
    var colors = JSON.parse(colors);
    return colors.map(function (value) {
        var newValue = value.replace(" ", "");
        if (newValue.indexOf("--") != -1) {
            var color = getComputedStyle(
                document.documentElement
            ).getPropertyValue(newValue);
            if (color) return color;
        } else {
            return newValue;
        }
    });
}

//  MINI CHART

// mini-1

if (document.querySelector("#mini-chart1")) {
    var minichart1Colors = getChartColorsArray("#mini-chart1");
}
var options = {
    series: [
        {
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        },
    ],
    chart: {
        type: "line",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    colors: minichart1Colors,
    stroke: {
        curve: "smooth",
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false,
        },
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return "";
                },
            },
        },
        marker: {
            show: false,
        },
    },
};

if (document.querySelector("#mini-chart1")) {
    var chart = new ApexCharts(document.querySelector("#mini-chart1"), options);
    chart.render();
}
// mini-2
if (document.querySelector("#mini-chart2")) {
    var minichart2Colors = getChartColorsArray("#mini-chart2");
}
var options = {
    series: [
        {
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        },
    ],
    chart: {
        type: "line",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    colors: minichart2Colors,
    stroke: {
        curve: "smooth",
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false,
        },
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return "";
                },
            },
        },
        marker: {
            show: false,
        },
    },
};

if (document.querySelector("#mini-chart2")) {
    var chart = new ApexCharts(document.querySelector("#mini-chart2"), options);
    chart.render();
}

// mini-3
if (document.querySelector("#mini-chart3")) {
    var minichart3Colors = getChartColorsArray("#mini-chart3");
}
var options = {
    series: [
        {
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        },
    ],
    chart: {
        type: "line",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    colors: minichart3Colors,
    stroke: {
        curve: "smooth",
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false,
        },
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return "";
                },
            },
        },
        marker: {
            show: false,
        },
    },
};

if (document.querySelector("#mini-chart3")) {
    var chart = new ApexCharts(document.querySelector("#mini-chart3"), options);
    chart.render();
}
// mini-4
if (document.querySelector("#mini-chart4")) {
    var minichart4Colors = getChartColorsArray("#mini-chart4");
}
var options = {
    series: [
        {
            data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14, 2, 47, 42, 15],
        },
    ],
    chart: {
        type: "line",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    colors: minichart4Colors,
    stroke: {
        curve: "smooth",
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false,
        },
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return "";
                },
            },
        },
        marker: {
            show: false,
        },
    },
};

if (document.querySelector("#mini-chart4")) {
    var chart = new ApexCharts(document.querySelector("#mini-chart4"), options);
    chart.render();
}
//
// Wallet Balance
//
if (document.querySelector("#wallet-balance")) {
    var piechartColors = getChartColorsArray("#wallet-balance");
}
var options = {
    series: [99.9, 0.1],
    chart: {
        width: 227,
        height: 227,
        type: "pie",
    },
    labels: ["Bitcoin"],
    colors: piechartColors,
    stroke: {
        width: 0,
    },
    legend: {
        show: false,
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
            },
        },
    ],
};

if (document.querySelector("#wallet-balance")) {
    var chart = new ApexCharts(
        document.querySelector("#wallet-balance"),
        options
    );
    chart.render();
}

//
// Invested Overview
//

var radialchartColors = document.querySelector("#invested-overview")
    ? getChartColorsArray("#invested-overview")
    : [];
var options = {
    chart: {
        height: 270,
        type: "radialBar",
        offsetY: -10,
    },
    plotOptions: {
        radialBar: {
            startAngle: -130,
            endAngle: -120,
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    offsetY: 1,
                    fontSize: "18px",
                    color: undefined,
                    formatter: function (val) {
                        return val + "%";
                    },
                },
            },
        },
    },
    colors: [radialchartColors[0]],
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            type: "horizontal",
            gradientToColors: [radialchartColors[1]],
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [20, 60],
        },
    },
    stroke: {
        dashArray: 4,
    },
    legend: {
        show: false,
    },
    series: [10],
    labels: ["Series A"],
};

if (document.querySelector("#invested-overview")) {
    var chart = new ApexCharts(
        document.querySelector("#invested-overview"),
        options
    );
    chart.render();
}

//
// Market Overview
//
if (document.querySelector("#market-overview")) {
    var barchartColors = getChartColorsArray("#market-overview");
}
var options = {
    series: [
        {
            name: "Profit",
            data: [
                12.45, 16.2, 8.9, 11.42, 12.6, 18.1, 18.2, 14.16, 11.1, 8.09,
                16.34, 12.88,
            ],
        },
        {
            name: "Loss",
            data: [
                -11.45, -15.42, -7.9, -12.42, -12.6, -18.1, -18.2, -14.16,
                -11.1, -7.09, -15.34, -11.88,
            ],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
        stacked: true,
        toolbar: {
            show: false,
        },
    },
    plotOptions: {
        bar: {
            columnWidth: "20%",
        },
    },
    colors: barchartColors,
    fill: {
        opacity: 1,
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    yaxis: {
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "%";
            },
        },
    },
    xaxis: {
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        labels: {
            rotate: -90,
        },
    },
};

if (document.querySelector("#market-overview")) {
    var chart = new ApexCharts(
        document.querySelector("#market-overview"),
        options
    );
    chart.render();
}
// MAp

if (document.querySelector("#sales-by-locations")) {
    var vectormapColors = getChartColorsArray("#sales-by-locations");
}
$("#sales-by-locations").vectorMap({
    map: "world_mill_en",
    normalizeFunction: "polynomial",
    hoverOpacity: 0.7,
    hoverColor: false,
    regionStyle: {
        initial: {
            fill: "#e9e9ef",
        },
    },
    markerStyle: {
        initial: {
            r: 9,
            fill: vectormapColors,
            "fill-opacity": 0.9,
            stroke: "#fff",
            "stroke-width": 7,
            "stroke-opacity": 0.4,
        },

        hover: {
            stroke: "#fff",
            "fill-opacity": 1,
            "stroke-width": 1.5,
        },
    },
    backgroundColor: "transparent",
    markers: [
        {
            latLng: [41.9, 12.45],
            name: "USA",
        },
        {
            latLng: [12.05, -61.75],
            name: "Russia",
        },
        {
            latLng: [1.3, 103.8],
            name: "Australia",
        },
    ],
});
