@extends('layouts.frontend.master')

@section('content')
        <div class="gap py-5 ">
            <div class=" head text-center">
                <h3>Views</h3>
            </div>

            <div class="sub text-center">
                <h>Watch our recent Views!</h>
            </div>
        </div>

    <div class="container">
        <div class=" mission d-flex px-5 ">
            <img src="{{ asset('frontend/images/mission img.jpg') }}" alt="">
            <div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bold" id="mission-tab" data-bs-toggle="tab"
                            data-bs-target="#mission-tab-pane" type="button" role="tab"
                            aria-controls="mission-tab-pane" aria-selected="false">Mission</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bold" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision-tab-pane"
                            type="button" role="tab" aria-controls="vision-tab-pane"
                            aria-selected="false">Vision</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mission-tab-pane" role="tabpanel"
                        aria-labelledby="mission-tab" tabindex="0">
                        <li>Empowering students through expert guidance and streamlined
                            solutions for academic and career success.</li>
                        <li>We aim to simplify the complex processes of admissions, visa
                            applications, and financial planning.</li>
                    </div>

                    <div class="tab-pane fade" id="vision-tab-pane" role="tabpanel" aria-labelledby="vision-tab"
                        tabindex="0">
                        <li> students throughand financial planning expert guidance and streamlined
                            solutions for Empoweringacademic and career success.</li>
                        <li>We aim to simplify the complex processes of admissions, visa
                            applications, .</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
