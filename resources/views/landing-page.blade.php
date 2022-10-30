<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serumpun Radio</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
    <meta content="Bootstrap News Template - Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>info@mail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="">About</a>
                            <a href="">Privacy</a>
                            <a href="">Terms</a>
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->

        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="/testing">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="img/ads-1.jpg" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/testing" class="nav-item nav-link active">HOME</a>
                            <a href="/berita" class="nav-item nav-link active">BERITA</a>
                            <a href="/testing" class="nav-item nav-link active">MUSIK</a>
                            <!-- <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Sub Item 1</a>
                <a href="#" class="dropdown-item">Sub Item 2</a>
              </div>
            </div> -->
                            <a href="" class="nav-item nav-link">INFO</a>
                            <a href="contact.html" class="nav-item nav-link">KONTAK</a>
                        </div>
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-450x350-1.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-450x350-2.jpg" />
                                    <div class="tn-title">
                                        <a href="">Integer hendrerit elit eget purus sodales maximus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Olahraga</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Ekonomi</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-5.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Politik</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-5.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Kesehatan</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Headline News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="latest" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">BERITA </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">OLAHRAGA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">MUSIK</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-5.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                                <li><a href="">Politik</a></li>
                                <li><a href="">Olahraga</a></li>
                                <li><a href="">Ekonomi</a></li>
                                <li><a href="">Kesehatan</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Our Address</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Serumpun Radio</p>
                                <p><i class="fa fa-envelope"></i>Jl. Raya Sungai Panas No.20, Bengkong Laut, Kec.
                                    Bengkong, Kota Batam,
                                    Kepulauan Riau 29444</p>
                                <p><i class="fa fa-phone"></i>+62778 751 9700</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Accessibility help</a>
                    <a href="">Advertise with us</a>
                    <a href="">Contact us</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="">Your Site Name</a>. All Rights Reserved</p>
                    </div>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <div class="col-md-6 template-by">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
</body>

</html>
