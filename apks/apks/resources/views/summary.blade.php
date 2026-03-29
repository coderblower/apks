@extends('master')
@section('title', $pageTitle)
@section('content')
    <style>
        .org-summary-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }
        .org-summary-nav a {
            display: inline-flex;
            align-items: center;
            padding: 10px 16px;
            border-radius: 999px;
            background: #f5f7fb;
            color: #0f172a;
            font-weight: 600;
        }
        .org-summary-nav a:hover {
            background: #e4ecfb;
            text-decoration: none;
        }
        .org-summary-section {
            padding: 32px;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.04);
            margin-bottom: 22px;
        }
        .org-summary-section:first-child {
            padding-top: 32px;
        }
        .org-summary-section h3 {
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 2px solid #eaf2ea;
        }
        .org-summary-section h4 {
            margin-top: 18px;
            margin-bottom: 10px;
            color: #2f6b35;
        }
        .org-summary-section p {
            color: #334155;
            line-height: 1.8;
        }
        .org-summary-section ul {
            padding-left: 20px;
            margin-bottom: 0;
        }
        .org-summary-section li {
            margin-bottom: 10px;
            color: #334155;
        }
        .org-summary-hero {
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        .org-summary-hero img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }
        @media (max-width: 767px) {
            .org-summary-section {
                padding: 22px;
            }
        }
    </style>
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>{{ $pageTitle }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
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

                            <div class="causes-wrap single">
                                <div class="org-summary-hero">
                                    <img src="{{ $heroImage }}" alt="{{ $pageTitle }}">
                                </div>

                                <div class="content-wrap-single">
                                    @if($showStructuredNavigation)
                                        <div class="org-summary-nav">
                                            @foreach ($sections as $section)
                                                <a href="#{{ $section['id'] }}">{{ $section['title'] }}</a>
                                            @endforeach
                                        </div>
                                    @endif

                                    {!! $contentHtml !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us end-->

    </main>

 @endsection
