<div class="swiper-container" id="menus" style="background-color:">
    <div class="swiper-wrapper">
        @foreach ($menus as $menu)
        <div class="swiper-slide"  style="background-color:">
            <div class="menu-list"  style="background-color:">
                <?php $menu_cats = $menu->cats; ?>
                <h2>{{$menu->title}}</h2>
                <hr/>
                @foreach ($menu_cats as $menu_cat)
                <div class="menu-cat">
                <h3>{{$menu_cat->title}}</h3>
                <?php $items = $menu_cat->items; ?>
                @foreach ($items as $item)
                <div class="dish">
                    <span class="orig">{{$item->title}}</span> /
                    <span class="alt">{{$item->title_alt}}</span>
                    <figure class="price-rub">{{$item->price}} RUR</figure>
                </div>
                @endforeach
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <!--    <div id="presentation-pager" class="swiper-pagination"></div>-->
    <!--    <div class="ui-arrow prev"></div>-->
    <!--    <div class="ui-arrow next"></div>-->
</div>
