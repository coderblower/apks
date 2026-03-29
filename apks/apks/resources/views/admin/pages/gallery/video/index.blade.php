@extends('admin.layouts.master')
@section('title','Photo Gallery')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
            <h3>Photo Gallery</h3>
            <div class="col-md-4">
                <form action="{{ route('admin.gallery.video.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for="validationTooltip01"> Video Thumbnail </label> 
                        <input type="file" name="image" class="form-control">

                        <label class="form-label"> Video Link </label> 
                        <input type="url" placeholder="Enter Video URL" name="video_link" class="form-control">
                        <button type="submit" class="btn btn-success mt-5">Add</button>
                    </div>
                </form>
               
            </div>
            <div class="col-md-8">
            </div>
        </div>
        @if($videos->count() > 0)
        <div class="row mt-4">
            
           @foreach ($videos as $video)
            
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('apks/public/uploads/gallery/video/'.$video->photo) }}" class="card-img-top" alt="">
                    <div class="card-body">
                      {{-- <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      <a onclick="return confirm('Are You Sure?')" href="{{ route('admin.gallery.video.delete', $video->id) }}" class="btn btn-danger btn-sm">Delete</a>
                      @if($video->status == 1)
                      <a href="{{ route('admin.gallery.video.status', $video->id) }}" class="btn btn-info btn-sm">Visible</a>
                      @else 
                      <a href="{{ route('admin.gallery.video.status', $video->id) }}" class="btn btn-warning btn-sm">Invisible</a>
                    @endif
                    </div>
                  </div>
            </div>
            @endforeach

            {{ $videos->links() }}
        </div>

        @else 
            <p>No Photo available</p>
        @endif
      </div>

  @endsection
  @section('footer_script')
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
@error('video_link')
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
  {{-- <script>
    var editor1 = new RichTextEditor("#inp_editor1"); 
</script> --}}
@endsection