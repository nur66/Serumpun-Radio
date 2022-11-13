@include('ui.component.header')

<body>

    @include('ui.component.navbar')
    <!-- Nav Bar End -->

    <!-- Top News Start-->
    <div class="top-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                        @foreach($data['musik'] as $row)
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                <div class="tn-title">
                                    <a href="/detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-6 tn-right">
                    <div class="row">
                        @foreach($data['hiburan'] as $row)
                        <div class="col-md-4">
                            <div class="tn-img p-1">
                                <img src="{{ asset('gambar/') }}/{{ $row->image }}" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 175px"/>
                                <div class="tn-title">
                                    <a href="detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->

    {{-- Radio --}}
    <div class="radio">
        {{-- <div class="container-fluid"> --}}
            {{-- <div class="row"> --}}
                <div class="col-md-12">
                    <audio id="myAudio" class="pt-2" controls src='http://a2.siar.us:8020/radio.mp3' />
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
    {{-- End Radio --}}

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-6">
                    <h2>POLITIK</h2>
                    <div class="row cn-slider">
                        @foreach($data['politik'] as $row)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('gambar') }}/{{ $row->image }}" />
                                <div class="cn-title">
                                    <a href="/detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>EKONOMI</h2>
                    <div class="row cn-slider">
                        @foreach($data['ekonomi'] as $row)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                <div class="cn-title">
                                    <a href="/detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2>KESEHATAN</h2>
                    <div class="row cn-slider">
                        @foreach($data['kesehatan'] as $row)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                <div class="cn-title">
                                    <a href="/detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>OLAHRAGA</h2>
                    <div class="row cn-slider">
                        @foreach($data['olahraga'] as $row)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                <div class="cn-title">
                                    <a href="detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Tab News Start-->
    <div class="tab-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#featured"> HEADLINE NEWS </a>
                        </li>


                        <div class="tab-content">
                            @foreach($data['headline'] as $row)
                            <div id="featured" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>

                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#m-viewed">POPULAR NEWS</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div id="m-viewed" class="container tab-pane active">
                            @foreach($data['populer'] as $row)
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                </div>
                                <div class="tn-title">
                                    <a href="detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div id="m-read" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet Nur</a>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-1.jpg" />
                                <div class="mn-title">
                                    <a href="">KEPALA MEREKA BANG</a>
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
                            <li><a href="#politik">Politik</a></li>
                            <li><a href="">Ekonomi</a></li>
                            <li><a href="">Kesehatan</a></li>
                            <li><a href="">Olah Raga</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->

    <!-- Footer Bottom Start -->
    @include('ui.component.footer');
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <script>
        (function($) {
            "use strict";

            // Sticky Navbar
            $(window).scroll(function() {
                if ($(this).scrollTop() > 150) {
                    $('.nav-bar').addClass('nav-sticky');
                } else {
                    $('.nav-bar').removeClass('nav-sticky');
                }
            });


            // Dropdown on mouse hover
            $(document).ready(function() {
                function toggleNavbarMethod() {
                    if ($(window).width() > 768) {
                        $('.navbar .dropdown').on('mouseover', function() {
                            $('.dropdown-toggle', this).trigger('click');
                        }).on('mouseout', function() {
                            $('.dropdown-toggle', this).trigger('click').blur();
                        });
                    } else {
                        $('.navbar .dropdown').off('mouseover').off('mouseout');
                    }
                }
                toggleNavbarMethod();
                $(window).resize(toggleNavbarMethod);
            });


            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


            // Top News Slider
            $('.tn-slider').slick({
                autoplay: true,
                infinite: true,
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1
            });


            // Category News Slider
            $('.cn-slider').slick({
                autoplay: false,
                infinite: true,
                dots: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });


            // Related News Slider
            $('.sn-slider').slick({
                autoplay: false,
                infinite: true,
                dots: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        })(jQuery);
    </script>
</body>

</html>
