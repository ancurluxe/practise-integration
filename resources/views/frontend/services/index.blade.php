@extends('layouts.frontend.master')
@section('content')
    <!-- Our services -->
    <section class="py-5 background">
        <div class="our-services p-5">
            <div class="text-center">
                <h3>Our Services</h3>
            </div>
            <div class="text-center">
                <h>Ethical and transparent practices are crucial in
                    maintaining the trust of students</h>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- card-1 -->
                <div class="col-lg-4">
                    <div class="inner-container shadow  mb-4">
                        <div class="blog-img-wrapper">
                            <img src="{{ asset('frontend/images/admission.jpg') }}" alt="">
                            <div class="p-3">
                                <h6>Admissions Assistance</h6>
                                <p class="line-clamp-3 ">Guiding students in choosing suitable
                                    institutions for their academic and career
                                    aspirations. Assisting with the application
                                    process, including documentation,
                                    admission essays, and interviews.</p>
                                <a class="readmore stretched-link" href="{{ route('details') }}">Readmore....</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-2 -->
                <div class="col-lg-4">
                    <div class="inner-container shadow mb-4">
                        <div class="blog-img-wrapper">
                            <img src="{{ asset('frontend/images/hehe.jpg') }}" alt="">
                            <div class="p-3">
                                <h6>Pre-departure Orientation</h6>
                                <p class="line-clamp-3 ">Conducting sessions to prepare students
                                    for the cultural and academic aspects of
                                    studying abroad, including information about
                                    living arrangements, local customs, and
                                    adjusting to a new environment.</p>
                                <a class="readmore stretched-link" href="{{ route('details') }}">Readmore....</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-3 -->
                <div class="col-lg-4">
                    <div class="inner-container shadow mb-4">
                        <div class="blog-img-wrapper">
                            <img src="{{ asset('frontend/images/hhhee.jpg') }}" alt="">
                            <div class="p-3">
                                <h6>Educational Counseling</h6>
                                <p class="line-clamp-3 ">Helping students choose the right career
                                    path based on their interests, skills, and
                                    goals. Assisting students in selecting
                                    appropriate courses and programs at various
                                    educational levels.</p>
                                <a class="readmore stretched-link" href="{{ route('details') }}">Readmore....</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-4 -->
                <div class="col-lg-4">
                    <div class="inner-container shadow mb-4">

                        <div class="blog-img-wrapper">
                            <img src="{{ asset('frontend/images/passport.jpg') }}" alt="">
                            <div class="p-3">
                                <h6>Visa and Immigration</h6>
                                <p class="line-clamp-3 ">Providing information and support regarding
                                    visa requirements and immigration
                                    processes for studying abroad.</p>
                                <a class="readmore stretched-link" href="{{ route('details') }}">Readmore....</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-5 -->
                <div class="col-lg-4">
                    <div class="inner-container shadow mb-4 ">
                        <div class="blog-img-wrapper ">
                            <img src="{{ asset('frontend/images/hehe.jpg') }}" alt="">
                            <div class="p-3">
                                <h6>Career Counseling</h6>
                                <p class="line-clamp-3 ">Providing guidance on career development,
                                    job search strategies, and networking job search strategies, and networking
                                    opportunitie
                                    opportunities.</p>
                                <a class="readmore stretched-link" href="{{ route('details') }}">Readmore....</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-6 -->
                <div class="col-lg-4">
                    <div class="inner-container shadow">
                        <div class="blog-img-wrapper">
                            <img src="{{ asset('frontend/images/ehe.jpg') }}" alt="">
                            <div class="p-3">
                                <h6>Educational Workshops & Seminars</h6>
                                <p class="line-clamp-3 ">Organizing events to provide information
                                    about study abroad options, career trends,
                                    and academic opportunities.</p>
                                <a class="readmore stretched-link" href="{{ route('details') }}">Readmore....</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
