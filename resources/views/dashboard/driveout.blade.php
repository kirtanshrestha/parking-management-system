<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PMS | Drive Out</title>
    <link rel="icon" href="/img/logo3.png" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: #679f86;
            font-family: 'Fira Sans', sans-serif;
        }

        .navbar {
            background-color: #1b4965;
            border-bottom: 10px solid #e9c48d;
        }

        a:hover {
            text-decoration: none;
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
                    <div class="card-header font-weight-bolder">
                        Currently Parked Vehicles
                    </div>

                    <div class="card-body">

                        <p style=" color: #05396b;font-weight: bolder;font-size: larger">
                            {!! session('price')!!}
                        </p>

                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Plate No.</th>
                                    <th>Category</th>
                                    <th>Phone No.</th>
                                    <th>Name</th>
                                    <th>Arrival time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->reg_num }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->num}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <form method="POST" action="dashoutup">
                                            @csrf <!-- CSRF protection -->
                                            <input type="hidden" name="reg_num" value="{{ $item->reg_num }}">
                                            <input type="hidden" name="created_at" value="{{ $item->created_at }}">
                                            <button value="{{$item->reg_num}}" class="btn btn-info" type="submit">Drive Out</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection