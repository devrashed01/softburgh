@extends('layout')

@section('content')
    <main>
        <!-- Blog area start -->
        <section class="blog__area-6 blog__animation">
            <div class="container g-0 line pt-110 pb-110">
                <span class="line-3"></span>
                <div class="row pb-130">
                    <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title-2 animation__char_come">We always <br>think</h2>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                        <div class="blog__text">
                            <p>Crafting new bright brands, unique visual systems and digital experience focused on a wide
                                range of
                                original collabs. </p>
                        </div>
                    </div>
                </div>
                <div class="row" id="blog_posts">

                </div>
            </div>
        </section>
        <!-- Blog area end -->

        <!-- CTA area start -->
        <section class="cta__area">
            <div class="container line pb-110">
                <div class="line-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content">
                            <p class="cta__sub-title">Work with us</p>
                            <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                            <div class="btn_wrapper">
                                <a href="{{ route('contact') }}" class="wc-btn-primary btn-item btn-hover"><span></span>Let’s talk us
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA area end -->

    </main>
@endsection
