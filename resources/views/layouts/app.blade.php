<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Warteg Ciputat</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template-resto/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('template-resto/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('template-resto/assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('template-resto/assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('template-resto/assets/css/lightbox.css') }}">



    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link rel="stylesheet" href="{{ asset('leaflet.groupedlayercontrol.css') }}">
    <link rel="stylesheet" href="{{ asset('Control.MiniMap.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet"
        href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
    <link rel="stylesheet" href="{{ asset('L.Control.ZoomBar.css') }}">
    <link rel="stylesheet" href="{{ asset('Leaflet.Coordinates-0.1.5.css') }}">


    {{-- js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('leaflet.groupedlayercontrol.js') }}"></script>
    <script src="{{ asset('Control.MiniMap.js') }}"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js">
    </script>
    <script src="{{ asset('L.Control.ZoomBar.js') }}"></script>
    <script src="{{ asset('Leaflet.Coordinates-0.1.5.min.js') }}"></script>
</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div>
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Content Header -->
        {{-- @include('layouts.header') --}}
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->

        <!-- Main Footer -->
        @include('layouts.footer')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template-resto/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('template-resto/assets/js/popper.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('template-resto/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/accordions.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/slick.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('template-resto/assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('template-resto/assets/js/custom.js') }}"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>

</body>

</html>
