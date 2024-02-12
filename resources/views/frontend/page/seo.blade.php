@extends('frontend.layouts.master')

@section('content')

          <!-- Page Header Start -->
          <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-4">Search Engine Optimization(SEO)</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('service') }}">Service</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SEO</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

   <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Research</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reporting & Goal Setting
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Content Building
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Page Optimization
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Social & Link Building
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Follow Up Reporting & Analysis
            </button>
        </li>

    </ul>
    <hr>
    <div class="tab-content slide-section" id="pills-tabContent">
        <div class="tab-pane fade slide-section show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <p>Search Engine Optimization</p>
            <br><br>
            Search Engine Optimization (SEO) is a set of strategies and practices aimed at improving the visibility and ranking of a website in search engine results pages (SERPs). The primary goal of SEO is to increase the organic (non-paid) traffic a website receives from search engines like Google, Bing, and Yahoo. Here are some key aspects of SEO:
            <br><br>
            1. Keyword Research: Identifying the relevant keywords and phrases that potential visitors are likely to use when searching for information related to your website. Keyword research helps you understand what topics and terms to focus on.
            <br><br>
            2. On-Page SEO: Optimizing individual web pages to make them more search engine-friendly. This involves placing keywords strategically in page titles, headings, meta descriptions, and content. It also includes improving the site's load times, using proper HTML markup, and ensuring mobile-friendliness.
            <br><br>
            3. Content Quality: Creating high-quality, valuable, and relevant content for your target audience. Search engines favor content that answers users' questions and provides useful information. Regularly updating and expanding your content can improve your website's search engine rankings.
            <br><br>
            4. Link Building: Acquiring high-quality, authoritative backlinks from other websites to your site. Backlinks serve as "votes of confidence" from other sites, and they can significantly impact your search engine ranking. However, it's crucial to focus on quality over quantity and avoid spammy link-building practices.
            <br><br>
            5. Technical SEO: Ensuring that your website is technically sound and search engine-friendly. This includes optimizing site speed, improving crawlability, fixing broken links, using a sitemap, implementing schema markup for rich snippets, and making your website secure (via HTTPS).
            <br><br>
            6. User Experience (UX): Providing a seamless and positive user experience is essential for SEO. Factors like website design, navigation, and page loading speed influence how users interact with your site. Search engines consider these factors when determining your ranking.
            <br><br>
            7. Local SEO: For businesses with physical locations, local SEO strategies are crucial. This involves optimizing your online presence to rank well in local searches, including creating and verifying Google My Business listings, managing online reviews, and ensuring consistency in NAP (Name, Address, Phone) information.
            <br><br>
            8. Mobile Optimization: Given the prevalence of mobile device usage, search engines prioritize mobile-friendly websites. Optimizing for mobile includes responsive design, fast load times, and user-friendly mobile navigation.
            <br><br>
            9. Analytics and Monitoring: Regularly monitoring your website's performance and search engine rankings is crucial. Tools like Google Analytics and Google Search Console provide valuable insights into your website's traffic, user behavior, and search engine visibility.
            <br><br>
            10. Algorithm Updates: Search engines frequently update their algorithms. Staying informed about these changes and adapting your SEO strategies accordingly is essential to maintain or improve your website's ranking.
            <br><br>
            SEO is an ongoing process, and results may take time to materialize. It requires a combination of technical expertise, content creation, and ongoing monitoring and adjustments. SEO is crucial for businesses and website owners looking to increase their online visibility and attract organic traffic from search engines.
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
