<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best IT Solution organization in Rotterdam, Netherlands</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="DreamDiver-Dream Diver IT Solutions,dream, diver, services, web, software.">
    <meta name="description" content="Dream Diver provides the best IT solutions in Rotterdam, Netherlands, offering services - web base software design, development, SEO and IT services.">

    <meta property="og:title" content="Best IT Solution organization in Rotterdam, Netherlands" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://dreamdiver.nl/img/service/" />
    <meta property="og:url" content="https://dreamdiver.nl/index.html" />


     <!-- canonical -->
    <link rel="canonical" href="https://dreamdiver.nl"/>

    <!-- Favicon -->
    <link href="https://dreamdiver.nl/frontend/img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

     <!-- owl-carousel -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet"> --}}
        <!-- custome Stylesheet -->
    <link href="{{ asset('frontend/css/custome.css') }}" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    @include('frontend.partials.navbar')


    @yield('content')


    <!-- Footer Start -->
    @include('frontend.partials.footer')
    <!-- Footer End -->

    <!-- whatsapp -->
    <a href="https://web.whatsapp.com/send?phone=+31644215009text=Hi,%20How%20can%20i%20help%20you?"  target="_blank" class="whatsapp_float"><i class="bi bi-whatsapp whatsapp-icon-bi"></i></a>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
     <!-- jquery cdn link -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- owl carousel -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
         $('.owl-carousel').owlCarousel({
             loop:true,
             margin:10,
             nav:true,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:2
                 },
                 1000:{
                     items:4
                 }
             }
         })
     </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Dream Diver",
            "url": "https://www.dreamdiver.nl/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://dreamdiver.nl/search?q=example+query{search_term_string}https://dreamdiver.nl/search?q=example+query",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>




</body>

</html>