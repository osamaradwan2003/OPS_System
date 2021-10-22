@extends('layouts.app')
@section('css')

  <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
  @include('includes.widgets.setting_tabs')
@endsection
@section('js')
  <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
  <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
@endsection
