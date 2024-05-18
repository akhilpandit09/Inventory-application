<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analytics</title>
</head>

<body>
    <div class="mt-12">
        <div class="grid justify-items-center mb-4">
            <button class="btn btn-success text-white px-12 " id="downloadBarChart">Donwload</button>
        </div>
        <div>
            <canvas id="myChart" width="1200" height="400"></canvas>
        </div>
    </div>
    <div class="flex justify-between mt-12">
        <div>
            <!-- Set canvas width and height to 200 -->
            <canvas id="myLineChart" width="800"></canvas>
            <div class="grid justify-items-center mt-4">
                <button class="btn btn-success text-white px-12 " id="downloadLineChart">Donwload</button>
            </div>
        </div>
        <div class="">
            <!-- Set canvas width and height to 200 -->
            <canvas id="myDoughnutChart" width="400"></canvas>
            <div class="grid justify-items-center mt-4">
                <button class="btn btn-success text-white px-12 " id="downloadDoughnutChart">Donwload</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/sample-chart.js') }}"></script>
    <!-- Pass PHP data to JavaScript -->
    <script>
        var priceRanges = {!! $priceRangesJson !!};
    </script>
</body>

</html>
