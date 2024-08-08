@extends('layouts.frontend.master')
@section('content')
    <!-- Blog-->
    <section>
        <div class="py-5 ">
            <div class=" head text-center">
                <h3>Blog</h3>
            </div>

            <div class="sub text-center">
                <h>Watch our recent blog!</h>
            </div>

        </div>

        <!-- latest-blogs -->
        <section class="container">

            <!-- CARD -->
            <div class="row">
                {{-- <div class="blog-card  py-5  "> --}}
                <div class=" col-6">
                    <div class="blog-card-1  ">
                        <div class="blog-card-img">
                            <img style="height: 100%" src="{{ asset('frontend/images/career.jpg') }}" alt="" />
                        </div>
                        <div class="blog-card-content px-3">
                            <div class="title-head">
                                <p>Rishi</p>
                                <p>2023-03-15</p>
                            </div>
                            <h2 class="card-title">
                                Why do people travel? find the top reasons!
                            </h2>
                            <div class="view">
                                <a class="card-description stretched-link" href="{{ route('view') }}">View Full Vlog</a>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 ">
                    <div class="blog-card-1 ">
                        <div class="blog-card-img">
                            <img src="{{ asset('frontend/images/career.jpg') }}" alt="" />
                        </div>
                        <div class="blog-card-content px-3">
                            <div class="title-head">
                                <p>Aayu</p>
                                <p>2023-03-15</p>
                            </div>
                            <h2 class="card-title">Mountains In Nepal: Mt.Annapurna!</h2>
                            <div class="view">
                                <a class="card-description stretched-link" href="{{ route('view') }}">View Full Vlog</a>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD -->

            <div class="py-5">

                <div class="row">
                    <div class="col-6 ">
                        <div class="blog-card-1 ">
                            <div class="blog-card-img">
                                <img src="{{ asset('frontend/images/career.jpg') }}" alt="" />
                            </div>
                            <div class="blog-card-content px-3">
                                <div class="title-head">
                                    <p>Aayu</p>
                                    <p>2023-03-15</p>
                                </div>
                                <h2 class="card-title">Mountains In Nepal: Mt.Annapurna!</h2>
                                <div class="view">
                                    <a class="card-description stretched-link" href="{{ route('view') }}">View Full Vlog</a>
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 ">
                        <div class="blog-card-1 ">
                            <div class="blog-card-img">
                                <img src="{{ asset('frontend/images/career.jpg') }}" alt="" />
                            </div>
                            <div class="blog-card-content px-3">
                                <div class="title-head">
                                    <p>Aayu</p>
                                    <p>2023-03-15</p>
                                </div>
                                <h2 class="card-title">Mountains In Nepal: Mt.Annapurna!</h2>
                                <div class="view">
                                    <a class="card-description stretched-link" href="{{ route('view') }}">View Full Vlog</a>
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </section>
@endsection
