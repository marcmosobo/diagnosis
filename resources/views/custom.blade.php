<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="48x48" href="{{asset('assets/images/favicon.ico')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

  <!-- Fontawesome CSS-->
  <link rel="stylesheet" href="{{asset('assets/css/all.css')}}" />

  <!-- slick css -->
  <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" />

  <title>{{config('app.name')}} - @yield('title')</title>

</head>

<body>
  <!-- Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <div class="preloader-circle" id="status">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <!-- Preloader end -->
    <header>
    @include('header')
    </header>
    <!-- header end -->

    @yield('content')
    <!-- Footer section -->
    <footer class="footer-section" id="main-footer">
    @include('footer')
    </footer>
    <!-- Footer section end -->

    <!-- Scroll to top -->
    <div id="stop" class="scroll-to-top">
      <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
    </div>
    <!-- scroll to top end -->
  </main>

  <!-- Javascript -->
  <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/slick.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/js/ResizeSensor.min.js')}}"></script>
  <script src="{{asset('assets/js/theia-sticky-sidebar.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script
    src="../../../platform-api.sharethis.com/js/sharethis.js#property=5e14739168a9ad001281e73c&product=inline-share-buttons"
    async="async"></script>


</body>

</html>