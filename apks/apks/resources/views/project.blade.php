@extends('master')
@section('title', 'Activity | Projects')
@section('content')
    <style>
        .project-list-card {
            position: relative;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
            margin-bottom: 28px;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .project-list-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 24px 55px rgba(15, 23, 42, 0.1);
            border-color: #cbd5e1;
        }
        .project-list-card .project-copy {
            padding: 34px;
        }
        .project-list-card h3 {
            margin-bottom: 14px;
        }
        .project-list-card p {
            margin-bottom: 18px;
            color: #475569;
        }
        .project-list-card .project-image-wrap {
            height: 100%;
            min-height: 260px;
        }
        .project-list-card .project-image-wrap img {
            width: 100%;
            height: 100%;
            min-height: 260px;
            object-fit: cover;
        }
        .project-meta {
            position: relative;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 14px;
            border-radius: 999px;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin-bottom: 16px;
            text-decoration: none;
        }
        .project-meta:hover {
            color: #1d4ed8;
            text-decoration: none;
            background: #dbeafe;
        }
        .project-link {
            color: inherit;
        }
        .project-link:hover {
            color: inherit;
            text-decoration: none;
        }
        .project-sidebar {
            position: sticky;
            top: 30px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
            padding: 24px;
        }
        .project-sidebar h4 {
            margin-bottom: 18px;
        }
        .project-sidebar-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .project-sidebar-list li + li {
            margin-top: 10px;
        }
        .project-sidebar-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 12px;
            background: #f8fafc;
            color: #0f172a;
            text-decoration: none;
            transition: background 0.2s ease, color 0.2s ease;
        }
        .project-sidebar-link:hover {
            background: #eff6ff;
            color: #1d4ed8;
            text-decoration: none;
        }
        .project-sidebar-link span:last-child {
            min-width: 28px;
            height: 28px;
            border-radius: 999px;
            background: #e2e8f0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
        }
        .project-sidebar-action {
            margin-bottom: 14px;
        }
        .project-sidebar-action .project-sidebar-link {
            background: #eaf3ff;
            color: #1d4ed8;
            font-weight: 700;
        }
        @media (max-width: 991px) {
            .project-list-card .project-copy {
                padding: 24px;
            }
            .project-sidebar {
                position: static;
                margin-bottom: 24px;
            }
        }
    </style>
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Projects</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <main id="body-content">
        <section class="wide-tb-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 col-xl-9">
                        @if($getProjects->count() > 0)
                            <div class="row">
                                @foreach ($getProjects as $project)
                                    @php
                                        $projectImage = $project->project_logo
                                            ? asset('apks/public/uploads/projects/'.$project->project_logo)
                                            : asset('assets/images/causes/featured_cause.jpg');
                                        $projectExcerpt = \Illuminate\Support\Str::limit(trim(strip_tags($project->project_description)), 260);
                                    @endphp
                                    <div class="col-12 col-lg-6">
                                        <div class="project-list-card">
                                            <div class="row g-0 align-items-stretch">
                                                <div class="col-xl-7 order-2 order-xl-1">
                                                    <div class="project-copy">
                                                        @if($project->category)
                                                            <a href="{{ route('activity.project.category', $project->category->category_slug) }}" class="project-meta">{{ $project->category->category_name }}</a>
                                                        @else
                                                            <span class="project-meta">Uncategorized</span>
                                                        @endif
                                                        <h3><a href="{{ route('activity.project.show', $project->project_slug) }}" class="stretched-link project-link">{{ $project->project_title }}</a></h3>
                                                        <p>{{ $projectExcerpt }}</p>
                                                        <span class="read-more-line" style="font-size: 16px;"><span>View Project Details</span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 order-1 order-xl-2">
                                                    <div class="project-image-wrap">
                                                        <img src="{{ $projectImage }}" class="img-responsive" alt="{{ $project->project_title }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="theme-pagination mt-5">
                                {{ $getProjects->links('vendor.pagination.custom')}}
                            </div>
                        @else
                            <p>No projects found.</p>
                        @endif
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <aside class="project-sidebar">
                            <div class="project-sidebar-action">
                                <a href="{{ route('activity.project.categories') }}" class="project-sidebar-link">
                                    <span>All Categories</span>
                                    <span>{{ $categories->count() }}</span>
                                </a>
                            </div>
                            <h4>Project Categories</h4>
                            <ul class="project-sidebar-list">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activity.project.category', $category->category_slug) }}" class="project-sidebar-link">
                                            <span>{{ $category->category_name }}</span>
                                            <span>{{ $category->projects_count }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
