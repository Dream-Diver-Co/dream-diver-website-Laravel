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
                <p class="display-6">Few Reasons Why People Choosing Us!</p>
            </div>
            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1> -->
                    <!-- <p class="mb-5">Our IT Service Center stands out for several compelling reasons, making it the preferred choice for individuals and businesses alike. Firstly, our unwavering commitment to customer satisfaction sets us apart. </p> -->
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
                                <!-- <font > -->
                                    <font >Trusted Service Center</font>
                                <!-- </font> -->
                              </p>
                              <p>
                                <!-- <font > -->
                                    <font>
                                        "Welcome to our trusted service center, where reliability meets excellence. Clients choose us with confidence for several compelling reasons."
                                    </font>
                                    <button class="choos-btn">Read more..</button>
                                <!-- </font> -->
                              </p>
                              <!-- <button class="choos-btn">Read more..</button> -->
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
                                      <font >Reasonable Price</font>
                                </p>
                                <p>
                                      <font >
                                        "At our service center, we take pride in offering top-notch solutions at a reasonable price."
                                      </font>
                                      <button class="choos-btn">Read more..</button>
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
                                    <font >
                                        24/7 Supports
                                    </font>
                              </p>
                              <p>
                                    <font >
                                        "Our 24/7 support is designed with your convenience in mind, providing peace of mind and minimizing downtime."
                                    </font>
                                    <button class="choos-btn">Read more..</button>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>

                <!-- Arif Starts -->
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <div class="position-relative rounded overflow-hidden h-100 Choosing-body" style="min-height: 400px;">
                        <h1 class="Choosing-img">Dream Diver</h1>
                         <img class="position-absolute w-100 h-100" src="{{ asset('frontend') }}/img/feature.jpg" alt="image" style="object-fit: cover;">
                    </div> -->

                    <div class="small-container">
                        <div class="custom-card">
                          <!-- <h1 class="custom-title">Dream Diver!</h1> -->


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

                              <!-- <p class="custom-subtitle">We provide all kind of software solutions to your projects.
                                Web Design & Development, Android Applications, Search Engine Optimization, contact us for details...</p> -->
                                <a href="contact.html">
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
        <!-- <h1 class="display-3 text-center fw-bold"><span class="text-success">Our</span>Client </h1> -->
        <div class="row owl-carousel-row">
         <div class="owl-carousel owl-theme">
            <div >
                <div >
                    <a href="aeon.html">
                        <img src="{{ asset('frontend/img/aeon.png') }}" alt="aeon" class="card-img-top img-fluid">
                    </a>
                </div>
            </div>
            <div >
                <div >
                   <a href="misi.html">
                    <img src="{{ asset('frontend/img/misilogo.png') }}" alt="misi" class="card-img-top">
                   </a>
                </div>
            </div>
            <div >
                <div >
                    <a href="pos.html">
                        <img src="{{ asset('frontend/img/pos.png') }}" alt="pos" class="card-img-top img-fluid">
                    </a>
                </div>
            </div>
            <div >
                <div >
                    <a href="aeon.html">
                        <img src="{{ asset('frontend/img/aeon.png') }}" alt="aeon" class="card-img-top img-fluid">
                    </a>
                </div>
            </div>
            <div >
                <div >
                    <a href="misi.html">
                        <img src="{{ asset('frontend/img/misilogo.png') }}" alt="misi" class="card-img-top img-fluid">
                    </a>
                </div>
            </div>
            <div >
                <div >
                    <a href="pos.html">
                        <img src="{{ asset('frontend/img/pos.png') }}" alt="pos" class="card-img-top img-fluid">
                    </a>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-body">
                    <img src="img/testimonial-1.jpg" alt="" class="card-img-top" >
                </div>
                <hr />
                <h1 class="text-center">Aeon</h1>
            </div> -->
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
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="software-development.html">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Software Development1.jpg') }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Software Development.jpg') }}" alt="Paris">
                                                <div class="flip-text">
                                                    <h2>Dream Diver</h2>
                                                    <p>Software Development</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">Software Development</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="mobile-app.html">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Mobile App Development.jpg') }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Mobile App Development1.jpg') }}" alt="Paris">
                                                <div class="flip-text">
                                                    <!-- <img class="img-service" src="img/portfolio/portfolio-2.jpg" alt="Paris"> -->
                                                    <h2>Dream Diver</h2>
                                                    <p>Mobile App Development</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">Mobile App Development</p>
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="software-services.html">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Software Services.jpg') }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Software Services1.jpg') }}" alt="Paris">
                                                <div class="flip-text">
                                                    <h2>Dream Diver</h2>
                                                    <p>Software Services</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">Software Services</p>
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="web-design.html">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Web_Design.jpg') }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Web_Design1.jpg') }}" alt="Paris">
                                                <div class="flip-text">
                                                    <h2>Dream Diver</h2>
                                                    <p>Web Design & Development</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">Web Design & Development</p>
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="seo.html">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('frontend/img/service/seo.jpg') }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src="{{ asset('frontend/img/service/seo1.jpg') }}" alt="Paris">
                                                <div class="flip-text">
                                                    <h2>Dream Diver</h2>
                                                    <p>Search Engine Optimization(SEO)</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">Search Engine Optimization(SEO)</p>
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <a href="marketing.html">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                              <div class="flip-box-front">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Digital_Marketing.jpg') }}" alt="Paris">
                                              </div>
                                              <div class="flip-box-back">
                                                <img class="img-service" src="{{ asset('frontend/img/service/Digital_Marketing1.jpg') }}" alt="Paris">
                                                <div class="flip-text">
                                                    <h2>Dream Diver</h2>
                                                    <p>Digital Marketing</p>
                                                    <button class="flip-btn">Read more...</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div>
                                                <p class="service-item-text">Digital Marketing</p>
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>

                            {{-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                               <a href="{{ route('frontend.our-service.digital-marketing')}}">
                                    <div class="service-item">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/img/service-6-n.jpg" alt="service-6">
                                        <div class="d-flex align-items-center bg-light">
                                            <div class="service-icon flex-shrink-0 bg-primary">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-06-light.png" alt="icon-06-light">
                                            </div>
                                            <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.digital-marketing')}}">Digital Marketing</a>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service End -->


@endsection
