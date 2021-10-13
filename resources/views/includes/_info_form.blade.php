<div class="row row-sm">
  <!-- Col -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form action="{{route('company.saveInfo')}}" enctype="multipart/form-data" method="POST" class="form-horizontal">
          @csrf
          <div class="mb-4 main-content-label">Company Name</div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Company Name</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control @error('comp_name') is-invalid @enderror"
                  name="comp_name" placeholder="Company Name"
                  value="@if(old('comp_name')){{old('comp_name')}}@else{{$settings->company_name}}@endif"
                >
                @error('comp_name')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Nice name</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control @error('comp_sh_name') is-invalid @enderror"
                  name="comp_sh_name"
                  placeholder="Nice name"
                  value="@if(old('comp_sh_name')){{old('comp_sh_name')}}@else{{$settings->company_nice_name}}@endif"
                >
                @error('comp_sh_name')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="mb-4 main-content-label">Contact Info</div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Email</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control @error('comp_email') is-invalid @enderror"
                  name="comp_email"
                  placeholder="Email"
                  value="@if(old('comp_email')){{old('comp_email')}}@else{{$settings->email}}@endif"
                >
                @error('comp_email')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Website</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control @error('comp_web') is-invalid @enderror"
                  name="comp_web"
                  placeholder="Website"
                  value="@if(old('comp_web')){{old('comp_web')}}@else{{$settings->website}}@endif"
                >
                @error('comp_web')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Phone</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control @error('comp_phone_1') is-invalid @enderror"
                  name="comp_phone_1"
                  placeholder="Phone Number"
                  value="@if(old('comp_phone_1')){{old('comp_phone_1')}}@else{{$settings->phones}}@endif"
                >
                @error('comp_phone_1')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Address</label>
              </div>
              <div class="col-md-9">
                <textarea style="resize: none" class="form-control" name="comp_addr" rows="1"  placeholder="Address">{{$settings->address}}</textarea>
              </div>
            </div>
          </div>
          <div class="mb-4 main-content-label">Social Info</div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Twitter</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control"
                  name="comp_twitter"
                  placeholder="twitter"
                  value="{{$settings->twitter}}"
                >
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Facebook</label>
              </div>
              <div class="col-md-9">
                <input
                  type="text"
                  class="form-control"
                  name="comp_facebook"
                  placeholder="facebook"
                  value="{{$settings->facebook}}">
              </div>
            </div>
          </div>
          <div class="mb-4 main-content-label">Logo</div>
          <div class="form-group ">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Company Logo</label>
              </div>
              <div class="col-md-2">
                <input
                  type="file"
                  name="comp_logo"
                  class="dropify @error('comp_logo') is-invalid @enderror"
                  data-default-file="{{asset($settings->company_logo)}}"
                  data-height="80"  />
              </div>
              @error('comp_logo')
                <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Information</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Col -->
</div>
