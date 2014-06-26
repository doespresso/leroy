<ul id="menu-folders">
    @foreach ($menus as $menu)
    <li><a href="#" id="menu{{$menu->id}}" rel="menu-div-open" data-attr-target="menu{{$menu->id}}content">
            <div class="menu-icon">{{$menu->svg}}</div>
            <div>{{$menu->title_alt}}</div>
        </a></li>
    @endforeach
</ul>