@extends('frontend.layouts.master')

@section('content')

      <!-- Page Header Start -->
      <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Foody Moody Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="portfolio.html">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Foody Moody</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">FOODY MOODY</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">FOODY MOODY 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FOODY MOODY 2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-foody-tab" data-bs-toggle="pill" data-bs-target="#pills-foody" type="button" role="tab" aria-controls="pills-foody" aria-selected="false">FOODY MOODY REVIEW</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <h1>FOODY MOODY</h1>
                <br><br>
                Digital marketing is a broad term that encompasses all marketing efforts that use an electronic device or the internet. It's a dynamic field that continues to evolve with new technologies and platforms. Digital marketing allows businesses to reach and connect with their target audience online and promote their products or services. Here are some key components of digital marketing:
                <br><br>
                1. Search Engine Optimization (SEO): As discussed earlier, SEO focuses on improving a website's visibility in search engine results. It involves optimizing content, improving website structure, and building high-quality backlinks to increase organic traffic.
                <br><br>
                2. Content Marketing: Content marketing involves creating and distributing valuable, relevant, and consistent content to attract and engage a target audience. Content can take various forms, such as blog posts, videos, infographics, e-books, and more. The goal is to provide information that helps users and, in turn, builds trust and brand loyalty.
                <br><br>
                3. Social Media Marketing: This includes marketing and advertising on social media platforms like Facebook, Instagram, Twitter, LinkedIn, and others. Social media marketing can involve organic (unpaid) content, paid advertising, and influencer collaborations to reach and engage a brand's target audience.
                <br><br>
                4. Email Marketing: Email marketing involves sending targeted emails to a list of subscribers or customers. It is a cost-effective way to promote products, share news, and maintain relationships with your audience. Email marketing automation tools are commonly used to manage and personalize email campaigns.
                <br><br>
                5. Pay-Per-Click (PPC) Advertising: PPC advertising allows businesses to display ads on search engines like Google and on various websites. Advertisers pay a fee each time their ad is clicked. This model can be highly effective for driving traffic and conversions when managed correctly.
                <br><br>
                6. Affiliate Marketing: In affiliate marketing, businesses reward affiliates (partners) for driving traffic or sales to their website. Affiliates promote products or services and earn a commission on each successful referral or sale.
                <br><br>
                7. Influencer Marketing: This involves collaborating with social media influencers and individuals with a significant following to promote products or services. Influencers can reach a highly targeted and engaged audience, increasing brand exposure.
                <br><br>
                8. Video Marketing: Video content is becoming increasingly popular. It can be used on social media, YouTube, websites, and more. Video marketing can include product demos, tutorials, vlogs, and storytelling to engage and inform the audience.
                <br><br>
                9. Mobile Marketing: As mobile device usage continues to grow, mobile marketing strategies, such as mobile app marketing, in-app advertising, and SMS marketing, have become essential to reach a mobile-first audience effectively.
                <br><br>
                10. Analytics and Data Analysis: Digital marketing relies heavily on data and analytics tools to measure the performance of marketing campaigns. Marketers use data to track website traffic, user behavior, conversion rates, and other key performance indicators.
                <br><br>
                11. Marketing Automation: Automation tools help streamline and optimize marketing processes. They can be used for email marketing, social media posting, lead nurturing, and more.
                <br><br>
                Digital marketing is highly versatile, allowing businesses to tailor their strategies to reach specific goals and audiences. It's essential to stay updated with the latest digital marketing trends and technologies to remain competitive in the online marketplace. Additionally, ethical considerations, such as data privacy and online security, play a significant role in digital marketing practices.
            </div>
            <div class="tab-pane fade slide-section" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <p class="about-h2">Our Mission and Vision</p>
                <br>
                <p class="about-h22">Mission</p>
                <br>
                <p class="about-us">Our primary mission is to help the customers/clients attain their business goals by offering
                    the highest quality services via designing, development, and implementation of innovative
                    software products and digital marketing services.</p><br>
                <p class="about-h22">Vision</p>
                <p class="about-us">Dream Diver visions to evolve as a top-notch quality-driven and customer-centric
                    organization in the domains of IT and Digital Marketing via advanced and innovative
                    technologies and maintaining the ethical standards towards the employees, stakeholders, and
                    customers.</p>

            </div>
            <div class="tab-pane fade slide-section" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0"> <p class="about-h3">Our Core Values</p>
                <p class="about-us">Our core values are the fundamental base for our business culture and business philosophy.
                    The values define us as a service provider and help us make our decisions and deploy them.</p>
                <br>
                <p class="about-h33">Quality</p>
                <p class="about-us">Dream Diver considers Quality as an implicit business practice. We take huge pride in adding
                    value to the services and solutions and the best industry practices to our clients and
                    customers. As an organisation we always stand supportive for the evolving future of our
                    employees, customer satisfaction, and our growth and profitability. We don’t believe in
                    shortcuts and we optimize quality through efficient teamwork and a continuous learning
                    process.</p>
                <br>
                <p class="about-h33">Growth and learning</p>
                <p class="about-us">Dream Diver embraces its journey with the success of its clients and the continuous growth
                    of the team. We encompass a constant learning process, that helps us to grow as a team, and
                    as an organization as a whole, and thereby giving us scopes for improvement. We support
                    and encourage chances for skilled and talented resources to recognise their full potential and
                    create an ambience where the continuous flow of creative ideas strongly drives us to provide
                    better services.</p>
                <p class="about-h33">Integrity and honesty</p>
                <p class="about-us">We ensure to showcase integrity, honesty, fairness, and openness in our practices and
                    communications within the organization, and with the stakeholders. Dream Diver respects the
                    differences in each other providing a safe ambience for every individual and acknowledge in
                    open communication and transparent work culture.</p>
                </div>
                <div class="tab-pane fade" id="pills-foody" role="tabpanel" aria-labelledby="pills-foody-tab" tabindex="0">
                    <div class="container-xxl py-5">
                        <!-- <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="display-6" style="color: rgb(0, 140, 205);">Aeon Project Review</h1>
                        </div> -->
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="slide-form">
                                        <h1 class="about-h3">Text Review</h1>
                                    <p class="about-us">Our core values are the fundamental base for our business culture and business philosophy.
                                        The values define us as a service provider and help us make our decisions and deploy them.</p>
                                    <br>
                                    <p class="about-h33">Quality</p>
                                    <p class="about-us">Dream Diver considers Quality as an implicit business practice. We take huge pride in adding
                                        value to the services and solutions and the best industry practices to our clients and
                                        customers. As an organisation we always stand supportive for the evolving future of our
                                        employees, customer satisfaction, and our growth and profitability. We don’t believe in
                                        shortcuts and we optimize quality through efficient teamwork and a continuous learning
                                        process.</p>
                                    <br>
                                    <p class="about-h33">Growth and learning</p>
                                    <p class="about-us">Dream Diver embraces its journey with the success of its clients and the continuous growth
                                        of the team. We encompass a constant learning process, that helps us to grow as a team, and
                                        as an organization as a whole, and thereby giving us scopes for improvement. We support
                                        and encourage chances for skilled and talented resources to recognise their full potential and
                                        create an ambience where the continuous flow of creative ideas strongly drives us to provide
                                        better services.</p>
                                    <p class="about-h33">Integrity and honesty</p>
                                    <p class="about-us">We ensure to showcase integrity, honesty, fairness, and openness in our practices and
                                        communications within the organization, and with the stakeholders. Dream Diver respects the
                                        differences in each other providing a safe ambience for every individual and acknowledge in
                                        open communication and transparent work culture.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp  " data-wow-delay="0.5s">
                                    <h1>video Review</h1>
                                    <div class="small-container align-items-center slide-benar">
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
                                                <a href="contact.html">
                                                    <button class="custom-btn">Contact Us</button>
                                                  </a>
                                        </div>
                                        <div class="custom-blob"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>

@endsection