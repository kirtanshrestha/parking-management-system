
<style>
    .navbar {
        background-color: #05396b;
        border-bottom: 10px solid #296e60;
    }


    a:hover {
        text-decoration: none;
    }
</style>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="/img/logo.png" style="width:80px ; height:auto ;" alt="mainlogo"></a>
        </div>

        <p style="color: #edf4e0;">{{$capmsg}}<br><a id="random-text" target="_blank" style="color: #edf4e0" href="https://www.google.com/maps/search/parking+near+me">{{$alt}}</a></p>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="login"><button type="button" class="btn btn-success">Login</button></a></li>

            <li style="color:#edf4e0;">
                <?php $timezone = date_default_timezone_set('Asia/Kathmandu');
                $date = date('Y-m-d');
                echo $date; ?>
            </li>

            <li style="color:#edf4e0;">
                <?php $time = date('h:i:s A');
                echo $time; ?>
            </li>
        </ul>
    </div>
</nav>
@yield('content')