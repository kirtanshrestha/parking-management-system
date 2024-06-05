<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PMS | Dashboard</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon" />
    <link rel="icon"
            href="/img/logo.png"
            type="image/x-icon"
        />


    <style>
            body {
        background-color: #679f86;
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
        /* Optional: Add some basic styling to the table */

        table {
            border-collapse: collapse;
            width: 100%;
            /* Make the table fill the width of its container */
        }

        th,
        td {
            text-align: center;
            padding: 8px;
            border-right: 1px solid #dddddd;
            /* Add right border to each cell */
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            border-right: none;
            /* Remove right border for the last column */
        }

        img {

            max-width: 100%;
            /* Ensure image doesn't exceed cell width */
            max-height: 100px;
            /* Limit image height */
            display: block;
            /* Set image display property to block */
            margin: 0 auto;
            /* Center image horizontally */
        }

        .chart-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            /* Set the width of the container */
            overflow: hidden;
            /* Prevent overflow */
        }

        .chart-container canvas {
            flex: 1;
            /* Allow canvas elements to resize dynamically */
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @extends('layouts.headerin')
    @section('content')
    <div class="container" style="margin-top: 150px;">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="container" style="margin-top: 20px;">
                        <table>
                            <tr>
                                <th> <img src="img/total.png" alt="a">
                                    <p style="font-size:300%; ; text-align:center; margin:0;">{{$icon[0]}}</p>
                                    <p style="font-size:150% ; text-align: center; margin:0; color:grey;">Total vehicles</p>
                                </th>
                                <th> <img src="img/in.png" alt="a">
                                    <p style="font-size:300%; ; text-align:center; margin:0;">{{$icon[1]}}</p>
                                    <p style="font-size:150% ; text-align: center; margin:0; color:grey;">Vehicles In</p>
                                </th>
                                <th> <img src="img/out.png" alt="a">
                                    <p style="font-size:300%; ; text-align:center; margin:0;">{{$icon[2]}}</p>
                                    <p style="font-size:150% ; text-align: center; margin:0; color:grey;">Vehicles Out</p>
                                </th>
                                <th> <img src="img/coins.png" alt="a">
                                    <p style="font-size:300%; ; text-align:center; margin:0;">Rs. {{$icon[3]}}</p>
                                    <p style="font-size:150% ; text-align: center; margin:0; color:grey;">Revenue</p>
                                </th>
                            </tr>
                        </table>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <!-- CHARTSSSSSS -->
                        <div class="chart-container">
                            <span class="card" style="margin-top:20px; width:65%; ">
                                <h1>Total minutes parked</h1>
                                <canvas id="myBarChart"></canvas>
                            </span>
                            <span class="card" style="margin-top:20px; width:24rem; ">
                                <h1>Total revenue</h1>
                                <canvas id="myPieChart"></canvas>
                            </span>
                        </div>


                        <!-- piecharttt -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            var ctx = document.getElementById('myPieChart').getContext('2d');
                            var myPieChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                        labels: ['4-wheeler', '2-wheeler', 'others'], //  labels
                                        datasets: [{
                                            data: {!! json_encode($charge) !!}, // Access the nested $charge array
                                            backgroundColor: [
                                                'rgba(150, 99, 132, 1)', 
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)' ,
                                            ],
                                            borderWidth: 3
                                        }]
                                    },
                                    options: { 
                                        //none
                                    }
                                });
                        </script>

                        <!-- bar graph -->
                        <script>
                            var data = {!! json_encode($data) !!};

                            // Extract registration numbers and hours from the data
                            var labels = data.map(item => item.registration_number);
                            var values = data.map(item => item.hours);

                            // Construct the data object for the bar chart
                            var barData = {
                                labels: labels,
                                datasets: [{
                                    label: 'minutes',
                                    data: values,
                                    backgroundColor: 'rgba(0, 0, 0, 0.6)',
                                    borderColor: 'rgba(0, 0, 0, 1)',
                                    borderWidth: 2
                                }]
                            };

                            // Configuration options for the bar chart
                            var options = {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            };

                            // Get the canvas element
                            var barCtx = document.getElementById('myBarChart').getContext('2d');

                            // Create the bar chart
                            var barChart = new Chart(barCtx, {
                                type: 'bar',
                                data: barData,
                                options: options
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
    </div>
</body>

</html>


@endsection