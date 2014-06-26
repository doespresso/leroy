var sliding_speed = 2500,
    sl_progress = true,
    reinittimeout;

//yepnope.injectCss(['dev/component/odometer/themes/odometer-theme-minimal.css']);

if (Modernizr.touch) {
//    sliding_speed = 500;
//    sl_progress = false;
}

yepnope({
    test: Modernizr.touch,
    yep: 'assets/js/app/fastclick.js',
    callback: function (url, result, key) {
        FastClick.attach(document.body);
        console.log("load fastclick 1");
    },
    complete: function () {
    }
});

window.onload = function () {
    console.log('wl');
    if (location.hash) { // do the test straight away
        window.scrollTo(0, 0); // execute it straight away
        setTimeout(function () {
            window.scrollTo(0, 0); // run it a bit later also for browser compatibility
        }, 1);
    }
}




var c_page_id,
    c_page_index,
    l_page_id,
    l_page_index;


yepnope([
    {
        load: {
            'jquery': 'assets/js/app/jquery.js',
            'swiper': 'assets/js/app/swiper.js',
//            'swiper_hash': 'assets/js/app/swiper-hash.js',
            'swiper_progress': 'assets/js/app/swiper-progress.js',
        },
        callback: {
            'jquery': function (url, result, key) {


                ////////////////////////////reset link #
                $(window).on("load", function () {
                    console.log("win load");
                });




                /////

//                $(document).ready(function () {
//                    $(".section-wrapper").css('height', $(window).height() + 'px');
//                    console.log("LOAD");
//                });


                $(function () {
                    $('a[href*=#]:not([href=#])').click(function () {
                        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            return false;
                            if (target.length) {
                                $('html,body').animate({
                                    scrollTop: target.offset().top
                                }, 1000);
                                return false;
                            }
                        }
                    });

                    function changebg(img, mutator_class) {
                        if (mutator_class != undefined) {
                            $("body").addClass(mutator_class);
                        }
                        else {
                            $("body").removeClass('mutator-bg-dark');
                        }
                        $("#slide-bg").css({
                            "background-image": "url(" + img + ")",
                        });
                    }

                    $('a.load-gallery').on("click", function (e) {
                        e.preventDefault();
                        var gal_id = $(this).attr("data-attr-galid"),
                            target_id = $(this).attr("data-attr-target");
                        if (!(target_id === undefined || target_id === '')) {
                            $("#" + target_id).load(
                                "photos/gal/" + gal_id,
                                function (response, status, xhr) {
                                    if (status == "success") {
                                        console.log("sdlfkhadsfohasdkjfhlsadf");
                                        $("#" + target_id).show();

                                        var photos = $(".photo-item img");
                                        photos.each(
                                            function (index) {
                                                var src = $(this).parent().attr("href") || undefined;
                                                $(this).load(
                                                    src,
                                                    function (response, status, xhr) {
                                                        console.log(status);
                                                        var pself = this,
                                                            psrc = src;
                                                        setTimeout(function () {
                                                            $(pself).attr("src", psrc);
//                                        $("#slide-bg").css("background-image","url('http://localhost/img/bigpic.jpg')");
                                                            $(pself).parent().addClass('loaded')
                                                        }, 1500);


                                                    }
                                                );

                                            }
                                        );

                                        $("[rel=changebg]").on("click", function (e) {
                                            e.preventDefault();
                                            changebg($(this).attr("href"), $(this).attr("data-attr-colormutator"));
                                        });
                                    }
                                }
                            );
                        }

                    });


                });

                /////////


            },

            'swiper': function (url, result, key) {


            },

            'swiper_progress': function (url, result, key) {


                function initpages(slider) {
                    var loading_timer = setTimeout(function () {
                        $("body").removeClass("loading");
                        presentation.startAutoplay();
                    }, 500);
                    console.log(slider.slides.length, 'PAGES');
                    var pages = slider.slides;
                    var datagallery;
                    pages.forEach(function (page) {
                        datagallery = $(page).attr("data-photos");
                        console.log(datagallery, "GALLERY");
                        if (datagallery) {
                            console.log("ok", datagallery);
                            $(page).attr("data-photos-loaded", "1");
                            $(page).find(".go-showcase").addClass("active");
                        }
                    });
                }

                var pages = new Swiper('#main-pages', {
                    mode: 'vertical',
                    noSwiping: true,
                    mousewheelControl: true,
                    speed: 500,
                    resizeReInit: true,
                    wrapperClass: 'pages-wrapper',
                    slideClass: 'page-slide',
                    onSwiperCreated: function (swiper) {
                        initpages(swiper);
                    }
                });

                pages.addCallback('SlideChangeStart', function (swiper) {
                    $("#go-showcase").removeClass("active");
                });
                pages.addCallback('SlideChangeEnd', function (swiper) {
                    c_page_id = $(pages.activeSlide()).attr("id");
                    c_page_index = pages.activeIndex;
                    l_page_index = pages.previousIndex;
                    console.log(c_page_id, c_page_index, l_page_index);
//                    sub_pages.swipeTo(0);
                    if (c_page_index !== 0) {
                        presentation.stopAutoplay();
                    } else {
                        presentation.startAutoplay();
                    }
                    //////showcase
                    if ($(swiper.activeSlide()).attr("data-photos")) {
                        $("#go-showcase").addClass("active");
                    } else {
                    }
                });
                pages.addCallback('TouchStart', function (swiper) {
                    console.log("touch");
                });





                var presentation = new Swiper('#main', {
                    mode: 'horizontal',
                    mousewheelControl: false,
                    speed: sliding_speed,
                    autoplay: 5000,
                    autoplayDisableOnInteraction: true,
                    roundLengths:true,
                    shortSwipes: true,
//                    longSwipesRatio: 0.2,

                    resizeReInit: false, // на сколько я понимаю этот параметр не учитывается [1]
//                    wrapperClass: 'swiper-wrapper',
//                    slideClass: 'swiper-slide',
                    progress: sl_progress,
                    onFirstInit:function(swiper){

                        console.log("first init");
                        $(window).on("resize", function () {
                            if (reinittimeout) {
                                clearTimeout(reinittimeout);
                                reinittimeout = null;
                            }
                            reinittimeout = setTimeout(function () {
                                console.log("dsjflkjsdflksdjfklsdjflksdf");
                                swiper.reInit();
                                for (var i = 0; i < swiper.slides.length; i++){
                                    swiper.setTransition(swiper.slides[i], 0);
                                    console.log("set transitiion",i);
                                }
                                swiper.swipeTo(0, 1);
                            }, 300);
                        });

                    },
                    onInit: function(swiper) {



                    },

                    onSwiperCreated: function (swiper) {
                        swiper.stopAutoplay();
                    },

                    onProgressChange: function (swiper) {
                        for (var i = 0; i < swiper.slides.length; i++) {
                            var slide = swiper.slides[i];
                            var progress = slide.progress;
                            var translate = progress * swiper.width;
                            var opacity = 1 - Math.min(Math.abs(progress), 1);
                            slide.style.opacity = opacity;
                            swiper.setTransform(slide, 'translate3d(' + translate + 'px,0,0)');
                        }
                    },
                    onTouchStart: function (swiper, speed) {
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.setTransition(swiper.slides[i], 0);
                        }
                    },
                    onSetWrapperTransition: function (swiper, speed) {
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.setTransition(swiper.slides[i], speed);
                        }
                    },
                });


                function resetprogress() {
                    console.log("DO IT");
                    presentation.reInit();
                }

                $("[data-action=reset]").on("click", function (e) {
                    // что интересно здесь (по нажатию) "резет" происходит корректно
                    console.log("reset");
                    presentation.reInit();
                    presentation.swipeTo(0,1);

                });


//                var doit;
//                window.onresize = function() {
//                    clearTimeout(doit);
//                    doit = setTimeout(function() {
//                        resetprogress();
//                    }, 1000);
//                };
// внешний запуск также отрабатывает некорректно




                $("#main-pages .pages-container").each(function () {
                    _self = this;
                    console.log("subslider");
                    $(this).swiper({
                        mode: 'horizontal',
                        mousewheelControl: false,
                        speed: 400,
                        resizeReInit: true,
                        wrapperClass: 'pages-wrapper',
                        slideClass: 'page-slide',
                        progress: true,
                        onProgressChange: function (swiper) {
                            for (var i = 0; i < swiper.slides.length; i++) {
                                var slide = swiper.slides[i];
                                var progress = slide.progress;
                                var translate, boxShadow;
                                if (progress > 0) {
                                    translate = progress * swiper.width;
                                    boxShadowOpacity = 0;
                                }
                                else {
                                    translate = 0;
                                    boxShadowOpacity = 1 - Math.min(Math.abs(progress), 0.5);
                                }
//                                slide.style.boxShadow='0px 0px 10px rgba(0,0,0,'+boxShadowOpacity+')';
                                swiper.setTransform(slide, 'translate3d(' + (translate) + 'px,0,0)');
                            }
                        },
                        onTouchStart: function (swiper) {
                            for (var i = 0; i < swiper.slides.length; i++) {
                                swiper.setTransition(swiper.slides[i], 0);
                            }
                        },
                        onSetWrapperTransition: function (swiper, speed) {
                            for (var i = 0; i < swiper.slides.length; i++) {
                                swiper.setTransition(swiper.slides[i], speed);
                            }
                        },
                        onInit: function (swiper) {
                            for (var i = 0; i < swiper.slides.length; i++) {
                                swiper.slides[i].style.zIndex = i;
                            }
                        }
                    });
                });












                $("#go-page-down").on("click", function (e) {
                    e.preventDefault();
                    pages.swipeNext();
                })

//                    var sw = new Swiper('#main', {
//                        watchActiveIndex: true,
//                        centeredSlides: false,
//                        resizeReInit: true,
//                        speed: sliding_speed,
//                        followFinger: true,
//                        paginationClickable: true,
//                        pagination: '#presentation-pager',
//                        autoplay: 5000,
//                        loop: true,
//                        progress: sl_progress,
//                        onFirstInit: function (swiper) {
//                            $("body").removeClass("loading");
//                            setTimeout(function () {
//                                $("#main-loader").css("display", "none")
//                            }, 2000);
//                        },
//                        onInit: function (swiper) {
//                            console.log("gen init");
//                        },
//                        onProgressChange: function (swiper) {
//                            for (var i = 0; i < swiper.slides.length; i++) {
//                                var slide = swiper.slides[i];
//                                var progress = slide.progress;
//                                var translate = progress * swiper.width;
//                                var opacity = 1 - Math.min(Math.abs(progress), 1);
//                                slide.style.opacity = opacity;
//                                swiper.setTransform(slide, 'translate3d(' + translate + 'px,0,0)');
//                            }
//                        },
//                        onTouchStart: function (swiper, speed) {
//                            for (var i = 0; i < swiper.slides.length; i++) {
//                                swiper.setTransition(swiper.slides[i], 0);
//                            }
//                        },
//                        onSetWrapperTransition: function (swiper, speed) {
//                            for (var i = 0; i < swiper.slides.length; i++) {
//                                swiper.setTransition(swiper.slides[i], speed);
//                            }
//                        },
//                        onSlideChangeEnd: function (swiper, direction) {
//                            console.log(direction);
//                            $(sw.activeSlide()).find('.title').addClass('animated');
//                        }
//                    });
//                    $("#presentation .next").on("click", function (event) {
//                        event.preventDefault();
//                        sw.swipeNext();
//                    });
//                    $("#presentation .prev").on("click", function (event) {
//                        event.preventDefault();
//                        sw.swipePrev();
//                    });


            },
        }
    }
]

);