<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('vendor/material/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <!-- SIDEBAR START -->
        @include('includes.sidebar')
        <!-- SIDEBAR END -->
        <div class="main-panel">
            <!-- TOP NAV START -->
            @include('includes.top-navbar')
            <!-- TOP NAV END -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Your content will go here, after extend this master layout. -->
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- FOOTER START -->
            @include('includes.footer')
            <!-- FOOTER END -->
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/material/js/material.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('vendor/jquery-plugins/chartist.min.js') }}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{ asset('vendor/jquery-plugins/arrive.min.js') }}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{ asset('vendor/jquery-plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap-notify.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3LzA1Foy4MrDYKrl1DWjx_8yuQ_bQioo"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('vendor/material/js/material-dashboard.js?v=1.2.0') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('js/custom-scripts.js') }}"></script>
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function() {--}}
            {{--demo.initDashboardPageCharts();--}}
        {{--});--}}
    {{--</script>--}}
    @yield('your-script')
</body>
</html>