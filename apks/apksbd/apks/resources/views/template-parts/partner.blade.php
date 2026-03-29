@if($client_brands->count() > 0)
<section class="wide-tb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="heading-main">
                    <small>Global Providers</small> Our World Wide Partner
                </h1>
            </div>
            <div class="col-sm-12">
                <div class="owl-carousel owl-theme" id="home-clients">

                   @foreach ($client_brands as $item)
                       
                   
                    <!-- Client Logo -->
                    <div class="item">
                        <div class="clients-logo">
                            <img src="{{ asset('apks/public/uploads/brands/'.$item->brand_image) }}" alt="">
                        </div>
                    </div>
                    <!-- Client Logo -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

@endif