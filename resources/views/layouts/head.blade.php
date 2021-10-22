<!-- Title -->
@if(isset($title))
  <title> @yield('title', $title) </title>
@else
  <title> @yield('title', '') </title>
@endif
<link rel="icon" href="{{asset($settings->company_logo)}}" type="image/x-icon"/>
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" >
<link href="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/sidemenu.css')}}">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@yield('css')
