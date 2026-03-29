@extends('master')
@section('title', 'Photo Gallery')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Gallery</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                @if($photos->count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="img-gallery-magnific">
                            @foreach ($photos as $photo)
                                
                            
                            <div class="magnific-img">
                                <a class="image-popup-vertical-fit" href="{{ asset('apks/public/uploads/gallery/photo/'.$photo->photo) }}" title="gallery img">
                                    <img src="{{ asset('apks/public/uploads/gallery/photo/'.$photo->photo) }}" alt="gallery Image" />
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>


                <div class="theme-pagination mt-5">
                    {{ $photos->links('vendor.pagination.custom')}}
                </div>
                @else 
                    <p>No Photo Available</p>
                @endif
            </div>
        </section>
        <!-- About us end-->
    </main>
@endsection