@extends('master')
@section('title', 'Donation')
@section('content')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Donation</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">
        <section class="wide-tb-100">
            <div class="container">
                @if($getPackages->count() > 0)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="bank-heading">Donation Packages</h2>
                    </div>
                    @foreach ($getPackages as $item)
                        
                    <div class="col-lg-4 col-6">
                        <div class="package-part mb-4">
                            <p class="mb-2">{{ $item->packages }}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Donate Now</button>
                        </div>
                    </div>
                    @endforeach

                </div>
                @else 
                    <p>No Package Found!</p>
                @endif
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl ">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h2 class="bank-heading">BANK Information</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-5">
                                    <div class="col-md-12 text-center">

                                    </div>
                                    <!--bank part each-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-part mb-5">
                                            <div class="bank-icon">
                                                <img src="{{ asset('assets/images/bank/city_bank.png') }}" class="img-responsive" alt="bank pic">
                                            </div>
                                            <h3 class="bank-name">City Bank</h3>
                                            <div class="bank-info">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <span>A/C Name: </span> <span>Alorpoth Kollan Sangstha</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>A/C No: </span> <span class="ac-mark">3125463254121212</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-globe"></i>
                                                        <span>Swift Code: </span> <span>ASDBASD</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-globe"></i>
                                                        <span>Routing No: </span> <span>25136545454</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-location-pin"></i>
                                                        <span>Branches: </span> <span>Mohakhali, Dhaka</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bank part each-->
                                    <!--bank part each-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-part mb-5">
                                            <div class="bank-icon">
                                                <img src="{{ asset('assets/images/bank/city_bank.png') }}" class="img-responsive" alt="bank pic">
                                            </div>
                                            <h3 class="bank-name">City Bank</h3>
                                            <div class="bank-info">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <span>A/C Name: </span> <span>Alorpoth Kollan Sangstha</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>A/C No: </span> <span class="ac-mark">3125463254121212</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-globe"></i>
                                                        <span>Swift Code: </span> <span>ASDBASD</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-globe"></i>
                                                        <span>Routing No: </span> <span>25136545454</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-location-pin"></i>
                                                        <span>Branches: </span> <span>Mohakhali, Dhaka</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bank part each-->
                                    <!--bank part each-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-part mb-5">
                                            <div class="bank-icon">
                                                <img src="{{ asset('assets/images/bank/city_bank.png') }}" class="img-responsive" alt="bank pic">
                                            </div>
                                            <h3 class="bank-name">City Bank</h3>
                                            <div class="bank-info">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <span>A/C Name: </span> <span>Alorpoth Kollan Sangstha</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>A/C No: </span> <span class="ac-mark">3125463254121212</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-globe"></i>
                                                        <span>Swift Code: </span> <span>ASDBASD</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-globe"></i>
                                                        <span>Routing No: </span> <span>25136545454</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-location-pin"></i>
                                                        <span>Branches: </span> <span>Mohakhali, Dhaka</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bank part each-->
                                    <!--bank part each-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-part mb-5">
                                            <div class="bank-icon">
                                                <img src="{{ asset('assets/images/bank/bkash.png') }}" class="img-responsive" alt="bank pic">
                                            </div>
                                            <h3 class="bank-name">Bkash</h3>
                                            <div class="bank-info d-flex justify-content-center">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <span>A/C Type: </span> <span>Merchant</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>A/C No: </span> <span class="ac-mark">01625445566</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>Payment Option pin: </span> <span class="ac-mark">2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bank part each-->
                                    <!--bank part each-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-part mb-5">
                                            <div class="bank-icon">
                                                <img src="{{ asset('assets/images/bank/rocket.png') }}" class="img-responsive" alt="bank pic">
                                            </div>
                                            <h3 class="bank-name">Rocket(DBBL)</h3>
                                            <div class="bank-info d-flex justify-content-center">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <span>A/C Type: </span> <span>Merchant</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>A/C No: </span> <span class="ac-mark">01625445566</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>Payment Option pin: </span> <span class="ac-mark">2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bank part each-->
                                    <!--bank part each-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-part mb-5">
                                            <div class="bank-icon">
                                                <img src="{{ asset('assets/images/bank/nagad.png') }}" class="img-responsive" alt="bank pic">
                                            </div>
                                            <h3 class="bank-name">Nagad</h3>
                                            <div class="bank-info d-flex justify-content-center">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <span>A/C Type: </span> <span>Merchant</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>A/C No: </span> <span class="ac-mark">01625445566</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-credit-card"></i>
                                                        <span>Payment Option pin: </span> <span class="ac-mark">2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bank part each-->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection