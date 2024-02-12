@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <p class="display-4 text-white animated slideInDown mb-4">Support Ticket</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Support Ticket</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- content Start -->
<section class="py-7">
    <div class="container-xxl py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6">Ticket for great support track</h1>
        </div>
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <!-- FORM SECTION -->
                        <div class="row">
                            <!-- SIGN IN -->
                            <div class="col align-items-center flex-col sign-in">
                                <div class=" form-wrapper slide-form align-items-center">
                                    <div class="form sign-in ">
                                        <p class="from-head">Contact Us</p>
                                        @if(session('success'))
                                            <div id="successMessage" class="alert alert-success">
                                                {{ session('success') }}
                                            </div>

                                            <script>
                                                // Auto-hide success message after 5 seconds
                                                setTimeout(function(){
                                                    document.getElementById('successMessage').style.display = 'none';
                                                }, 5000);
                                            </script>
                                        @endif

                                        <!-- Display reCAPTCHA error -->
                                        @if($errors->has('g-recaptcha-response'))
                                        <div class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                                        @endif

                                        <form class="row g-3" action="{{ route('contact_form_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="input-group">
                                                <i class='bx bxs-user'></i>
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                <i class='bx bx-mail-send'></i>
                                                <input type="email" placeholder="Email" name="email">
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <input type="text" placeholder="Message" name="message">
                                            </div>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <textarea name="note" id="" cols="55" rows="3" placeholder="Note"></textarea>
                                            </div>
                                            @error('note')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>

                                            <button type="submit">
                                                Send Message
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END SIGN IN -->
                        </div>
                        <!-- END FORM SECTION -->
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <!-- FORM SECTION -->
                        <div class="row">
                            <!-- SIGN IN -->
                            <div class="col align-items-center flex-col sign-in">
                                <div class="form-wrapper slide-benar align-items-center">
                                    <div class="form sign-in">
                                        <h2>To create Ticket , Please login/Register.</h2>

                                        <h3>
                                            <a href="{{ route('loginfromfrontend') }}" class="nav-item nav-link btn">Login</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <!-- END SIGN IN -->
                        </div>
                        <!-- END FORM SECTION -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact End -->

@endsection

