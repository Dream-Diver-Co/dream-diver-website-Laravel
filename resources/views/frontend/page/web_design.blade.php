@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Web Design & Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('service') }}">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Web Design & Development</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-Discovery-tab" data-bs-toggle="pill" data-bs-target="#pills-Discovery" type="button" role="tab" aria-controls="pills-Discovery" aria-selected="true">Discovery</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Information-tab" data-bs-toggle="pill" data-bs-target="#pills-Information" type="button" role="tab" aria-controls="pills-Information" aria-selected="false">Information Architecture</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Wireframes-tab" data-bs-toggle="pill" data-bs-target="#pills-Wireframes" type="button" role="tab" aria-controls="pills-Wireframes" aria-selected="false"> Wireframes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Design-tab" data-bs-toggle="pill" data-bs-target="#pills-Design" type="button" role="tab" aria-controls="pills-Design" aria-selected="false"> Design</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Content-tab" data-bs-toggle="pill" data-bs-target="#pills-Content" type="button" role="tab" aria-controls="pills-Content" aria-selected="false"> Content</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Development-tab" data-bs-toggle="pill" data-bs-target="#pills-Development" type="button" role="tab" aria-controls="pills-Development" aria-selected="false"> Development</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-QA-tab" data-bs-toggle="pill" data-bs-target="#pills-QA" type="button" role="tab" aria-controls="pills-QA" aria-selected="false"> QA</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Launch-tab" data-bs-toggle="pill" data-bs-target="#pills-Launch" type="button" role="tab" aria-controls="pills-Launch" aria-selected="false"> Launch</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-Discovery" role="tabpanel" aria-labelledby="pills-Discovery-tab" tabindex="0">
              

                Web design and web development are two closely related but distinct disciplines that work together to create and maintain websites. Here's an overview of each:
                <br><br>
                1. Web Design:
                <br><br>
                Web design primarily focuses on the visual and user interface aspects of a website. Designers are responsible for creating the look and feel of a website, ensuring it is visually appealing and user-friendly.
                Key aspects of web design include layout, color schemes, typography, images, icons, and overall aesthetics.
                Web designers often use design software like Adobe Photoshop, Sketch, or Figma to create mockups and wireframes.
                User experience (UX) design is an important part of web design, involving the creation of an intuitive and engaging user journey.
                <br><br>
                2. Web Development:
                Web development, on the other hand, deals with the technical and functional aspects of a website. Developers are responsible for turning the design into a fully functioning website by writing code.
                There are three main components of web development:
                <br><br>
                a. Front-end development: This involves coding the client-side of a website, which is what users interact with in their web browsers. Front-end developers work with HTML, CSS, and JavaScript to create interactive and responsive web pages.
                <br><br>
                b. Back-end development: Back-end developers work on the server-side of a website, managing databases, server configurations, and application logic. They use programming languages such as Python, Ruby, PHP, or Node.js to build server-side functionality.
                <br><br>
                c. Full-stack development: Full-stack developers are proficient in both front-end and back-end development and can work on all aspects of a web project.
                <br><br>
                3. Collaboration:
                In practice, web design and web development often overlap and require close collaboration. Designers and developers work together to ensure that the visual design aligns with the technical implementation.
                Communication and coordination between these two roles are essential to create a successful website.
                <br><br>
                4. Responsive Design:
                With the increasing use of mobile devices, responsive web design has become crucial. This involves designing and developing websites that adapt to different screen sizes and devices to provide a consistent and user-friendly experience.
                <br><br>
                5. Content Management Systems (CMS):
                Many websites are built using content management systems like WordPress, Joomla, or Drupal, which simplify both the design and development processes. CMS platforms allow users to update content without extensive coding knowledge.
                <br><br>
                6. Web Technologies:
                The web development landscape is constantly evolving, and developers use various technologies and frameworks. Some popular technologies and tools include HTML5, CSS3, JavaScript, Bootstrap, React, Angular, and Vue.js.
            </div>
            <div class="tab-pane fade slide-section" id="pills-Information" role="tabpanel" aria-labelledby="pills-Information-tab" tabindex="0">
                <p class="text-head">
                    Information Architecture
                </p>
            </div>
            <div class="tab-pane fade slide-section" id="pills-Wireframes" role="tabpanel" aria-labelledby="pills-Wireframes-tab" tabindex="0">
                <p class="text-head">
                    Wireframes
                </p>
                </div>
                <div class="tab-pane fade slide-section" id="pills-Design" role="tabpanel" aria-labelledby="pills-Design-tab" tabindex="0">
                    <p class="text-head">
                        Design
                    </p>
                </div>
                <div class="tab-pane fade slide-section" id="pills-Content Design" role="tabpanel" aria-labelledby="pills-Content Design-tab" tabindex="0">
                    <p class="text-head">
                        Content
                    </p>
                </div>
                <div class="tab-pane fade slide-section" id="pills-Coding" role="tabpanel" aria-labelledby="pills-Coding-tab" tabindex="0">
                    <p class="text-head">
                        Coding
                    </p>
                </div>
                <div class="tab-pane fade slide-section" id="pills-Development " role="tabpanel" aria-labelledby="pills- Development-tab" tabindex="0">
                    <p class="text-head">
                        Development
                    </p>
                </div>
                <div class="tab-pane fade slide-section" id="pills-QA" role="tabpanel" aria-labelledby="pills-QA-tab" tabindex="0">
                    <p class="text-head">
                        QA
                    </p>
                </div>
                <div class="tab-pane fade slide-section" id="pills-Launch" role="tabpanel" aria-labelledby="pills-Launch-tab" tabindex="0">
                    <p class="text-head">
                        Launch
                    </p>
                </div>
        </div>

    </div>

@endsection
