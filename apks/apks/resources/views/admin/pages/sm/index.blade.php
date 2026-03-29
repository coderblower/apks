@extends('admin.layouts.master')
@section('title','Organization Summery Page Content')
@section('content')
<div class="content pt-5">
    
    <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300">
        <div class="row">
            <h3 class="mb-5">Organization Summary Page Content</h3>
            <div class="col-md-12">
                <div class="alert alert-subtle-info border mb-4">
                    This page already has a public route at <strong>/organization-summery</strong> and is managed from this dashboard.
                    The public page now supports the requested APKS sections:
                    Introduction, Background, Motivation, Approach, Mission &amp; Vision, Goals, Objectives, Target Group, Core Values, Areas of Intervention, and Projects.
                </div>
            </div>

            <form action="{{ route('admin.sm.store', $getContent->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip01">Page Heading</label> 
                    <input class="form-control" value="{{ $getContent->page_heading }}" name="heading" placeholder="Enter heading (optional)" id="validationTooltip01" required="">
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label"> Image</label> 
                    <input type="file" class="form-control"  name="image">
                    @if($getContent->sm_image)
                        <img style="height: 200px;width: 350px;object-fit:cover;margin-top: 5px" src="{{ asset('apks/public/uploads/sm/'.$getContent->sm_image) }}" alt="">
                    @else 
                    @endif
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="inp_editor1"> Details</label> 
                    <textarea name="article" id="inp_editor1"  required class="form-control" cols="30" rows="10">{{ $getContent->sm_content }}</textarea>
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
