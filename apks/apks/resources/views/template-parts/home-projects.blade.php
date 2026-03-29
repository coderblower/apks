<section class="wide-tb-100 bg-light-gray">
    <div class="container">
        <style>
            .home-project-card {
                background: #fff;
                border: 1px solid #e5e7eb;
                border-radius: 18px;
                overflow: hidden;
                box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
            }
            .home-project-card .project-copy {
                padding: 28px;
            }
            .home-project-card .project-image-wrap {
                min-height: 230px;
                height: 100%;
            }
            .home-project-card .project-image-wrap img {
                width: 100%;
                height: 100%;
                min-height: 230px;
                object-fit: cover;
            }
            .home-project-card .project-meta {
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
                margin-bottom: 14px;
                text-decoration: none;
            }
            .home-project-card .project-meta:hover,
            .home-project-card .project-link:hover {
                text-decoration: none;
            }
            .home-project-card .project-link {
                color: inherit;
            }
            .home-project-card p {
                color: #475569;
            }
        </style>
        <div class="row align-items-end mb-4">
            <div class="col-lg-7">
                <div class="heading-main">
                    <small>APKS Projects</small>
                    <h2>Explore Projects By Category</h2>
                </div>
            </div>
            <div class="col-lg-5 text-lg-right">
                <a href="{{ route('activity.project') }}" class="btn btn-default mr-2">All Projects</a>
                <a href="{{ route('activity.project.categories') }}" class="btn btn-outline-primary">All Categories</a>
            </div>
        </div>

        @if($homeProjectCategories->count() > 0)
            <div class="row mb-4">
                <div class="col-12">
                    <div style="display:flex;flex-wrap:wrap;gap:12px;">
                        @foreach($homeProjectCategories as $category)
                            <a href="{{ route('activity.project.category', $category->category_slug) }}" style="display:inline-flex;align-items:center;gap:10px;padding:12px 18px;border-radius:999px;background:#eff6ff;color:#1d4ed8;font-weight:700;text-decoration:none;">
                                <span>{{ $category->category_name }}</span>
                                <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:999px;background:#dbeafe;">{{ $category->projects_count }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if($homeProjects->count() > 0)
            <div class="row">
                @foreach($homeProjects as $project)
                    @php
                        $projectImage = $project->project_logo
                            ? asset('apks/public/uploads/projects/'.$project->project_logo)
                            : asset('assets/images/causes/featured_cause.jpg');
                        $projectExcerpt = \Illuminate\Support\Str::limit(trim(strip_tags($project->project_description)), 140);
                    @endphp
                    <div class="col-lg-6 mb-4">
                        <div class="home-project-card" style="height:100%;">
                            <div class="row g-0 align-items-stretch">
                                <div class="col-xl-7 order-2 order-xl-1">
                                    <div class="project-copy">
                                        @if($project->category)
                                            <a href="{{ route('activity.project.category', $project->category->category_slug) }}" class="project-meta">{{ $project->category->category_name }}</a>
                                        @endif
                                        <h3><a href="{{ route('activity.project.show', $project->project_slug) }}" class="project-link">{{ $project->project_title }}</a></h3>
                                        <p>{{ $projectExcerpt }}</p>
                                        <a href="{{ route('activity.project.show', $project->project_slug) }}" class="read-more-line" style="font-size:16px;"><span>View Project Details</span></a>
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
        @endif
    </div>
</section>
