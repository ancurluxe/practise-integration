@extends('layouts.frontend.master')
@section('content')
    <!-- contact -->
    <section class=" container contact-details d-flex ">
        <div class="row col-lg-3">
            <h3 class="bold">Contact Details </h3>
            <p>Phone: +44 7501 039710</p>
            <p>Location: Brewery Road, London, United Kingdom </p>
            <p>Email: info@secrecrutingagencyuk.com</p>
            <p>Web: secrecrutingagencyuk.com </p>
        </div>
        <div class="form container shadow col-lg-8 p-3 mb-2">
            <div class="row">
                <header>
                    <h2>Get in touch</h2>
                </header>
                <form action="/submit_form" method="post" class="form">
                    <div class="name d-flex">
                        <div class="input-box-fn p-3 mb-2">
                            <label for="fname">First Name*</label>
                            <input type="text" placeholder="Enter first name" required id="fname"
                                class="input-tag" />
                        </div>

                        <div class="input-box-ln p-3 mb-2">
                            <label for="lname">Last Name*</label>
                            <input type="text" placeholder="Enter last name" required id="lname" class="input-tag" />
                        </div>
                    </div>

                    <div class="input-box p-3 mb-2">
                        <label for="email">Email*</label>
                        <input type="email" placeholder="example@gmail.com" required id="email" class="input-tag" />
                    </div>

                    <div class="input-box p-3 mb-2">
                        <label for="subject">Subject*</label>
                        <input type="text" placeholder="Subject" required id="subject" class="input-tag" />
                    </div>

                    <div class="input-box-message p-3 mb-2">
                        <label for="query" class="pb-2">Message*</label><br />
                        <textarea id="query" name="query" rows="6" placeholder="Message" required class="p-2"></textarea>
                    </div>

                    <div class="p-3 mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
