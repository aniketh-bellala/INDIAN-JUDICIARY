(function($) {

    $(document).ready(function($) {
        datedisplay();
        renderTime();
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
        });
        //Menu Slide
        /*
        var windoWidth = $(window).width();
        if (windoWidth < 992) {
            $('.sub-menu a').on('click', function($) {});
            $('.sub-menu').on('click', function() {
                $(this).toggleClass('menu-close');
                $(this).find('a').siblings('.dropdown-menu').slideToggle(500);
            });
        }
		*/
    });

    function datedisplay() {
        var d = new Date()
        var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
        var monthname = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")
        $('#datedisplay').text(weekday[d.getDay()] + ", " + d.getDate() + " " + monthname[d.getMonth()] + ", " + d.getFullYear())
    }

    function renderTime() {
        var currentTime = new Date();
        var diem = "AM";
        var h = currentTime.getHours();
        var m = currentTime.getMinutes();
        var s = currentTime.getSeconds();
        setTimeout(renderTime, 1000);
        if (h == 0) {
            h = 12;
        } else if (h > 12) {
            h = h - 12;
            diem = "PM";
        }
        if (h < 10) {
            h = "0" + h;
        }
        if (m < 10) {
            m = "0" + m;
        }
        if (s < 10) {
            s = "0" + s;
        }
        var myClock = document.getElementById('clockDisplay');
        myClock.textContent = h + ":" + m + ":" + s + " " + diem;
        myClock.innerText = h + ":" + m + ":" + s + " " + diem;
    }

    //Mobile Menu

    if ($.fn.owlCarousel) {


        $(".slider-wrapper").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            autoplay: true,
            loop: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            navText: ["<span class='arrow_left'><img src='/assets/images/arrow.png'></span>", "<span class='arrow_right'><img src='/assets/images/arrow.png'></span>"],
            mouseDrag: false,
            touchDrag: false,
        });

        $(".slider-wrapper").on("translate.owl.carousel", function() {
            $(".slide-content *").removeClass("animated fadeInUp").css("opacity", "0");
            $(".slide-content *").removeClass("animated fadeInDown").css("opacity", "0");
        });

        $(".slider-wrapper").on("translated.owl.carousel", function() {
            $(".slide-content *").addClass("animated fadeInUp").css("opacity", "1");
            $(".slide-content *").addClass("animated fadeInDown").css("opacity", "1");
        });


        $('.service-slider').owlCarousel({
            items: 1,
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            navs: true,
        });



        $('.project-slide').owlCarousel({
            items: 4,
            loop: true,
            nav: true,
            loop: true,
            dots: false,
            autoplayHoverPause: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                991: {
                    items: 4
                }
            }
        });

        //    client-area

        $('.sucess_story').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            // autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 1
                },
                991: {
                    items: 1
                }
            }
        });


        $('.rel_links').owlCarousel({
            items: 7,
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });

        //   News Updates


        //Project_Area
        $('.project-slide').owlCarousel({
            items: 4,
            loop: true,
            nav: true,
            loop: true,
            dots: false,
            autoplayHoverPause: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                991: {
                    items: 4
                }
            }
        });


        //    More porject slide

        $('.more-project-slide').owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            margin: 30,
            loop: true,
            dots: false,
            autoplayHoverPause: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
            }
        });

        //    client-area
        $('.client-slide').owlCarousel({
            dots: false,
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            center: true,
            margin: 10,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    center: true,
                    singleItem: true,
                    itemsScaleUp: true
                },
                768: {
                    items: 3,
                    center: true,
                    singleItem: false,
                    itemsScaleUp: false
                },
                960: {
                    items: 3,
                    center: true,
                    singleItem: false,
                    itemsScaleUp: false
                }
            }
        });

    }

    if ($.fn.magnificPopup) {
        $('.proudct-hover a').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
        });
    }
    // Plus Isotope    
    if ($.fn.isotope) {
        $('.porject-list ul li').on('click', function() {
            $(".porject-list ul li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".project-area").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
    }

    $(window).load(function() {

        jQuery(".factorian-slide-preloader-wrap, .factorian-site-preloader-wrap").fadeOut(500);

    });


    // important navigation js
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);
    });


})(jQuery);