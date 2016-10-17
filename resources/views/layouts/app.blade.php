<html>
<head>

    <title>Document</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JavaScripts -->
    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="text-center">
        <a class="navbar-brand" href="/" title="">
            <img class="brand" src="/images/brand.jpeg">
        </a>
    </div>

</nav>

<div class="custom-container">
    @yield('content')
</div>

<nav class="navbar navbar-default navbar-fixed-bottom">

    <ul style="width: 100%" class="nav navbar-nav">
        <li>
            <a href="">
                <img class="nav-image" src="/images/info.svg" alt="">
            </a>
        </li>
        <li>
            <a href="">
                <img src="/images/gallery.svg" alt="">
            </a>
        </li>
        <li>
            <a href="">
                <img src="/images/map.svg" alt="">
            </a>
        </li>
        <li>
            <a href="">
                <img src="/images/calendar.svg" alt="">
            </a>
        </li>
        <li>
            <a href="">
                <img src="/images/registration.svg" alt="">
            </a>
        </li>
    </ul>
</nav>
</body>
</html>



