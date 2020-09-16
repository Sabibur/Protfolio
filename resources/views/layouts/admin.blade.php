<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SR Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">

          <a class="app-header__logo" href="{{ url('/') }}">
              Home
          </a>
          <!-- Sidebar toggle button-->
          <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
          <!-- Navbar Right Menu-->


          <ul class="app-nav">
          <!-- User Menu-->
          <li class="dropdown">
          @guest

                  <a class="app-nav__item " href="{{ route('login') }}">{{ __('Login') }}</a>
              {{-- @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif --}}
          @else

                      <a class="app-nav__item btn btn-danger btn-lg my-1" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><i class="icon fa fa-sign-out"></i>
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
          @endguest
        </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('assets/images/avatar.jpg') }}" alt="User Image" width="60">
        <div>
          <p class="app-sidebar__user-name">Sabibur Rahman</p>
          <p class="app-sidebar__user-designation">Backend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('/home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item" href="{{ url('/header') }}"><i class="app-menu__icon fa fa-h-square"></i><span class="app-menu__label">Header</span></a></li>

        <li><a class="app-menu__item" href="{{ url('/about') }}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">About</span></a></li>

        <li><a class="app-menu__item" href="{{ url('/education')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Education</span></a></li>

        <li><a class="app-menu__item" href="{{ url('/employment')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Employment</span></a></li>

        <li><a class="app-menu__item" href="{{ url('/skill')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Skills</span></a></li>

        <li><a class="app-menu__item" href="{{ url('/protfolio/view')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Protfolio</span></a></li>
     
        <li><a class="app-menu__item" href="{{ url('/social/view')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Social</span></a></li>

        <li><a class="app-menu__item" href="{{ url('message')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Messages</span></a></li>






      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Developed by Sabibur Rahman</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>

      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('admin/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/main.js')}}"></script>
  </body>
</html>
