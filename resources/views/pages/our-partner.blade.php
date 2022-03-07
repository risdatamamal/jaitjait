@extends('layouts.app-sec')

@section('title')
    Our Partner - Jait Jait
@endsection

@section('content')
<!-- WELCOMING SECTION -->
    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="left-w-wrapper col-12 col-md-6">
                    <h2 class="subtitle text-lg-start">
                        <span>Find your best tailor or</span>
                        <br />
                        <span>fashion designer.</span>
                    </h2>
                    <p class="welcome-details text-center text-md-start">
                        We have some of the best tailors and fashion designers.
                    </p>
                    <button class="btn btn-primary learn-more-btn mb-4" style="border-radius: 10px;">Explore Now</button>
                </div>
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <img class="img-fluid d-block mx-auto" src="./assets/images/welcome-our-partner.png"
                        alt="welcome-our-partner" />
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

    <!-- OUR-PARTNER SECTION -->
    <section class="our-partner" id="our-partner">
      <div class="container my-5">
        <div class="row row-cols-1 row-cols-lg-3 justify-content-center gap-5">
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/sarah-kamila.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Sarah Kamila</h5>
              <p class="card-subtitle">Profesional Tailor</p>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="fas fa-star me-2"></i>4.8</div>
                <div class="p-2 bd-highlight"><i class="fas fa-clock me-2"></i></i>4y 7m</div>
            </div>
            <div class="card-body">
              <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">Portofolio</button>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/budi-santoso.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Budi Santoso</h5>
              <p class="card-subtitle">Profesional Tailor</p>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="fas fa-star me-2"></i>4.1</div>
                <div class="p-2 bd-highlight"><i class="fas fa-clock me-2"></i></i>5y 2m</div>
            </div>
            <div class="card-body">
              <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">Portofolio</button>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/michelle-agustin.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Michelle Agustin</h5>
              <p class="card-subtitle">Profesional Tailor</p>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="fas fa-star me-2"></i>4.3</div>
                <div class="p-2 bd-highlight"><i class="fas fa-clock me-2"></i></i>3y 1m</div>
            </div>
            <div class="card-body">
              <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">Portofolio</button>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/dina-aprilia.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Dina Aprilia</h5>
              <p class="card-subtitle">Profesional Fashion Designer</p>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="fas fa-star me-2"></i>4.9</div>
                <div class="p-2 bd-highlight"><i class="fas fa-clock me-2"></i></i>6y 7m</div>
            </div>
            <div class="card-body">
              <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">Portofolio</button>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/elizabeth-annisa.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Elizabeth Annisa</h5>
              <p class="card-subtitle">Profesional Tailor</p>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="fas fa-star me-2"></i>4.5</div>
                <div class="p-2 bd-highlight"><i class="fas fa-clock me-2"></i></i>7y 7m</div>
            </div>
            <div class="card-body">
              <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">Portofolio</button>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem">
            <img
              src="./assets/images/putri-utami.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Putri Utami</h5>
              <p class="card-subtitle">Profesional Tailor</p>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="fas fa-star me-2"></i>4.8</div>
                <div class="p-2 bd-highlight"><i class="fas fa-clock me-2"></i></i>4y 5m</div>
            </div>
            <div class="card-body">
              <button class="btn btn-primary learn-more-btn" style="border-radius: 10px;">Portofolio</button>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
