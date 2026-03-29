@extends('master')
@section('title', 'Advisory Board Member')
@section('content')
    
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Advisory Board</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Advisory Board</li>
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
                @if($getAdvisor->count() > 0)
                <div class="row">
                    @foreach ($getAdvisor as $advisor)
                        
                   
                    <!-- Team Column One -->
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-wrap mb-4 text-center">
                            <div class="img green">
                                <div class="social-icons">
                                    @if($advisor->member_facebook)
                                    <a href="{{ $advisor->member_facebook }}"><i class="icofont-facebook"></i></a>
                                    @endif
                                    @if($advisor->member_twitter)
                                    <a href="{{ $advisor->member_twitter }}"><i class="icofont-twitter"></i></a>
                                    @endif
                                    @if($advisor->member_facebook)
                                    <a href="{{ $advisor->member_instagram }}"><i class="icofont-instagram"></i></a>
                                    @endif
                                </div>
                                <img src="{{ asset('apks/public/uploads/team/'.$advisor->member_photo) }}" alt="team member">
                            </div>
                            <h4>{{ $advisor->member_name }}</h4>
                            <h5>{{ $advisor->member_designation }}</h5>
                        </div>
                    </div>
                    <!-- Team Column One -->
                    @endforeach
                   
{{--                
                    
                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium --> --}}

                 
                </div>

                <div class="theme-pagination mt-5">
                    {{ $getAdvisor->links('vendor.pagination.custom')}}
                </div>
                @else 
                <p>No One Found!</p>
            @endif
            </div>
        </section>
        <!-- Advisory board-->

    </main>
@endsection