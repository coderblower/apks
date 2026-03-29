@extends('admin.layouts.master')
@section('title','Edit Team Member')
@section('content')
<div class="content pt-5">
    
    <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300">
        <div class="row">
            <h3 class="mb-5">Edit Team Member</h3>
            <a href="{{ route('admin.team.index') }}" class="btn">Go Back</a>

            <form action="{{ route('admin.team.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip01"> Member name *</label> 
                    <input class="form-control" value="{{ $member->member_name }}" name="name" placeholder="Enter Full Name" id="validationTooltip01" required="">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip02"> Deignation *</label> 
                    <input class="form-control" value="{{ $member->member_designation }}" name="designation" placeholder="Enter Designation" id="validationTooltip02" required="">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip03"> Facebook Profile link</label> 
                    <input class="form-control" value="{{ $member->member_facebook }}" name="fb" placeholder="Facebook Profile URL" id="validationTooltip03" >
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip05"> Twitter Profile Link</label> 
                    <input class="form-control" value="{{ $member->member_twitter }}" name="twitter" placeholder="Enter Twitter Profile Link" id="validationTooltip05" >
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip06"> Instagram Profile Link</label> 
                    <input class="form-control" value="{{ $member->member_instagram }}" name="instagram" placeholder="Enter Instagram Profile Link" id="validationTooltip06">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip06"> Member Type *</label> 
                    <select name="type" class="form-control">
                        <option value="">-- Select Type --</option>
                        <option {{ ($member->member_board_access == 'advisor'? 'selected':'') }} value="advisor">Advisor</option>
                        <option {{ ($member->member_board_access == 'executive'? 'selected':'') }} value="executive">Executive</option>
                        <option {{ ($member->member_board_access == 'official'? 'selected':'') }} value="official">Official</option>
                    </select>
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label"> Image *</label> 
                    <input type="file" class="form-control" name="image">
                    @if($member->member_photo)
                    <img src="{{ asset('apks/public/uploads/team/'.$member->member_photo) }}" alt="">
                    @else
                    @endif
                </div>
                <button type="submit" class="btn btn-success mt-5">Update</button>
            </form>
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
@error('image')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
@error('designation')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
@error('type')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
@if(Session::has('success'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  </script>
  @endif

  @if(Session::has('error'))
  <script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
    </script>
  @endif
{{-- 
  <script>
       var editor1 = new RichTextEditor("#inp_editor1"); 
  </script> --}}
@endsection