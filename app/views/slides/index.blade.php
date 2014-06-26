<div class="slides-wrapper loading-state">
<div class="slides-container" id="main" style="display:block; width:100%; max-width:100%">
    <div class="swiper-wrapper">
        @foreach ($slides as $slide)
        <div class="swiper-slide" style="@if (!empty($slide->img))background-image: url({{url("/")}}/uploads/sliders/published/{{$slide->img}}); @endif">
            <div class="slide-content darkbg text-center styled-justify">
                <div class="contents">
                    {{!empty($slide->title) ? '<figure class="title from-top">'.$slide->title.'</figure>':''}}
                    {{!empty($slide->subtitle) ? '<p class="sub-title">'.$slide->subtitle.'</p>':''}}
                    {{!empty($slide->desc) ? '<figure class="desc">'.$slide->desc.'</figure>':''}}
                    {{!empty($slide->link) ? '<div class="more"><a class="">'.$slide->link_text.'</a></div>':''}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
<!--    <div id="presentation-pager" class="swiper-pagination"></div>-->
<!--    <div class="ui-arrow prev"></div>-->
<!--    <div class="ui-arrow next"></div>-->
</div>
</div>