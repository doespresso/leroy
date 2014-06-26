@section('content')
<body class="loading">


<!--    <div class="swiper-container" id="pages">-->
<!--        <div class="swiper-wrapper">-->

<!--            <div class="page-slide" data-hash="start">-->
<section id="presentation" class="">
    <div class="wrapper">
        <!--                        <figure id="loading"></figure>-->
        @include('slides.index')
    </div>
</section>
<!--            </div>-->


<section id="sabout" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-content">
                        <!--<div id="svgtest"></div>-->
                        <hr/>
                        <p class="condesnsed">Ресторан Leroy находится в одном из оживленных уголков в
                            центре Одинцово в здании отеля Radisson Park Inn. Оригинальный
                            интерьер заведения выдержан в неповторимом ретро-стиле и хранит авантюрный дух
                            Америки 20-30-х годов прошлого столетия.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="smenu" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="overflow: hidden">

                    <div class="text-content">
                        <h3 class="subtitle">Meat & Wine</h3>

                        <p class="condesnsed">Меню Leroy представлено непревзойденной классикой европейской и американской кухни. У нас подают роскошные стейки,
                            разнообразие и вкус которых оценены по достоинству самыми взыскательными гурманами.</p>

                    </div>

                </div>
            </div>
        </div>
        <div class="abs-wrapper">
            <nav class="menu-nav">@include('menus.slider')</nav>
        </div>
    </div>
</section>


<section id="sconcerts" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-content event-list">
                        <h3 class="subtitle">Show & Musics</h3>
                    </div>
                    @include('afishas.index')
                </div>
            </div>
        </div>
    </div>
</section>


<section id="sterrace" class="sector">
    <div class="section-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-content">
                        <!--                                        <div class="title-icon"><i class="icon-sun"></i></div>-->
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
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>


<section id="sevents" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-content">
                        <h3 class="subtitle">Event & Catering</h3>

                        <p class="condesnsed">Веселая свадьба, юбилей или корпоративный ужин. Мы создаем вкусные и яркие мероприятия</p>

                        <p><a class="btn btn-default">заказать праздник</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="scontacts" class="sector">
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-wrapper">
                        <div class="text-content">
                            <div class="title-icon"><i class="icon-flag"></i></div>
                            <h3 class="subtitle">Contact</h3>

                            <div id="footer-contacts">
                                <phone>+7 495 596 00 22</phone>
                                <address>г. Одинцово, ул. Маршала Неделина 2А<br/>Radisson Park Inn</address>
                            </div>
                            <div id="social-networks"></div>
                            <hr/>
                            <div id="map-canvas" style="width:100%; height:100px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="main-loader">
    <div class="indicator"></div>
    <div class="leroy">
        <div id="logo-area" class="">
            <figure class="logo-standart"></figure>
            <figure class="logo-name"><span>L</span><span>E</span><span>R</span><span>O</span><span>Y</span></figure>
            <figure class="logo-slogan">Restaurant & Bar</figure>
        </div>
    </div>
</div>


<nav class="menu-slide st-effect-1" id="menu-slide">
    <ul>
        <li><a href="#about">Restaurant</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#concerts">Concerts</a></li>
        <li><a href="#terrace">Terrasse</a></li>
        <li><a href="#events">Event</a></li>
        <li><a href="#contacts">Contact</a></li>
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
                                <figure class="logo-name"><span>L</span><span>E</span><span>R</span><span>O</span><span>Y</span></figure>
                                <figure class="logo-slogan">Restaurant & Bar</figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="vmp text-right">
                        <div class="vmc">
                            <a class="navicon-button open x">
                                <div class="navicon"></div>
                            </a>
<!--                            <button id="menu-opener">-->
<!--                                <figure></figure>-->
<!--                                <figure></figure>-->
<!--                                <figure></figure>-->
<!--                            </button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div style="width:100px; height:100px; display:block; background: url('/assets/img/logo/logo_symbol_curved.svg')"></div>


<div id="image-bg"></div>
<div id="slide-bg"></div>


<div class="menuwrap">
    <div class="bgwrap"></div>
</div>


<div id="photo-nav-bottom"></div>


</body>
@stop

