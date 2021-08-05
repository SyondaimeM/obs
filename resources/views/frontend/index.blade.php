@extends('frontend.layouts.app')

@section('title') {{ app_name() }} @endsection

@section('content')

    <section class="header-bg-parent">
        <div class="header-col1">
            <h5>WELCOME TO THE</h5>
            <h2>Platform</h2>
            <h2 class="typewrite" data-period="1000" data-type='[ "For Business", "To Sell online", "For your Products"]'>
            </h2>
            <p>Ensuring the best Branding requirement.</p>
            <br>
            @auth
                @can('view_backend')
                    <a class="common-btn" type="button" href="/admin/dashboard">DASHBOARD</a>
                @else
                    <a class="common-btn" type="button" href="#">Upgrade</a>
                @endcan
            @else
                <a class="common-btn" type="button">SIGN UP</a>
            @endauth

        </div>
        <!--header-col1-->
        <div class="header-col2">
        </div>
        <!--header-col2-->
        <div class="clear"></div>
        <!--clear-->
        <img class="hedaer-bg-par-img" src="{{ asset('img/corner-img.png') }}" class="img-responsive" alt="corner" />
    </section>
    <!--header-bg-parent-->

    <section id="why-choose-us">
        <div class="container">
            <div class="why-choose-col">
                <h5 class="common-h5">A full service digital agency</h5>
                <p>We pursue relationships based on transparency, persistence, mutual trust, and integrity with our
                    employees, customers and other business partners.</p>
                <h2 class="common-h2">Who we are </h2>
                <p>
                    Our team of specialists consistently delivers outstanding results combining creative ideas with
                    our vast experience. We can help you build a sustainable, meaningful relationship with your clients
                    by engaging them with your brand using digital platforms, apps and social media.
                </p>


                <h2 class="common-h2">What we do</h2>

                <p>We work in areas as diverse as software and mobile App development, web design and improvement,
                    search engine optimization, local SEO and directory listing management, social media marketing,
                    email marketing and digital marketing and many more.</p>
                <button class="common-btn" type="button">CONTACT US</button>
            </div>
            <div class="count-col">
                <div class="stat">
                    <div class="count-sub-col">
                        <div class="milestone-counter">
                            <span class="stat-count highlight">122</span>
                            <div class="milestone-details">Happy Customers</div>
                        </div>
                        <!--milestone-counter-->
                    </div>
                    <!--count-sub-col-->
                    <div class="count-sub-col">
                        <div class="milestone-counter">
                            <span class="stat-count highlight">100</span>
                            <div class="milestone-details">Ordered Coffee's</div>
                        </div>
                        <!--milestone-counter-->
                    </div>
                    <!--count-sub-col-->
                    <div class="count-sub-col">
                        <div class="milestone-counter">
                            <span class="stat-count highlight">140</span>
                            <div class="milestone-details">Awards Win</div>
                        </div>
                        <!--milestone-counter-->
                    </div>
                    <!--count-sub-col-->
                </div>
                <!--stat-->
                <div class="stat-info-par">
                    <div class="stat-info-sub-par">
                        <div class="stat-info-div">
                            <!--<p>Men and women committed to better protect around the world.</p>-->
                            <p>The customer is number one, the employee is number two and the shareholder is number three.
                                When the customer is happy that means the business & shareholders are also happy!</p>
                        </div>
                        <!--stat-info-div-->
                    </div>
                    <!--stat-info-sub-par-->
                    <div class="stat-info-sub-par">
                        <div class="stat-info-div">
                            <p>Good friends communicate openly. They usually don’t shy away from telling the truth.
                            </p>
                        </div>
                        <!--stat-info-div-->
                    </div>
                    <!--stat-info-sub-par-->
                    <div class="stat-info-sub-par">
                        <div class="stat-info-div">
                            <p>Business mean it should be the goal of every business to protect our planet.</p>
                        </div>
                        <!--stat-info-div-->
                    </div>
                    <!--stat-info-sub-par-->
                </div>
                <!--stat-info-par-->
            </div>
            <!--count-col-->
            <div class="clear"></div>
        </div>
        <!--container-->
    </section>

    <!------------------------------------------BRAND PRODUCTS------------------------------------------------------>

    <section id="blog">
        <div class="text-center">
            <h5 class="common-h5">Our Brand Products</h5>
        </div>
        <div class="container">
            <div class="blog-col">
                <h1>Header</h1>
                <img src="{{ asset('img/portfolio/new7.jpg') }}" alt="blog1" class="img-responsive product-img">
                <!--<span>April 16 2021</span>-->
                <!--<a href="#">For More information</a>-->
                <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
            </div>
            <div class="blog-col">
                <h1>Header</h1>
                <img src="{{ asset('img/portfolio/new7.jpg') }}" alt="blog1" class="img-responsive product-img">
                <!--<span>April 16 2021</span>-->
                <!--<a href="#">For More information</a>-->
                <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
            </div>
            <div class="blog-col">
                <h1>Header</h1>
                <img src="{{ asset('img/portfolio/new7.jpg') }}" alt="blog1" class="img-responsive product-img">
                <!--<span>April 16 2021</span>-->
                <!--<a href="#">For More information</a>-->
                <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
            </div>
            <div class="blog-col">
                <h1>Header</h1>
                <img src="{{ asset('img/portfolio/new7.jpg') }}" alt="blog1" class="img-responsive product-img">
                <!--<span>April 16 2021</span>-->
                <!--<a href="#">For More information</a>-->
                <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
            </div>
            <div class="blog-col">
                <h1>Header</h1>
                <img src="{{ asset('img/portfolio/new7.jpg') }}" alt="blog1" class="img-responsive product-img">
                <!--<span>April 16 2021</span>-->
                <!--<a href="#">For More information</a>-->
                <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
            </div>
            <div class="blog-col">
                <h1>Header</h1>
                <img src="{{ asset('img/portfolio/new7.jpg') }}" alt="blog1" class="img-responsive product-img">
                <!--<span>April 16 2021</span>-->
                <!--<a href="#">For More information</a>-->
                <p>View <i class="fa fa-mobile-phone"></i> <a class="read" href="#">Now</a></p>
            </div>
            <span class="view-more"><a href="#">View More</a></span>
            <!--blog-col-->
            <div class="clear"></div>
        </div>
        <!--container-->
    </section>


    <Section id="faq-par">
        <div class="text-center">
            <h5 class="common-h5">What We OFFER</h5>
        </div>
        <div class="container">
            <div class="faq-que-col">
                <h5 class="common-h5">EXPERINCE</h5>
                <h2 class="common-h2">Pay for Qualified Traffic</h2>
                <div id="faq-accordion">
                    <h3>Why do we use it ?</h3>
                    <p>To increase the ROI of your paid campaigns click (PPC) With that return, you can start a new
                        and improved PPC campaign that reaches more people and brings even more returns to your
                        company.</p>
                    <h3>What is qualified traffic?</h3>
                    <p>Qualified traffic refers to users who reach your website that have already shown interest in
                        your products and, therefore, can be considered potential clients.</p>
                    <h3>Why is website traffic so important?</h3>
                    <p>Website traffic is important for many reasons. The more people see your site, the more
                        potential customers you will have. The number of visitors to your website becomes the number
                        of opportunities your business has at giving an impression, generating qualified leads,
                        sharing your brand and building relationships.</p>
                    <h3>How much does it cost to create a website?</h3>
                    <p>The average cost to create a website for a small business is $100 to $10,000. This average
                        includes purchasing your domain name and website hosting plan, as well as designing and
                        building your site. How much your business pays to create your website will depend on its
                        size, features, and complexity.</p>
                    <h3>How much does bulk SMS cost?</h3>
                    <p>Bulk SMS per message cost 0.20 paisa only.</p>
                </div>
            </div>
            <!--faq-que-col-->
            <div class="faq-bg-col">
                <div class="faq-img-par">
                    <img src="{{ asset('img/home-faq.png') }}" alt="faq" class="img-responsive" />
                    <div class="faq-img-info">
                        <i class="fa fa-lightbulb-o"></i>
                        <h2>Have a project in mind? <br>Let’s get to work.</h2>
                        <p>Find out how it works and ask any <br> questions you may have.</p>
                        <a href="#">Get In Touch <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <!--faq-img-info-->
                </div>
                <!--faq-img-par-->
            </div>
            <!--faq-bg-col-->
            <div class="clear"></div>
        </div>
        <!--container-->
    </Section>

    <Section id="project">
        <div class="text-center">
            <h5 class="common-h5">Our Happy Clients</h5>
            <!--<h5 class="common-h5">FEATURED PROJECTS</h5>-->
            <!--<h2 class="common-h2">Our Case Studies</h2>-->
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new1.jpg') }}" class="img-responsive" />
                </div>
            </div>
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new2.jpg') }}" class="img-responsive" />
                </div>
            </div>
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new3.jpg') }}" class="img-responsive" />
                </div>
            </div>
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new4.jpg') }}" class="img-responsive" />
                </div>
            </div>
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new5.jpg') }}" class="img-responsive" />
                </div>
            </div>
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new6.jpg') }}" class="img-responsive" />
                </div>
            </div>
            <div class="item">
                <div class="owl-img-par">
                    <img src="{{ asset('img/portfolio/new7.jpg') }}" class="img-responsive" />
                </div>
            </div>
        </div>
    </Section>

    <!------------------------------------------PRICING------------------------------------------------------>



    <Section id="contact">
        <div class="container">
            <div class="form-par">
                <h2>Get IN Touch With US !</h2>
                <form id="my-form" method="POST">
                    <input type="text" placeholder="Your Name" class="f-name form-com" />
                    <input type="email" placeholder="Email" class="em-input form-com" />
                    <input type="tel" id="phone" name="phone" class="phone-input form-com" placeholder="Mobile No">
                    <input type="text" placeholder="Your message" class="web-input form-com" />
                    <input type="submit" value="submit" class="submit-btn" />
                </form>
            </div>
        </div>
        <!--container-->
    </Section>
    <!--contact-->

@endsection

@push('after-scripts')


@endpush
