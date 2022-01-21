@extends('layouts.page')

@section('content')

<section class=" bg--secondary">
    <div class="container">
        <div class="row justify-content-center no-gutters">
        <div class="col-md-12">
                <!-- <h1>Contact</h1> -->
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('cv.contact') }}">Contact</a>
                    </li>
                    <!-- <li>Titles</li> -->
                </ol>
                <hr>
            </div>
            <div class="col-md-10 col-lg-8">
                <div class="boxed boxed--border">
                    <form method="POST" action="{{ route('mail.send') }}" class="text-left form-email row mx-0" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly." data-recaptcha-sitekey="6LewhCIUAAAAACSwFvBDhgtTbw6EnW6e9dip8o2u" data-recaptcha-theme="light">
                        <div class="col-md-6">
                            <span>Name:</span>
                            <input type="text" name="name" class="validate-required" />
                        </div>
                        <div class="col-md-6">
                            <span>Company:</span>
                            <input type="text" name="company" class="validate-required" />
                        </div>
                        <div class="col-md-6">
                            <span>Email Address:</span>
                            <input type="email" name="email" class="validate-required validate-email" />
                        </div>
                        <div class="col-md-6">
                            <span>Phone:</span>
                            <input type="tel" name="phone" class="validate-required" />
                        </div>
                        <div style="margin-bottom: 30px" class="col-md-12">
                            <span>About Project:</span>
                            <textarea rows="5" name="description" class="validate-required"></textarea>
                        </div>
                        <!-- <div class="col-md-12 text-center boxed">
                            <h5>Services Required</h5>
                        </div> -->
                        <div class="col-md-4 col-6 text-center">
                            <span class="block">Maquette UI/UX</span>
                            <div class="input-checkbox">
                                <input type="checkbox" name="maquette" />
                                <label></label>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center">
                            <span class="block">E-commerce</span>
                            <div class="input-checkbox">
                                <input type="checkbox" name="ecommerce" />
                                <label></label>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center">
                            <span class="block">Site Vitrine</span>
                            <div class="input-checkbox">
                                <input type="checkbox" name="vitrine" />
                                <label></label>
                            </div>
                        </div>

                        <!-- <div class="col-md-12 text-center boxed">
                            <h5>Approximate Budget</h5>
                        </div>
                        <div class="col-4 text-center">
                            <div class="input-radio">
                                <span>&lt; $5,000</span>
                                <input type="radio" name="budget" value="under5k" class="validate-required" />
                                <label></label>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="input-radio">
                                <span>$5,000 - $10,000</span>
                                <input type="radio" name="budget" value="5kto10k" class="validate-required" />
                                <label></label>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="input-radio">
                                <span>$10,000+</span>
                                <input type="radio" name="budget" value="10kplus" class="validate-required" />
                                <label></label>
                            </div>
                        </div> -->
                        <div class="col-12 col-md-8 boxed">
                            <div class="recaptcha"></div>
                        </div>
                        <div class="col-md-12 boxed">
                            <button type="submit" class="btn btn--primary type--uppercase">Submit Planner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>



@endsection