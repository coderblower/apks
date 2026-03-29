@extends('admin.layouts.master')
@section('title','About Page Content')
@section('content')
<div class="content pt-5">
    
    <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300">
        <div class="row">
            <h3 class="mb-5">About Page Content</h3>

            <form action="{{ route('admin.about.store', $getContent->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip01">Page Heading</label> 
                    <input class="form-control" value="{{ $getContent->page_heading }}" name="heading" placeholder="Enter heading (optional)" id="validationTooltip01" required="">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label"> Image</label> 
                    <input type="file" class="form-control"  name="image">
                    @if($getContent->about_image)
                        <img style="height: 200px;width: 350px;object-fit:cover;margin-top: 5px" src="{{ asset('apks/public/uploads/about/'.$getContent->about_image) }}" alt="">
                    @else 
                    @endif
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="inp_editor1"> About Details</label> 
                    <textarea name="article" id="inp_editor1"  required class="form-control" cols="30" rows="10">{{ $getContent->about_content }}</textarea>
                </div>
                <button type="submit" class="btn btn-success mt-5">Update</button>
            </form>
        </div>
    </div>

    
  @endsection
  @section('footer_script')
  @error('article')
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

  <script>
       var editor1 = new RichTextEditor("#inp_editor1"); 
  </script>
@endsection