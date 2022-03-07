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

    <!-- ARTICLE SECTION -->
    <section class="article" id="article">
      <div class="container my-5">
        <div class="row justify-content-center gap-5 mb-5">
            <div class="card shadow" style="width: 966px;">
                <div class="row d-flex align-items-center">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">long established</h5>
                            <p class="card-subtitle">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between mb-3">
                            <div class="p-2 card-subtitle">May 20th 2020</div>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/article-1.png" class="img-fluid card-img-bottom rounded-end" alt="...">
                    </div>
                </div>
            </div> 
        </div> 
        <div class="row row-cols-1 row-cols-lg-3 justify-content-center gap-5 mb-5">
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/article-1.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">long established</h5>
              <p class="card-subtitle">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            </div>
            <div class="d-flex flex-row justify-content-between mb-3">
                <div class="p-2 card-subtitle">May 20th 2020</div>
                <a href="#" class="card-link me-2">Read more</a>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/article-2.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">long established</h5>
              <p class="card-subtitle">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            </div>
            <div class="d-flex flex-row justify-content-between mb-3">
                <div class="p-2 card-subtitle">May 20th 2020</div>
                <a href="#" class="card-link me-2">Read more</a>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/article-3.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">long established</h5>
              <p class="card-subtitle">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            </div>
            <div class="d-flex flex-row justify-content-between mb-3">
                <div class="p-2 card-subtitle">May 20th 2020</div>
                <a href="#" class="card-link me-2">Read more</a>
            </div>
          </div>
          <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">See more<i class="fas fa-arrow-down ms-2"></i></button>
        </div>
      </div>
    </section>
@endsection
