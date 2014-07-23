@section('content')
<body class="loading">

<style>


</style>



<div id="page-loading-frame"></div>

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
                <div class="col-xs-3">
                    <div class="vmp">
                        <div class="vmc">

                        </div>
                    </div>
                </div>
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
                            <a href="#/nav" id="menu-opener">
                                <figure></figure>
                                <figure></figure>
                                <figure></figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@include('pages.index')

<div class="page-back-pic"></div>


</body>
@stop

