<a id="go-showcase" href="#"><span>showcase</span></a>
<div id="go-page-down"></div>

<div id="panel-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">1</div>
            <div class="col-xs-4">2</div>
            <div class="col-xs-4">3</div>
        </div>
    </div>
</div>


<div id="main-pages" class="pages-container">
<div class="pages-wrapper">

<div class="page-slide">
    <div class="page-content-wrapper">
        <section id="presentation" class="">
            <div class="wrapper">
                @include('slides.index')
            </div>
        </section>
    </div>
</div>
@foreach ($pages as $page)
<div class="page-slide @if (!($page->gallery))vm@endif" data-hash="{{$page->alias}}" data-photos="{{!empty($page->gallery->id) ? $page->gallery->id:''}}" data-photos-loaded="0" style="background-color: {{$page->bgcolor}}; color:{{$page->color}}">

@if ($page->gallery)
    <div class="pages-container" id="{{$page->alias}}">
        <div class="pages-wrapper">
            <?php
            $showcase = $page->gallery;
            $showcase->load('photos');
            ?>
            <div class="page-slide vm">
            <div class="page-content-wrapper">
                <div class="text-content">
                    @if($page->title)<h3 class="subtitle">{{$page->title}}</h3>@endif
                    @if($page->desc)<p class="condesnsed">{{$page->desc}}</p>@endif
                    @if($page->showaddress)
                    @if(Setting::get('address'))<address>{{Setting::get('address')}}</address>@endif
                    @if(Setting::get('phone'))<phone>{{Setting::get('phone')}}</phone>@endif
                    @endif
                    @if($page->showsocial)
                    @include('social.icons')
                    @endif
                </div>
            </div>
            </div>
            @foreach ($showcase->photos as $photo)
            <div class="page-slide" style='background-image:url({{url("/")}}/uploads/gallery/big/{{$photo->img}})'></div>
            @endforeach
        </div>
    </div>
@else

<div class="page-content-wrapper">
<div class="text-content">
@if($page->title)<h3 class="subtitle">{{$page->title}}</h3>@endif
@if($page->desc)<p class="condesnsed">{{$page->desc}}</p>@endif
@if($page->showaddress)
    @if(Setting::get('address'))<address>{{Setting::get('address')}}</address>@endif
    @if(Setting::get('phone'))<phone>{{Setting::get('phone')}}</phone>@endif
@endif
@if($page->showsocial)
    @include('social.icons')
@endif
</div>
</div>
@endif

</div>
@endforeach
</div>
</div>


