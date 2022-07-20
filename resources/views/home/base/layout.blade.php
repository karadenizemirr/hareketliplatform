<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>@yield('title', 'Hareketli Platform')</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{asset('assets/user/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet">
</head>

<body>


<!-- Body Inner -->
<div class="body-inner">
    @include('home.base.header')
    @yield('page-title')
    @yield('content')

</div>
<!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<!--Plugins-->
<script src="{{asset('assets/user/js/jquery.js')}}"></script>
<script src="{{asset('assets/user/js/plugins.js')}}"></script>

<!--Template functions-->
<script src="{{asset('assets/user/js/functions.js')}}"></script>
@yield('script')
</body>

</html>
