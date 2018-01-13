<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Saga Primatama - Exhibition And Interior Contractor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="apple-touch-icon" href="pages/ico/60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN PLUGINS -->
  <link href="{{asset('plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/swiper/css/swiper.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- END PLUGINS -->
  <!-- BEGIN PAGES CSS -->
  <link class="main-stylesheet" href="{{asset('pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
  <link class="main-stylesheet" href="{{asset('pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css" />

  {{--<link class="main-stylesheet" href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />--}}

  <!-- BEGIN PAGES CSS -->
  <style>
  </style>
</head>
<body class="pace-primary">
<!-- BEGIN HEADER -->
@include('patilas.navbar')
<!-- END HEADER -->
@yield('content')
<!-- BEGIN FOOTER -->
<section class="p-b-50 p-t-50 bg-master-darkest">
  <div class="container p-b-50 p-t-50">
    <div class="col-md-8 col-md-offset-2">
      <div class="col-xs-height col-middle text-center">
        <img src="{{asset('/images/Skewdriver.svg')}}" alt="">
        <div class="text-center">
          <h1 class="text-white col-sm-12 p-b-10">
            Crafted with detail for a great start!<br> Exhibition plus Interior Contractor</h1>
          <a href="{{route('portfolio')}}" class="btn btn-lg btn-primary btn-cons btn-rounded" type="button">Explore</a>
          <p class="text-white hint-text font-arial small-text m-t-30">
            <span class="hint-text">{{setting('site.phone')}}<br></span>
            {{setting('site.address')}}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END FOOTER -->

<!-- BEGIN CORE FRAMEWORK -->
<script src="{{asset('/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('/pages/js/pages.image.loader.js')}}"></script>
<script type="text/javascript" src="{{asset('/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- BEGIN SWIPER DEPENDENCIES -->
<script type="text/javascript" src="{{asset('/plugins/swiper/js/swiper.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/plugins/velocity/velocity.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/plugins/velocity/velocity.ui.js')}}"></script>
<!-- BEGIN RETINA IMAGE LOADER -->
<script type="text/javascript" src="{{asset('/plugins/jquery-unveil/jquery.unveil.min.js')}}"></script>

<script src="{{asset('/plugins/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<!-- Isotope plugin arranges the card layout -->
<script src="{{asset('/plugins/jquery-isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
<!-- END VENDOR JS -->
<!-- BEGIN PAGES FRONTEND LIB -->
<script type="text/javascript" src="{{asset('/pages/js/pages.frontend.js')}}"></script>
<script type="text/javascript" src="{{asset('/pages/js/pages.social.js')}}"></script>
<!-- END PAGES LIB -->
<!-- BEGIN YOUR CUSTOM JS -->
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
@stack('scripts')
<!-- END PAGES LIB -->
</body>
</html>