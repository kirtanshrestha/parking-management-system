<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PMS | History</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        h1 {
            color: #2F4858;
            font-weight: bolder;
            font-size: larger;
        }
    </style>
</head>

<body>
    @extends('layouts.headerin')
    @section('content')
    <div class="container" style="margin-top: 150px;">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <h1>{{session('susmsg')}}</h1>
                <div class="card">
                    <div class="card-header">
                        Rates
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="/rate" method="POST">
                            @csrf

                            <div class="col-md-6">
                                <label for="cat" class="form-label">Category</label><br>
                                <select id="cat" name="cat" class="form-select">
                                    @foreach($data as $item)
                                    <option>{{$item->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="rate" class="form-label" require>Rate</label>
                                <input type="number" class="form-control" name="rate" id="rate" >
                            </div>

                            <div class="col-md-5">
                                <div class="form-check">

                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="action" value="rate" style="background-color: #05396b;" class="btn btn-primary btn-lg btn-block">Update Rate</button>
                            </div>
                            <!-- capacity -->
                            <div class="col-md-6">
                                <label for="capacity" class="form-label" require>Capacity</label>
                                <input type="number" class="form-control" name="capacity" id="capacity" >
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="action" value="cap" style="background-color: #05396b;" class="btn btn-primary btn-lg btn-block">Update Capacity</button>
                            </div>
                        </form>
                        <br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <h2>Current Rates</h2>
                                <tr class="bg-primary text-white">
                                    <th>Category</th>
                                    <th>Rate/hr</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>Rs. {{ $item->category }}</td>
                                    <td>Rs. {{ $item->rate }}</td>
                                </tr>
                                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>


@endsection