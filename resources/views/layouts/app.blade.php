<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KBT - KOCHI BLUE TIGER</title>
    <meta name="description" content="It’s time to roar because the Tigers are in charge! Kochi Blue Tigers is a team of explosive batsmen and sharp-witted bowlers in the Kerala Cricket League. We're here to entertain you, to make you jump out of your seats, and to make cricket super exciting! Join the hype as we roar our way to glory!">
    <meta property="og:title" content="KBT - KOCHI BLUE TIGER">
    <meta property="og:description" content="It’s time to roar because the Tigers are in charge! Kochi Blue Tigers is a team of explosive batsmen and sharp-witted bowlers in the Kerala Cricket League. We're here to entertain you, to make you jump out of your seats, and to make cricket super exciting! Join the hype as we roar our way to glory!">
    <meta property="og:image" content="{{ asset('/assets/images/logo.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KBT - KOCHI BLUE TIGER">
    <meta name="twitter:description" content="It’s time to roar because the Tigers are in charge! Kochi Blue Tigers is a team of explosive batsmen and sharp-witted bowlers in the Kerala Cricket League. We're here to entertain you, to make you jump out of your seats, and to make cricket super exciting! Join the hype as we roar our way to glory!">
    <meta name="twitter:image" content="{{ asset('/assets/images/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="KBT - KOCHI BLUE TIGER" />
    <meta property="og:description" content="Kochi Blue Tigers, the cricketing team of Kochi, Kerala, is known for its explosive batsmen and sharp-witted bowlers. The team is a part of the Kerala Cricket League (KCL) and is led by the charismatic captain, Naveen Alexander. The team is known for its vibrant and energetic performances, which have captured the hearts of fans all over the state. The team's iconic jersey features a stylized tiger, which adds to its mystique and charm."/>
    <meta property="og:image" content="{{ asset('/assets/images/logo.png') }}"/>
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="400" />
    <meta property="fb:app_id" content="492752575972074" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="KBT - KOCHI BLUE TIGER" />
    <meta name="twitter:description" content="Kochi Blue Tigers, the cricketing team of Kochi, Kerala, is known for its explosive batsmen and sharp-witted bowlers. The team is a part of the Kerala Cricket League (KCL) and is led by the charismatic captain, Naveen Alexander. The team is known for its vibrant and energetic performances, which have captured the hearts of fans all over the state. The team's iconic jersey features a stylized tiger, which adds to its mystique and charm." />
    <meta name="twitter:image" content="{{ asset('/assets/images/logo.png') }}" />
    <meta name="twitter:site" content="@kochibluetigers" />
    <meta name="twitter:creator" content="@kochibluetigers" />
    <link rel="icon" href="{{ asset('/assets/images/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('/assets/images/logo.png') }}">
    @if (str_contains(url()->current(), "kochibluetigers.com"))
        <meta name="google-site-verification" content="4Jj25qYUZWXQY9EK0958RXz7J67W625yA2-rZQQQG3g" />
    @endif
    
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/css/rt-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="/css/metisMenu.css">
    <link rel="stylesheet" type="text/css" href="/css/rtsmenu.css">
    <link rel="stylesheet" type="text/css" href="/css/variables/variable1.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
</head>

    @stack('after-styles')
</head>

<body class="">
    <div id="rts__preloader">
        <div class="main-fader responsive-height-comments">
            <div class="loader" id="lottie-container"></div>
        </div>
    </div>
    <div class="anywere anywere-home"></div>
    <div id="app" class="">
        @yield('content')
        @include('includes.footer')
    </div>
    <!-- Scripts -->
    @yield('beforeScript')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="/js/vendors/bootstrap.min.js"></script>
    <script src="/js/vendors/wow.min.js"></script>
    <script src="/js/vendors/zoom.js"></script>
    <script src="/js/vendors/jquery.counterup.min.js"></script>
    <script src="/js/vendors/timer.js"></script>
    <script src="/js/vendors/metisMenu.min.js"></script>
    <script src="/js/vendors/rtsmenu.js"></script>
    <script src="/js/vendors/metisMenu.min.js"></script>
    <script src="/js/vendors/isotope.pkgd.min.js"></script>
    <script src="/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="/js/vendors/swiper-bundle.min.js"></script>
    

    @yield('afterScript')
    <script src="/js/main.js"></script>
</body>

</html>
