@extends('master')
@section('title', 'Home | APKS')
@section('content')
    <!-- Banner Start -->
    @include('template-parts.slider')
    <!-- Banner Start -->

    <!-- Main Body Content Start -->
    <main id="body-content">



        <!-- About us Start -->
        @include('template-parts.about-action')
        <!--About us End-->

        <!-- Welcome Home Style Start -->
        <section class="wide-tb-100 bg-green pt-0 welcome-broke-grid" id="t">
            <div class="container">
                <!-- <div class="welcome-icon"><i class="charity-love_hearts"></i></div> -->
                <div class="row">
                    <div class="col-lg-7 mx-auto welcome-home-first">
                        <div class="text-center mt-5">
                            That’s 14% of the world’s population. Put another way, that's 1 in 8 people alive today living without hope amongst trash, sewage, drugs, and abuse in unimaginable conditions. Life without secure housing is a life without basic needs being met.
                        </div>
                        <div class="text-center mt-5">
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-default">Become a Volunteer</a>
                        </div>
                        <div class="collapse mt-5" id="collapseExample">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div class="inner-form" >
                                    <form action="{{ route('resume.volunteer.request') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-0">
                                            <div class="form-group">
                                                <label for="fullname"><strong>Full Name</strong></label>
                                                <input type="text" name="fullname" class="form-control form-light" required id="fullname">
                                                @error('fullname') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-0">
                                            <div class="form-group">
                                                <label for="email"><strong>Email Address</strong></label>
                                                <input type="email" name="email" class="form-control form-light" required id="email">
                                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-0">
                                            <div class="form-group">
                                                <label for="phone"><strong>Phone Number</strong></label>
                                                <input type="tel" class="form-control form-light" name="phone" required id="phone">
                                                @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-0">
                                            <div class="form-group">
                                                <label for="refrence"><strong>Refrence Contact</strong></label>
                                                <input type="tel" class="form-control form-light" name="reference" required id="refrence">
                                                @error('reference') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-0">
                                            <div class="form-group">
                                                <label for="msg"><strong>Your Comments</strong></label>
                                                <textarea class="form-control form-light" rows="5" name="msg" required id="msg"></textarea>
                                                @error('msg') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                      
                                        <div class="upload mx-auto text-center">
                                            <h5>Upload your CV/Resume
                                            
                                            </h5>
                                            
                                             <input id="upload" type="file" name="image">
                                             <label for="upload" data-input-value="" data-select-text="Select file" data-remove-text="Remove file" data-drag-text="Drag file here..."></label>
                                         </div>
                                       
                                        @error('image') <span class="text-danger mt-2">{{ $message }}</span>@enderror
                                        <div class="col-md-12">
                                            <button type="submit"  class="btn btn-primary text-nowrap mt-3">Send Request</button>

                                        </div>
                                       
                                    </div>
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome Home Style Start -->

        <!--Callout Style Start-->
        <section class="wide-tb-100 bg-scroll bg-img-6 pos-rel callout-style-1">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="heading-main light-mode">
                            <small>Help Other People</small> We Dream to Create A Bright Future Of The Underprivileged Children
                        </h1>
                    </div>
                    <div class="col-sm-12 text-md-right">
                        <a href="{{ route('donation') }}" class="btn btn-default">Donate Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout Style End -->


        <!-- Team Member Style Start -->
        @include('template-parts.team')
        
        <!-- Team Member Style End -->

        <!-- Counter Style Start -->
        <section class="wide-tb-100 pattern-orange mb-spacer-md">
            <div class="container">
                <div class="row d-flex align-items-center">
                   @foreach ($getCounter as $count)
                       

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6">
                        <div class="counter-style-box">
                            <div class="counter-txt"><span class="counter">{{ $count->counter_number }}</span>+</div>
                            <div>{{ $count->title }}</div>
                        </div>
                    </div>
                    <!-- Counter Col End -->
                    @endforeach
                </div>
            </div>
        </section>
        <!--Counter Style End -->

        @include('template-parts.home-projects')



        <!-- Blog Style Start -->
        @include('template-parts.blog-section')
        <!-- Blog Style End -->

        <!-- Our Partners Start -->
        @include('template-parts.partner')
        <!-- Our Partners End -->


    </main>
@endsection

@section('scripts')

@if(session()->has('success'))
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Request has been sended',
        timer: 3000
        })
</script>
@endif
@if(session()->has('error'))
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: 'Something happened wrong',
        timer: 3000
        })
</script>
@endif
@endsection
