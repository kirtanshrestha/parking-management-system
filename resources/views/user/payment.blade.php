<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Payment</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        img {
            width: 300px;
            height: 400px;
            /* border: 3px solid #111; */
            border: solid 10px #71ad93;
            border-radius:0%;
            /* background-image: linear-gradient(white, white),  */
            /* linear-gradient(to right, green, gold); */
            background-origin: border-box;
            background-clip: content-box, border-box;
        }

        p {
            color: #2F4858;
            font-weight: bolder;
            font-size: xx-large;
            margin-top: 20px;
        }

        h6 {
            font-weight: bolder;
            color: #2F4858;
        }
    </style>
</head>

<body >
    @extends('layouts.headerlogin')
    @section('content')
    <div class="container">
        @csrf
        <p>{!! session('msg')!!}</p>

        <p style="margin-top: 50px;font-size:large ">Select payment option:</P>
        <div class="row 2">
            <table>
                <th>
                    <div class="col">
                        <div>
                            <a href="main/{{'1'.session('data')}}"> <img src="img/cash.png" alt="helo"></a>
                            <h6 style="text-align: center; margin-top:10px ">Cash</h6>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="col">
                        <div>
                            <a href="main/{{'2'.session('data')}}"> <img src="img/digital.png" alt="helo"></a>
                            <h6 style="text-align: center; margin-top:10px ">Digital Wallet</h6>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="col">
                        <div>
                            <a href="main/{{'3'.session('data')}}"> <img src="img/debit.png" alt="helo"></a>
                            <h6 style="text-align: center; margin-top:10px ">Debit/Credit Card</h6>
                        </div>
                    </div>
                </th>

            </table>
            

        </div>
    </div>
    @endsection

</body>

</html>