@extends('master')
@section('title', 'Executive Member')
@section('content')

    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Executive Board</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Executive Board</li>
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
                @if($getexecutor->count() > 0)
                <div class="row">
                    <!-- Team Column One -->
                    @foreach ($getexecutor as $ex)
                        
                   
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-wrap mb-4 text-center">
                            <div class="img green">
                                <div class="social-icons">
                                    @if($ex->member_facebook)
                                    <a href="{{ $ex->member_facebook }}"><i class="icofont-facebook"></i></a>
                                    @endif
                                    @if($ex->member_twitter)
                                    <a href="{{ $ex->member_twitter }}"><i class="icofont-twitter"></i></a>
                                    @endif
                                    @if($ex->member_facebook)
                                    <a href="{{ $ex->member_instagram }}"><i class="icofont-instagram"></i></a>
                                    @endif
                                </div>
                                <img src="{{ asset('apks/public/uploads/team/'.$ex->member_photo) }}" alt="team member">
                            </div>
                            <h4>{{ $ex->member_name }}</h4>
                            <h5>{{ $ex->member_designation }}</h5>
                        </div>
                    </div>
                    @endforeach
                   
{{--                
                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium --> --}}

                </div>

                <div class="theme-pagination mt-5">
                    {{ $getexecutor->links('vendor.pagination.custom')}}
                </div>
            @else 
                <p>No One Found!</p>
            @endif
            </div>
        </section>
        <!-- Advisory board-->

    </main>
@endsection