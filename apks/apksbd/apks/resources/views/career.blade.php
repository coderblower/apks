@extends('master')
@section('title','Career')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Career</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Career</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">
        <!-- career start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mx-auto">
                        <div class="sidebar-spacer">
                            <!-- about us=-->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    @if($data->recruit_file)
                                    <img src="{{ asset('apks/public/uploads/recruite/'.$data->recruit_file) }}" alt="job Requirements">
                                    @else 
                                    @endif
                                </div>

                                <div class="content-wrap-single">

                                    {!! $data->content !!}

                                </div>
                            </div>
                            <!-- about us-->
                        </div>

                        <div class="apply">
                            @if(session()->has('success'))
                                <div class="alert alert-success">{{ session()->get('success') }}</div>
                            @endif
                            @if(session()->has('error'))
                            <div class="alert alert-danger">{{ session()->get('error') }}</div>
                        @endif
                            <form action="{{ route('resume.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- upload:start -->
                                <div class="upload">
                                    <h3>Apply Now</h3>
                                    <input id="upload" type="file" name="image">
                                    <label for="upload" data-input-value="" data-select-text="Select file" data-remove-text="Remove file" data-drag-text="Drag file here..."></label>
                                    @error('image') <span class="text-danger mt-2">{{ $message }}</span>@enderror
                                </div>
                                <!-- upload:end -->
                                <button type="submit" class="btn btn-default mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- career end-->
    </main>

   @endsection