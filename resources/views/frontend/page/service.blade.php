@extends('frontend.layouts.master')

@section('content')

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
    <div class=" text-center py-5">
        <h1 class="display-4 text-white mb-4">Our Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<section class="py-7">
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
                        <a href="{{ route('marketing') }}">
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

