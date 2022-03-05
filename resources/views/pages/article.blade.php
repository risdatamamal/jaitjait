@extends('layouts.app-sec')

@section('title')
    Article - Jait Jait
@endsection

@section('content')
<!-- WELCOMING SECTION -->
    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="left-w-wrapper col-12 col-md-6">
                    <h2 class="subtitle text-lg-start">
                        <span>Find an interesting</span>
                        <br />
                        <span>fashion reference</span>
                        <br />
                        <span>for you.</span>
                    </h2>
                    <p class="welcome-details text-center text-md-start">
                        Read our fashion reference articles
                    </p>
                    <button class="btn btn-primary learn-more-btn mb-4" style="border-radius: 10px;">Read Now</button>
                </div>
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <img class="img-fluid d-block mx-auto" src="./assets/images/welcome-article.png"
                        alt="welcome-article" />
                </div>
                <div class="sponsor-wrapper row justify-content-center gap-3 gap-md-0 mb-5" style="background-color: #FFFFFF">
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
@endsection
