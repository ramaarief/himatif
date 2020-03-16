<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Website Himatif</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset_user/images/logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_user/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_user/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_user/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_user/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_user/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_user/css/styles.css') }}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div style=" background: url({{ asset('asset_user/images/banner.png') }}); background-size: cover;">
      
      @include('layouts.header')

    <div class="site-blocks-cover" style="overflow: hidden;">
        <div class="container">
          <div class="row align-items-center justify-content-center">

            <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
              
              <img src="{{ asset('asset_user/images/logo.png') }}" alt="Image" class="img-fluid img-absolute" width="300px" style="margin-right: 100px; margin-top: 0px;">

              <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-6 mr-auto">
                  <h1 style="color: #fff;">HIMATIF</h1>
                  <p class="mb-5" style="color: #fff;">Himpunan mahasiswa teknologi informasi dan komputer<br>Universitas Brawijaya</p>
                  <div>
                    <a href="#" class="btn btn-primary mr-2 mb-2" style="background: #1c33b7;">Explore</a>
                  </div>
                </div>
                
                
              </div>

            </div>
          </div>
        </div>
      </div> 
    </div>
  </div> 
     
    @yield('container')
     

    @include('layouts.footer')
    

  <script src="{{ asset('asset_user/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('asset_user/js/popper.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('asset_user/js/aos.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.sticky.js') }}"></script>

  
  <script src="{{ asset('asset_user/js/main.js') }}"></script>
  
    @section('js')
    
    @show
  </body>
</html>