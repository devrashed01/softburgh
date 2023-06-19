@extends('layout')

@section('content')
    <main>

        <!-- Hero area start -->
        <section class="hero__about">
            <div class="container g-0 line">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="hero__about-content">
                            <h1 class="hero-title animation__word_come">We are a comprehensive software solutions and
                                technology company, serving globally with the biggest brands.
                            </h1>
                            <div class="hero__about-info">
                                <div class="hero__about-btn">
                                    <div class="btn_wrapper">
                                        <a href="{{ route('services') }}" class="wc-btn-primary btn-hover btn-item"><span></span>
                                            Trends & <br>
                                            technology
                                            <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="hero__about-text title-anim">
                                    <p>The most iconic software development team possesses vast knowledge of the latest
                                        technology. Their focus is on developing cutting-edge software solutions for
                                        enterprises worldwide.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hero__about-row">
                    <div class="col-xxl-12">
                        <div class="hero__about-video">
                            <video loop muted autoplay playsinline>
                                <source src="/assets/video/video.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero area end -->


        <!-- Story area start -->
        <section class="story__area">
            <div class="container g-0 line pt-140">
                <span class="line-3"></span>
                <div class="sec-title-wrapper">
                    <div class="from-text">from <span>2019</span></div>

                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <h2 class="sec-sub-title title-anim">Software Company</h2>
                            <h3 class="sec-title title-anim">Our story</h3>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="story__text">
                                <p>In the heart of a Dhaka in 2019, SoftBurgh was born. Committed to transforming the
                                    landscape of software solutions, two young tech enthusiasts set out to challenge the
                                    status quo. What started as an ambitious dream in a modest garage quickly evolved into a
                                    recognized name in the tech industry.

                                </p>
                                <p>Rooted in innovation, SoftBurgh's journey has been about breaking boundaries and
                                    fostering a culture of creativity. Our team of brilliant minds works tirelessly to
                                    deliver software solutions that empower businesses, redefine customer experiences, and
                                    drive growth.</p>

                                <p>In these six transformative years, SoftBurgh has grown from a two-person operation to a
                                    global entity. Our footprint now extends across multiple continents, but our mission
                                    remains the same - to develop impactful software that helps businesses thrive.</p>

                                <p>Today, SoftBurgh stands at the intersection of technology and business, pioneering
                                    solutions that inspire change. We're not just building software; we're sculpting the
                                    future, one code line at a time</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="story__img-wrapper">
                            <img src="/assets/imgs/about/1.png" alt="Story Thumbnail" class="w-100">
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="story__img-wrapper img-anim">
                            <img src="/assets/imgs/about/2.png" alt="Story Thumbnail" data-speed="auto">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="story__img-wrapper">
                            <img src="/assets/imgs/about/3.png" alt="Story Thumbnail">
                            <img src="/assets/imgs/about/4.png" alt="Story Thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Story area end -->


        <!-- Counter area start -->
        <section class="counter__area">
            <div class="container g-0 line pb-140 pt-140">
                <span class="line-3"></span>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="counter__wrapper-2 counter_animation">
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">102</h2>
                                <p>Project <br>completed</p>
                                <span class="counter__border"></span>
                            </div>
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">65+</h2>
                                <p>Happy <br>customers</p>
                                <span class="counter__border"></span>
                            </div>
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">4+</h2>
                                <p>Years <br>experiences</p>
                                <span class="counter__border"></span>
                            </div>
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">5</h2>
                                <p>Awards <br>achievement</p>
                                <span class="counter__border"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end -->


        <!-- Team area start -->
        <section class="team__area pt-140 pb-140">
            <div class="sec-title-wrapper">
                <h2 class="sec-sub-title title-anim">Our Team</h2>
                <h3 class="sec-title title-anim">How we work</h3>
            </div>


            <div class="swiper team__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide team__slide">
                        <img src="/assets/imgs/team/nahid.png" alt="Team Member">
                        <div class="team__info">
                            <h4 class="team__member-name">Mn Nahid</h4>
                            <h5 class="team__member-role">Co-Founder & CEO</h5>
                        </div>
                    </div>
                    <div class="swiper-slide team__slide">
                        <img src="/assets/imgs/team/yasir.png" alt="Team Member">
                        <div class="team__info">
                            <h4 class="team__member-name">Yasir Arafat</h4>
                            <h5 class="team__member-role">Co-Founder & CTO</h5>
                        </div>
                    </div>
                    <div class="swiper-slide team__slide">
                        <img src="/assets/imgs/team/rashed.png" alt="Team Member">
                        <div class="team__info">
                            <h4 class="team__member-name">Eahea Ratan</h4>
                            <h5 class="team__member-role">Co-Founder & COO</h5>
                        </div>
                    </div>
                    <div class="swiper-slide team__slide">
                        <img src="/assets/imgs/team/kamrul.png" alt="Team Member">
                        <div class="team__info">
                            <h4 class="team__member-name">Kamruzzaman</h4>
                            <h5 class="team__member-role">Technical Product Manager</h5>
                        </div>
                    </div>
                    <div class="swiper-slide team__slide">
                        <img src="/assets/imgs/team/imtiaj.png" alt="Team Member">
                        <div class="team__info">
                            <h4 class="team__member-name">Imtiaj Amin</h4>
                            <h5 class="team__member-role">Sr. Mobile App Developer</h5>
                        </div>
                    </div>
                    <div class="swiper-slide team__slide">
                        <img src="/assets/imgs/team/aslam.png" alt="Team Member">
                        <div class="team__info">
                            <h4 class="team__member-name">Aslam Uddin</h4>
                            <h5 class="team__member-role">Chief Design Officer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end -->



        <!-- Brand area start -->
        <section class="brand__area">
            <div class="container line pt-140 pb-100">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <h2 class="brand__title-3 title-anim">We are happy to work with global
                            largest brands</h2>
                        <div class="brand__list brand-gap">
                            <div class="brand__item-2 fade_bottom">
                                <img src="/assets/imgs/brand/1.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom">
                                <img src="/assets/imgs/brand/2.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom">
                                <img src="/assets/imgs/brand/3.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom">
                                <img src="/assets/imgs/brand/4.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom">
                                <img src="/assets/imgs/brand/5.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item-2 fade_bottom">
                                <img src="/assets/imgs/brand/6.png" alt="Brand Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand area end -->


        <!-- Testimonial area start -->
        <section class="testimonial__area-2">
            <div class="container g-0 line pb-140">
                <span class="line-3"></span>

                <div class="row g-0">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="testimonial__video">
                            <video autoplay muted loop>
                                <source src="/assets/video/testimonial.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                        <div class="testimonial__slider-wrapper-2">
                            <div class="swiper testimonial__slider">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide testimonial__slide">
                                        <div class="testimonial__inner-2">
                                            <h2 class="testimonial__title-2">Unleashing the Potential of our Software
                                                Systems</h2>
                                            <p class="testimonial__text-2">SoftBurgh has unlocked the full potential of our
                                                software systems, revolutionizing the way we operate. Their creative
                                                solutions and meticulous attention to detail have elevated our software to a
                                                whole new level. SoftBurgh's team of experts not only understood our
                                                requirements but went above and beyond to add value to our project. Their
                                                innovative ideas and commitment to excellence have been instrumental in our
                                                success. We wholeheartedly recommend SoftBurgh to any organization looking
                                                to unleash the true power of their software systems.</p>
                                            <h3 class="testimonial__author">Jhon gilbert</h3>
                                            <h4 class="testimonial__role">CEO, PingBird</h4>
                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonial__slide">
                                        <div class="testimonial__inner-2">
                                            <h2 class="testimonial__title-2">Our Trusted Partner in Software Development
                                            </h2>
                                            <p class="testimonial__text-2">SoftBurgh has been an invaluable partner in our
                                                software development journey. Their expertise and dedication have played a
                                                pivotal role in shaping our systems. With their innovative solutions and
                                                collaborative approach, SoftBurgh has not only met but exceeded our
                                                expectations. Their ability to understand our unique needs and translate
                                                them into efficient software solutions is commendable. We are grateful for
                                                their ongoing support and look forward to continuing our successful
                                                partnership.</p>
                                            <h3 class="testimonial__author">Dr. Pradipta Chowdhury</h3>
                                            <h4 class="testimonial__role">CEO, EyeBuddy</h4>
                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonial__slide">
                                        <div class="testimonial__inner-2">
                                            <h2 class="testimonial__title-2">SoftBurgh's software revolutionized our
                                                operations!</h2>
                                            <p class="testimonial__text-2">SoftBurgh's software solutions have had a
                                                profound impact on our company's operations. Their innovative technology and
                                                seamless integration have greatly enhanced our productivity and efficiency.
                                                The team at SoftBurgh demonstrated exceptional expertise, guiding us through
                                                the implementation process with meticulous attention to detail. We are
                                                extremely satisfied with the results and highly recommend SoftBurgh's
                                                software to any organization seeking a transformative solution.</p>
                                            <h3 class="testimonial__author">Jhon Thomas</h3>
                                            <h4 class="testimonial__role">Founder, All Trade Construction</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="testimonial__pagination">
                                <div class="prev-button"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="next-button"><i class="fa-solid fa-arrow-left"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end -->


        <!-- CTA area start -->
        <section class="cta__area">
            <div class="container line pb-110 dark-p">
                <div class="line-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content">
                            <p class="cta__sub-title">Work with us</p>
                            <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                            <div class="btn_wrapper">
                                <a href="{{ route('contact') }}" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk
                                    us <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA area end -->

    </main>
@endsection
