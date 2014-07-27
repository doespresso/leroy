

<div id="main-pages" class="pages-container">
    <div class="pages-wrapper">

        <div class="page-slide" id="page-home" data-hash="page:home" data-mutate="mutator-bg-dark">
            <div class="page-content-wrapper">
                <section id="presentation" class="">
                    <div class="wrapper">
                        @include('slides.index')
                    </div>
                </section>
            </div>
        </div>
        @foreach ($pages as $page)
        <div id="page-{{$page->alias}}" class="page-slide" data-hash="page:{{$page->alias}}" data-photos="{{!empty($page->gallery->id) ? $page->gallery->id:''}}" data-photos-loaded="0" style="background-color: {{$page->bgcolor}}; color:{{$page->color}}">
            <div id="{{$page->alias}}-pages" class="pages-container" data-level="2">
                <div class="pages-wrapper">
                    <?php
                    if ($page->gallery) {
                        $showcase = $page->gallery;
                        $showcase->load('photos');
                    }
                    else
                    {$showcase = null;}
                    ?>
                    <div class="page-slide vm" data-hash="page:{{$page->alias}}-start">
                        <div class="page-content-wrapper">
                            <div class="text-content">
                                @if($page->showqr)<figure id="qrcode">{{Setting::get('qr')}}</figure>@endif
                                @if($page->title)<h3 class="subtitle">{{$page->title}}</h3>@endif
                                @if($page->desc)<div class="condesnsed">{{$page->desc}}</div>@endif
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
                    @if ($page->gallery && $showcase)
                    @foreach ($showcase->photos as $photo)
                    <div class="page-slide" data-type="photo" data-hash="page:{{$page->alias}}/photo:{{$photo->id}}" @if($photo->dark_content!=1) data-mutate="mutator-bg-dark"@endif style='background-image:url({{url("/")}}/uploads/gallery/big/{{$photo->img}})'>
                    <figure class="photo-caption">{{$photo->desc}}</figure>
                </div>
                @endforeach
                @endif
            </div>
        </div>


    </div>
    @endforeach
</div>
</div>


