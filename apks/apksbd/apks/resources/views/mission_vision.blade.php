@extends('master')
@if($getData)
    @php
        $page_title =  $getData->page_heading;
    @endphp
@else 
    @php
        $page_title = 'Mission and Vision';
    @endphp
@endif
@section('title', $page_title)
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>{{ $page_title }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
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
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="sidebar-spacer">

                            <!-- about us=-->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <img src="{{ asset('apks/public/uploads/mv/'.$getData->mv_image) }}" alt="">
                                </div>

                                <div class="content-wrap-single">

                                  {!! $getData->mv_content !!}
                                </div>
                            </div>
                            <!-- about us-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us end-->

    </main>
@endsection