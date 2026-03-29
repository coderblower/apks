@extends('admin.layouts.master')
@section('title','Edit New Project')
@section('content')
<div class="content pt-5">
    
    <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300">
        <div class="row">
            <h3 class="mb-5">Edit Project</h3>
            <a href="{{ route('admin.project.index') }}" class="btn">Go Back</a>

            <form action="{{ route('admin.project.update',$project->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="projectCategory"> Category </label>
                    <select class="form-control" name="category_id" id="projectCategory" required>
                        <option value="">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $project->project_category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="validationTooltip01"> Title </label> 
                    <input class="form-control" value="{{ $project->project_title }}" name="title" placeholder="Title" id="validationTooltip01" required="">
                </div>
               
                <div class="col-md-12 position-relative">
                    <label class="form-label"> Image</label> 
                    <input type="file" class="form-control" name="image">
                    @if($project->project_logo)
                        <img src="{{ asset('apks/public/uploads/projects/'.$project->project_logo) }}" alt="" style="object-fit: cover;height: 200px;width: 350px;margin-top: 5px;">
                    @else
                    @endif
                </div>
                <div class="col-md-12 position-relative">
                    <label class="form-label" for="inp_editor1"> Details</label> 
                    <textarea name="content" id="inp_editor1"  required class="form-control" cols="30" rows="10">{{ $project->project_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success mt-5">Update</button>
            </form>
        </div>
    </div>

    
  @endsection
  @section('footer_script')
  @error('title')
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
@error('category_id')
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
