@extends('admin.layouts.master')
@section('title','Profile Management')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
            <h3>Profile</h3>
            <div class="col-md-4">
              
                <form action="{{ route('admin.profile.update', Auth::user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for="validationTooltip01"> Name </label> 
                        <input type="text" placeholder="Name" value="{{ Auth::user()->name }}" name="name" class="form-control" required>

                        <label class="form-label" for="validationTooltip0"> Email </label> 
                        <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
                        
                        <label class="form-label" for="validationTooltip01"> Current Password </label> 
                        <input type="password" placeholder="Current Password" name="current_password"class="form-control" >

                        <label class="form-label" for="validationTooltip01"> New Password </label> 
                        <input type="password" placeholder="New Password" name="new_password" class="form-control" >

                        <label class="form-label" for="validationTooltip01"> Confirm New Password </label> 
                        <input type="password" placeholder="Confirm New Password" name="con_password" class="form-control" >
                        <button type="submit" class="btn btn-success mt-5">Save</button>
                    </div>
                </form>
               
            </div>
           
        </div>
      </div>

  @endsection
  @section('footer_script')
  @error('name')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
  @error('email')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
@if(Session::has('pass_changed'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('pass_changed') }}");
  </script>
  @endif
@if(Session::has('updated'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('updated') }}");
  </script>
  @endif

  @if(Session::has('both_pass_not_macth'))
  <script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('both_pass_not_macth') }}");
    </script>
  @endif

  @if(Session::has('current_password_not_match'))
  <script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('current_password_not_match') }}");
    </script>
  @endif
  <script>
    var editor1 = new RichTextEditor("#inp_editor1"); 
</script>
@endsection