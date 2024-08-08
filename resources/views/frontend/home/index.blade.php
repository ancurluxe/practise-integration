@extends('layouts.frontend.master')

@section('content')
    <!-- main -->
    <section>
        <div class="bg-main">
            <img src="{{ asset('frontend/images/main-img.jpg') }}" alt="">
        </div>
        <div class="txt-main">
            <div class="col-lg-7">
                <h3>Empowering Dreams, Enabling Success</h3>
                <h1>Your Gateway to Global Education!</h1>
                <p>Your success begins with us. At SEC Aborad Education,
                    we're more than just an organization - we're a platform for your growth and success.
                    Join our team, and you'll be part of a community that values
                    collaboration, innovation, and continuous learning.
                    We understand the importance of learning and are dedicated to helping you
                    achieve it.</p>
                <button class="btn-apply">Apply Now</button>
            </div>
        </div>
        <div class="graduate">
            <img src="{{ asset('frontend/images/young-woman-casual-wearing-pink-background.png') }}" alt="">
        </div>
    </section>

    <!-- top tudy destination -->
    <section class="py-2 background ">
        <div class="container ">`
            <div class="gap mb-4 ">
                <div class=" head text-center">
                    <h3>TOP STUDY DESTINATIONS AROUND THE WORLD</h3>
                </div>
                <div class="sub">
                    <div class="text-center">
                        <h>we offer end-to-end study counselling services to students aspiring to study in Abroad.</h>
                    </div>
                </div>
            </div>
            <!-- for card-us -->
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="inner-container-us shadow">
                        <div class="us-img-wrapper mb-2 ">
                            <img src="{{ asset('frontend/images/visa.jpg') }}" alt="">
                        </div>
                        <div class="us-flag d-flex">
                            <h5>Study in USA</h5>
                            <img src="{{ asset('frontend/images/flag.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- for card-can -->
                <div class="col-lg-3">
                    <div class="inner-container-can shadow ">
                        <div class="can-img-wrapper mb-2">
                            <img src="{{ asset('frontend/images/visa.jpg') }}" alt="">
                        </div>
                        <div class="can-flag d-flex">
                            <h5>Study in Canada</h5>
                            <img src="{{ asset('frontend/images/flag.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- for card-aus -->
                <div class="col-lg-3 md-6">
                    <div class="inner-container-3 shadow ">
                        <div class="australia-img-wrapper mb-2">
                            <img src="{{ asset('frontend/images/visa.jpg') }}" alt="">
                        </div>
                        <div class="aus-flag d-flex">
                            <h5>Study in Australia</h5>
                            <img src="{{ asset('frontend/images/flag.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- for card-uk -->
                <div class="col-lg-3 md-6">
                    <div class="inner-container-3 shadow ">
                        <div class="uk-img-wrapper mb-2">
                            <img src="{{ asset('frontend/images/visa.jpg') }}" alt="">
                        </div>
                        <div class="uk-flag d-flex">
                            <h5>Study in UK</h5>
                            <img src="{{ asset('frontend/images/flag.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
