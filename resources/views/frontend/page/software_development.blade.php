@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Software Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('service') }}">Service</a></li>
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
                <button class="nav-link" id="pills-Design-tab" data-bs-toggle="pill" data-bs-target="#pills-Design" type="button" role="tab" aria-controls="pills-Design" aria-selected="false">Design</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Implementation-tab" data-bs-toggle="pill" data-bs-target="#pills-Implementation" type="button" role="tab" aria-controls="pills-Implementation" aria-selected="false">Implementation</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Verification-tab" data-bs-toggle="pill" data-bs-target="#pills-Verification" type="button" role="tab" aria-controls="pills-Verification" aria-selected="false">Verification</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Maintenance-tab" data-bs-toggle="pill" data-bs-target="#pills-Maintenance" type="button" role="tab" aria-controls="pills-Maintenance" aria-selected="false">Maintenance</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <p class="text-head">Software development</p>
                Software development is the intricate process of designing, coding, testing, and maintaining computer programs and applications. It's a fundamental pillar of the modern digital age, enabling the creation of software that powers everything from mobile apps and web applications to operating systems and beyond. The software development process begins with understanding user requirements. Developers collaborate with clients and stakeholders to gather and document specifications, ensuring that the software will meet its intended purpose. This phase involves defining the project scope, objectives, and functionality, as well as considering budget and timeline constraints.
                <br><br>
                Once the requirements are established, developers move on to the design phase. Here, they create a blueprint of the software's architecture, determining how it will be structured and how different components will interact. The design phase includes creating data models, user interface designs, and technical specifications. It lays the foundation for the actual coding work. Coding, also known as programming, is where developers write the actual lines of code that instruct the computer to perform specific tasks. Programming languages like Python, Java, C++, and JavaScript are used to create the software's functionality. Developers follow coding standards and best practices to ensure that the code is readable, maintainable, and efficient.
                <br><br>
                After the initial code is written, it undergoes thorough testing. This includes unit testing, where individual components are tested for correctness, and integration testing, where the interactions between different components are examined. Quality assurance and testing processes are crucial to identify and fix any bugs or issues in the software. Iterative development is common, where developers continually update and improve the software based on user feedback and changing requirements. This agile approach allows for flexibility in adapting to evolving needs and ensuring the software remains relevant.
               <br><br>
                Software development is a broad field, encompassing various specializations. Web development focuses on creating websites and web applications, while mobile app development is geared towards designing and building applications for smartphones and tablets. Game development involves creating interactive and entertaining games for various platforms. Backend and database development deals with server-side operations and data management, ensuring the application's data is stored and retrieved correctly. Effective software development requires more than just technical skills. Collaboration, communication, problem-solving, and creativity are equally important. Developers often work in teams, and effective communication is crucial for understanding and meeting the needs of clients and end-users.
            </div>
            <div class="tab-pane fade slide-section" id="pills-Design" role="tabpanel" aria-labelledby="pills-Design-tab" tabindex="0">
                After that, create detailed plans on how the custom software will work and look. This stage requires a collaborative approach from both software engineering and design teams.

                System Design
                This is a detailed blueprint for your software. It describes the system’s components and how they will interact with each other.

                During system design, take these factors into account:

                Functional Requirements: What tasks the software needs to accomplish.
                Non-Functional Requirements: How efficiently it should operate and the level of security it demands.
                Restrictions: Any limitations, such as technical or budgetary constraints.
                Software Architecture Design
                This phase revolves around determining how each component of the software will be constructed.

                Carefully consider which programming languages, tools, and software development methodologies to employ.

                Your focus should lie in:

                Modularity and Testability: Craft high-level software that’s user-friendly and easy to test.
                Scalability: Prepare the software to handle increased workloads if required in the future.

            </div>
            <div class="tab-pane fade slide-section" id="pills-Implementation" role="tabpanel" aria-labelledby="pills-Implementation-tab" tabindex="0">
                <p class="text-head">Implementation</p>
            </div>
            <div class="tab-pane fade slide-section" id="pills-Verification" role="tabpanel" aria-labelledby="pills-Verification-tab" tabindex="0">
                <p class="text-head">Verification</p>

            </div>

            <div class="tab-pane fade slide-section" id="pills-Maintenance" role="tabpanel" aria-labelledby="pills-Maintenance-tab" tabindex="0">
                <p class="text-head">Maintenance</p>

            </div>
        </div>

    </div>

@endsection

