@extends('master')
@section('title','Official Member')
@section('content')

<!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Officials</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Officials</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Advisory board -->
        <section class="wide-tb-100">
            <div class="container">
                @if($getofficials->count() > 0)
                <div class="row">
                    <!-- Team Column One -->
                    @foreach ($getofficials as $official)
                        
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-wrap mb-4 text-center">
                            <div class="img green">
                                <div class="social-icons">
                                    @if($official->member_facebook)
                                    <a href="{{ $official->member_facebook }}"><i class="icofont-facebook"></i></a>
                                    @endif
                                    @if($official->member_twitter)
                                    <a href="{{ $official->member_twitter }}"><i class="icofont-twitter"></i></a>
                                    @endif
                                    @if($official->member_facebook)
                                    <a href="{{ $official->member_instagram }}"><i class="icofont-instagram"></i></a>
                                    @endif
                                </div>
                                <img src="{{ asset('apks/public/uploads/team/'.$official->member_photo) }}" alt="team member">
                            </div>
                            <h4>{{ $official->member_name }}</h4>
                            <h5>{{ $official->member_designation }}</h5>
                        </div>
                    </div>
                    @endforeach
                    <!-- Team Column One -->
                   
                </div>

                <div class="theme-pagination mt-5">
                    {{ $getofficials->links('vendor.pagination.custom')}}
                </div>
                
                @else 
                    <p>No one Found!</p>
                @endif
            </div>
        </section>
        <!-- Advisory board-->

    </main>
@endsection