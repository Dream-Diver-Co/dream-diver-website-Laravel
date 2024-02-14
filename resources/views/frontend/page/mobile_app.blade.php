@extends('frontend.layouts.master')

@section('content')

     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Mobile App Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('service') }}">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mobile App Development</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Mobile App Requirement</button>
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
                <p class="text-head">Mobile App Development</p>
                <br><br>
                Mobile app development is the process of creating software applications that are designed to run on mobile devices, such as smartphones and tablets. This field has experienced explosive growth in recent years, driven by the widespread adoption of mobile devices and the increasing demand for apps that provide various services and functionality to users.
                <br><br>
                The mobile app development process typically consists of several key stages:
                <br><br>
                1. Idea and Planning: The development process starts with an idea for an app. This idea is refined through market research and analysis of user needs. Developers work closely with clients or stakeholders to understand the app's purpose, target audience, and goals. A detailed project plan is created, outlining the app's features, design, and development milestones.
                <br><br>
                2. Design: App designers create wireframes and prototypes to visualize the app's user interface (UI) and user experience (UX). This stage focuses on the app's look and feel, including the layout, color scheme, and overall design. It's crucial to ensure the app is visually appealing and user-friendly.
                <br><br>
                3. Development: The actual coding and programming of the app occur in this phase. Developers use programming languages like Java (for Android) or Swift (for iOS) to write the app's functionality. They also integrate the design elements into the code, ensuring the app's features align with the planned design.
                <br><br>
                4. Testing: Rigorous testing is essential to identify and rectify any bugs, glitches, or issues in the app. Testing includes various types, such as functional testing, usability testing, performance testing, and security testing. Developers often use emulators or real devices to simulate different mobile environments.
                <br><br>
                5. Deployment: Once the app is thoroughly tested and approved, it's ready for deployment. Developers can publish the app to app stores (like Google Play Store for Android or Apple App Store for iOS), making it available to users for download and installation.
                <br><br>
                6. Maintenance and Updates: Mobile apps require ongoing maintenance to ensure they continue to function correctly. This involves addressing user feedback, fixing bugs, and updating the app to support new operating system versions or adding new features. Regular updates help keep the app relevant and secure.
            </div>
            <div class="tab-pane fade slide-section" id="pills-Design" role="tabpanel" aria-labelledby="pills-Design-tab" tabindex="0">
                <p class="text-head">Design</p>

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
