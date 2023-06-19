<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="SoftBurgh HTML5 Template" />

    <title>SoftBurgh : Creating the future of software experience</title>
    <meta name="description"
        content="We empower businesses globally, providing advanced software solutions tailored to meet unique demands, ensuring efficiency, productivity, and growth.">

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="/assets/imgs/logo/favicon.png" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- All CSS files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/progressbar.css" />
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css" />
    <link rel="stylesheet" href="/assets/css/master.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>

    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Header area start -->
    <header class="header__area-2">
        <div class="header__inner-2">
            <div class="header__logo-2">
                <a href="{{ route('home') }}"><img style="width: 250px;" src="/assets/imgs/logo/logo-white.svg"
                        alt="Site Logo" /></a>
            </div>
            <div class="header__nav-2">
                <ul class="main-menu menu-anim">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li>
                        <a href="{{ route('services') }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs') }}">Blog</a>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="header__nav-icon-2">
                <button class="menu-icon-2" id="open_offcanvas">
                    <img src="/assets/imgs/icon/menu-white.png" alt="Menubar Icon" />
                </button>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__body">
            <div class="offcanvas__left">
                <div class="offcanvas__logo">
                    <a href="{{ route('home') }}"><img style="width: 250px;" src="/assets/imgs/logo/logo-white.svg"
                            alt="Offcanvas Logo" /></a>
                </div>
                <div class="offcanvas__social">
                    <h3 class="social-title">Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/softburgh/">Facebook</a></li>
                        <li><a href="https://www.instagram.com/softburgh/">Instagram</a></li>
                        <li><a href="https://twitter.com/SoftBurgh">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/company/softburgh/">Linkedin</a></li>
                        <li><a href="https://medium.com/@softburgh">Medium</a></li>
                    </ul>
                </div>
                <div class="offcanvas__links">
                    <ul>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                        <!-- <li><a href="career.html">Career</a></li> -->
                        <li><a href="{{ route('blogs') }}">blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__mid">
                <div class="offcanvas__menu-wrapper">
                    <nav class="offcanvas__menu">
                        <ul class="menu-anim">
                            <li>
                                <a href="{{ route('home') }}">home</a>
                            </li>
                            <li><a href="{{ route('about') }}">about</a></li>
                            <li><a href="{{ route('services') }}">service</a></li>
                            <li><a href="{{ route('blogs') }}">blog</a></li>
                            <li><a href="{{ route('contact') }}">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="offcanvas__right">
                <div class="offcanvas__search">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search keyword" />
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="offcanvas__contact">
                    <h3>Get in touch</h3>
                    <ul>
                        <li><a href="tel:+8801855338847">+8801855338847</a></li>
                        <li>
                            <a href="mailto:hello@softburgh.com">hello@softburgh.com</a>
                        </li>
                        <li>43/D, Street W1, Eastern Housing, Mirpur, Dhaka - 1216</li>
                    </ul>
                </div>
                <img src="/assets/imgs/shape/11.png" alt="shape" class="shape-1" />
                <img src="/assets/imgs/shape/12.png" alt="shape" class="shape-2" />
            </div>
            <div class="offcanvas__close">
                <button type="button" id="close_offcanvas">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Offcanvas area end -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('content')
            <!-- Footer area start -->
            <footer class="footer__area-2 pt-130">
                <div class="container">
                    <div class="footer__top-2 text-anim">
                        <div class="row">
                            <div class="col-xxl-12">
                                <h2 class="sec-title-3 title-anim">
                                    Get started <br />
                                    now
                                </h2>
                                <p class="footer__sub-title">
                                    If you would like to work with us or just want to get in
                                    touch, we’d love to hear from you!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="footer__middle-2">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="footer__location-2">
                                    <div class="location">
                                        <h3>Bangladesh</h3>
                                        <p>
                                            43/D, Street W1, Eastern Housing, Mirpur, Dhaka - 1216
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="footer__subscribe-2">
                                    <div id="newsletter">
                                        <div id="NewsletterSuccess" style="display: none;" class="alert alert-success"></div>
                                        <form action="" method="post" class="form-group" id="newsletter_form">
                                            @csrf
                                            <input type="email" name="email" placeholder="Enter your email" id="newsletter-email" />
                                            <div style="color:red;" class="error"></div>
                                            <div style="color:green;" class="success"></div>
                                            <button type="submit" class="submit" id="submit-newsletter">
                                                <img src="/assets/imgs/icon/arrow-black.png" alt="Arrow Icon" />
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer__btm-2">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                                <div class="footer__copyright-2">
                                    <p>
                                        © 2023 | Alrights reserved by SoftBurgh
                                    </p>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                                <div class="footer__nav">
                                    <ul class="footer-menu menu-anim">
                                        <li><a href="{{ route('about') }}">about us</a></li>
                                        <li><a href="{{ route('contact') }}">contact</a></li>
                                        <!-- <li><a href="career.html">Career</a></li> -->
                                        <!-- <li><a href="faq.html">FAQs</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer area end -->
        </div>
    </div>

    <!-- All JS files -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/counter.js"></script>
    <script src="/assets/js/gsap.min.js"></script>
    <script src="/assets/js/ScrollTrigger.min.js"></script>
    <script src="/assets/js/ScrollToPlugin.min.js"></script>
    <script src="/assets/js/ScrollSmoother.min.js"></script>
    <script src="/assets/js/SplitText.min.js"></script>
    <script src="/assets/js/chroma.min.js"></script>
    <script src="/assets/js/mixitup.min.js"></script>
    <script src="/assets/js/vanilla-tilt.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/main.js"></script>

    <script>
        // get graphql blog post data
        const query = `
        query BlogModels {
          blogModels {
            createdAt
            id
            publishedAt
            slug
            title
            updatedAt
            categories {
              id
              name
            }
            imageSmall {
              id
              url
            }
            imageLarge {
              id
              url
            }
          }
        }

  `;

        const url = "https://api-ap-south-1.hygraph.com/v2/clhout1a26cqz01um9z0h57yn/master";

        const options = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                query
            }),
        };

        const blogPosts = document.querySelector("#blog_posts");

        function getBlogs() {
            fetch(url, options)
                .then((res) => res.json())
                .then((res) => {
                    const posts = res.data.blogModels;
                    posts.slice(3).forEach((post) => {
                        const postItem = document.createElement("div");
                        postItem.classList.add("col-xxl-4", "col-xl-4", "col-lg-4", "col-md-4");
                        postItem.innerHTML = `
                <article class="blog__item-2">
                  <div class="blog__img-wrapper">
                    <a href="blog-details?id=${post.id}">
                      <div class="img-box">
                        <img class="image-box__item" src="${post.imageSmall.url}" alt="Blog Thumbnail" />
                        <img class="image-box__item" src="${post.imageSmall.url}" alt="BLog Thumbnail" />
                      </div>
                    </a>
                  </div>
                  <h5>
                    <a href="blog-details?id=${post.id}" class="blog__title-2">${post.title}</a>
                  </h5>
                </article>
        `;
                        blogPosts.appendChild(postItem);
                    });
                })
                .catch((err) => console.log(err));
        }
        getBlogs();
    </script>
    <script type="text/javascript">
        $(function() {

            $("#submit-newsletter").on('click', function(event) {
                event.stopImmediatePropagation();
                event.preventDefault();

                $('.invalid-feedback').remove();
                $('#submitError').hide();
                var that = $(this);
                that.button('loading');
                let form = $("#newsletter_form");
                $.ajax({
                    url: "{{ route('submitNewsletter') }}",
                    type: 'POST',
                    data: form.serialize(),
                    success: function(data) {
                        console.log(data);
                        if (data == 'success') {
                            $('#newsletter-email').val("")
                            $("#NewsletterSuccess").text(
                                    "Subscribe to the news letter successfully!")
                                .show();
                        }
                    },
                    error: function(xhr) {
                        that.button('reset');
                        var response = xhr.responseJSON;
                        var errors = response.errors;
                        if ($.isEmptyObject(errors) === false) {
                            $.each(errors, function(key, value) {
                                console.log(key);
                                $(`[name="${key}"]`)
                                    .closest('form')
                                    // .addClass('is-invalid')
                                    .append(
                                        '<span class="invalid-feedback" style="display: block;" role="alert" >' +
                                        value + '</span>');
                            });


                        }

                    }
                });

            });

        });
    </script>
    @yield('script')
</body>

</html>
