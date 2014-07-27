var sliding_speed = 1000,
    sl_progress = true,
    reinittimeout;

var indexByalias,
    current_hash,
    current_section,
    current_subsection,
    router,
    sections_in_slider,
    mutator,
    sections_count = null,
    sections = new Array();

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
//    console.log(mutator);
}

//function url2obj(hash) { // обработка хеша
//    var action;
//    if (hash.substr(0, 1) == '#') {
//        action = hash.substr(1)
//    } else {
//        action = hash;
//    }
//    var properties = action.split('/');
//    var obj = {}
//    $.each(properties, function () {
//        var p = this.split(':');
//        obj[p[0]] = p[1];
//    });
//    return obj;
//}


//function indexToid(container_id, i) {
//    var id = $("#" + container_id + " .page-slide:eq(" + i + ")").attr("data-hash");
//    console.log(container_id, i, "----", id);
//    if (id === undefined) id = false;
//    return id;
//}
//
//function idToindex(container_id, id) {
//    var pos = $("#" + container_id + ">.pages-wrapper>.page-slide").index($("#" + container_id + " [data-hash='page:" + id + "']"));
//    if (pos == -1) pos = false;
//    console.log(container_id, id, "+++", pos);
//    return pos;
//}

//function jump(urlobj, pages) {
//    var ind;
//    if (urlobj !== 'undefined') {
//        if (urlobj.menu !== undefined) {
//            console.log("menu action", urlobj.menu);
//        }
//        if (urlobj.page !== undefined) {
//            ind = idToindex("main-pages", urlobj.page);
//            if (ind) {
//                sections_in_slider.swipeTo(ind, 0, function (sections_in_slider) {
//                    console.log("JUMP");
//                    sections_in_slider.fireCallback('SlideChangeEnd', sections_in_slider);
//                });
//                console.log("INDEX---", ind);
//            }
//        }
//        if (urlobj.photo !== undefined) {
//            console.log("photo action", urlobj.photo);
//        }
//    }
//}




yepnope([
    {
        load: {
            'jquery': 'http://'+location.hostname+'/assets/js/app/jquery.js',
            'underscore': 'http://'+location.hostname+'/assets/js/app/underscore.js',
            'swiper': 'http://'+location.hostname+'/assets/js/app/swiper.js',
            'swiper_progress': 'http://'+location.hostname+'/assets/js/app/swiper-progress.js',
            'simrou': 'http://'+location.hostname+'/assets/js/app/simrou.js',
        },
        callback: {

            'underscore': function (url, result, key) {
                indexByalias = function (slider, params) {
                    console.log("->", params);
                    var elem = _.find(slider.slides, function (num) {
                        return num.getData("alias") == "/page/" + params.page;
                    });
                    console.log(elem);
                    var elemindex = [0, 0];

                    if (elem !== undefined) {
                        elemindex[0] = _.indexOf(slider.slides, elem);
                        console.log(elem);
                        if (params.stage) {

                            var subslider = slider.slides[elemindex[0]].getData("subslider").slides;
                            var subelem = _.find(subslider, function (num) {
                                return num.getData("alias") == "/page/" + params.page + "/stage/" + params.stage;
                            });
                            if (subelem !== undefined){
                              elemindex[1] = _.indexOf(subslider, subelem);
                            }
                        }
                    }

                    return elemindex;
                }
            },

            'jquery': function (url, result, key) {
                $(window).on("load", function () {});
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

                });
            },


            'swiper': function (url, result, key) {
            },

            'simrou': function (url, result, key) {
                console.log("simrou");
                router = new Simrou();

                var pageRoute = router.addRoute('/page/:page').any(function(event,params){
                    if(current_hash == '/page/'+params.page) {
                        current_hash = null;
                    }
                    else {
                        current_hash = '/page/'+params.page;
                        var section_index = indexByalias(sections_in_slider,params);
                        sections_in_slider.swipeTo(section_index[0]);
                        console.log("page",params.page);
                    }
                });
                var photoRoute = router.addRoute('/page/:page/stage/:stage').any(function(event,params){
                    if(current_hash == '/page/'+params.page+"/stage/"+params.stage) {
                        current_hash = null;
                    }
                    else {
                        console.log("STAGE");
                        current_hash = '/page/'+params.page+"/stage/"+params.stage
                        var section_index = indexByalias(sections_in_slider,params);
                        console.log(section_index);
//                        sections_in_slider.swipeTo(section_index[0]);
                        sections_in_slider.swipeTo(section_index[0]);
                        sections_in_slider.slides[section_index[0]].getData("subslider").swipeTo(section_index[1],1);
                        console.log("stage",params.stage);
                    }
                });

                router.start();

            },


            'swiper_progress': function (url, result, key) {


                function reinitDown(swiper) {
                    if (swiper.activeIndex < swiper.slides.length) {
                        $("#go-page-down").addClass("have-next");
                    }
                    if (swiper.activeSlide().getData("photos")) {
//                        $("#go-page-down").addClass("have-sub");

                        if (swiper.activeSlide().getData("subslider").activeIndex > 0) {
                            $("#go-showcase").removeClass("active");
                            $("#go-back").addClass("active");

                    } else {
                        $("#go-back").removeClass("active");
                        $("#go-showcase").addClass("active");
                    }
                    }
//                    $("#go-back").removeClass("active");
                }


                function initpages(slider) {

                    var loading_timer = setTimeout(function () {
                        $("body").addClass("loaded");
                        setTimeout(function () {$("#page-loading-frame").remove()},300);
                        presentation.startAutoplay();
                    }, 500);

                    var sections_in_slider = slider.slides;

                    slider.slides.forEach(function (section, index) {
                        section.setData("alias",$(section).attr("data-hash"));
                        section.setData("title",$(section).find("h3").text());

                        var subslider_container = $(section).find('.pages-container[data-level="2"]');
                        var subslider_photos = false;
                        subslider_photos = ($(section).find('.pages-container .page-slide[data-type="photo"]').first().length > 0);
                        section.setData("photos",subslider_photos);


                            section.setData("subslider",subslider_container.swiper({
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
                                onFirstInit: function (swiper) {
                                    console.log("subbb");
                                    for (var i = 0; i < swiper.slides.length; i++) {
                                        swiper.slides[i].style.zIndex = i;
                                        swiper.slides[i].setData("alias",$(swiper.slides[i]).attr("data-hash"));
                                        console.log("photohash",swiper.slides[i].getData("alias"));
                                    }
                                },
                                onSlideChangeStart: function (swiper) {
                                },
                                onSlideChangeEnd: function (swiper) {
                                    mutator = $(swiper.activeSlide()).attr("data-mutate");
                                    mutate(mutator);
                                    reinitDown(slider);
                                    current_hash = swiper.activeSlide().getData("alias");
                                    window.location.hash = current_hash;
                                }
                            })
                        );
                    });

                }

                sections_in_slider = new Swiper('#main-pages', {
                    mode: 'vertical',
                    noSwiping: true,
                    mousewheelControl: true,
                    speed: 500,
                    resizeReInit: true,
                    wrapperClass: 'pages-wrapper',
                    slideClass: 'page-slide',
                    onSwiperCreated: function (swiper) {
                        initpages(swiper);
//                        jump(url2obj(window.location.hash), swiper);
                        reinitDown(swiper);
                    },
                    onFirstInit: function (swiper) {
                        mutator = $(swiper.activeSlide()).attr("data-mutate");
                        mutate(mutator);
                    },
                    onSlideChangeStart: function (swiper) {
                        $("#go-showcase").removeClass("active");
                        $("#go-page-down").removeClass("have-sub have-next");
                        $("#go-back").removeClass("active");
                        if (swiper.activeSlide().getData("photos")) {
                            swiper.activeSlide().getData("subslider").swipeTo(0, 0);
                        }
                    },
                    onSlideChangeEnd: function (swiper) {

                        if (swiper.activeIndex > 0){
                            presentation.stopAutoplay();
//                            console.log("its start");
//                            console.log(swiper.activeSlide().getData("alias"));
                        }
                        else
                        {

                        }

                        current_hash = swiper.activeSlide().getData("subslider").activeSlide().getData("alias");
                        window.location.hash = current_hash;

                        mutator = $(swiper.activeSlide()).attr("data-mutate");
                        mutate(mutator);
                        reinitDown(swiper);
                    }
                });





                //////////////show next more ///////////
                //////////////show next more ///////////
                //////////////show next more ///////////


                $("#go-page-down").on("click", function (e) {
                    e.preventDefault();
                    sections_in_slider.swipeNext();
                })

                $("#go-showcase").on("click", function (e) {
                    e.preventDefault();
                    sections_in_slider.activeSlide().getData("subslider").swipeNext();
                });

                $("#go-back").on("click", function (e) {
                    e.preventDefault();
                    sections_in_slider.activeSlide().getData("subslider").swipeTo(0);
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

                    presentation.reInit();
                }

                $("[data-action=reset]").on("click", function (e) {
                    // что интересно здесь (по нажатию) "резет" происходит корректно

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
////                    jump(url2obj($.address.path()),sections_in_slider);
////                });
//
////                var hash = window.location.hash.substr(1);
////                console.log(">>>>>>>");
////                console.log(hash);
//////                jump(url2obj(window.location.hash),sections_in_slider);
////                console.log(">>>>>>>");
//
//            },


        }
    }
]

);