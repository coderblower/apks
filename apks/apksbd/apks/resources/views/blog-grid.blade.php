@extends('master')
@section('title', 'Blog')
@section('content')

    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Blog</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Blog Post Start -->
        <section class="wide-tb-100">
            <div class="container">
                @if($blogs->count() > 0)
                <div class="row">
                    @foreach ($blogs as $blog)
                        
                   
                    <!-- Blog Wrap -->
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-0">
                        <div class="post-wrap">
                            <div class="post-img">
                                <a href="{{ route('blog.show', $blog->slug) }}"><img src="{{ asset('apks/public/uploads/blog/thumbnails/'.$blog->thumbnail) }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <div class="post-date">{{ date('d, M, Y', strtotime($blog->created_at)) }}</div>
                                <h3 class="post-title"><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                <div class="text-md-right">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="read-more-line"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Wrap -->
                    @endforeach


                </div>

                <div class="theme-pagination">
                    {{ $blogs->links('vendor.pagination.custom')}}
                </div>
                @else   
                    <p>No Post Found!</p>
                @endif 
            </div>
        </section>
        <!-- Blog Post End -->

    </main>

  @endsection