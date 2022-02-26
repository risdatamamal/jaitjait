@extends('layouts.app')

@section('title')
    Home - Jait Jait
@endsection

@section('content')
    <!-- WELCOMING SECTION -->
    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="left-w-wrapper col-12 col-md-6">
                    <h2 class="subtitle text-lg-start">
                        <span>Make your dream</span>
                        <br />
                        <span>clothes cometrue</span>
                        <br />
                        <span>with us</span>
                    </h2>
                    <p class="welcome-details text-center text-md-start">
                        JaitJait is a #1 platform in Indonesia where you can easily found tailor with a good price.
                    </p>
                    <button class="btn btn-primary learn-more-btn mb-4" style="border-radius: 10px;">Get Started</button>
                </div>
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <img class="img-fluid img-welcome d-block mx-auto" src="./assets/images/model-home.png"
                        alt="model" />
                </div>
                <div class="achievement-wrapper row justify-content-center gap-3 gap-md-0 mb-5 bg-light">
                    <div class="achievement col-12 col-md-4 text-center" style="color: #999999">
                        <img src="./assets/images/airbnb-logo.png" alt="airbnb">
                    </div>
                    <div class="achievement col-12 col-md-4 text-center" style="color: #999999">
                        <img src="./assets/images/google-logo.png" alt="google">
                    </div>
                    <div class="achievement col-12 col-md-4 text-center" style="color: #999999">
                        <img src="./assets/images/slack-logo.png" alt="slack">
                    </div>
                    <div class="achievement col-12 col-md-4 text-center" style="color: #999999">
                        <img src="./assets/images/netflix-logo.png" alt="netflix">
                    </div>
                    <div class="achievement col-12 col-md-4 text-center" style="color: #999999">
                        <img src="./assets/images/amazon-logo.png" alt="amazon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STRENGTH SECTION -->
    <section class="strength" id="strength">
        <h1 class="title">
            <span>Feature</span>
        </h1>
        <h2 class="subtitle">
            <span>The benefit of using <br>our platform</span>
        </h2>
        <div class="container mt-5 px-5">
            <div class="content-wrapper row justify-content-center gap-lg-3">
                <div class="content col-12 col-sm-6 col-lg-3">
                    <img src="./assets/images/local-tailor.png" alt="local tailor" class="mb-3" />
                    <h3>Local Tailor</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
                <div class="content col-12 col-sm-6 col-lg-3">
                    <img src="./assets/images/free-consultation.png" alt="free consultation" class="mb-3" />
                    <h3>Free Consultation</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
                <div class="content col-12 col-sm-6 col-lg-3">
                    <img src="./assets/images/fashion-designer.png" alt="fashion designer" class="mb-3" />
                    <h3>Fashion Designer</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- STEP SECTION -->
    <section class="order" id="order">
        <div class="container">
            <div class="row justify-content-center">
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <img class="img-fluid d-block mx-auto" src="./assets/images/base-3.png"
                        alt="step to order" />
                </div>
                <div class="title-wrapper col-12 col-md-6 mt-5 mt-md-2 position-relative">
                    <h1 class="subtitle">
                        <span>Steps to order our service.</span>
                    </h1>
                    <p class="title-details">
                        <img src="./assets/images/Number-1.png">
                        Go to the jaitjait website
                    </p>
                    <p class="title-details">
                        <img src="./assets/images/Number-2.png">
                        Click get started
                    </p>
                    <p class="title-details">
                        <img src="./assets/images/Number-3.png">
                        Click order now
                    </p>
                    <p class="title-details">
                        <img src="./assets/images/Number-4.png">
                        Then you will go directly to send a chat to the jaitjait admin
                    </p>
                    <p class="title-details">
                        <img src="./assets/images/Number-5.png">
                        Choose your tailor and fill out the form
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- STRENGTH SECTION -->
    <section class="strength" id="strength">
        <div class="container">
            <div class="row justify-content-center">               
                <div class="left-w-wrapper col-12 col-md-6">
                    <h2 class="subtitle text-lg-start">
                        <span>Choose your tailor and</span>
                        <br />
                        <span>order now</span>
                    </h2>
                    <p class="welcome-details text-center text-md-start">
                        Enjoy the services of our professional tailors and fashion 
                        <br />
                        designers by clicking the following button
                    </p>
                    <button class="btn btn-primary learn-more-btn mb-4" style="border-radius: 10px;">Order Now</button>
                </div>
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <div class="floating-desc floating-desc--1  text-center">
                        <img src="./assets/images/Number-1.png"> <br>
                        More than 100 events <br />
                        provided
                    </div>
                    <div class="floating-desc floating-desc--2 text-center">
                        <img src="./assets/images/Number-1.png"> <br>
                        More than 100 events <br />
                        provided
                    </div>
                    <img class="img-fluid d-block mx-auto" src="./assets/images/woman-jacket.png" alt="woman" />
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonials" id="testimonials">
        <h2 class="subtitle">
            <span>See what they're saying about us</span>
        </h2>
        <div class="container mt-5">
            <!-- carousel content -->
            <div class="row align-items-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- carousel item 1 -->
                        <div class="carousel-item active mb-3">
                            <div class="row justify-content-center">
                                <!-- clients pic -->
                                <div class="testimonials__picture col-12 col-md-6 my-md-auto">
                                    <img src="./assets/images/testimonials/client-1.jpg" alt="client-1 picture"
                                        class="rounded-circle img-fluid">
                                </div>
                                <!-- testimonials card -->
                                <div class="testimonials__card col-12 col-md-6">
                                    <p class="lh-lg">
                                        <i class="fas fa-quote-left"></i>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Dicta rem nostrum magni laboriosam quis tempore,
                                        eaque dolores temporibus cum nulla sunt.
                                        <i class="fas fa-quote-right"></i>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- client name & role -->
                                    <div class="testimonials__name">
                                        <h3>Patrick Muriungi</h3>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- carousel item 2 -->
                        <div class="carousel-item mb-3">
                            <div class="row justify-content-center">
                                <!-- clients pic -->
                                <div class="testimonials__picture col-12 col-md-6 my-md-auto">
                                    <img src="./assets/images/testimonials/client-2.jpg" alt="client-2 picture"
                                        class="rounded-circle img-fluid">
                                </div>
                                <!-- testimonials card -->
                                <div class="testimonials__card col-12 col-md-6">
                                    <p class="lh-lg">
                                        <i class="fas fa-quote-left"></i>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Dicta rem nostrum magni laboriosam quis tempore,
                                        eaque dolores temporibus cum nulla sunt.
                                        <i class="fas fa-quote-right"></i>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- client name & role -->
                                    <div class="testimonials__name">
                                        <h3>Joy Marete</h3>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- carousel item 3 -->
                        <div class="carousel-item mb-3">
                            <div class="row justify-content-center">
                                <!-- clients pic -->
                                <div class="testimonials__picture col-12 col-md-6 my-md-auto">
                                    <img src="./assets/images/testimonials/client-3.jpg" alt="client-3 picture"
                                        class="rounded-circle img-fluid">
                                </div>
                                <!-- testimonials card -->
                                <div class="testimonials__card col-12 col-md-6">
                                    <p class="lh-lg">
                                        <i class="fas fa-quote-left"></i>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Dicta rem nostrum magni laboriosam quis tempore,
                                        eaque dolores temporibus cum nulla sunt.
                                        <i class="fas fa-quote-right"></i>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- client name & role -->
                                    <div class="testimonials__name">
                                        <h3>ClaireBelle Zawadi</h3>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev"><i class="fas fa-arrow-left"></i>
                        </button>
                        <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next"><i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
