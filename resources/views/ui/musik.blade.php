@include('ui.component.header')

<body>
    @include('ui.component.navbar')

    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sn-container">
                        <div class="sn-img">
                            <img src="img/peterpan1.jpg" />
                        </div>
                        <div class="sn-content">
                            <h1 class="sn-title">{{ $data['musik'][0]->judul }}</h1>
                            <p>
                                {{ $data['musik'][0]->deskripsi }}
                            </p>
                        </div>
                    </div>
                    {{-- where music --}}
                    <div class="sn-related">
                        <h2>Related News</h2>
                        <div class="row sn-slider">
                            @foreach($data['musik'] as $row)
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                    <div class="sn-title">
                                        <a href="{{ $row->id }}">{{ $row->judul }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="sw-title">HEADLINE NEWS</h2>
                            <div class="news-list">
                                @foreach($data['headline'] as $row)
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="/detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="/"><img src="img/serumpun.jpg" alt="Image" /></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="tab-news">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        @foreach($data['lates'] as $row)
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="{{ asset('gambar/') }}/{{ $row->image }}" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="/detail-news/{{ $row->id }}">{{ $row->judul }}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="/"><img src="img/serumpun.jpg" alt="Image" /></a>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('ui.component.footer')

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
