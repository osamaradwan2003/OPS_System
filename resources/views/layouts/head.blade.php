<!-- Title -->
@if(isset($title))
  <title> @yield('title', $title) </title>
@else
  <title> @yield('title', '') </title>
@endif
<!-- Favicon -->
<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Icons css -->
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" >
<!--  Custom Scroll bar-->
<link href="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
@yield('css')
<!-- Sidemenu css -->
<link rel="stylesheet" href="{{asset('assets/css/sidemenu.css')}}">
<!--- Style css -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!--- Dark-mode css -->
{{--<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">--}}
{{--<!---Skinmodes css-->--}}
{{--<link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet">--}}

