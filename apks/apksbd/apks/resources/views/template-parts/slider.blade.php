@if($sliders->count() > 0)
<section class="main-banner">
    <div class="container start">
        <div class="slides-wrap">
            <div class="owl-carousel owl-theme">
                <!--/owl-slide-->
                @foreach ($sliders as $slider)
                <div class="owl-slide d-flex align-items-center cover" style="background-image: url({{ asset('apks/public/uploads/banner/sliders/'.$slider->image) }});">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">{{ $slider->sub_heading }}</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        {{ $slider->heading }}
                                    </h1>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn btn-default mr-3" href="donation.html" role="button">Donate</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                @endforeach
            </div>

        </div>

    </div>
</section>
@endif