Swiper.prototype.plugins.hashNav=function(a,b){function c(){var b=a.activeSlide().getAttribute("data-hash");b||(b=""),document.location.hash=b}function d(b){var c=document.location.hash;if(c)for(var c=c.replace("#",""),d=b?a.params.speed:0,e=0;e<a.slides.length;e++){var f=a.slides[e],g=f.getAttribute("data-hash");if(g==c&&f.getData("looped")!==!0){var h=f.index();a.params.loop&&(h-=a.loopedSlides),a.swipeTo(h,d)}}}"horizontal"==a.params.mode;if(b){var e={onSwiperCreated:function(){d()},onSlideChangeStart:function(){c(!0)},onSwipeReset:function(){c(!0)}};return e}};