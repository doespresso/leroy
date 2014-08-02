<div id="page-colors">
@foreach ($pages as $page)
@if($page->bgcolor)
<figure page-hash="/page/{{$page->alias}}" style="background-color:{{$page->bgcolor}}">
@if($page->video_code)
    {{$page->video_code}}
@endif
</figure>
@endif
@endforeach
</div>