<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('main/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="{{ asset('main/assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('main/assets/css/swiper-bundle.min.css') }}">
    <!--Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('main/assets/css/nice-select.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('main/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/jquery.fancybox.min.css') }}">
    <!-- BoxIcon  CSS -->
    <link href="{{ asset('main/assets/css/boxicons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('main/assets/css/style.css') }}">
    <!-- Title -->
    <title>Axleo - Digital Agency Creative Portfolio Template</title>
    <link rel="icon" href="{{ asset('main/assets/img/sm-logo.svg') }}" type="image/gif" sizes="20x20">
</head>

<body id="body" class="tt-smooth-scroll tt-magic-cursor">
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <div class="tt-style-switch index-dark">
        <i class="bi bi-brightness-low-fill"></i>
    </div>
    <!-- scroll top -->
    <div class="circle-container">
        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.03516 0.416666L7.03516 15H8.28516L8.28516 0.416666H7.03516Z" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.28516 1.04115C8.28516 3.98115 5.70016 6.38281 2.94349 6.38281H2.31849V5.13281H2.94349C5.03599 5.13281 7.03516 3.26448 7.03516 1.04115V0.416979H8.28516V1.04115Z" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.03333 1.04115C7.03333 3.98115 9.61833 6.38281 12.375 6.38281H13V5.13281H12.375C10.2817 5.13281 8.28333 3.26448 8.28333 1.04115V0.416979H7.03333V1.04115Z" />
            </g>
        </svg>
    </div>



  @include('main.header')
  @include('orders.web_modal')
    <!-- Start Interactive Banner Section -->
    <div class="interactive-banner-section">
    <!--
        <ul class="social-icon">
            <li><a href="https://99designs.com/">99 Design</a></li>
            <li><a href="https://dribbble.com/"><i class="bi bi-dribbble"></i>Dribbble</a></li>
        </ul>
        <ul class="social-icon two">
            <li><a href="https://www.behance.net/"><i class="bi bi-behance"></i> Behance </a></li>
            <li><a href="https://www.pinterest.com/"><i class="bi bi-pinterest"></i> Pinterest</a></li>
        </ul>
    -->
        <ul class="interactive-banner-img-group"
            style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/interactive-01.jpg') }});">
            <li class="single-banner-bg" id="background-panel-0"
                style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/2.jpg') }});">
            </li>
            <li class="single-banner-bg" id="background-panel-1"
                style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/3.jpg') }});">
            </li>
            <li class="single-banner-bg" id="background-panel-2"
                style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/interactive-03.jpg') }});">
            </li>
            <li class="single-banner-bg" id="background-panel-3"
                style="background: linear-gradient(rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.6) 100%), url({{ asset('main/img/1.jpg') }});">
            </li>
            <li class="single-banner-bg" id="background-panel-4"
                style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/interactive-02.jpg') }});">
            </li>
        </ul>
        <ul class="interactive-list">
            <li class="ineteractive-single-item" data-show="#background-panel-0">
                <div class="responsive-bg-img"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/2.jpg') }});">
                </div>
                <div class="card-content">
                    <div class="catgory-and-title">
                        <a href="portfolio-showcase.html">Get a qoute for</a>
                        <h3><a href="portfolio-details.html">Social Media Marketing</a></h3>
                    </div>
                    <p>Social media is crucial for businesses to reach a wider audience and build brand awareness, fostering direct engagement with customers.</p>
                </div>
            </li>
            <li class="ineteractive-single-item" data-show="#background-panel-1">
                <div class="responsive-bg-img"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/3.jpg') }});">
                </div>
                <div class="card-content">
                    <div class="catgory-and-title">
                        <a href="portfolio-showcase.html">Get a qoute for</a>
                        <h3><a href="portfolio-details.html">Search Engine Optimization</a></h3>
                    </div>
                    <p>Search engine optimization is essential for increasing a business's online visibility, driving organic traffic to its website, and enhancing customer reach.</p>
                </div>
            </li>
            <li class="ineteractive-single-item" data-show="#background-panel-2">
                <div class="responsive-bg-img"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/interactive-03.jpg') }});">
                </div>
                <div class="card-content">
                    <div class="catgory-and-title">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a qoute for</a>
                        <h3><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">WEB Development</a></h3>
                    </div>
                    <p>Web development is vital for creating a strong online presence, allowing businesses to showcase their products and services to a global audience. </p>
                </div>
            </li>
            <li class="ineteractive-single-item" data-show="#background-panel-3">
                <div class="responsive-bg-img"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/1.jpg') }});">
                </div>
                <div class="card-content">
                    <div class="catgory-and-title">
                        <a href="portfolio-showcase.html">Get a qoute for</a>
                        <h3><a href="portfolio-details.html">Search Engine Marketing</a></h3>
                    </div>
                    <p>Search engine marketing (SEM) is crucial for businesses to increase their visibility on search engines, driving targeted traffic through paid advertising.</p>
                </div>
            </li>
            <li class="ineteractive-single-item" data-show="#background-panel-4">
                <div class="responsive-bg-img"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('main/img/interactive-02.jpg') }});">
                </div>
                <div class="card-content">
                    <div class="catgory-and-title">
                        <a href="portfolio-showcase.html">Get a qoute for</a>
                        <h3><a href="portfolio-details.html">E-mail Marketing</a></h3>
                    </div>
                    <p>Email marketing is essential for businesses to maintain direct communication with customers, fostering relationships and encouraging repeat business. </p>
                </div>
            </li>
        </ul>
    </div>
    <!-- End Interactive Banner Section -->

    @include('main.footer')

    <!--  Main jQuery  -->
    <script src="{{ asset('main/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="{{ asset('main/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/bootstrap.min.js') }}"></script>
    <!-- Swiper slider JS -->
    <script src="{{ asset('main/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/slick.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('main/assets/js/waypoints.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('main/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Nice Select  JS -->
    <script src="{{ asset('main/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Fancybox  JS -->
    <script src="{{ asset('main/assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Isotope  JS -->
    <script src="{{ asset('main/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- GSAP  JS -->
    <script src="{{ asset('main/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('main/assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/SplitText.min.js') }}"></script>

    <!-- Marquee  JS -->
    <script src="{{ asset('main/assets/js/jquery.marquee.min.js') }}"></script>

    <script src="{{ asset('main/assets/js/main.js') }}"></script>
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 45000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>


</body>

</html>
