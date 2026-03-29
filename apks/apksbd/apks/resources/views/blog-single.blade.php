@extends('master')
@php
    $title = $blog->title;
@endphp
@section('title', 'Blog'.$title )
@section('content')

    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>{{ $title }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Blog Post Single Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="sidebar-spacer">
                            <div class="d-flex">
                                <div class="post-date txt-blue">{{ date('d, M, Y', strtotime($blog->created_at)) }}</div>
                            </div>
                            <h1 class="heading-main">
                                {{ $blog->title }}
                            </h1>

                            <!-- Causes Single Wrap -->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <img src="{{ asset('apks/public/uploads/blog/thumbnails/'.$blog->thumbnail) }}" alt="">
                                </div>

                                <div class="content-wrap-single">
                                    {!! $blog->article !!}
                                </div>
                            </div>
                            <!-- Causes Single Wrap -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Post Single End -->
    </main>
@endsection