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

  <div class="main-content app-content">
    @if (Auth::check())
      @include('layouts.main-header') <!-- header -->
      @include('layouts.main-sidebar') <!-- sidebar -->
    @endif
<!-- container -->
  <div class="container-fluid">
    <br>
    <!-- main-content -->
    @if(session('status'))
      @include('includes.alert')
    @endif;
  @yield('content')
  <!-- end main-content -->
  </div>
  @include('layouts.footer')

  @include('layouts.footer-scripts')
</body>
</html>
