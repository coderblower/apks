<section class="wide-tb-100 bg-white featured-heart-icon-hidden">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="heading-main">
                <small>APKS Overview</small> Organizational Summary
            </h1>
        </div>
    </div>

    @php
        $sectionImages = [
            asset('assets/images/about/summary.jpg'),
            asset('assets/images/about_img_2.jpg'),
            asset('assets/images/about/about.png'),
            asset('assets/images/about/mission.png'),
        ];
    @endphp

    @foreach($summarySections as $section)
        @php
            $sectionImage = $sectionImages[$loop->index % count($sectionImages)];
            $sectionExcerpt = \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags($section['content']))), 420);
        @endphp
        <section class="wide-tb-100 {{ $loop->odd ? 'bg-white' : 'bg-light-gray' }}">
            <div class="container-fluid">
                <div class="row align-items-center">
                    @if($loop->odd)
                        <div class="col-lg-7">
                            <div class="featured-causes-img">
                                <img src="{{ $sectionImage }}" alt="{{ $section['title'] }}">
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-4">
                        <div class="featured-content">
                            <h1 class="heading-main">
                                <small>Section {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</small> {{ $section['title'] }}
                            </h1>
                            <p>{{ $sectionExcerpt }}</p>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a href="{{ route('summery') }}#{{ $section['id'] }}" class="btn btn-default">View More</a>
                            </div>
                        </div>
                    </div>

                    @if($loop->even)
                        <div class="col-lg-7">
                            <div class="featured-causes-img">
                                <img src="{{ $sectionImage }}" alt="{{ $section['title'] }}">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endforeach
</section>
