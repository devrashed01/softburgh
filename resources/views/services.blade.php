@extends('layout')

@section('content')
    <main>

        <!-- Hero area start -->
        <section class="solution__area">
            <div class="container hero-line"></div>
            <div class="solution__wrapper">
                <div class="solution__left">
                    <div class="solution__img-1">
                        <img src="/assets/imgs/thumb/solution.png" alt="Solution Image">
                    </div>
                    <div class="solution__img-2">
                        <img src="/assets/imgs/thumb/solution-2.png" alt="Solution Image">
                    </div>
                </div>

                <div class="solution__mid">
                    <h1 class="solution__title animation__char_come">Software Solution</h1>
                    <p>We're creating software solutions that boost productivity and enrich lives, fostering global business
                        growth and harmonious technological advancement.
                    </p>
                </div>

                <div class="solution__right">
                    <div class="solution__img-3">
                        <img src="/assets/imgs/thumb/solution-3.png" alt="Solution Image">
                    </div>
                </div>
            </div>

            <div class="container pb-130">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="solution__btm">
                            <ul>
                                <li>Approch</li>
                                <li>Creativity</li>
                                <li>Experienced</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="solution__shape">
                <img src="/assets/imgs/icon/1.png" alt="Shape Image" class="shape-1">
                <img src="/assets/imgs/icon/2.png" alt="Shape Image" class="shape-2">
                <img src="/assets/imgs/icon/3.png" alt="Shape Image" class="shape-3">
                <img src="/assets/imgs/icon/4.png" alt="Shape Image" class="shape-4">
                <img src="/assets/imgs/icon/5.png" alt="Shape Image" class="shape-5">
            </div>
        </section>
        <!-- Hero area end -->


        <!-- Service area start -->
        <section class="service__area-6">
            <div class="container">
                <div class="row inherit-row">
                    <div class="col-xxl-12">
                        <div class="content-wrapper">
                            <div class="left-content">
                                <ul class="service__list-6">
                                    <li class="active"><a href="#service_1">Custom Software <br>Development</a></li>
                                    <li><a href="#service_2">Web Application <br> Development</a></li>
                                    <li><a href="#service_3">Mobile application <br>development</a></li>
                                    <li><a href="#service_4">UI/UX Design</a></li>
                                    <li><a href="#service_5">Quality Assurance <br> & Testing</a></li>
                                    <li><a href="#service_6">Cloud-based <br> solutions</a></li>
                                    <li><a href="#service_7">Digital Marketing</a></li>
                                    <li><a href="#service_8">Graphic Design</a></li>
                                </ul>
                            </div>

                            <div class="mid-content">
                                <div class="service__image">
                                    <img src="/assets/imgs/service/1.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/2.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/3.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/4.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/5.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/6.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/7.png" alt="Service Image">
                                </div>
                                <div class="service__image">
                                    <img src="/assets/imgs/service/8.png" alt="Service Image">
                                </div>
                            </div>

                            <div class="right-content">
                                <div class="service__items-6">

                                    <div class="service__item-6 has__service_animation" id="service_1" data-secid="1">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/1.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Custom Software Development</h2>
                                            <p>Custom software development tailors software to meet specific business
                                                requirements, enhancing functionality and improving operational efficiency.
                                            </p>
                                            <ul>
                                                <li>+ Javascript & Typescript</li>
                                                <li>+ React and Vau</li>
                                                <li>+ Python</li>
                                                <li>+ Node JS</li>
                                                <li>+ Docker and Kubernetes</li>
                                                <li>+ Cloud Computing (AWS, Azure, GCP)</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_2" data-secid="2">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/2.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Web Application Development</h2>
                                            <p>We design and develop top-tier web applications for businesses globally,
                                                enhancing their digital presence and customer engagement</p>
                                            <ul>
                                                <li>+ Progressive Web Apps</li>
                                                <li>+ API Development</li>
                                                <li>+ Node JS</li>
                                                <li>+ React JS</li>
                                                <li>+ Vau JS</li>
                                                <li>+ Next JS</li>
                                                <li>+ TypeScript</li>
                                                <li>+ Serverless Computing</li>
                                                <li>+ GraphQL</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_3" data-secid="3">

                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/3.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Mobile application development</h2>
                                            <p>We craft innovative mobile applications for global enterprises for businesses
                                                worldwide, elevating user experiences and driving digital success.</p>
                                            <ul>
                                                <li>+ Mobile Backend as a Service (MBaaS)</li>
                                                <li>+ Flutter</li>
                                                <li>+ React Native</li>
                                                <li>+ Kotlin</li>
                                                <li>+ Swift</li>
                                                <li>+ Dart</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_4" data-secid="4">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/4.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">UI/UX Design</h2>
                                            <p>We shape compelling UI/UX designs worldwide, bridging the gap between user
                                                needs and business goals, and enhancing engagement and satisfaction</p>
                                            <ul>
                                                <li>+ User Experience</li>
                                                <li>+ User Research</li>
                                                <li>+ Usability Testing</li>
                                                <li>+ Information Architecture</li>
                                                <li>+ Low-Fi Wireframing</li>
                                                <li>+ High-Fi Wireframing</li>
                                                <li>+ User Interface</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_5" data-secid="5">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/5.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Quality Assurance & Testing</h2>
                                            <p>We deliver global Quality Assurance & Testing services, ensuring software
                                                reliability and performance, driving confidence and customer satisfaction
                                            </p>
                                            <ul>
                                                <li>+ Test Automation</li>
                                                <li>+ CI/CD</li>
                                                <li>+ Performance Testing</li>
                                                <li>+ Test Management </li>
                                                <li>+ API Testing</li>
                                                <li>+ Code Review and Static Analysis</li>
                                                <li>+ Cloud-based Testing</li>
                                                <li>+ Test Data Management</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_6" data-secid="6">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/4.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Cloud-based solutions</h2>
                                            <p>We provide world-class cloud-based solutions, optimizing business operations,
                                                enhancing data security, and promoting scalability and flexibility </p>
                                            <ul>
                                                <li>+ Docker</li>
                                                <li>+ Serverless Computing</li>
                                                <li>+ Kubernetes</li>
                                                <li>+ Amazon Web Services (AWS)</li>
                                                <li>+ Microsoft Azure</li>
                                                <li>+ Google Cloud Platform</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_7" data-secid="7">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/4.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Digital Marketing</h2>
                                            <p>We execute impactful digital marketing strategies globally, driving brand
                                                visibility, customer engagement, and business growth in the digital
                                                landscape</p>
                                            <ul>
                                                <li>+ Social media Marketing</li>
                                                <li>+ Search Engine Optimization (SEO)</li>
                                                <li>+ Pay-Per-Click Advertising(CPC)</li>
                                                <li>+ Content Marketing</li>
                                                <li>+ Email Marketing</li>
                                                <li>+ Analytics and Data-driven Marketing</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service__item-6" id="service_8" data-secid="8">
                                        <div class="image-tab">
                                            <img src="/assets/imgs/service/4.jpg" alt="Service Image">
                                        </div>

                                        <div class="animation__service_page">
                                            <h2 class="service__title-6">Graphic Design</h2>
                                            <p>We create stunning graphic designs globally, capturing attention, conveying
                                                messages, and elevating brand identities with artistic excellence</p>
                                            <ul>
                                                <li>+ Brand Identity Design</li>
                                                <li>+ Logo Design</li>
                                                <li>+ Social Media Design</li>
                                                <li>+ Print Design</li>
                                                <li>+ Motion Graphic Design</li>
                                                <li>+ Illustration</li>
                                            </ul>
                                            <div class="btn_wrapper">
                                                <a href="{{ route('contact') }}"
                                                    class="wc-btn-secondary btn-item btn-hover"><span></span>Get
                                                    free
                                                    <br>qoutes <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end -->


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


        <!-- CTA area start -->
        <section class="cta__area">
            <div class="container line pt-100 pb-110 no-p">
                <div class="line-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content">
                            <p class="cta__sub-title">Work with us</p>
                            <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                            <div class="btn_wrapper">
                                <a href="{{ route('contact') }}" class="wc-btn-primary btn-item btn-hover"><span></span>Let’s talk
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
