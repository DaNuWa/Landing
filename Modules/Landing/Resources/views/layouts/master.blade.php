<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <link href="{{asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/fonts/elegant-fonts.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/trackpad-scroll-emulator.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <link href="{{asset('js/toast.style.min.css" rel="stylesheet')}}">
    <script type="text/javascript" src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.quovolver.js')}}"></script>
    <script src="{{asset('js/toast.script.js')}}"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />    <title>Hotelshippo</title>

</head>

<body class=" frame">
 @yield('content')


<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script> -->
<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.trackpad-scroll-emulator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/particles.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript">
    // var latitude = 34.038405;
    // var longitude = -117.946944;
    // var markerImage = "assets/img/map-marker-w.png";
    // var mapTheme = "dark";
    // var mapElement = "map-contact";
    // google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));

    particlesJS.load("particles-js", "assets/json/particles-default-dark-theme.json");

</script>

@yield('js')
</body>
</html>
