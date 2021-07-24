<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CalmUI Admin</title>
   <link rel="stylesheet" href="{{ asset('public/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendors/css/vendor.bundle.base.css') }}">
 
  
  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendors/owl-carousel-2/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendors/owl-carousel-2/owl.theme.default.min.css') }}">

  @yield('css_file')
  
  <link rel="shortcut icon" href="{{ asset('public/icon/bloggear.jpg') }}" />
</head>
<body>
  <?php 
      $login_page = Illuminate\Support\Str::contains(url()->current(),'login');
      $register_page = Illuminate\Support\Str::contains(url()->current(),'register');
      $forget = Illuminate\Support\Str::contains(url()->current(),'password');
      $logic = $forget || $login_page || $register_page ;
   ?>
{{--   <div class="theme-setting-wrapper">
        <div id="settings-trigger" data-toggle="offcanvas"><i class="mdi mdi-menu"></i></div>
  </div> --}}
  <div class="container-scroller">
    @if($logic)
    @else
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
{{--         <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul> --}}
        <?php echo logo() ?>
 {{--        <ul class="navbar-nav mr-lg-2  d-lg-flex">
          <li class="nav-item nav-search d-lg-flex">
            <div class="input-group">
              <div class="input-group-prepend">
               <!--  <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span> -->

              </div>
              <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="search">
            </div>
            <button style="transform: translateX(-30px);" type="button" class="btn btn-primary btn-rounded btn-fw"><i class="mdi mdi-magnify"></i></button>
          </li>
        </ul> --}}
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link " href="{{ url('/profile') }}"   aria-expanded="false">
              <img src="{{ user('icon')==null?asset('public/images.png'):asset('public/'.user('icon')) }}" alt="profile">
              <span class="nav-profile-name">{{ user('name') }}</span>
            </a>
          </li>
          <li class="nav-item nav-toggler-item-right">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
    @include('asset.sidebar')
    @endif
      <!-- Main Body Start -->
        <div class="main-panel">
          <div class="content-wrapper">

              @yield('main')

          </div>
      <!-- Main Body End -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="#bloggear" target="_blank">BlogGear</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
  
      </div>
      @if($logic)
      @else
    </div>
      @endif
  </div>
  <div id="pageloaderSide"></div>
  <div id="imgloaderSide"></div>
  <div class="modal fade" id="pageLoader" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="circle-loader"></div>{{-- Loader Emliment Here --}}
    </div>
  </div>
<form style="display: none;">
  <input type="submit" name="" value="save">
</form>
  <script src="{{ asset('public/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('public/js/off-canvas.js') }}"></script>
  <script src="{{ asset('public/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('public/js/template.js') }}"></script>
   @yield('js_file')
  <script type="text/javascript">
    var base_url = '<?php echo base_url ; ?>';
    var stepNum = 0 ;
    var csrf = '{{ csrf_token() }}';
    var ImageArrayList = [];
    $('#pageLoader').modal('show');
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          400:{
              items:1
          },
          600:{
              items:2
          },
          800:{
              items:2
          },
          1000:{
              items:3
          }
      }
    });
  $(document).ready(function(){
    $('.modal-backdrop').remove();
    $('#pageLoader').remove();
    $('#pageloaderSide').html('<div class="modal fade" id="pageLoader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="circle-loader"> </div> </div> </div>');
  });
  function pageLoader(){ $('#pageLoader').modal('show'); }
  $('body').find('a').each(function(i,e){
      if($(e).attr('href') && $(e).attr('href').indexOf('#')) $(e).attr('onclick','pageLoader()');
  });
  document.querySelector('form').addEventListener('submit',(e)=>{
    pageLoader()
  });
  @yield('js')
</script>
</body>
</html>