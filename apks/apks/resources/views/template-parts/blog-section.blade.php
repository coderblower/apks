@if($blogData->count() > 0)
<section class="wide-tb-100 pb-0 home-blog-post-wrap">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-md-8 col-lg-6">
                <h1 class="heading-main">
                    <small>Stories & Blogs</small> Some Of Our Recent Stories & Blog
                </h1>
            </div>
            <div class="col-lg-6 col-md-4 text-md-right btn-team">
                <a href="{{ route('blog') }}" class="btn btn-outline-dark">View All blogs</a>
            </div>
        </div>
        <div class="row">
            <!-- Blog Wrap -->
            @foreach ($blogData as $blog)
                
          
            <div class="col-md-6 col-lg-4 col-sm-12 mb-0">
                <div class="post-wrap">
                    <div class="post-img">
                        <a href="{{ route('blog.show', $blog->slug) }}"><img src="{{ asset('apks/public/uploads/blog/thumbnails/'.$blog->thumbnail) }}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">{{ date('d, M, Y', strtotime($blog->created_at)) }}</div>
                        <h3 class="post-title"><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                        <div class="text-md-right">
                            <a href="{{ route('blog.show', $blog->slug) }}" class="read-more-line"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Blog Wrap -->

        </div>
    </div>
</section>
@else 

@endif