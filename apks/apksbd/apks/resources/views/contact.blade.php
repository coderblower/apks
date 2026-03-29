@extends('master')
@section('title', 'Contact Us')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Contact Us Style Start -->
        <section class="wide-tb-100 pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="heading-main">
                            <small>Get In Touch</small> Contact With Us
                        </h1>

                        <p>{{ $contactData->site_description }}</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-8 col-md-12 order-lg-last">
                        <div class="contact-wrap">
                            <div class="contact-icon-xl">
                                <i class="charity-love_hearts"></i>
                            </div>
                            <div id="sucessmessage"> </div>
                            <form action="{{ route('contact.send.message') }}" method="POST"  >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" name="firstname" id="name" class="form-control" placeholder="First Name" required>
                                            @error('firstname') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
                                            @error('lastname') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone Number" required>
                                            @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-0">
                                        <div class="form-group">
                                            <textarea name="message" id="comment" class="form-control" rows="6" placeholder="Message" required></textarea>
                                            @error('message') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary text-nowrap">Send Message</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <!-- Icon Boxes Style -->
                        <div class="icon-box-4 bg-orange mb-4">
                            <i data-feather="map-pin"></i>
                            <h3>Our Address</h3>
                            <div>{{ $contactData->address }}</div>
                        </div>
                        <!-- Icon Boxes Style -->

                        <!-- Icon Boxes Style -->
                        <div class="icon-box-4 bg-green mb-4">
                            <i data-feather="phone"></i>
                            <h3>Phone Number</h3>
                            <div>{{ $contactData->phone }}<br>{{ $contactData->second_phone }}</div>
                        </div>
                        <!-- Icon Boxes Style -->

                        <!-- Icon Boxes Style -->
                        <div class="icon-box-4 bg-gray mb-4">
                            <i data-feather="mail"></i>
                            <h3>Email Address</h3>
                            <div><a href="mailto:{{ $contactData->email }}">{{ $contactData->email }}</a></div>
                            <div><a href="mailto:{{ $contactData->second_email }}">{{ $contactData->second_email }}</a></div>
                        </div>
                        <!-- Icon Boxes Style -->
                    </div>

                </div>
            </div>
        </section>

        <section class="wide-tb-100">
            <div class="map-frame">
                {!! $contactData->address_map !!}
            </div>

        </section>
        <!-- Contact Us Style Start -->




    </main>

@endsection