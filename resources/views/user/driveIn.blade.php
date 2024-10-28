<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PMS | Drive In</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label {
            font-size: larger;
            font-weight: bolder;
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }


        div.col-md-6 {
            margin-bottom: 15px;
            margin-top: 15px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        p {
            color: #2F4858;
            font-weight: bolder;
            font-size: larger;
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        table {
            color: red;
        }
    </style>
</head>

<body>
    @extends('layouts.header')

    @section('content')
    <div class="container" style="margin-top: 50px;">
        <p>{{session('same')}}</p>
        @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <form class="row g-3" action="/driveIn" method="POST">
            @csrf

            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" reduired>
            </div>
            <div class="col-md-6">
                <label for="num" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="num" id="num" required>
            </div>
            <div class="col-6">
                <label for="reg_num" class="form-label" require>Registration Number</label>
                <input type="text" class="form-control" name="reg_num" id="reg_num" placeholder="B AA 1234" required>
            </div>
            <div class="col-md-6">
                <label for="cat" class="form-label">Category</label><br>
                <select id="cat" name="cat" class="form-select">
                    <option selected>4-wheeler</option>
                    <option>2-wheeler</option>
                    <option>other</option>
                </select>
            </div>

            <div class="col-6">
                <div class="form-check"></div>
            </div>
            <div class="col-md-12 ">
                <button type="submit" style="background-color: #05396b;" class="btn btn-primary btn-lg btn-block">Park in</button>
            </div>
        </form>
        <div class="card-body">
            <table class="table table-dark table-bordered table-striped table-hover">
                <thead>
                    <h2>Current Rates</h2>
                    <tr class="text-white">
                        <th>Category</th>
                        <th>Rate/hr</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->category }}</td>
                        <td>Rs. {{ $item->rate }}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>

    @endsection


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>