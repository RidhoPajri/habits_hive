{{-- <!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Helax - Tech Startup Landing Page Html Template</title>

    <link rel="shortcut icon" href="{{asset('frontend/{{asset('frontend/assets/img/favicon.png')}}')}}" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popupcss')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    @yield('css')
</head>

<body>

    <div id="xb-loadding" class="xb-loader"><div class="xb-dual-ring"></div></div>

    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

    <div class="body_wrap">

        <!-- header start -->
        @include('include.frontend.header')
        <!-- header end -->

        <!-- slide bar start -->


            <!-- sidebar-info start -->
            @include('include.frontend.sidebar')
            <!-- sidebar-info end -->

            <!-- side-mobile-menu start -->

            <!-- side-mobile-menu end -->


         <!-- header search start -->

        <!-- header search end -->
        <div class="body-overlay"></div>
        <!-- slide bar end -->

       <main>
            @yield('content')
       </main>
       {{-- footer --}}
        {{-- @include('include.frontend.footer') --}}
       {{-- end footer --}}


    <!-- jquery include -->
    {{-- <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/cursor.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.marquee.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/parallax-scroll.js')}}"></script>
    <script src="{{asset('frontend/assets/js/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scrollspy.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

    @yield('js')
    @stack('script')
</body>

</html> --}}

<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <link rel="shortcut icon" href="{{asset('frontend/assets/img/logo2.png')}}" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    @yield('css')
</head>

<body class="home-dark">

    <div id="xb-loadding" class="xb-loader style-2"><div class="xb-dual-ring"></div></div>

    <div class="xb-cursor tx-js-cursor style-2">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>

    <div class="progress-wrap style-2">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

    <div class="body_wrap">

        <!-- header start -->
@include('include.frontend.header')
        <!-- header end -->

        <!-- slide bar start -->
 @include('include.frontend.sidebar')
            <!-- sidebar-info end -->

            <!-- side-mobile-menu start -->

        <!-- slide bar end -->

       <main>
            <!-- hero start -->
            @yield('content')
            <!-- testimonial end -->

       </main>

@include('include.frontend.footer')

    <!-- jquery include -->
    <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/cursor.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.marquee.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/parallax-scroll.js')}}"></script>
    <script src="{{asset('frontend/assets/js/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scrollspy.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  @yield('js')
  @stack('script')
</body>

</html>
