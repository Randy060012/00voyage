<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/vitour/tour-package-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2024 20:02:03 GMT -->

<head>
    <meta charset="utf-8">
    <title>Vitour - Travel & Tour Booking HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('vitour/app/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('vitour/app/css/jquery.fancybox.min.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('vitour/assets/images/favico.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('vitour/assets/images/favico.png')}}">

    <link rel="stylesheet" href="{{asset('vitour/app/css/map.min.css')}}">

</head>

<body class="body header-fixed ">

    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            @include('client.layouts.header2')
            <!-- End Main Header -->

            @yield('content')

            @include('client.layouts.footer2')

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->

    <a id="scroll-top" class="button-go"></a>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="logo-canvas">
                <img src="{{asset('vitour/assets/images/logo.png')}}" alt="image">
            </div>
            <p class="des">The world’s first and largest digital market
                for crypto collectibles and non-fungible
            </p>
            <ul class="canvas-info">
                <li class="flex-three">
                    <i class="icon-noun-mail-5780740-1"></i>
                    <p>Info@webmail.com</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Group-9"></i>
                    <p>684 555-0102 490</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Layer-19"></i>
                    <p>6391 Elgin St. Celina, NYC 10299</p>
                </li>
            </ul>
            <ul class="social flex-three">
                <li>
                    <a href="#">
                        <i class="icon-icon-2"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-x"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-8"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-6"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <!-- Javascript -->
    <script src="{{asset('vitour/app/js/jquery.min.js')}}"></script>
    <script src="{{asset('vitour/app/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('vitour/app/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vitour/app/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vitour/app/js/swiper.js')}}"></script>
    <script src="{{asset('vitour/app/js/plugin.js')}}"></script>
    <script src="{{asset('vitour/app/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('vitour/app/js/price-ranger.js')}}"></script>
    <script src="{{asset('vitour/app/js/shortcodes.js')}}"></script>
    <script src="{{asset('vitour/app/js/main.js')}}"></script>

    <script src="{{asset('vitour/app/js/map.min.js')}}"></script>
    <script src="{{asset('vitour/app/js/map.js')}}"></script>
</body>


<!-- Mirrored from themesflat.co/html/vitour/tour-package-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2024 20:02:05 GMT -->

</html>
