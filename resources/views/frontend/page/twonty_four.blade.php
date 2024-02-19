@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <p class="display-4 text-white animated slideInDown mb-4">24/7 Supports</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">24/7 Supports</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1>24/7 Supports</h1>
            </div>
            <div class="container">
                <div class="row g-5">
                    <div>
                        <p>
                            "Our 24/7 support is designed with your convenience in mind, providing peace of mind and minimizing downtime."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
