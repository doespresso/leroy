
<div class="menu-cat">
@foreach ($menus as $menu)
<?php $menu_cats = $menu->cats; ?>
<h2>{{$menu->title}}</h2>
<hr/>
@foreach ($menu_cats as $menu_cat)
    <h3>{{$menu_cat->title}}</h3>
    <?php $items = $menu_cat->items; ?>
    @foreach ($items as $item)
    <div class="dish">
        <span class="orig">{{$item->title}}</span> /
        <span class="alt">{{$item->title_alt}}</span>
        <figure class="price-rub">{{$item->price}} RUR</figure>
    </div>
@endforeach
@endforeach
@endforeach
</div>

