<div class="swiper-container" id="navmenus">
<div class="swiper-wrapper">
    @foreach ($menus as $menu)
    <div class="swiper-slide"><a href="#" id="menu{{$menu->id}}" rel="menu-div-open" data-attr-target="menu{{$menu->id}}content"><div class="menu-icon">{{$menu->svg}}</div><div class="menu-title">{{$menu->title_alt}}</div></a></div>
    @endforeach
</div>
<!--<div id="navmenus-pager" class="swiper-pagination"></div>-->
</div>