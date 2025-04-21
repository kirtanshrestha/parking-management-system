<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> PMS </title>
    <link rel="icon" href="/img/logo2.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet"> <!-- Orbitron -->

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yanone+Kaffeesatz:wght@200..700&display=swap');
    </style>

    <!-- css -->
    <style>

    div.card {
        background-color: #dcecf2;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        /* margin:0 auto; */
        float: none;
        /* margin-top: 10px;
        margin-bottom: 1px;
        margin-right: 100px;
        margin-left: 50px; */
        border-radius: 15px;
        cursor: pointer;   
        gap: 40px; 
        padding: 5px;
        
    }
    
    .container {
        padding: 2px 16px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    p {
        color: 303030;
        font-weight: bolder;
        font-size: larger;
        font-family: "Fira Sans", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
        text-shadow: 1px 1px 2px #00000080;
    }

    div.col-md-6 a:hover {
        text-decoration: none;
    }

    .heading {
        position: relative;
        font-size: 1.5rem;
        font-weight: 600;
        font-family: 'Fira Sans', sans-serif;
        color: #ffffff;
        text-align: center;
        margin-bottom: 20px;
        display: inline-block;
    }

    .heading:hover {
        color: #edf4e0;
    }   

    .heading:active {
        color: #edf4e0;
    }

    .heading::after {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 50%;
        width: 0;
        height: 3px;
        background-color: #ffffff;
        transition: width 0.4s ease, left 0.4s ease;
        transform: translateX(-50%);
    }

    .heading:hover::after {
        width: 50%;
        left: 50%;
    }


    .subheading {
        position: relative;
        font-size: 1.25rem;
        font-weight: 600;
        font-family: 'Fira Sans', sans-serif;
        color: #ffffff;
        text-align: center;
        margin-bottom: 20px;
        display: inline-block;
        text-shadow: none;
    }

    .subheading:hover {
        color: #edf4e0;
    }   

    .subheading:active {
        color: #edf4e0;
    }

    .subheading::after {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 50%;
        width: 0;
        height: 3px;
        background-color: #ffffff;
        transition: width 0.4s ease, left 0.4s ease;
        transform: translateX(-50%);
    }

    .subheading:hover::after {
        width: 50%;
        left: 50%;
    }

    .card {
        margin: 15px;
        border-radius: 20px;
        background: linear-gradient(145deg,rgb(110, 141, 133), #84a59d);
        box-shadow: 0 4px 12px 0 rgba(29, 59, 64, 0.6); /* matches dark bg */
        transition: all 0.3s ease;
        cursor: pointer;    
        width: 95%;
        max-width: 375px;
    }

    .card-text {
        font-size: 1.25rem;
        font-weight: 500;
        font-family: "Fira Sans", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
        color: #f0f0f0;
        text-align: center;
        text-shadow: 1px 1px 2px #00000080;
        letter-spacing: 0.2px;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.35);
        background: linear-gradient(145deg,rgb(110, 141, 133), #84a59d);
    }

    .card:hover .card-text {
        color: #e9c48d;
        transform: scale(1.05);
        transition: all 0.5s ease;
    }

    .card img {
        border-radius: 10px;
    }

    .card-body {
        padding: 1rem;
    }

    .card-img-top {
        aspect-ratio: 1 / 1;
        object-fit: cover;
        width: 100%;
        border-radius: 10px;
        padding: 10px;
    }

    /* Mobile responsive card adjustment */
    @media screen and (max-width: 768px) {
        div.card {
            margin: 10px auto;
            width: 90%;
        }
    }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    @extends('layouts.header')

    @section('content')
        <div style="text-align:center; color:#edf4e0">
            <br>
            <h1 style="color:white" class="heading">Welcome to The Parking Center</h1>
            <br>
            <p class="subheading"> Choose an action </p>
        </div>
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="card">
                        <a href="/driveIn">
                            <img src="/img/vehiclein2.png" class="card-img-top" alt="VehicleIn" style="padding: 10px; aspect-ratio: 1 / 1; object-fit: cover; width: 100% border-radius: 10px;">
                            <div class="card-body">
                                <p class="card-text">Vehicle In</p>
                            </div>
                        </a>
                    </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <a href="/driveOut">
                        <img src="/img/vehicleout2.png" class="card-img-top" alt="VehicleOut"
                        style="padding: 10px; aspect-ratio: 1 / 1; object-fit: cover; width: 100%; border-radius: 10px;">
                            <div class="card-body">
                                <p class="card-text">Vehicle Out</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>
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