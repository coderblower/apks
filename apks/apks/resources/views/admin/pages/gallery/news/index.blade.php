@extends('admin.layouts.master')
@section('title','News ')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
            <h3>News </h3>
            <div class="col-md-4">
                <form action="{{ route('admin.news.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for=""> Publishing Date </label> 
                        <input type="date" name="publishing_date" class="form-control">
                        <label class="form-label" for=""> News Paper Name  </label> 
                        <input type="text" name="newspaper" placeholder="News Paper name" class="form-control">
                        <label class="form-label" for=""> News Title  </label> 
                        <input type="text" name="title" placeholder="News  Title" class="form-control">
                        {{-- <label class="form-label" for="validationTooltip01"> Video Thumbnail </label> 
                        <input type="file" name="image" class="form-control"> --}}

                        <label class="form-label"> News Portal Link </label> 
                        <input type="url" placeholder="Enter URL" name="portal_link" class="form-control">
                        <button type="submit" class="btn btn-success mt-5">Add</button>
                    </div>
                </form>
               
            </div>
            <div class="col-md-8">

            </div>
        </div>
        @if($allnews->count() > 0)
        <div class="row mt-4">
            
           @foreach ($allnews as $news)
            
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ asset('apks/public/uploads/gallery/video/'.$news->photo) }}" class="card-img-top" alt=""> --}}
                    <div class="card-body">
                    <h2>{{ $news->name_of_newspaper }}</h2>
                      <h5 class="card-title"><a href="{{ $news->portal_link }}">{{ $news->title }}</a></h5>
                      <p class="card-text">{{ date('d M Y', strtotime($news->publishing_date)) }}</p>
                      <a onclick="return confirm('Are You Sure?')" href="{{ route('admin.gallery.news.delete', $news->id) }}" class="btn btn-danger btn-sm">Delete</a>
                      @if($news->status == 1)
                      <a href="{{ route('admin.gallery.news.status', $news->id) }}" class="btn btn-info btn-sm">Visible</a>
                      @else 
                      <a href="{{ route('admin.gallery.news.status', $news->id) }}" class="btn btn-warning btn-sm">Invisible</a>
                    @endif
                    </div>
                  </div>
            </div>
            @endforeach
            {{ $allnews->links() }}
        </div>

        @else 
            <p class="mt-5">No News available</p>
        @endif
      </div>

  @endsection
  @section('footer_script')
  @error('newspaper')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
  @error('publishing_date')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
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
@error('portal_link')
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