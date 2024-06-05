<style>
    .navbar {
        background-color: #05396b;
        border-bottom: 10px solid #296e60;
    }

    body {
        background-color: #679f86;
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<nav class="navbar navbar-inverse">
    
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="img/logo.png" style="width:80px ; height:auto ; border:none;" alt="mainlogo"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
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