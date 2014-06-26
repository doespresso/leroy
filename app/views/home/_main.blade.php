@section('content')
<body class="loading">

<div class="pages">
<div class="swiper-container" id="pages">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <section id="menu" class="sector" name="menu">
                <div class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-content">
                                    <h3 class="subtitle">Meat & Wine</h3>
                                    <p class="condesnsed">Меню Leroy представлено непревзойденной классикой европейской
                                        и
                                        американской кухни. У нас подают роскошные стейки, разнообразие и вкус которых
                                        оценены
                                        по достоинству самыми взыскательными гурманами. Помимо любимых всеми «Рибая»,
                                        «Торнедо»
                                        или «Стрип Нью-Йорка» здесь можно отведать прославленный «Кобэ Стейк» из
                                        японской
                                        говядины вагю и оригинальный «Виски Стейк». Отдельные главы меню посвящены
                                        изысканным
                                        блюдам из птицы, рыбы и морепродуктов, вариациям на тему пасты и ризотто, а
                                        также лапше
                                        в европейском и азиатском исполнении.</p>
                                    <!--                            <nav class="menu-nav">@include('menus.index')</nav>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide" style="background-color:green">2</div>
        <div class="swiper-slide" style="background-color:red">3</div>
    </div>
</div>
</div>

<div id="main-loader">
    <div class="indicator">
        <svg version="1.1" id="logo_b" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="16.148 18.681 68.287 57.225"
             enable-background="new 16.148 18.681 68.287 57.225"
             xml:space="preserve"
             height="100px" width="100px">
<path fill="#f0f0f0" d="M23.051,71.022c12.23,3.141,19.438-7.703,21.715-11.937c0.249-0.457,0.578-1.113,0.979-1.925
	c2.051,1.384,3.554,2.923,6.266,5.604c3.157,3.125,9.569,8.642,11.996,9.873c2.421,1.23,4.851,2.102,8.165,2.102
	c7.373,0,10.467-6.088,10.467-6.088s-3.069,4.102-8.681,4.102c-4.256,0-9.792-4.341-13.906-8.143
	c-4.89-4.528-5.383-5.162-8.322-7.355c-1.559-1.169-3.229-2.097-4.669-2.794c3.094-6.388,8.179-17.086,12.253-24.229
	c1.218,0.155,2.386,0.43,3.455,0.874c5.93,2.438,8.147,7.809,6.225,11.675c-1.93,3.872-4.967,6.233-9.188,7.452
	c-4.223,1.22-8.742,1.432-8.742,1.432s4.316,3.282,7.037,5.732c2.511,2.26,7.199,6.152,9.03,7.611
	c4.13,3.305,9.309,2.339,11.866,1.133c3.852-1.822,4.882-5.648,3.401-8.511c-1.481-2.866-4.291-2.811-5.778-2.237
	c-2.147,0.834-1.924,2.795-1.924,2.795s3.179-0.676,4.649,1.18c1.041,1.311,0.987,3.474-0.427,4.696
	c-1.196,1.028-4.667,2.432-9.334-1.648c-4.664-4.085-6.924-6.144-9.041-7.738C57.877,52.673,55.73,52.1,55.73,52.1
	s5.182-0.148,10.521-2.579c5.333-2.438,9.185-6.091,8.743-12.108c-0.448-6.02-6.298-8.383-14.596-8.958c-0.021,0-0.034,0-0.048,0
	c0.547-0.917,1.074-1.744,1.558-2.464c5.369-7.948,8.491-3.194,8.491-3.194s-0.244-2.066-3.568-2.829
	c-3.792-0.869-7.382,3.035-10.695,8.447c-6.398,0.323-11.845,2.435-16.783,5.916c-6,4.23-6.742,8.311-4.521,10.243
	c2.226,1.938,6.372,0.073,6.372,0.073s-3.109-1.789-2.517-4.729c0.455-2.246,1.925-4.583,5.553-6.734
	c2.25-1.329,6.533-2.736,10.877-3.047c-0.333,0.58-0.657,1.172-0.987,1.77C50.28,39.02,43.43,52.962,43.43,52.962
	s-4.232-1.264-9.263-0.801c-5.49,0.501-9.896,3.011-11.636,4.377c-2.171,1.716-5.561,5.561-4.91,9.405
	C17.965,67.985,19.496,70.113,23.051,71.022z M29.873,54.391c7.784-2.715,12.568,0.6,12.568,0.6s-0.639,1.606-2.554,5.305
	c-1.914,3.705-4.468,7.408-7.784,8.516c-3.316,1.11-7.564,1.01-9.056-2.835C21.594,62.233,23.735,56.528,29.873,54.391z"/>
</svg>
    </div>
</div>
<nav class="menu-slide st-effect-1" id="menu-slide">
    <ul>
        <li><a href="#">Restaurant</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#">Main dishes</a></li>
        <li><a href="#">Wines</a></li>
        <li><a href="#">Bar</a></li>
        <li><a href="#terrace">Terrasse</a></li>
        <li><a href="#event">Event</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#concert">Concerts</a></li>
    </ul>
</nav>
<nav class="menu-closer" id="menu-closer"></nav>

<header id="panel-top">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6 text-center">
                    <div class="vmp">
                        <div class="vmc">
                            <div id="logo-area" class="">
                                <figure class="logo-standart"></figure>
                                <figure class="logo-name">LEROY</figure>
                                <figure class="logo-slogan">Restaurant & Bar</figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="vmp text-right">
                        <div class="vmc">
                            <button id="menu-opener">
                                <figure></figure>
                                <figure></figure>
                                <figure></figure>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="presentation" class="">
    <div class="wrapper">
        <figure id="loading"></figure>
        @include('slides.index')
    </div>
</section>

<!--<img src="/assets/img/logo/logo_symbol_curved.svg" width="100px" height="100px">-->
<div style="width:100px; height:100px; display:block; background: url('/assets/img/logo/logo_symbol_curved.svg')"></div>


<section id="about" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                                <div class="text-content">
                                    <figure class="svg-logo">
<!--                                    <svg version="1.1" width="60px" height="60px" xmlns="http://www.w3.org/2000/svg"-->
<!--                                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 27.649 22.994"-->
<!--                                         preserveAspectRatio="xMidYMid meet">-->
<!--                                        <g id="logo">-->
<!--                                            <path stroke-width="1.3" fill="none" stroke="#f9f9f9" stroke-miterlimit="20" d="M21.218,2.007c0,0-0.359-0.266-0.845-0.327-->
<!--                                    		c-0.448-0.057-1.748-0.112-3.244,2.275c-0.166,0.267-0.349,0.574-0.536,0.914c0.004,0-0.364,0.661-0.357,0.661-->
<!--                                    		c-1.403,2.65-3.607,7.619-4.671,9.99c-0.138,0.301-0.252,0.544-0.337,0.714c-0.784,1.571-3.265,6.065-7.475,4.9-->
<!--                                    		c-1.224-0.337-1.725-1.131-1.869-1.884c-0.729-3.808,3.8-5.475,5.697-5.586c2.482-0.144,4.127,0.707,4.437,0.854-->
<!--                                    		c0.502,0.238,1.071,0.603,1.607,1.036c1.012,0.813,1.182,1.049,2.865,2.729c1.416,1.411,3.393,2.852,4.849,3.021-->
<!--                                    		c2.831,0.328,4.827-1.521,4.827-1.521"/>-->
<!--                                            <path stroke-width="1.3" fill="none" stroke="#f9f9f9" stroke-miterlimit="20" d="M11.356,11.119c0,0-0.95-0.58-0.769-1.534-->
<!--                                    		c0.14-0.729,0.588-1.488,1.697-2.185c0.687-0.432,1.852-0.93,3.321-1.05c0,0,1.391-0.105,2.508,0.093-->
<!--                                    		c0.372,0.05,0.729,0.139,1.055,0.283c1.812,0.791,2.488,2.534,1.901,3.788c-0.589,1.256-1.517,2.022-2.806,2.418-->
<!--                                    		c-1.29,0.396-2.671,0.464-2.671,0.464s1.318,1.065,2.15,1.859c0.767,0.733,2.197,1.996,2.757,2.469-->
<!--                                    		c1.262,1.071,2.843,0.76,3.624,0.367c1.176-0.591,1.491-1.831,1.039-2.76c-0.452-0.93-1.311-0.912-1.764-0.727"/>-->
<!--                                        </g>-->
<!--                                    </svg>-->

                                    </figure>
                                    <hr/>
                                    <p class="condesnsed">Ресторан Leroy находится в одном из оживленных уголков в
                                        центре Одинцово. Он расположился на первом этаже отеля Park Inn. Оригинальный
                                        интерьер заведения выдержан в неповторимом ретро-стиле и хранит авантюрный дух
                                        Америки 20-30-х годов прошлого столетия.</p>
                                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="menu" class="sector" name="menu">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-content">
                        <h3 class="subtitle">Meat & Wine</h3>
                        <p class="condesnsed">Меню Leroy представлено непревзойденной классикой европейской
                            и
                            американской кухни. У нас подают роскошные стейки, разнообразие и вкус которых
                            оценены
                            по достоинству самыми взыскательными гурманами. Помимо любимых всеми «Рибая»,
                            «Торнедо»
                            или «Стрип Нью-Йорка» здесь можно отведать прославленный «Кобэ Стейк» из
                            японской
                            говядины вагю и оригинальный «Виски Стейк». Отдельные главы меню посвящены
                            изысканным
                            блюдам из птицы, рыбы и морепродуктов, вариациям на тему пасты и ризотто, а
                            также лапше
                            в европейском и азиатском исполнении.</p>
                        <!--                            <nav class="menu-nav">@include('menus.index')</nav>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="terrace" class="sector" name="terrace">
    <div class="section-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                        <div class="text-content">
                            <div class="title-icon"><i class="icon-sun"></i></div>
                            <h3 class="subtitle">SUMMER<br/>TERRACE</h3>
                            <hr/>
                            <p class="condesnsed">В Leroy знают, как организовать идеальное торжество. Здесь
                                веселая шумная свадьба, знаковый юбилей в кругу коллег и друзей, задорный
                                корпоратив с умопомрачительными конкурсами или фееричный день рождения для
                                ребенка становится грандиозным событием и надолго остается в памяти
                                приглашенных.</p>
                        </div>
                    <a class="load-gallery" href="/photos/getgal/3" data-attr-galid="3" data-attr-target="photo-nav-bottom">фотографии 1</a>
                    <a class="load-gallery" href="/photos/getgal/1" data-attr-galid="1" data-attr-target="photo-nav-bottom">фотографии 2</a>
                    <div class="abs-wrapper">
<!--                    <div class="photo-slider-nav">@include('photos.nav')</div>-->
                    </div>
                    </div>


            </div>
        </div>
    </div>
</section>

<section id="concert" class="sector" name="concerts">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                        <div class="text-content event-list">
                            <h3 class="subtitle">Musics</h3>
                            <hr/>
                        </div>
                        @include('afishas.index')

                </div>
            </div>
        </div>
    </div>
</section>

<section id="event" class="sector" name="event">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                        <div class="text-content">
                            <h3 class="subtitle">Event & Catering</h3>
<!--                            <hr/>-->
                            <p class="condesnsed">Веселая свадьба, юбилей или корпоративный ужин. Мы создаем вкусные и яркие мероприятия</p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-wrapper">
                                <div class="text-content">
                                    <div class="title-icon"><i class="icon-flag"></i></div>
                                    <h3 class="subtitle">Contact</h3>
                                    <hr/>
                                    <p class="condesnsed">Веселая свадьба, юбилей или корпоративный праздник.</p>
                                    <div id="map-canvas" style="width:100%; height:100px;"></div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>


<section id="social">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-wrapper text-center">
                        @include('social.icons')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="text-center">
    <div id="footer-contacts">
        <phone>+7 495 596 00 22</phone>
        <address>г. Одинцово, ул. Маршала Неделина 2А<br/>Radisson Park Inn</address>


    </div>
    <div id="social-networks">
    </div>
</footer>



<div id="image-bg"></div>
<div id="slide-bg"></div>
<!--<div id="video-bg" class="video-bg">-->
<!--    <video autoplay loop poster="polina.jpg" class="bg">-->
<!--        <source src="polina.webm" type="video/webm">-->
<!--        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">-->
<!--    </video>-->
<!--</div>-->

<div class="menuwrap">
    <div class="bgwrap">
    </div>
</div>


<div id="photo-nav-bottom"></div>

<!--<div class="menufolder">-->
<!--    <div class="menu-holder">-->
<!--        <div class="menu-content" id="menu-slider">@include('menus.menuslider')</div>-->
<!--    </div>-->
<!--</div>-->


<!--<div class="overlay">-->
<!--    <div class="o-body"></div>-->
<!--</div>-->
</body>
@stop

