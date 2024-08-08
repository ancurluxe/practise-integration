@extends('layouts.frontend.master')
@section('content')
    <!-- Our services -->
    <div class="our-services p-5">
        <div class="text-center">
            <h3>Our details</h3>
        </div>
        <div class="text-center">
            <h>Ethical and transparent practices are crucial in
                maintaining the trust of students</h>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="choose">
                    <p>Why choose us?</p>
                </div>
                <div class="heehe custom-list">
                    <ul>
                        <li>We offer expertise in academic and career decisions.</li>
                        <li>We offer expertise in academic and career decisions.</li>
                        <li>We offer expertise in academic and career decisions.</li>
                        <li>We offer expertise in academic and career decisions.</li>
                        <li>We offer expertise in academic and career decisions.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="building mb-5">
                    <img src="{{ asset('frontend/images/building.jpg') }}" alt="Building">
                </div>
            </div>
        </div>


    </div>
@endsection
