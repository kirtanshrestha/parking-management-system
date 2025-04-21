<style>
    body {
        /* background-color: #679f86; */
        background-color: #84a59d;
        font-family: 'Fira Sans', sans-serif;
    }

    .navbar {
        background-color: #1b4965;
        border-bottom: 10px solid #e9c48d;
        /* border-image: linear-gradient(to right,rgb(43, 86, 93), #22484e) 1; */
    }

    a:hover {
        text-decoration: none;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="/img/logo3.png" style="width:80px ; height:auto ;" alt="mainlogo"></a>
        </div>

        <p style="color: #edf4e0;">{{$capmsg}}<br><a id="random-text" target="_blank" style="color: #edf4e0" href="https://www.google.com/maps/search/parking+near+me">{{$alt}}</a></p>


        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="login">
                    <button type="button" class="btn btn-success"> LOGIN </button>
                </a>
            </li>

            <li style="color:#edf4e0;">
                <?php $timezone = date_default_timezone_set(timezoneId: 'America/New_York');
                $date = date('m/d/Y');
                echo $date; ?>
            </li>

            <li style="color:#edf4e0;">
                <?php $time = date('h:i A');
                echo $time; ?>
            </li>
        </ul>
    </div>
</nav>
@yield('content')