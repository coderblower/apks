@extends('master')
@section('title', 'Activity | Programs')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>programme</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">programme</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- programme Alternate Style Start -->
        <section class="wide-tb-100">
            <div class="container">
                @if($getProgrammes->count() > 0)
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-sm-1">
                    @foreach ($getProgrammes as $program)
                   
                    <div class="col mb-4">
                        <div class="programme-div">
                            <div class="programme-logo">
                                <img src="{{ asset('apks/public/uploads/programmes/'.$program->program_logo) }}" class="img-responsive" alt="programme logo">
                            </div>
                            <div class="programme-title">
                                <h3>{{ $program->program_title }}</h3>
                            </div>
                            <div class="text-md-right p-3">
                                <a href="{{ route('activity.programme.show', $program->program_slug) }}" class="read-more-line" style="font-size: 16px;"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="theme-pagination mt-5">
                    {{ $getProgrammes->links('vendor.pagination.custom')}}
                </div>
                @else 
                    <p>No Programme Found</p>
                @endif
            </div>
        </section>
        <!-- programme Alternate Style Start -->
    </main>

@endsection