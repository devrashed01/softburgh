@extends('layout')

@section('content')
    <main>

        <!-- Blog detail start -->
        <section class="blog__detail">
            <div class="container g-0 line pt-140">
                <span class="line-3"></span>
                <div class="row" id="blogDetails">

                </div>
            </div>
        </section>
        <!-- Blog detail end -->


        <!-- Related blog start -->
        <section class="blog__related blog__animation">
        <div class="container g-0 line pt-130 pb-140">
          <span class="line-3"></span>
          <div class="row">
            <div class="col-xxl-12">
              <div class="sec-title-wrapper">
                <h2 class="sec-title title-anim">Related Aricles</h2>
              </div>
            </div>
          </div>

          <div class="row reset-grid">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
              <article class="blog__item">
                <div class="blog__img-wrapper">
                  <a href="{{ route('blogDetails') }}">
                    <div class="img-box">
                      <img class="image-box__item" src="/assets/imgs/blog/1.jpg" alt="Blog Thumbnail">
                      <img class="image-box__item" src="/assets/imgs/blog/1.jpg" alt="BLog Thumbnail">
                    </div>
                  </a>
                </div>
                <h4 class="blog__meta sub-title-anim"><a href="#">UI Design</a> . 02 May 2019</h4>
                <h5><a href="{{ route('blogDetails') }}" class="blog__title sub-title-anim">Ways of lying to yourself about
                    your new
                    relationship.</a></h5>
                <a href="{{ route('blogDetails') }}" class="blog__btn">Read More <span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
              </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
              <article class="blog__item" data-speed="auto">
                <div class="blog__img-wrapper">
                  <a href="{{ route('blogDetails') }}">
                    <div class="img-box">
                      <img class="image-box__item" src="/assets/imgs/blog/2.jpg" alt="Blog Thumbnail">
                      <img class="image-box__item" src="/assets/imgs/blog/2.jpg" alt="BLog Thumbnail">
                    </div>
                  </a>
                </div>
                <h4 class="blog__meta sub-title-anim"><a href="#">UI Design</a> . 02 May 2019</h4>
                <h5><a href="{{ route('blogDetails') }}" class="blog__title sub-title-anim">How to manage a talented and
                    successful de sign
                    team</a></h5>
                <a href="{{ route('blogDetails') }}" class="blog__btn">Read More <span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
              </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
              <article class="blog__item" data-speed="auto">
                <div class="blog__img-wrapper">
                  <a href="{{ route('blogDetails') }}">
                    <div class="img-box">
                      <img class="image-box__item" src="/assets/imgs/blog/3.jpg" alt="Blog Thumbnail">
                      <img class="image-box__item" src="/assets/imgs/blog/3.jpg" alt="BLog Thumbnail">
                    </div>
                  </a>
                </div>
                <h4 class="blog__meta sub-title-anim"><a href="#">UI Design</a> . 02 May 2019</h4>
                <h5><a href="{{ route('blogDetails') }}" class="blog__title sub-title-anim">How to bring fold to your startup
                    company with
                    SoftBurgh</a></h5>
                <a href="{{ route('blogDetails') }}" class="blog__btn">Read More <span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
              </article>
            </div>
          </div>
        </div>
      </section>
        <!-- Related blog end -->


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
@section('script')
<script>
  const id = new URLSearchParams(window.location.search).get('id');
  const query = `
  query MyQuery {
    blogModel(where: {id: "${id}"}) {
      id
      title
      imageLarge {
        url
      }
      description {
        html
      }
      createdAt
      updatedAt
      categories {
        id
        name
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
    body: JSON.stringify({ query }),
  };

  const blogDetails = document.querySelector("#blogDetails");

  (function updateBlogDetails() {
    fetch(url, options)
      .then((res) => res.json())
      .then((res) => {
        const post = res.data.blogModel;
        blogDetails.innerHTML = `
        <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
              <div class="blog__detail-top">
                <h3 class="blog__detail-title animation__word_come">
                  ${post.title}
                </h3>
              </div>
            </div>
            <div class="col-xxl-12">
              <div class="blog__detail-thumb">
                <img src="${post.imageLarge.url}" alt="Blog Thumbnail" data-speed="0.5">
              </div>
            </div>
            <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
              <div class="blog__detail-content">
                ${post.description.html}
              </div>
            </div>
            `;
      })
      .catch((err) => console.log(err));
  })();
</script>
@endsection