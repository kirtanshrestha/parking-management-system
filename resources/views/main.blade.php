<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PMS</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon" />
    <!-- css -->
    <style>
        div.card {
            background-color: #389583;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            /* margin:0 auto; */
            float: none;
            margin-top: 10px;
            margin-bottom: 1px;
            margin-right: 100px;
            margin-left: 50px;
        }


        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5.5);
        }

        .container {
            padding: 2px 16px;

        }

        p {
            color: white;
            font-weight: bolder;
            font-size: larger;
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }


        div.col-md-6 a:hover {
            text-decoration: none;
        }

        .card-text {
            font-size: large;
            font-weight: 600;
            color: white;
            text-align: center;
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    @extends('layouts.header')

    @section('content')
    <div style="text-align:center; color:#edf4e0">
        <br>
        <h1 style="color:white">Welcome to The Next Center</h1>
        <p>Select your purpose</p>
    </div>
    <div class="container">
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="card">
                    <a href="/driveIn">
                        <img src="/img/vehiclein.jpg" class="card-img-top" alt="VehicleIn" style="padding: 10px;">
                        <div class="card-body">
                            <p class="card-text">Vehicle In</p>
                        </div>
                </div>
                </a>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <a href="/driveOut">
                        <img src="/img/vehicleout.jpg" class="card-img-top" alt="VehicleOut" style="padding: 10px;">
                        <div class="card-body">
                            <p class="card-text">Vehicle Out</p>
                        </div>
                </div>
                </a>
            </div>
        </div><br>
        <p> {{$susmsg}} </p>

    </div>
    <!-- js -->
    <script>
        // Function to generate a random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Get the element by ID
        var textElement = document.getElementById('random-text');

        // Set the text color to a random color
        textElement.style.color = getRandomColor();
    </script>
    <script type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
</body>

</html>