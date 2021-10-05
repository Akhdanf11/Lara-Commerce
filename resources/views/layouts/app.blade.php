<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from grandetest.com/theme/edumy-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2019 18:50:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}css/responsive.css">
<!-- Title -->
<title>{{ config('app.name', 'Laravel-Ecommerce') }}</title>
<!-- Favicon -->
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
		@include('layouts.navigation')

    {{-- modal --}}
        @include('modal.sign_up_modal')
	<!-- Modal Search Button Bacground Overlay -->

        @yield('content')
    @include('layouts.footer')


<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="https://grandetest.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/isotop.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from grandetest.com/theme/edumy-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2019 18:52:21 GMT -->
</html>
