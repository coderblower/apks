@extends('master')
@php
    $title = $project->project_title;
    $projectImage = $project->project_logo
        ? asset('apks/public/uploads/projects/'.$project->project_logo)
        : asset('assets/images/causes/featured_cause_2.jpg');
@endphp
@section('title', 'Project | ' .$title)
@section('content')

    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>{{ $title }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('activity.project') }}">Project Categories</a></li>
                        @if($project->category)
                            <li class="breadcrumb-item"><a href="{{ route('activity.project.category', $project->category->category_slug) }}">{{ $project->category->category_name }}</a></li>
                        @endif
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
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
                                    <img src="{{ $projectImage }}" alt="{{ $title }}">
                                </div>

                                <div class="content-wrap-single">

                                   {!! $project->project_description !!}
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
