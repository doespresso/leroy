<div class="gallery" id="gallery_terrace">
<div class="swiper-container" id="photos_nav">
    <div class="swiper-wrapper">
        @foreach ($photos as $photo)
        <a class="swiper-slide item" rel="lightbox" href='{{url("/")}}/uploads/gallery/big/{{$photo->img}}' data-attr-src-tmb='{{url("/")}}/uploads/gallery/thumb/{{$photo->img}}'></a>
        @endforeach
    </div>
    <div id="photos-pager" class="swiper-pagination"></div>
    <div class="ui-arrow prev"></div>
    <div class="ui-arrow next"></div>
</div>
</div>
