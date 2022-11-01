<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bmajaz Admin Panel</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="CodedThemes">
  <meta name="keywords" content=" Bmajaz">
  <meta name="author" content="CodedThemes">
  <!-- Favicon icon -->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
  <!-- themify-icons line icon -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css')}}">
  <!-- ico font -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css')}}">
  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css')}}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">

          <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="ti-menu"></i>
            </a>
            <a href="{{ route('admin-dashboard') }}">
              <img class="img-fluid" src="{{ asset('assets/images/logo.png')}}" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
              <i class="ti-more"></i>
            </a>
          </div>

          <div class="navbar-container container-fluid">
            
            <ul class="nav-left">
              <li>
                
            <a class="mobile-menu" id="mobile-collapse" href="{{ url('/') }}" target="_blank">
              <i class="ti-world"></i>
            </a> 
              </li>
              <li>
                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
              </li>

            </ul>
            <ul class="nav-right">
              <li class="user-profile header-notification">
                <a href="#!">
                  @if (Auth::guard('admin')->user()->image)
                    <img src="{{ asset('storage/'.Auth::guard('admin')->user()->image)}}" class="img-radius" alt="Profile">
                  @else
                    <img src="{{ asset('assets/images/avatar-4.jpg')}}" class="img-radius" alt="Profile">
                  @endif
                  
                  <span>{{ Auth::guard('admin')->user()->name ?? 'admin' }}</span>
                  <i class="ti-angle-down"></i>
                </a>
                <ul class="show-notification profile-notification">
                  <li>
                    <a href="{{ route('admin-profile') }}">
                      <i class="ti-user"></i> Profile
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/logout') }}">
                      <i class="ti-layout-sidebar-left"></i> Logout
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
              <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                  <a href="{{ route('admin-dashboard') }}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="pcoded">
                  <a href="{{ route('services.index') }}">
                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Services</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="pcoded">
                  <a href="{{ route('setting.index') }}">
                    <span class="pcoded-micon"><i class="ti-settings"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Settings</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          @yield('container')
        </div>
      </div>
      <!-- Required Jquery -->
      <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
      <!-- jquery slimscroll js -->
      <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
      <!-- modernizr js -->
      <script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js')}}"></script>
      <!-- am chart -->
      <script src="{{ asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
      <script src="{{ asset('assets/pages/widget/amchart/serial.min.js')}}"></script>
      <!-- Todo js -->
      <script type="text/javascript " src="{{ asset('assets/pages/todo/todo.js')}}"></script>
      <!-- Custom js -->
      <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/script.js')}}"></script>
      <script type="text/javascript " src="{{ asset('assets/js/SmoothScroll.js')}}"></script>
      <script src="{{ asset('assets/js/pcoded.min.js')}}"></script>
      <script src="{{ asset('assets/js/demo-12.js')}}"></script>
      <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script>
        var $window = $(window);
  var nav = $('.fixed-button');
      $window.scroll(function(){
          if ($window.scrollTop() >= 200) {
          nav.addClass('active');
      }
      else {
          nav.removeClass('active');
      }
  });
      </script>
</body>

</html>