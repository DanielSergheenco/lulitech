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
    <title>{{ env('APP_NAME') }} - Digital Agency Creative Portfolio Template</title>
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
    <div class="circle-container two">
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

    @yield('content')

    <!-- Start Contact Section -->
    <div class="contact-section two">
        <div class="container-lg container-fluid">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="section-title text-animation">
                        <h2>Let’s <span>TALK</span></h2>
                        <div class="dash-and-paragraph">
                            <div class="dash"></div>
                            <div class="content-and-social">
                                <p>Crafting a contact text for a digital agency involves providing essential
                                    information for potential clients or collaborators to reach out.</p>
                                <div class="social-area">
                                    <h6>Connect Us</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="6" viewBox="0 0 50 6">
                                        <path d="M50 3L45 0.113249V5.88675L50 3ZM0 3.5H45.5V2.5H0V3.5Z" />
                                    </svg>
                                    <ul>
                                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="bi bi-twitter-x"></i></a>
                                        </li>
                                        <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i
                                                    class="bx bxl-instagram-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-flex justify-content-end align-items-center">
                    <div class="btn_wrapper">
                        <a class="circle-btn btn-hover two" href="contact.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                <path
                                    d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                                </path>
                            </svg> Contact <strong>Now</strong>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Section -->

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

    </script>


</body>

</html>
