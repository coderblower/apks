@extends('master')
@section('title','Gallery | Video')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Video</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Video</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">
        <!-- About us start -->
        <section class="wide-tb-100">
            <div class="container">
                @if($videos->count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="img-gallery-magnific">
                           @foreach ($videos as $video)
                               
                           
                            <div class="magnific-img">
                                <a class="magnific-vimeo" href="{{ $video->video }}" title="Sunset View From Up Above">
                                    <img src="{{ asset('apks/public/uploads/gallery/video/'.$video->photo) }}" alt="video thumbnail" />
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="theme-pagination mt-5">
                    {{ $videos->links('vendor.pagination.custom')}}
                </div>
            </div>
            @else
                <p>No Video available</p>
            @endif
        </section>
        <!-- About us end-->
    </main>

   @endsection