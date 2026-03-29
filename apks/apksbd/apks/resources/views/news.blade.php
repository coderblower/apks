@extends('master')
@section('title', 'News')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>News</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
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
                @if($newsData->count() > 0)
                <div class="row">
                    @foreach ($newsData as $news)
                        
                    
                    <div class="col-lg-4 col-md-6">
                        <figure class="news">
                            
                            <div class="image">
                                <img src="" alt="news image" />
                            </div>
                            <figcaption>
                                <div class="date"><span class="day">{{ $news->created_at->format('d') }}</span><span class="month">{{ $news->created_at->format('M') }}</span><span class="year">{{ $news->created_at->format('Y') }}</span></div>
                                <h3>{{ $news->name_of_newspaper }}</h3>
                                <p>
                                    {{ $news->title }}
                                </p>
                            </figcaption>
                            <a href="{{ $news->news_url }}" target="_blank"></a>
                        </figure>
                    </div>
                    @endforeach
                </div>

                <div class="theme-pagination mt-5">
                    {{ $newsData->links('vendor.pagination.custom')}}
                </div>
                @else 
                    <p>No News Available</p>
                @endif
            </div>
        </section>
        <!-- About us end-->
    </main>
@endsection