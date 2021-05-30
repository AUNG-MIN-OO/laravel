<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/feather-icons-web/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    @yield('head')
</head>
<body>

<section class="main container-fluid">
    <div class="row">
        <!--        sidebar start-->
        @include('dashboard.sidebar')
        <!--        sidebar end-->
        <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">
            @include('dashboard.header')
            <!--content Area Start-->
            @yield('content')
            <!--content Area Start-->
        </div>
    </div>
</section>

<script src="vendor/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/way_point/jquery.waypoints.js"></script>
<script src="vendor/counter_up/counter_up.js"></script>
<script src="vendor/chart_js/chart.min.js"></script>
<script src="{{ asset('dashboard/js/app.js') }}"></script>

@yield('foot')
</body>
</html>
