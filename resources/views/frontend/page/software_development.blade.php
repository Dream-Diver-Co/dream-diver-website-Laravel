@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Software Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="service.html">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Software Development</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Software Requirement</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Design</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Implementation</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Verification</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Maintenance</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                Software development is the intricate process of designing, coding, testing, and maintaining computer programs and applications. It's a fundamental pillar of the modern digital age, enabling the creation of software that powers everything from mobile apps and web applications to operating systems and beyond. The software development process begins with understanding user requirements. Developers collaborate with clients and stakeholders to gather and document specifications, ensuring that the software will meet its intended purpose. This phase involves defining the project scope, objectives, and functionality, as well as considering budget and timeline constraints.
                <br><br>
                Once the requirements are established, developers move on to the design phase. Here, they create a blueprint of the software's architecture, determining how it will be structured and how different components will interact. The design phase includes creating data models, user interface designs, and technical specifications. It lays the foundation for the actual coding work. Coding, also known as programming, is where developers write the actual lines of code that instruct the computer to perform specific tasks. Programming languages like Python, Java, C++, and JavaScript are used to create the software's functionality. Developers follow coding standards and best practices to ensure that the code is readable, maintainable, and efficient.
                <br><br>
                After the initial code is written, it undergoes thorough testing. This includes unit testing, where individual components are tested for correctness, and integration testing, where the interactions between different components are examined. Quality assurance and testing processes are crucial to identify and fix any bugs or issues in the software. Iterative development is common, where developers continually update and improve the software based on user feedback and changing requirements. This agile approach allows for flexibility in adapting to evolving needs and ensuring the software remains relevant.
               <br><br>
                Software development is a broad field, encompassing various specializations. Web development focuses on creating websites and web applications, while mobile app development is geared towards designing and building applications for smartphones and tablets. Game development involves creating interactive and entertaining games for various platforms. Backend and database development deals with server-side operations and data management, ensuring the application's data is stored and retrieved correctly. Effective software development requires more than just technical skills. Collaboration, communication, problem-solving, and creativity are equally important. Developers often work in teams, and effective communication is crucial for understanding and meeting the needs of clients and end-users.
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

