@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Web Design & Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="service.html">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Web Design & Development</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Discovery</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Information Architecture</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> Wireframes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> Design</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> Content</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> Development</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> QA</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> Launch</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <h1> Web Design & Development</h1>
                <br><br>
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
        </div>

    </div>

@endsection
