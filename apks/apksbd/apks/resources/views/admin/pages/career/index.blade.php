@extends('admin.layouts.master')
@section('title','Career Recruitement')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
            <h3>Recruitement  Management</h3>
           
                <form action="{{ route('admin.recruit.store', $getContent->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 position-relative">
                      <label class="form-label"> Recruite Image</label> 
                      <input type="file" class="form-control"  name="image">
                      @if($getContent->recruit_file)
                        <img style="width: 250px;height: 200px;object-fit:cover;margin-top: 5px;" src="{{ asset('apks/public/uploads/recruite/'.$getContent->recruit_file) }}" alt="">
                        @else 
                        @endif
                  </div>
                    <div class="col-md-12 position-relative">
                      <label class="form-label" for="inp_editor1"> Article</label> 
                      <textarea name="content" id="inp_editor1"  class="form-control" cols="30" rows="10">{{ $getContent->content }}</textarea>
                  </div>
                
                      <button type="submit" class="btn btn-success mt-5">Add</button>
                    
                </form>
        
        </div>
      </div>

  @endsection
  @section('footer_script')
  @error('package')
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