@extends('layout')

@section('content')
    <main>

        <!-- Contact area start -->
        <section class="contact__area-6">
            <div class="container g-0 line pt-120 pb-110">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="contact__text">
                            <p>Great! We're excited to hear from you and let's start
                                something special togerter. call us for any inquery.</p>
                        </div>
                    </div>
                </div>
                <div class="row contact__btm">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="contact__info">
                            <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
                            <ul>
                                <li><a href="tel:+8801855338847">+8801855338847</a></li>
                                <li><a href="mailto:hello@softburgh.com">hello@softburgh.com</a></li>
                                <li><span>43/D, Street W1, Eastern Housing, Mirpur, Dhaka - 1216</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                        <div class="contact__form">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                            <form action="{{ route('contactSubmit') }}" method="post" enctype="multipart/form">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-12">
                                        <input type="text" name="name" placeholder="Full Name *" required>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        <div style="color:red;" class="error_name"></div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-12">
                                        <input type="email" name="business_email" placeholder="Business Email *" required>
                                        @if ($errors->has('business_email'))
                                            <span class="text-danger">{{ $errors->first('business_email') }}</span>
                                        @endif
                                        <div style="color:red;" class="error_email"></div>
                                    </div>
                                </div>
                                <div class="row g-3 mt-3 mb-4">
                                    <div class="col-12">
                                        <label>Budget *</label> <br>
                                        <select required name="budget" id="budget"
                                            style="border: none; background: none; width: 100%; border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-top: 10px;outline: none; margin-bottom: 20px;">
                                            <option value="">Select Budget</option>
                                            <option value="< $5000 USD"><$5000 USD</option>
                                            <option value="$5000 - $10,000 USD">$5000 - $10,000 USD</option>
                                            <option value="$10,000 - $20,000 USD">$10,000 - $20,000 USD</option>
                                            <option value="$20,000 - $50,000 USD">$20,000 - $50,000 USD</option>
                                            <option value="$50,000 - $100,000 USD">$50,000 - $100,000 USD</option>
                                            <option value="$100,000 + USD">$100,000+ USD</option>
                                        </select>
                                        @if ($errors->has('budget'))
                                            <span class="text-danger">{{ $errors->first('budget') }}</span>
                                        @endif
                                        <div style="color:red;" class="error_budget"></div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <textarea name="message" required placeholder="Messages *"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                        <div style="color:red;" class="error_message"></div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div style="color:red;" class="error"></div>
                                        <div style="color:green;" class="success"></div>
                                        <div class="btn_wrapper">
                                            <button type="submit" class="wc-btn-primary btn-hover btn-item"><span></span>
                                                Send
                                                <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact area end -->

    </main>
@endsection
