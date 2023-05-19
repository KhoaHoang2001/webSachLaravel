<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('backend/assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('backend/assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('backend/assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('backend/assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('backend/assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('backend/assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('backend/assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('backend/assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('backend/assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('backend/assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/favicon/favicon-16x16.png')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    


    <link rel="stylesheet" href="{{asset('frontend/css/sell.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/detailPayment.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/historyOrder.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/signInSignUp.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/accountInfo.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />   --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">




    
    <link rel="manifest" href="{{asset('backend/assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('backend/assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
  
    <link rel="stylesheet" href="{{asset('backend/vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/vendors/simplebar.css')}}">
   

    <!-- Main styles for this application-->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{asset('backend/css/examples.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <link href= "{{asset('backend/css/toastr.css')}}" rel="stylesheet">
    <script src="{{asset('backend/js/toastr.min.js')}}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{asset('backend/vendors/@coreui/chartjs/css/coreui-chartjs.css')}}" rel="stylesheet">

  </head>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <body>
    <!-- thuong hieu -->
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <img width="90px" src="{{asset('backend/assets/img/logo2.png')}}" alt="">
      </div>

      <!-- Thanh menu bên trái -->
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/viewdashboard')}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
            </svg> Dashboard</a></li>
        
        <li class="nav-title">Quản lý</li>

        <!-- Quản lý user -->
        {{-- Dùng table admin để chứa các tài khoản vào trang admin --}}
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-star')}}"></use>
          </svg>Quản lý nhân viên</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/all-user')}}"><span class="nav-icon"></span>Danh sách nhân viên</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/add-user')}}"><span class="nav-icon"></span>Thêm nhân viên</a></li>
          </ul>
        </li>

        <!-- Quản lý sản phẩm -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-book')}}"></use>
            </svg> Quản lý sản phẩm</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/all-product')}}"><span class="nav-icon"></span>Danh sách sản phẩm</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/add-product')}}"><span class="nav-icon"></span>Thêm sản phẩm</a></li>
          </ul>
        </li>
        <!-- Quản lý NXB -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-tags')}}"></use>
            </svg>Quản lý NXB</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/all-brand')}}"><span class="nav-icon"></span>Danh sách NXB</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/add-brand')}}"><span class="nav-icon"></span>Thêm NXB</a></li>
          </ul>
        </li>

        <!-- Quản lý danh mục -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-cursor')}}"></use>
            </svg>Quản lý danh mục</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/all-category')}}"><span class="nav-icon"></span>Danh sách danh mục</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/add-category')}}"><span class="nav-icon"></span>Thêm danh mục</a></li>
          </ul>
        </li>
        
            <!--Quản lý khách hàng -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
            </svg>Quản lý khách hàng</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/all-customer')}}"><span class="nav-icon"></span>Danh sách khách hàng</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/add-customer')}}"><span class="nav-icon"></span>Thêm khách hàng</a></li>
          </ul>
        </li>

        <!-- Quản lý đơn hàng -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-cart')}}"></use>
            </svg>Quản lý đơn hàng</a>
          <ul class="nav-group-items"> 
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/all-order')}}"><span class="nav-icon"></span>Danh sách đơn hàng</a></li>     
          </ul>
        </li>
      </ul>
      
    </div>


    <!-- Content bên phải -->
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <!-- header -->
        <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            
         

          <!-- drop down user menu -->
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{-- <div class="avatar avatar-md">tên nhân viên</div> --}}
                <div class="avatar avatar-md">{{ auth('admin')->user()->admin_name }}</div>

              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div>
                
                
                <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  
                  <svg class="icon me-2">
                    <use xlink:href="{{('backend/vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}"></use>
                  </svg> Logout</a>
                  <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
              </div>
            </li>
          </ul>
        </div>


        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              {{-- <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li> --}}
            </ol>
          </nav>
        </div>
        </header>


      <!-- Body content -->
      @yield('admin_content')
      
           
       
    
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('backend/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{asset('backend/vendors/simplebar/js/simplebar.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('backend/vendors/chart.js/js/chart.min.js')}}"></script>
    <script src="{{asset('backend/vendors/@coreui/chartjs/js/coreui-chartjs.js')}}"></script>
    <script src="{{asset('backend/vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('frontend/js/Validator.js')}}"></script>
        
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{('frontend/js/bootstrap.min.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    </script>
    {!! Toastr::message() !!}
    @include('sweetalert::alert')
  </body>
</html>