@extends('master')
@section('title', 'Activity | Project Categories')
@section('content')
    <style>
        .project-category-card {
            display: block;
            color: inherit;
            text-decoration: none;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
            margin-bottom: 28px;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
            height: calc(100% - 28px);
        }
        .project-category-card:hover {
            color: inherit;
            text-decoration: none;
            transform: translateY(-3px);
            box-shadow: 0 24px 55px rgba(15, 23, 42, 0.1);
            border-color: #cbd5e1;
        }
        .project-category-card .category-copy {
            padding: 34px;
        }
        .project-category-card h3 {
            margin-bottom: 14px;
        }
        .project-category-card p {
            margin-bottom: 18px;
            color: #475569;
        }
        .project-category-card .category-image-wrap {
            height: 100%;
            min-height: 260px;
            background: linear-gradient(135deg, #dbeafe 0%, #eff6ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
        }
        .project-category-card .category-badge {
            display: inline-flex;
            align-items: center;
            padding: 8px 14px;
            border-radius: 999px;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin-bottom: 16px;
        }
        .project-count {
            font-size: 42px;
            font-weight: 800;
            line-height: 1;
            color: #0f172a;
        }
        .project-count-label {
            margin-top: 10px;
            color: #475569;
            font-weight: 600;
        }
        @media (max-width: 991px) {
            .project-category-card .category-copy {
                padding: 24px;
            }
        }
    </style>
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Project Categories</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project Categories</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <main id="body-content">
        <section class="wide-tb-100">
            <div class="container">
                @if($categories->count() > 0)
                    <div class="row">
                        @foreach ($categories as $category)
                            @php
                                $categoryDescription = $category->category_description
                                    ? \Illuminate\Support\Str::limit($category->category_description, 180)
                                    : 'Browse all APKS projects grouped under this category.';
                            @endphp
                            <div class="col-12 col-lg-6">
                                <a href="{{ route('activity.project.category', $category->category_slug) }}" class="project-category-card">
                                    <div class="row g-0 align-items-stretch">
                                        <div class="col-xl-7 order-2 order-xl-1">
                                            <div class="category-copy">
                                                <span class="category-badge">Project Category</span>
                                                <h3>{{ $category->category_name }}</h3>
                                                <p>{{ $categoryDescription }}</p>
                                                <span class="read-more-line" style="font-size: 16px;"><span>View Category Projects</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 order-1 order-xl-2">
                                            <div class="category-image-wrap">
                                                <div class="text-center">
                                                    <div class="project-count">{{ $category->projects_count }}</div>
                                                    <div class="project-count-label">Projects</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No project categories found.</p>
                @endif
            </div>
        </section>
    </main>
@endsection
