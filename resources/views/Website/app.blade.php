<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">



    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('img/fevicon.png')}}" type="image/gif" />

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


    <style>
        body {
            background-image: url('{{asset("news-bg.png")}}');
            background-size: contain;
        }

    </style>

</head>

<body>
    <div id="app">
        <main class="py-2">
            @yield('content')
        </main>
    </div>
</body>
<footer class="footer">
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">© 2021 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    @yield('footer')
    <script src={{asset('plugins/jquery/jquery.min.js')}}></script>
    <!-- Bootstrap 4 -->
    <script src={{asset('plugins/bootstrap/js/bootstrap.min.js')}}></script>
    <!-- AdminLTE App -->
    <script src={{asset('dist/adminlte.min.js')}}></script>

    <script src={{asset('plugins/jquery/plugin.js')}}></script>
    <!-- sidebar -->
    <script src={{asset('plugins/jquery/jquery.mCustomScrollbar.concat.min.js')}}></script>
    <script src={{asset('plugins/jquery/custom.js')}}></script>
    <!-- javascript -->
    <script src={{asset('plugins/jquery/owl.carousel.js')}}></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</footer>

</html>
