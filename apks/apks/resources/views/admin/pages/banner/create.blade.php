@extends('admin.layouts.master')
@section('title','Create Slider')
@section('content')
<div class="content pt-5">
    
    <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300">
        <div class="row">
            <h3 class="mb-5">Create A New Slider</h3>
            <a href="{{ route('admin.banner-slider.index') }}" class="btn">Go Back</a>

            <form action="{{ route('admin.banner-slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip01"> Sub Heading</label> 
                    <input class="form-control" name="sub_heading" placeholder="Enter banner sub heading (optional)" id="validationTooltip01" required="">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip02"> Sub Heading</label> 
                    <input class="form-control" name="heading" placeholder="Enter banner  heading" id="validationTooltip02" required="">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label"> Image</label> 
                    <input type="file" class="form-control" required name="image">
                </div>
                <button type="submit" class="btn btn-success mt-5">Add New Slider</button>
            </form>
        </div>
    </div>

    
  @endsection
  @section('footer_script')
  @error('heading')
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