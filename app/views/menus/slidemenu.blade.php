<nav class="menu-slide st-effect-1" id="menu-slide">
    <ul>
        <li><a href="#/page/about">Restaurant</a></li>
        <li><a href="#/page/menu">Menu</a></li>
        <li><a href="#/page/terrace">Summer Terrace</a></li>
        <li><a href="#/page/corporate">Event & Catering</a></li>
        <li><a href="#/page/contact">Contact</a></li>
    </ul>
    <div class="contacts">
    @if(Setting::get('address_line_1'))<address>{{Setting::get('address_line_1')}}</address>@endif
    @if(Setting::get('address_line_2'))<div>{{Setting::get('address_line_2')}}</div>@endif
    @if(Setting::get('phone'))<phone>{{Setting::get('phone')}}</phone>@endif
    </div>
</nav>