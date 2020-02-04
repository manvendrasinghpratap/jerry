<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    @include('common.css')
    <link href="{{asset('public/assets/css/dashforge.dashboard.css') }}" rel="stylesheet">
</head>
<body>
      @include('common.header') 
      @yield('content')
      @include('common.footer')
    <!-- Div for footer End -->
   <!-- All  common js is include in js blade file Begin-->
    @include('common.js')
    <script src="{{ asset('public/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('public/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('public/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('public/lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('public/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('public/lib/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{ asset('public/assets/js/dashforge.sampledata.js')}}"></script>
    
</body>
</html>
