@extends('layouts.app')

@section('content')

<section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edite My Name</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="{{route('updatename')}}" method="post" enctype="multipart/form-data" data-sb-form-api-token="API_TOKEN">
                           @csrf
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" value="{{Auth::user()->name}}" name="name" type="text" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">My Name</label>
                            </div>
                            
                           
                            
                            <button class="btn btn-primary btn-xl " id="submitButton" type="submit">ُEdite My Name</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection

