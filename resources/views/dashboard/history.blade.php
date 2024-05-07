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
</head>

<body>
    @extends('layouts.headerin')
    @section('content')
    <div class="container" style="margin-top: 150px;">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Previously Parked
                    </div>

                    <div class="card-body">

                        <!-- table -->
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
                            </tbody>
                        </table>

                        <!-- Cateory -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>


@endsection