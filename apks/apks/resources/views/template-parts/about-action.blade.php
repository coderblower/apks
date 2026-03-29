@if($aboutData)
<section class="wide-tb-100 bg-white featured-heart-icon-hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-causes-img">
                    <img src="{{ asset('apks/public/uploads/about/'.$aboutData->about_image)  }}" alt="">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="featured-content">
                    <h1 class="heading-main">
                        <small>About Us</small> {{ $aboutData->page_heading }}
                    </h1>
                   
                    {!! substr($aboutData->about_content, 0, 500) !!}
                    <div class="d-flex align-items-center justify-content-between mt-4">
                        <a href="{{ route('about')}}" class="btn btn-default">view More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif