<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid " src="{{ asset('frontend/img/logo.png') }}" alt="logo" alt=""></h1>
    </a>
    <button type="button" class="navbar-toggler" datphpa-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
            <!-- <a href="service.html" class="nav-item nav-link">Our Services</a> -->
            <div class="dropdown">
                <a href="{{ route('service') }}" class="dropbtn nav-item nav-link">Our Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                  <a href="software-development.html">Software Development</a>
                  <a href="mobile-app.html">Mobile App Development</a>
                  <a href="software-services.html">Software Services</a>
                  <a href="web-design.html">Web Design & Development</a>
                  <a href="seo.html">SEO</a>
                  <a href="marketing.html">Digital Marketing</a>
                </div>
              </div>
            <a href="{{ route('portfolio') }}" class="nav-item nav-link ">Portfolio</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
            <a href="{{ route('ticket') }}" class="nav-item nav-link">Support Ticket</a>
            <a href="{{ route('faq') }}" class="nav-item nav-link">Faq</a>
            <a href="{{ route('career') }}" class="nav-item nav-link">Career</a>
            <a href="{{ route('review') }}" class="nav-item nav-link">Review</a>
            <a href="#" class="nav-item nav-link">Login</a>

        </div>
    </div>
</nav>
<!-- Navbar End -->
