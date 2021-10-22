<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.head')
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body class="main-body app sidebar-mini sidenav-toggled">
  <!-- Loader -->
  <div id="global-loader">
    <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
  </div>
  <!-- /Loader -->
  <div class="page is-expanded">
  @if (Auth::check())
    @include('layouts.main-sidebar')
    <!-- sidebar -->
  @endif
  <!-- main-content -->
    <div class="main-content app-content">
    @if(Auth::check())
      <!-- header -->
        @include('layouts.main-header')
      @endif
      <div class="jumps-prevent"></div>
      <!-- container -->
      <div class="container-fluid">
        <br>
        @if(session('status'))
          @include('includes.widgets.alert')
        @endif
        @yield('content')
        @include('layouts.footer')
      </div>
    </div>
  </div>
  <!-- end main-content -->
  @include('layouts.footer-scripts')
</body>
</html>
