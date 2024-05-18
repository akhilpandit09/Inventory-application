var sampleChartClass = {
    chartData: function (ctx, labels, data, type) {
        new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Number of Products",
                        data: data,
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    },
};

$(document).ready(function () {
    var barChart = document.getElementById("myChart");
    var pieChart = document.getElementById("myDoughnutChart");
    var lineChart = document.getElementById("myLineChart");

    var labels = Object.keys(priceRanges);
    var data = Object.values(priceRanges);

    sampleChartClass.chartData(barChart, labels, data, "bar");
    sampleChartClass.chartData(pieChart, labels, data, "doughnut");
    sampleChartClass.chartData(lineChart, labels, data, "line");

    // download chart
    document
        .getElementById("downloadBarChart")
        .addEventListener("click", function () {
            var canvas = document.getElementById("myChart");
            var image = canvas.toDataURL("image/png");
            downloadChart(image, "bar_chart.png");
        });

    document
        .getElementById("downloadDoughnutChart")
        .addEventListener("click", function () {
            var canvas = document.getElementById("myDoughnutChart");
            var image = canvas.toDataURL("image/png");
            downloadChart(image, "doughnut_chart.png");
        });

    document
        .getElementById("downloadLineChart")
        .addEventListener("click", function () {
            var canvas = document.getElementById("myLineChart");
            var image = canvas.toDataURL("image/png");
            downloadChart(image, "line_chart.png");
        });

    function downloadChart(image, filename) {
        // Create a temporary anchor element to trigger the download
        var link = document.createElement("a");
        link.href = image;
        link.download = filename;
        link.click();
    }
});
