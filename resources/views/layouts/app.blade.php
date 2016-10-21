<html>
<head>

    <title>Игрище за минифутбол</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Игрище за мини футбол">
    <meta name="Keywords" content="игрище, зала, мини футбол, футбол, футзал">
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

    {{--PHOTO VIEWER LINKS--}}

    <!-- Core CSS file -->
    <link rel="stylesheet" href="/css/photoviewer/photoswipe.css">

    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
         In the folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="/css/photoviewer/default-skin/default-skin.css">

    <!-- Core JS file -->
    <script src="/js/photoswipe.min.js"></script>

    <!-- UI JS file -->
    <script src="/js/photoswipe-ui-default.min.js"></script>
    <script src="/js/gallery.js"></script>
    {{--PHOTO VIEWER LINKS END--}}

</head>
<body>
<nav class="navbar navbar-default navbar-fluid-top">
    <div class="container">
        <div class="text-center">
            <a class="navbar-brand" href="/" title="">
                <img class="brand" src="/images/brand.jpg">
            </a>
        </div>
    </div>
</nav>
    <div class="container">
        @yield('content')
    </div>


@include('pages.gallery')

<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">

        <ul style="width: 100%" class="nav navbar-nav">
            <li>
                <a href="/info">
                    <img class="nav-image" src="/images/info.svg" alt="">
                </a>
            </li>
            <li>
                <a href="/gallery" id="gallery">
                    <img src="/images/gallery.svg" alt="">
                </a>
            </li>
            <li>
                <a href="/map">
                    <img src="/images/map.svg" alt="">
                </a>
            </li>
            <li>
                <a href="/calendar">
                    <img src="/images/calendar.svg" alt="">
                </a>
            </li>
            <li>
                <a id="phone" href="#">
                    <img src="/images/registration.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</nav>

</body>
</html>



