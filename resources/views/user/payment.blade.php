<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Payment</title>
    <link rel="icon" href="/img/logo3.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        img {
            width: 300px;
            height: 400px;
            /* border: 3px solid #111; */
            border: solid 10px #71ad93;
            border-radius: 0%;
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
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    @extends('layouts.headerlogin')
    @section('content')
    <div class="container">
        @csrf
        <p>{!! session('msg')!!}</p>

        <p style="margin-top: 50px;font-size:large ">Select Payment Option:</P>
        <div class="row 2">
            <table>
                <th>
                    <div class="col">
                        <div>
                            <a href="main/{{'1'.session('data')}}"> <img src="img/cash1.png" alt="helo"></a>
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
                            <form action="/process-payment" method="POST" id="payment-form">
                                @csrf
                                <input type="hidden" name="amount" value="10"> <!-- Example amount -->
                                <button id="card-button" class="btn btn-primary">Pay with Debit / Credit Card</button>
                            </form>
                        </div>
                    </div>
                </th>

            </table>


        </div>
    </div>
    @endsection

</body>

</html>

<script>
    const stripe = Stripe('pk_test_51QckCVB25KygpkP3r9640OfL3qObYuAlAxUfmrlCrwZCpNqeE2ueXre3PYk9e6WPeUyMPoTldO31k2gSxBIWcc9n00OZ6VlPmt');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-button');

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const { paymentMethod, error } = await stripe.createPaymentMethod('card', cardElement);

        if (error) {
            console.error(error);
        } else {
            form.submit();
        }
    });
</script>