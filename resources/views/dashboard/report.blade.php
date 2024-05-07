<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PMS | Report</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    /* Style for each chart container */
    .chart-wrapper {
        position: relative;
        /* Set position to relative */
        margin-bottom: 5px;
        /* Add some bottom margin for spacing */
    }

    /* Style for the chart canvas */
    canvas {
        width: 100%;
        /* Set width to 100% */
    }

    /* Style for the legend */
    .legend {
        position: absolute;
        /* Set position to absolute */
        top: 10px;
        /* Adjust top position as needed */
        right: 10px;
        /* Adjust right position as needed */
    }

    /* Grid layout for charts */
    .chart-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns with equal width */
        gap: 20px; /* Gap between columns */
    }
</style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @extends('layouts.headerin')
    @section('content')
    <div class="container" style="margin-top: 150px;">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <label for="month">
                            Select a month:
                        </label>
                        <form id="monthForm" action="/report" method="GET">
                            <input id="monthSelector" type="month" value="2" name="month">
                        </form>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if($data==null)
                        <h1 style="font-weight: bolder;">No parkings in the given month.</h1>
                        @endif
                        <h5 style="font-weight: bold;">{{$month}}</h1>
                        <div class="chart-grid">
                            <!-- First pie chart of charge -->
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="chargepie"></canvas>
                                </div>
                                <!-- Legend for catpie -->
                                <div class="card-footer">
                                <p style="font-size:200%; ; text-align:center; margin:0;">Rs. {{$totalcharge}}</p>

                                <p style="font-size:150% ; text-align: center; margin:0; color:grey;">Total Revenue</p>
                                </div>
                            </div>

                            <!-- Second pie chart for category -->
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="catpie"></canvas>
                                </div>
                                <!-- Legend for the second pie chart  of category-->
                                <div class="card-footer">
                                <p style="font-size:200%; ; text-align:center; margin:0;">{{$totalcat}}</p>
                                <p style="font-size:150% ; text-align: center; margin:0; color:grey;">Total vehicles</p>
                                </div>
                            </div>
                        </div>


                        

                        <!-- TABLE -->
                        <br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Reg no.</th>
                                    <th>Category</th>
                                    <th>Phone no.</th>
                                    <th>Name</th>
                                    <th>Charge</th>
                                    <th>Payment mode</th>
                                    <th>Arrival time</th>
                                    <th>Departure time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                @if($item->status == 'out')
                                <tr>
                                    <td>{{ $item->reg_num }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->num}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->charge }}</td>
                                    <td>{{ $item->payment_mode }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                </tr>
                                @endif
                                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- month script -->
    <script>
        // Get the input element
        const monthSelector = document.getElementById('monthSelector');

        // Add an event listener for input change
        monthSelector.addEventListener('input', function() {
            // Submit the form programmatically
            document.getElementById('monthForm').submit();
        });
    </script>

    <!-- piechart script for category -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('catpie').getContext('2d');
        var myPieChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                        labels: ['4-wheeler', '2-wheeler', 'others'], //  labels
                                        datasets: [{
                                            data: {!! json_encode($catpie) !!}, // Access the nested $charge array
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
    <!-- piechart script for charge -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('chargepie').getContext('2d');
        var myPieChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                        labels: ['4-wheeler', '2-wheeler', 'others'], //  labels
                                        datasets: [{
                                            data: {!! json_encode($chargepie) !!}, // Access the nested $charge array
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
      
    </body>
    
   
    </html>
    @endsection

