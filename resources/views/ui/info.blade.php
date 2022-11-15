@include('ui.component.header');

<body>

    @include('ui.component.navbar');

    <div class="container">
        <div class="row">
            @foreach ($data as $row)
                <div class="col g-3">
                    <div class="card bg-white text-light"
                        style="width:230px; height:280px; box-shadow: 2px 2px 2px rgba(0,0,0,0.8); padding:10px; border:1px solid grey;">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('/foto') }}/{{ $row->foto }}"
                                        class="m-2 pb-2" style="width:200px; height:200px;">
                            </div>
                            <a href="/landing1" class="btn btn-white btn-md mx-auto m-0 p-0"
                                style="width:200px; line-height: 0.5em">
                                <p class="fw-bolder">{{ $row->nama }}</p>
                            </a>
                            <a href="/landing1" class="btn btn-white btn-md mx-auto m-0 p-0"
                                style="width:200px; line-height: 0.1em">
                                <p class="text-secondary">{{ $row->jabatan }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <<!-- Carousel wrapper -->
        
        <!-- Carousel wrapper -->

        @include('ui.component.footer');

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
