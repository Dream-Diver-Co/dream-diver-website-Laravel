@extends('frontend.layouts.master')

@section('content')

          <!-- Page Header Start -->
          <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="text-white">Search Engine Optimization(SEO)</h1>
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
            <button class="nav-link active" id="pills-Research-tab" data-bs-toggle="pill" data-bs-target="#pills-Research" type="button" role="tab" aria-controls="pills-Research" aria-selected="true">Research</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Reporting-tab" data-bs-toggle="pill" data-bs-target="#pills-Reporting" type="button" role="tab" aria-controls="pills-Reporting" aria-selected="false">Reporting & Goal Setting
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Content-tab" data-bs-toggle="pill" data-bs-target="#pills-Content" type="button" role="tab" aria-controls="pills-Content" aria-selected="false">Content Building
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-Page-tab" data-bs-toggle="pill" data-bs-target="#pills-Page" type="button" role="tab" aria-controls="pills-Page" aria-selected="true">Page Optimization
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Social-tab" data-bs-toggle="pill" data-bs-target="#pills-Social" type="button" role="tab" aria-controls="pills-Social" aria-selected="false">Social & Link Building
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Follow-tab" data-bs-toggle="pill" data-bs-target="#pills-Follow" type="button" role="tab" aria-controls="pills-Follow" aria-selected="false">Follow Up Reporting & Analysis
            </button>
        </li>

    </ul>
    <hr>
    <div class="tab-content slide-section" id="pills-tabContent">
        <div class="tab-pane fade slide-section show active" id="pills-Research" role="tabpanel" aria-labelledby="pills-Research-tab" tabindex="0">
            <p class="text-head">Search Engine Optimization</p>

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
        <div class="tab-pane fade slide-section" id="pills-Reporting" role="tabpanel" aria-labelledby="pills-Reporting-tab" tabindex="0">
            <p class="text-head">
                Reporting & Goal Setting
            </p>
        </div>
        <div class="tab-pane fade slide-section" id="pills-Content" role="tabpanel" aria-labelledby="pills-Content-tab" tabindex="0">
            <p class="text-head">
                Content Building
            </p>
        </div>
        <div class="tab-pane fade slide-section" id="pills-Page" role="tabpanel" aria-labelledby="pills-Page-tab" tabindex="0">
            <p class="text-head">
                Page Optimization
            </p>
        </div>
        <div class="tab-pane fade slide-section" id="pills-Social" role="tabpanel" aria-labelledby="pills-Social-tab" tabindex="0">
            <p class="text-head">
                Social & Link Building
            </p>
        </div>
        <div class="tab-pane fade slide-section" id="pills-Follow" role="tabpanel" aria-labelledby="pills-Follow-tab" tabindex="0">
            <p class="text-head">
                Follow Up Reporting & Analysis
            </p>
        </div>
    </div>

   </div>

@endsection
