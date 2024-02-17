@extends('frontend.layouts.master')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid p-0">
        <div class="hero">

            <!-- Arif Begins Solar -->
            <div class="solar">
            <div class="sun">
                <img class="sun-img" src="{{ asset('frontend/img/logo.png') }}" alt="sun">
              </div>
                <a href="mobile-app.html" class="uranus-link">
                    <div class="jupiter"></div>
                </a>
                <a href="software-services.html" class="uranus-link"></a>
              <div class="saturn"></div>
            </a>
            <a href="web-design.html" class="uranus-link">
                <div class="uranus"></div>
            </a>
            <a href="seo.html" class="uranus-link">
                <div class="neptune"></div>
            </a>
            <a href="marketing.html" class="uranus-link">
                <div class="pluto"></div>
            </a>
            <a href="software-development.html" class="uranus-link">
                <div class="earth"></div>
            </a>
            </div>

            <!-- Arif Ends Solar  -->
        </div>
    </div>
    <!-- Header End -->

    <!-- Choosing Us Start -->
    <section class="py-6">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6">Few Reasons Why People Choosing Us!</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="timeline">
                        <div class="timeline-item timeline-item-start d-flex pb-3">
                          <div class="timeline-line" >
                            <div class="timeline-line-hover" ></div>
                          </div>
                          <div class="flex-shrink-1 d-flex align-items-center me-3">
                            <div class="timeline-circle rounded-circle text-white d-flex align-items-center justify-content-center">1</div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3" >
                              <div class="timeline-box-arrow" ></div>
                              <p class="h3 font-weight-700">
                                    <font>Trusted Service Center</font>
                              </p>
                              <p>
                                    <font>
                                        "Welcome to our trusted service center, where reliability meets excellence. Clients choose us with confidence for several compelling reasons."
                                    </font>
                                    <a class="" href="{{ route('trusted') }}">Read more..</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-item d-flex pb-3">
                          <div class="timeline-line">
                            <div class="timeline-line-hover"></div>
                          </div>
                          <div class="flex-shrink-1 d-flex align-items-center me-3">
                            <div class="timeline-circle rounded-circle text-white d-flex align-items-center justify-content-center">2</div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3" >
                                <div class="timeline-box-arrow" ></div>
                                <p class="h3 font-weight-700">
                                      <font>Reasonable Price</font>
                                </p>
                                <p>
                                      <font>
                                        "At our service center, we take pride in offering top-notch solutions at a reasonable price."
                                      </font>
                                      <a class="" href="{{ route('reasonable') }}">Read more..</a>
                                </p>
                              </div>
                          </div>
                        </div>
                        <div class="timeline-item timeline-item-end d-flex pb-3">
                          <div class="timeline-line" >
                            <div class="timeline-line-hover" ></div>
                          </div>
                          <div class="flex-shrink-1 d-flex align-items-center me-3">
                            <div class="timeline-circle rounded-circle text-white d-flex align-items-center justify-content-center">3</div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3" >
                              <div class="timeline-box-arrow" ></div>
                              <p class="h3 font-weight-700">
                                    <font>
                                        24/7 Supports
                                    </font>
                              </p>
                              <p>
                                    <font>
                                        "Our 24/7 support is designed with your convenience in mind, providing peace of mind and minimizing downtime."
                                    </font>
                                    <a class="" href="{{ route('twonty_four') }}">Read more..</a>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>

                <!-- Arif Starts -->
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="small-container">
                        <div class="custom-card">
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" style="text-align: center;">
                                    <h5 class="custom-title">Dream Diver!</h5>
                                    <p>We provide all kind of software solutions to your projects.</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">Web Development</h5>
                                    <p>Web Design & Development, Android Applications</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">SEO</h5>
                                    <p>Search Engine Optimization, contact us for details</p>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                                <a href="{{ route('contact') }}">
                                    <button class="custom-btn">Contact Us</button>
                                  </a>
                        </div>
                        <div class="custom-blob"></div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Choosing Us End -->


    <!-- Our Client -->
    <div class="container">
        <div class="row owl-carousel-row">
         <div class="owl-carousel owl-theme">

                <div class="item">
                    <a href="{{ route('aeon') }}">
                        <img src="{{ asset('frontend/img/aeon.png') }}" alt="aeon" class="card-img-top img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('misi') }}">
                        <img src="{{ asset('frontend/img/misilogo.png') }}" alt="misi" class="card-img-top">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('pos') }}">
                        <img src="{{ asset('frontend/img/pos.png') }}" alt="pos" class="card-img-top img-fluid">
                    </a>
                </div>
                <div >
                    <div >
                        <a href="{{ route('aeon') }}">
                            <img src="{{ asset('frontend/img/aeon.png') }}" alt="aeon" class="card-img-top img-fluid">
                        </a>
                    </div>
                </div>
                <div >
                    <div >
                        <a href="{{ route('misi') }}">
                            <img src="{{ asset('frontend/img/misilogo.png') }}" alt="misi" class="card-img-top img-fluid">
                        </a>
                    </div>
                </div>
                <div >
                    <div >
                        <a href="{{ route('pos') }}">
                            <img src="{{ asset('frontend/img/pos.png') }}" alt="pos" class="card-img-top img-fluid">
                        </a>
                    </div>
                </div>
            



          </div>
        </div>
    </div>

            <!-- Service Start -->
            <section class="py-6">
                <div class="container-xxl py-5">
                    <div>
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                            <p class="display-6">We Provide professional IT Software Development & Services</p>
                        </div>
                        <div class="row g-4 justify-content-center">
                            @php
                                $services = App\Models\HomeService::where('status', 'on')->get();
                            @endphp

                            @foreach ( $services as $service )

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="{{ route('software_development') }} ">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('storage/' . $service->service_image) }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src=" {{ asset('storage/' . $service->service_image) }} " alt="Paris">
                                                <div class="flip-text">
                                                    <h2>Dream Diver</h2>
                                                    <p>{{ $service->service_title }}</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">{{ $service->service_title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            @endforeach ()


                        </div>
                    </div>
                </div>
            </section>
            <!-- Service End -->


@endsection

