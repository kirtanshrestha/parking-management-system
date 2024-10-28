<style>
    .navbar {
        background-color: #05396b;
        border-bottom: 10px solid #296e60;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    body {
        background-color: #679f86;
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
        margin-top: 20px;
    }


    .nav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 50px;
        text-decoration: none;
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }

    .nav a:hover {
        background-color: #ddd;
        color: black;
    }

    .nav a.active {
        background-color: #296e60;
        color: white;

    }

 
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-md ">
    <div class="container-fluid">
        <a class="navbar-brand" href="home"><img src="img/logo.png" style="width:80px ; height:auto ;" alt="mainlogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li style="color:#edf4e0;">
                    <?php $timezone = date_default_timezone_set('Asia/Kathmandu');
                    $date = date('Y-m-d');
                    echo $date; ?> <br>
                    <?php $time = date('h:i:s A');
                    echo $time; ?>
                    <br>
                    <p style="font-weight: bold;">{{$capmsg}}</p>

                </li>


            </ul>
            <!-- THE NAVBAR -->
            <div class="nav" id="myNavbar">
                <a href="home" class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}" onclick="setActiveLink(1)">Home</a>
                <a href="dashout" class="{{ Request::route()->getName() == 'dashout' ? 'active' : '' }}">Drive Out</a>
                <a href="rate" class="{{ Request::route()->getName() == 'rate' ? 'active' : '' }}">Rate/Capacity</a>
                <a href="history" class="{{ Request::route()->getName() == 'history' ? 'active' : '' }}">History</a>
                <a href="report" class="{{ Request::route()->getName() == 'report' ? 'active' : '' }}">Report</a>
                <a href="driveIn">Vehicle entry</a>
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">


                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" style="font-weight:bolder; color: #edf4e0; margin-right:50px;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/register">
                            Register
                        </a> 

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>


                @endguest
            </ul>
        </div>

    </div>

</nav>

@yield('content')