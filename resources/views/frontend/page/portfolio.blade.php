@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
    <div class=" text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Portfolio</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- ======= Portfolio Section ======= -->
  <section class="py-7">
    <div class="container-xxl py-5">
        <div>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6">OUR PAST WORKS</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="aeon.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/aeon.png') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/aeon.png') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>AEON</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">AEON</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="pos.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/pos.png') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/pos.png') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>POS</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">POS</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="misi.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/misilogo2.png') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/misilogo2.png') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>MISI</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">MISI</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="shob-khobor.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-4.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-4.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>SHOB KHOBOR</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">SHOB KHOBOR</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="fnf-stay.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-5.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-5.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>FnF-Stay Connected</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">FnF-Stay Connected</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="de-was.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-6.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-6.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>De-Was</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">De-Was</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="de-shop.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-1.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>De-Shopper</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">De-Shopper</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="book-change.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-2.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-2.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Book Exchanger</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Book Exchanger</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="foody-moody.html">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/foody_moody_logo.png') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/foody_moody_logo.png') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>FOODY MOODY</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">FOODY-MOODY</p>
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
<!-- End Portfolio Section -->


@endsection

