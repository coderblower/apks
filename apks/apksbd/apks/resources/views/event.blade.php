@extends('master')
@section('title', 'Activity | Events')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>events</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">events</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- event Alternate Style Start -->
        <section class="wide-tb-100">
            <div class="container">
                @if($events->count() > 0)
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-sm-1">
                    @foreach ($events as $event)
                   
                    <div class="col mb-4">
                        <div class="programme-div">
                            <div class="programme-logo">
                                <img src="{{ asset('apks/public/uploads/events/'.$event->event_logo) }}" class="img-responsive" alt="eventme logo">
                            </div>
                            <div class="eventme-title">
                                <h3>{{ $event->event_title }}</h3>
                            </div>
                            <div class="text-md-right p-3">
                                <a href="{{ route('activity.event.show', $event->event_slug) }}" class="read-more-line" style="font-size: 16px;"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="theme-pagination mt-5">
                    {{ $events->links('vendor.pagination.custom')}}
                </div>
                @else 
                    <p>No events Found</p>
                @endif
            </div>
        </section>
        <!-- eventme Alternate Style Start -->
    </main>

@endsection