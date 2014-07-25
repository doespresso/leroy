var sliding_speed = 1000,
    sl_progress = true,
    reinittimeout;

var router,
    pages,
    mutator,
    pages_count = null,
    slide_pages = new Array();

//yepnope.injectCss(['dev/component/odometer/themes/odometer-theme-minimal.css']);

if (Modernizr.touch) {
    sliding_speed = 300;
//    sl_progress = false;
}

//yepnope({
//    test: Modernizr.touch,
//    yep: 'assets/js/app/fastclick.js',
//    callback: function (url, result, key) {
//        FastClick.attach(document.body);
//        console.log("load fastclick 1");
//    },
//    complete: function () {
//    }
//});

window.onload = function () {
    console.log('wl');
    if (location.hash) { // do the test straight away
        window.scrollTo(0, 0); // execute it straight away
        setTimeout(function () {
            window.scrollTo(0, 0); // run it a bit later also for browser compatibility
        }, 1);
    }
}


//var c_page_id,
//    c_page_index,
//    l_page_id,
//    l_page_index;


function mutate(mutator){
    $("body").removeClass(function (index, css) {
        return (css.match (/\bmutator-\S+/g) || []).join(' ');
    });
    if (mutator !== undefined) {
        $("body").addClass(mutator);
    }
    console.log(mutator);
}

function url2obj(hash) { // обработка хеша
    var action;
    if (hash.substr(0, 1) == '#') {
        action = hash.substr(1)
    } else {
        action = hash;
    }
    var properties = action.split('/');
    var obj = {}
    $.each(properties, function () {
        var p = this.split(':');
        obj[p[0]] = p[1];
    });
    return obj;
}


function indexToid(container_id, i) {
    var id = $("#" + container_id + " .page-slide:eq(" + i + ")").attr("data-hash");
    console.log(container_id, i, "----", id);
    if (id === undefined) id = false;
    return id;
}

function idToindex(container_id, id) {
    var pos = $("#" + container_id + ">.pages-wrapper>.page-slide").index($("#" + container_id + " [data-hash='page:" + id + "']"));
    if (pos == -1) pos = false;
    console.log(container_id, id, "+++", pos);
    return pos;
}

function jump(urlobj, pages) {
    var ind;
    if (urlobj !== 'undefined') {
        if (urlobj.menu !== undefined) {
            console.log("menu action", urlobj.menu);
        }
        if (urlobj.page !== undefined) {
            ind = idToindex("main-pages", urlobj.page);
            if (ind) {
                pages.swipeTo(ind, 0, function (pages) {
                    console.log("JUMP");
                    pages.fireCallback('SlideChangeEnd', pages);
                });
                console.log("INDEX---", ind);
            }
        }
        if (urlobj.photo !== undefined) {
            console.log("photo action", urlobj.photo);
        }
    }
}


yepnope([
    {
        load: {
            'jquery': 'http://'+location.hostname+'/assets/js/app/jquery.js',
            'swiper': 'http://'+location.hostname+'/assets/js/app/swiper.js',
            'swiper_progress': 'http://'+location.hostname+'/assets/js/app/swiper-progress.js',
            'simrou': 'http://'+location.hostname+'/assets/js/app/simrou.js',
//            'jaddress': 'assets/js/app/jquery.address.js',
        },
        callback: {
            'jquery': function (url, result, key) {


                $(window).on("load", function () {

                });


                function menuclose() {
                    $("body").removeClass("menu-slide-open");
                }

                $("#menu-opener").on("click", function (e) {
                    console.log("menu");
                    $("body").addClass("menu-slide-open");
                });

                $("#menu-closer").on("click", function (e) {
                    console.log("menu close");
                    menuclose();
                });


                $(function () {


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


                });

                /////////


            },


            'swiper': function (url, result, key) {
            },

            'simrou': function (url, result, key) {
                console.log("simrou");
                router = new Simrou();

                var navRoute = router.addRoute('/nav').any(function(event,params){
                    console.log("SHOW MENU");
                });

                router.start();

            },


            'swiper_progress': function (url, result, key) {


                function reinitDown(swiper) {
                    if (swiper.activeIndex < swiper.slides.length - 1) {
                        $("#go-page-down").addClass("have-next");
                    }
                    var subpages = $(swiper.activeSlide()).children(".pages-container").length;
                    if (slide_pages[swiper.activeIndex]["slider"]) {
//                        $("#go-showcase").addClass("active");
                        $("#go-page-down").addClass("have-sub");
                        if (swiper.activeIndex !== 0) $("#go-showcase").addClass("active");
                    } else {
                    }
                    $("#go-back").removeClass("active");
                }

                function initpages(slider) {
                    var loading_timer = setTimeout(function () {
                        $("body").addClass("loaded");
                        setTimeout(function () {$("#page-loading-frame").remove()},1000);
                        presentation.startAutoplay();
                    }, 500);
                    pages_count = slider.slides.length;
                    var pages = slider.slides;
                    var datagallery;
                    pages.forEach(function (page, index) {
                        var slide_page = null;
                        slide_page = $(page).find('.pages-container');
                        slide_pages[index] = new Array();
                        slide_pages[index]["id"] = $(page).attr("id");
                        if (slide_page.length == 1) {
                            console.log('///////', slide_page.attr("id"), slide_page, index);
                            slide_pages[index]["slider"] = slide_page.swiper({
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
                                    console.log("subslider");
                                    for (var i = 0; i < swiper.slides.length; i++) {
                                        swiper.slides[i].style.zIndex = i;
                                    }
                                },
                                onSlideChangeStart: function (swiper) {
                                },
                                onSlideChangeEnd: function (swiper) {
                                    mutator = $(swiper.activeSlide()).attr("data-mutate");
                                    mutate(mutator);
                                    if (swiper.activeIndex > 0) {
                                        console.log("this is photo");
                                        $("#go-back").addClass("active");
                                        $("#go-showcase").removeClass("active");
                                    } else {
                                        $("#go-back").removeClass("active");
                                        $("#go-showcase").addClass("active");
                                    }
                                }
                            });
                        } else {
                            slide_pages[index]["slider"] = null;
                        }
//
//
//                        datagallery = $(page).attr("data-photos");
//
//                        if (datagallery) {
//                            console.log("ok", datagallery);
//                            $(page).attr("data-photos-loaded", "1");
//                            $(page).find(".go-showcase").addClass("active");
//                        }

                    });
                    console.log('|||||||', slide_pages);
//                    idToindex("main-pages","menu");
//                    indexToid("main-pages","2");
                }

                pages = new Swiper('#main-pages', {
                    mode: 'vertical',
                    noSwiping: true,
                    mousewheelControl: true,
                    speed: 500,
                    resizeReInit: true,
                    wrapperClass: 'pages-wrapper',
                    slideClass: 'page-slide',
                    onSwiperCreated: function (swiper) {
                        console.log('pages first init-----------------', swiper.activeIndex);
                        initpages(swiper);
//                        jump(url2obj(window.location.hash), swiper);
                        reinitDown(swiper);
                    },
                    onFirstInit: function (swiper) {
                        mutator = $(swiper.activeSlide()).attr("data-mutate");
                        mutate(mutator);
                    },
                });

                pages.addCallback('SlideChangeStart', function (swiper) {
                    $("#go-showcase").removeClass("active");
                    $("#go-page-down").removeClass("have-sub have-next");
                    $("#go-back").removeClass("active");
                    if (slide_pages[swiper.activeIndex]["slider"]) {
                        slide_pages[swiper.activeIndex]["slider"].swipeTo(0, 0);
                    }
                });
                pages.addCallback('SlideChangeEnd', function (swiper) {
                    if (swiper.activeIndex !== 0) {
//                        window.location.hash = $(swiper.activeSlide()).attr("data-hash");
                        presentation.stopAutoplay();
                    } else {
                        window.location.hash = '';
//                        presentation.startAutoplay();
                    }

                    mutator = $(swiper.activeSlide()).attr("data-mutate");
                    mutate(mutator);

                    console.log("CHANGE END");
                    reinitDown(swiper);
                });
                pages.addCallback('TouchStart', function (swiper) {
                    console.log("touch");
                });


                //////////////show next more ///////////
                //////////////show next more ///////////
                //////////////show next more ///////////


                $("#go-page-down").on("click", function (e) {
                    e.preventDefault();
                    pages.swipeNext();
                })

                $("#go-showcase").on("click", function (e) {
                    e.preventDefault();
                    slide_pages[pages.activeIndex]["slider"].swipeNext();
                });

                $("#go-back").on("click", function (e) {
                    e.preventDefault();
                    slide_pages[pages.activeIndex]["slider"].swipeTo(0);
                })


                //////////////show next more ///////////
                //////////////show next more ///////////
                //////////////show next more ///////////

///////////////////////////presentation//////////////////////////
///////////////////////////presentation//////////////////////////
///////////////////////////presentation//////////////////////////


                var presentation = new Swiper('#main', {
                    mode: 'horizontal',
                    mousewheelControl: false,
                    speed: sliding_speed,
                    autoplay: 5000,
                    autoplayDisableOnInteraction: true,
                    roundLengths: true,
                    shortSwipes: true,
//                    longSwipesRatio: 0.2,

                    resizeReInit: true, // на сколько я понимаю этот параметр не учитывается [1]
//                    wrapperClass: 'swiper-wrapper',
//                    slideClass: 'swiper-slide',
//                    progress: sl_progress,
                    progress: false,
                    onFirstInit: function (swiper) {

                        console.log("first init");
//                        $(window).on("resize", function () {
//                            if (reinittimeout) {
//                                clearTimeout(reinittimeout);
//                                reinittimeout = null;
//                            }
//                            reinittimeout = setTimeout(function () {
//                                console.log("dsjflkjsdflksdjfklsdjflksdf");
//                                swiper.reInit();
//                                for (var i = 0; i < swiper.slides.length; i++){
//                                    swiper.setTransition(swiper.slides[i], 0);
//                                    console.log("set transitiion",i);
//                                }
//                                swiper.swipeTo(0, 1);
//                            }, 300);
//                        });

                    },
                    onInit: function (swiper) {
                        setTimeout(function () {
                            for (var i = 0; i < swiper.slides.length; i++) {
                                swiper.setTransform(slide, 'translate3d(0,0,0)');
                            }
                        }, 1000);
                        swiper.swipeTo(0, 1);
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

                presentation.addCallback('SlideChangeEnd', function (swiper) {
                    mutator = $(swiper.activeSlide()).attr("data-mutate");
                    mutate(mutator);
                });


                function resetprogress() {
                    console.log("DO IT");
                    presentation.reInit();
                }

                $("[data-action=reset]").on("click", function (e) {
                    // что интересно здесь (по нажатию) "резет" происходит корректно
                    console.log("reset");
                    presentation.reInit();
                    presentation.swipeTo(0, 1);

                });


///////////////////////////gallries//////////////////////////
///////////////////////////gallries//////////////////////////
///////////////////////////gallries//////////////////////////


            },

//            'jaddress': function (url, result, key) {
////                $.address.change(function(event) {
////                    console.log(event.value,'######',$.address.path());
////                    jump(url2obj($.address.path()),pages);
////                });
//
////                var hash = window.location.hash.substr(1);
////                console.log(">>>>>>>");
////                console.log(hash);
//////                jump(url2obj(window.location.hash),pages);
////                console.log(">>>>>>>");
//
//            },


        }
    }
]

);