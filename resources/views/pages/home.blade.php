@extends('layouts.app')

@section('title')
    Home - Jait Jait
@endsection

@section('content')
    <!-- HERO SECTION -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <div class="floating-desc floating-desc--1">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect x="0.682373" y="0.83905" width="24" height="24" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_123:67" transform="scale(0.0208333)" />
                                </pattern>
                                <image id="image0_123:67" width="48" height="48"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAD1klEQVRoge2YXWhbZRjHf29OkjVZ18Y649I2da52Dod40ZuJWpiuaLst4C4E5/DCquCV0oEim1aHCBM32dWQCYowEESLbhjZKG4wReo2kRXLhKJdarPaNk1SuiRNz3m9GOmSNR/nJOesneZ3dT7e533+z3me97wfUKVKldsaoafRyP4GabUQvbS+F8nRbFsuIWZhN9K4tfF1q3SUZGT8g7zP/9sZkN/t2IkQvVLVADibvsSReCNfz915S8TpoWAAMrjjfRBvAgjleqI6lDgdNXEOx5rYG1mf2/6VNww7F0cPFrXNvC9G3hKSwUAgIz4fvfV/87R7WpdIqymQAdlbyvDV+jD9126Ukp6vVYhKbAsN4vZShu3O2bKdmknZfyFV3xxoOflLSHARSUcxw/OpNTn35QziUpQ9iJHiSCnDQ7FG44osoGAdyGDgUKHBfCDqp2+mxTpVecjMxLrXQqLr270gdwFnpKqhqSoDCQ9dE5tvufhiFJ2JRdfJfqA/sxrdtoxroULkDWDb7hc22LA9v3P79j1PbH38XsXlQlEU/kgm6B84zafnzxHyeZhzO/Q7EpI+T4i3TM7ezSUkOp/teVtgG5bQ9/3pU63R6IxNURQAYrE4504N4A/HePjXUTaNTOJIqyWdtNhT/LBuiP2ekKnilwTQ+dxL7yDEu4ATYH4+zdFjx0imkqTTN64BhAR/OMYjF67gD8cQebY89fEkT/0+yk93/cajNXHTxUNWCT25p+c+TZP7bm5wdWKCz48fx+l0Ehpb+gUdCyqbRiZpDse43LqWSL0bAawPzdAWmkbV4LNBN/s6YsxKxboApBQ9QF4PPw8Oluyo9to87ZfG+WftauwLGg3RBJmknB2twXcZDtduMEV0NlkB8JgZHXqn5pY8EwI+vOpjuMVthoscsseAr5wOwt666woLkHbYuPhAI8Mt1myCsn+j68rpYGijlyu+Ou7/cwpPPJnzLuJxMbTxblJOQ1tvQ2T3XHZ+42tq+OXBJhonZ7lnLMqqtMpfTXcw2uzB6vOYyj5NdukIwbi3jnFvXYWSjFHRqURaWf49waKCzt0vGs72qoVZNoe/MldRacbQ5MsHf1SDUGEG7GqydCPzaZY228eZm8oCkKnK5ZSBQPoz17djBnI1VGI8tbrtoy++OVPyCMZKFjNwYGuUBpdmzFrKZT/dWgxgS3OKTwLTdLcldBsLm1g5AQDUOjVe22Jg3S61FRSAlAEgbMRYyBWUAdF98gRy4SHgS73GKkxZosoAOSUkuoOTouvEM3qNpcO+cjJQDomEK2KWkCpVqvxP+Re3SjTqtDhLAQAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>
                        Trained Teachers
                    </div>
                    <div class="floating-desc floating-desc--2">
                        <img src="./assets/images/e-Learning.png" alt="e-learning">
                        Best e-learning platform
                    </div>
                    <div class="floating-desc floating-desc--3 text-center">
                        <img src="./assets/images/event.png" alt="event"> <br>
                        More than 100 events <br />
                        provided
                    </div>
                    <img class="img-fluid img-teacher d-block mx-auto" src="./assets/images/teacher-home.png"
                        alt="teacher" />
                </div>
                <div class="title-wrapper col-12 col-md-6 mt-5 mt-md-2 position-relative">
                    <h1 class="title">
                        <span>Discover</span>
                        <span>New Things</span>
                        <br />
                        <span>in a</span>
                        <span>Different Way</span>
                    </h1>
                    <p class="title-details">
                        We built this platform to
                        <strong>develop your english</strong>
                        <br />
                        and <strong>offers many opportunities</strong>
                    </p>
                    <div class="arrow-down arrow-down-1 d-none d-md-block"></div>
                    <div class="arrow-down arrow-down-2 d-none d-md-block"></div>
                    <div class="arrow-down arrow-down-3 d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- WELCOMING SECTION -->
    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="left-w-wrapper col-12 col-md-6">
                    <h2 class="subtitle text-lg-start">
                        <span>Welcome To</span>
                        <span>English Learner</span>
                        <br />
                        <span>And</span>
                        <span>Find More</span>
                        <span>About Us</span>
                    </h2>
                    <p class="welcome-details text-center text-md-start">
                        EL has provided various opportunities to participate in, ranging from online classes, webinars,
                        mentoring, and so on. Active since 2021, EL is here to educate on social media targeting students
                        throughout Indonesia.
                    </p>
                    <button class="btn btn-primary rounded-pill learn-more-btn mb-4">Learn More</button>
                </div>
                <div class="img-wrapper position-relative col-12 col-md-6">
                    <img class="img-fluid img-welcome d-block mx-auto" src="./assets/images/fabio-lucas.png"
                        alt="teacher" />
                </div>
            </div>
        </div>
    </section>

    <!-- STRENGTH SECTION -->
    <section class="strength" id="strength">
        <h2 class="subtitle">
            <span>Why</span>
            <span>Choose</span>
            <span>English</span>
            <span>Learner</span>
        </h2>
        <div class="container mt-5 px-5">
            <div class="content-wrapper row justify-content-center gap-lg-3">
                <div class="content col-12 col-sm-6 col-lg-3">
                    <img src="./assets/images/24-hours.png" alt="24-hours" />
                    <h3>Anytime & anywhere</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
                <div class="content col-12 col-sm-6 col-lg-3">
                    <img src="./assets/images/video-chat.png" alt="video chat" />
                    <h3>Video Learning</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
                <div class="content col-12 col-sm-6 col-lg-3">
                    <img src="./assets/images/personal-trainer.png" alt="personal trainer" />
                    <h3>Expert Teacher</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
                <div class="content col-12 col-sm-6 col-lg-3 mt-lg-3 mt-xl-5">
                    <img src="./assets/images/infinity.png" alt="infinity" />
                    <h3>Lifetime Access</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
                <div class="content col-12 col-sm-6 col-lg-3 mt-lg-3 mt-xl-5">
                    <img src="./assets/images/quality.png" alt="quality" />
                    <h3>Awards Certificate</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry
                    </p>
                </div>
            </div>
            <div class="achievement-wrapper row justify-content-center gap-3 gap-md-0 mt-5">
                <div class="achievement col-12 col-md-4 text-center">
                    <img src="./assets/images/id-student.png" alt="id-student">
                    <span>0</span> Students
                </div>
                <div class="achievement col-12 col-md-4 text-center">
                    <img src="./assets/images/note.png" alt="note">
                    <span>0</span> Lessons
                </div>
                <div class="achievement col-12 col-md-4 text-center">
                    <img src="./assets/images/calendar.png" alt="">
                    <span>0</span> Events
                </div>
            </div>
        </div>
    </section>

    <!-- LESSON SECTION -->
    <section class="lesson" id="lesson">
        <h2 class="subtitle">
            <span>Most</span>
            <span>Popular</span>
            <span>Lesson</span>
        </h2>
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-lg-3 justify-content-center gap-5">
                <div class="card shadow" style="width: 18rem">
                    <img src="" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">test</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="far fa-file-alt">test</i>
                        </li>
                        <li class="list-group-item">
                            <i class="far fa-bookmark">test</i>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-users"></i> Siswa
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="" class="card-link">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonials" id="testimonials">
        <h2 class="subtitle">
            <span>Look at</span>
            <span>Students</span>
            <span>Awesome</span>
            <span>Feedback</span>
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
                                        <p class="fw-light">CEO & Founder</p>
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
                                        <p class="fw-light">Finance Manager</p>
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
                                        <p class="fw-light">Global brand manager</p>
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
