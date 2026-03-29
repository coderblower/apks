@extends('master')
@section('title', $pageTitle)
@section('content')
    <style>
        .org-summary-layout {
            display: grid;
            grid-template-columns: 280px minmax(0, 1fr);
            gap: 28px;
            align-items: start;
        }
        .org-summary-sidebar {
            position: sticky;
            top: 30px;
        }
        .org-summary-sidebar-card {
            background: linear-gradient(180deg, #f7fbf7 0%, #ffffff 100%);
            border: 1px solid #dfeee0;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.05);
        }
        .org-summary-sidebar-card h4 {
            margin-bottom: 16px;
        }
        .org-summary-nav {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 0;
        }
        .org-summary-nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 14px;
            background: #f8fafc;
            color: #0f172a;
            font-weight: 600;
            text-decoration: none;
        }
        .org-summary-nav a:hover {
            background: #ebf5eb;
            text-decoration: none;
        }
        .org-summary-nav-index {
            width: 28px;
            height: 28px;
            border-radius: 999px;
            background: #dcefdc;
            color: #2f6b35;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 800;
            flex: 0 0 28px;
        }
        .org-summary-lead {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 230px;
            gap: 20px;
            align-items: stretch;
            margin-bottom: 26px;
        }
        .org-summary-lead-card {
            background: linear-gradient(135deg, #0f2f33 0%, #1f5b42 100%);
            color: #fff;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 22px 50px rgba(15, 23, 42, 0.14);
        }
        .org-summary-lead-card h2 {
            color: #fff;
            margin-bottom: 12px;
        }
        .org-summary-lead-card p {
            color: rgba(255, 255, 255, 0.86);
            margin-bottom: 0;
        }
        .org-summary-focus {
            background: linear-gradient(180deg, #f5fbf1 0%, #ffffff 100%);
            border: 1px solid #dfeee0;
            border-radius: 20px;
            padding: 24px;
        }
        .org-summary-focus h5 {
            margin-bottom: 16px;
            color: #2f6b35;
        }
        .org-summary-focus ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .org-summary-focus li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            color: #334155;
        }
        .org-summary-focus li::before {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 999px;
            background: #65a30d;
            flex: 0 0 10px;
        }
        .org-summary-section {
            padding: 32px;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.04);
            margin-bottom: 22px;
            position: relative;
            overflow: hidden;
        }
        .org-summary-section:first-child {
            padding-top: 32px;
        }
        .org-summary-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #9dd59f 0%, #dcefdc 100%);
        }
        .org-summary-section-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
        }
        .org-summary-section-number {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: #eaf5ea;
            color: #2f6b35;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 800;
            flex: 0 0 42px;
        }
        .org-summary-section h3 {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: 0;
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
        .org-summary-hero-caption {
            margin-top: 16px;
            padding: 18px 20px;
            background: #f8fafc;
            border-left: 4px solid #9dd59f;
            border-radius: 14px;
            color: #475569;
        }
        @media (max-width: 991px) {
            .org-summary-layout {
                grid-template-columns: 1fr;
            }
            .org-summary-sidebar {
                position: static;
            }
            .org-summary-lead {
                grid-template-columns: 1fr;
            }
            .org-summary-nav {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        @media (max-width: 767px) {
            .org-summary-nav {
                grid-template-columns: 1fr;
            }
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
                <div class="org-summary-layout">
                    @if($showStructuredNavigation)
                        <aside class="org-summary-sidebar">
                            <div class="org-summary-sidebar-card">
                                <h4>Summary Sections</h4>
                                <div class="org-summary-nav">
                                    @foreach ($sections as $section)
                                        <a href="#{{ $section['id'] }}">
                                            <span class="org-summary-nav-index">{{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}</span>
                                            <span>{{ $section['title'] }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    @endif
                    <div class="sidebar-spacer">
                        <div class="causes-wrap single">
                            <div class="org-summary-hero">
                                <img src="{{ $heroImage }}" alt="{{ $pageTitle }}">
                            </div>
                            <div class="org-summary-lead">
                                <div class="org-summary-lead-card">
                                    <h2>{{ $pageTitle }}</h2>
                                    <p>Introduction, Background, Vision & Mission, Motivation, Approach, Goals, Objectives, Target Group, Core Values, and Areas of Intervention are presented below in a structured APKS overview.</p>
                                </div>
                                <div class="org-summary-focus">
                                    <h5>Particular Focus</h5>
                                    <ul>
                                        <li>Women and children</li>
                                        <li>Youth and adolescents</li>
                                        <li>Ethnic communities</li>
                                        <li>Disaster-affected people</li>
                                        <li>Migrants and refugees</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="org-summary-hero-caption">
                                APKS works for community-led, need-driven development with a strong commitment to dignity, equality, sustainability, and human rights.
                            </div>

                            <div class="content-wrap-single mt-4">
                                @if($showStructuredNavigation)
                                    @foreach ($sections as $section)
                                        <section id="{{ $section['id'] }}" class="org-summary-section">
                                            <div class="org-summary-section-head">
                                                <span class="org-summary-section-number">{{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}</span>
                                                <h3>{{ $section['title'] }}</h3>
                                            </div>
                                            {!! $section['content'] !!}
                                        </section>
                                    @endforeach
                                @else
                                    {!! $contentHtml !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us end-->

    </main>

 @endsection
