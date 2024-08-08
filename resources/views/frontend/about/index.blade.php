@extends('layouts.frontend.master')

@section('content')
    <!-- about section -->
    <section>
        <div class="container py-5">
            <div class="row py-lg-5">
                <div class="col-lg-5">
                    <div class="flight">
                        <img src="{{asset('frontend/images/flight.jpg')}}" alt="">
                    </div>
                    <div class="hostes">
                        <img src="{{asset('frontend/images/hostes.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sec-txt ">
                        <div class="sec-txt-head">
                            <h3>About SEC Abroad Education</h3>
                        </div>
                        <div class="sec-txt-bdy">
                            <p>We provides most reliable counseling on study, career & migration services.</p>
                            <p>Maximax Education and Visa Services, is a counseling firm managed by some of
                                the top professionals of the industry, provides you with most reliable counseling
                                on study, career and migration including visa services. We believe that one
                                decision can change your life and we want to make sure that decision is never
                                wrong.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
