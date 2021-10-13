@extends('layouts.app')
@section('css')
  <!--#-Internal Fileupload css-->
  <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
  @if(session('status'))
    <div
      class="
      alert
      alert-dismissible
      fade show
      afterSec
      @if(session('status')['code']==200)
        alert-success
      @else
        alert-danger
      @endif
        "
      role="alert">
      {{session('status')['msg']}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  @include('includes.setting_tabs')
@endsection
@section('js')
  <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
  <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
@endsection
