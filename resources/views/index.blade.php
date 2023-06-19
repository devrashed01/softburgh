@extends('layout')

@section('content')
    <main>
        <!-- Hero area start -->
        <section class="hero__area-2">
            <div class="hero__inner-2">
                <div class="sec-title-wrapper">
                    <h2 class="sec-title-3 bg-shape">Creating <br />the future</h2>
                    <h2 class="sec-title-3">of Software <br />Experience</h2>
                </div>
                <div class="hero__text-2">
                    <p>
                        We empower businesses globally, providing advanced software
                        solutions tailored to meet unique demands, ensuring
                        efficiency, productivity, and growth.

                    </p>
                    <div class="hero__button btn_wrapper">
                        <a href="{{ route('services') }}" class="wc-btn-pink btn-hover btn-item"><span></span> Explore <br />our services
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero2-shape">
                <img src="/assets/imgs/bg/arrow-long.png" alt="BG Shape" />
            </div>
        </section>
        <!-- Hero area end -->
        <!-- Roll area start -->
        <section class="roll__area-2">
            <div class="swiper roll__slider">
                <div class="swiper-wrapper roll__wrapper">
                    <div class="swiper-slide roll__slide">
                        <h2>Web Development</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Software</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>AI</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Branding</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>UI/UX</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Cloud Computing</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Mobile App</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Quality Testing</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Content</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Brand Identity</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Custom Software</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Mobile App</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Software</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Web Development</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Marketing</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Roll area end -->

        <!-- Roll area start -->
        <section class="roll__area-3">
            <div dir="rtl" class="swiper roll__slider">
                <div class="swiper-wrapper roll__wrapper">
                    <div class="swiper-slide roll__slide">
                        <h2>Custom Software</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>UI/UX Design</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>AI</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Brand Identity</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Content</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Software</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Cloud Solution</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Web Development</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Mobile App</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>DIgital Marketing</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Software</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Graphic Design</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Quality Assurance</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Web Application</h2>
                    </div>
                    <div class="swiper-slide roll__slide">
                        <h2>Mobile App</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Roll area end -->

        <section class="about__area">
            <div class="container line g-0 pt-140 pb-130">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="about__title-wrapper">
                            <h3 class="sec-title title-anim">
                                Unleash the power of your business with our cutting-edge software solutions
                            </h3>
                        </div>

                        <div class="about__content-wrapper">
                            <div class="about__img">
                                <div class="img-anim">
                                    <img src="/assets/imgs/about/1/2.png" alt="About Image" data-speed="0.3" />
                                </div>

                                <div class="about__img-right">
                                    <img src="/assets/imgs/about/1/1.png" alt="About Image Right" data-speed="0.5" />
                                    <div class="shape">
                                        <div class="secondary" data-speed="0.9"></div>
                                        <div class="primary"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="about__content text-anim">
                                <p>
                                    From custom software development and strategic product management to pioneering
                                    technical
                                    solutions and exceptional user experiences, we've got you covered. Our company stands
                                    out as more
                                    than just a conventional service provider. We take pride in being the trusted partner
                                    for a
                                    multitude of global corporations and cutting-edge startups who rely on our expertise.

                                </p>

                                <div class="cursor-btn btn_wrapper">
                                    <a class="btn-item wc-btn-primary btn-hover" href="{{ route('about') }}"><span></span> Explore Us
                                        <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end -->

        <!-- Service area start -->
        <section class="service__area pt-110 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="sec-title-wrapper wrap">
                            <h2 class="sec-sub-title title-anim">service</h2>
                            <h3 class="sec-title title-anim">
                                Solution we <br />provide
                            </h3>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="service__top-text text-anim">
                            <p>
                                For every client, we fuel a passion for <span>innovative solutions, pioneering software
                                    designs,</span>and boundary-breaking technologies, propelling brands towards a digitally
                                advanced
                                future.
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="service__top-btn">
                            <div class="btn_wrapper">
                                <a href="{{ route('services') }}" class="btn-item wc-btn-secondary btn-hover"><span></span> View
                                    <br />all
                                    services
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service__list-wrapper">
                    <div class="row">

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="service__list">
                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="1">
                                        <div class="service__number"><span>01</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Custom Software </br> Development
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                Custom software development tailors software to meet specific business
                                                requirements,
                                                enhancing functionality and improving operational efficiency.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="2">
                                        <div class="service__number"><span>02</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Web Application </br> Development
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We design and develop top-tier web applications for businesses globally,
                                                enhancing their
                                                digital presence and customer engagement.
                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="3">
                                        <div class="service__number"><span>03</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Mobile Application </br> Development
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We craft innovative mobile applications for global enterprises for
                                                businesses worldwide,
                                                elevating user experiences and driving digital success.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="4">
                                        <div class="service__number"><span>04</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                UI/UX Design
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We shape compelling UI/UX designs worldwide, bridging the gap between user
                                                needs and
                                                business goals, and enhancing engagement and satisfaction.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="4">
                                        <div class="service__number"><span>05</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Quality Assurance </br> and Testing
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We deliver global Quality Assurance & Testing services, ensuring software
                                                reliability and
                                                performance, driving confidence and customer satisfaction.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="4">
                                        <div class="service__number"><span>06</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Cloud-Based Solutions
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We provide world-class cloud-based solutions, optimizing business
                                                operations, enhancing data
                                                security, and promoting scalability and flexibility.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="4">
                                        <div class="service__number"><span>07</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Digital Marketing
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We execute impactful digital marketing strategies globally, driving brand
                                                visibility,
                                                customer engagement, and business growth in the digital landscape.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('serviceDetails') }}">
                                    <div class="service__item animation_home1_service" data-service="4">
                                        <div class="service__number"><span>08</span></div>
                                        <div class="service__title-wrapper">
                                            <h4 class="service__title">
                                                Graphic Design
                                            </h4>
                                        </div>
                                        <div class="service__text">
                                            <p>
                                                We create stunning graphic designs globally, capturing attention, conveying
                                                messages, and
                                                elevating brand identities with artistic excellence.

                                            </p>
                                        </div>
                                        <div class="service__link">
                                            <p><i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end -->

        <!-- work 8 -->
        <!--<div class="work__area-8 pt-100">
                  <div class="row">
                    <div class="swiper roll__slider2">
                      <div class="swiper-wrapper roll__wrapper">
                        <div class="swiper-slide">
                          <h2 class="rollslide_title-1">
                            Selected <span>Work</span>
                          </h2>
                        </div>
                        <div class="swiper-slide">
                          <h2 class="rollslide_title-1">
                            Selected <span>Work</span>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="work8__title fade_bottom_3">
                    <p>
                      Static and dynamic secure code can prevent a 0day before your
                      product is even released. We can integrate with your dev
                      environment
                    </p>
                  </div>

                  <div class="workitems sp-x">
                    <div class="work8 fade_bottom_3">
                      <div class="work8__inner" data-speed="1">
                        <a href="portfolio-details.html" class="wc-tilt">
                          <div class="work8__thumb">
                            <img src="/assets/imgs/work/portfolio/work-01.jpg" alt="image" />
                          </div>
                          <div class="work8__content tilt">
                            <h4 class="work8__content__title">
                              Dhoner <span>Artery</span>
                            </h4>
                            <p>
                              Natre, New York <br />
                              - 2019
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="work8 fade_bottom_3">
                      <div class="work8__inner" data-speed="1.2">
                        <a href="portfolio-details.html" class="wc-tilt">
                          <div class="work8__thumb">
                            <img src="/assets/imgs/work/portfolio/work-02.jpg" alt="" />
                          </div>
                          <div class="work8__content tilt">
                            <h4 class="work8__content__title">
                              Design <span>CONCEPT</span>
                            </h4>
                            <p>
                              Natre, New York <br />
                              - 2019
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="work8 fade_bottom_3">
                      <div class="work8__inner" data-speed="1.3">
                        <a href="portfolio-details.html" class="wc-tilt">
                          <div class="work8__thumb">
                            <img src="/assets/imgs/work/portfolio/work-04.jpg" alt="" />
                          </div>
                          <div class="work8__content tilt">
                            <h4 class="work8__content__title">
                              Vector <span>Art</span>
                            </h4>
                            <p>
                              Natre, New York <br />
                              - 2019
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="work8 fade_bottom_3">
                      <div class="work8__inner" data-speed="1.2">
                        <a href="portfolio-details.html" class="wc-tilt">
                          <div class="work8__thumb">
                            <img src="/assets/imgs/work/portfolio/work-03.jpg" alt="" />
                          </div>
                          <div class="work8__content tilt">
                            <h4 class="work8__content__title">
                              blue <span>Shadow</span>
                            </h4>
                            <p>
                              Natre, New York <br />
                              - 2019
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="work8 fade_bottom_3">
                      <div class="work8__inner" data-speed="1.2">
                        <a href="portfolio-details.html" class="wc-tilt">
                          <div class="work8__thumb">
                            <img src="/assets/imgs/work/portfolio/work-06.jpg" alt="" />
                          </div>
                          <div class="work8__content tilt">
                            <h4 class="work8__content__title">
                              Fresh <span>Edge</span>
                            </h4>
                            <p>
                              Natre, New York <br />
                              - 2019
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="work8 fade_bottom_3">
                      <div class="work8__inner" data-speed="1">
                        <a href="portfolio-details.html" class="wc-tilt">
                          <div class="work8__thumb">
                            <img src="/assets/imgs/work/portfolio/work-05.jpg" alt="" />
                          </div>
                          <div class="work8__content tilt">
                            <h4 class="work8__content__title">
                              Dhoner <span>Artery</span>
                            </h4>
                            <p>
                              Natre, New York <br />
                              - 2019
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="work8__btn">
                        <a href="portfolio.html" class="blog__btn about_btn">view all works<span><i
                              class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>
                  </div>
                </div>-->
        <!-- /work 8 -->

        <!-- Brand area start -->
        <section class="brand__area">
            <div class="container line pt-140 pb-100">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <h2 class="brand__title-3 title-anim">We are happy to work with global
                            largest brands</h2>
                        <div class="brand__list brand-gap">
                            <div class="brand__item-2 fade_bottom hoveft">
                                <img src="/assets/imgs/brand/1.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom hoveft">
                                <img src="/assets/imgs/brand/2.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom hoveft">
                                <img src="/assets/imgs/brand/3.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom hoveft">
                                <img src="/assets/imgs/brand/4.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom hoveft">
                                <img src="/assets/imgs/brand/5.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom hoveft">
                                <img src="/assets/imgs/brand/6.png" alt="Brand Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand area end -->

        <!-- CTA area start -->
        <section class="cta__area-2">
            <div class="container line pt-130 pb-120">
                <div class="line-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content-2">
                            <p class="cta__sub-title-2 title-anim">
                                Have you project in mind?
                            </p>
                            <h2 class="cta__title-2 title-anim">
                                Let’s make something great together!
                            </h2>
                            <div class="btn_wrapper">
                                <a href="{{ route('contact') }}" class="wc-btn-pink btn-hover btn-item"><span></span>Contact
                                    <br />with us
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA area end -->

        <!-- Blog area start -->
        <section class="blog__area-2 blog__animation">
            <div class="container g-0 pt-150 pb-110">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title title-anim">Updated Blogs</h2>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                        <div class="sec-text text-anim">
                            <p>
                                We are writing about latest technology. Read for getting knowledge about latest and high
                                scale
                                software development

                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-4">
                        <div class="sec-btn btn_wrapper">
                            <a href="{{ route('blogs') }}" class="wc-btn-pink btn-hover btn-item"><span></span> Read <br />all Blogs
                                <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row" id="blog_posts">

                </div>
            </div>
        </section>
        <!-- Blog area end -->
    </main>
@endsection
