<div id="page-colors">
@foreach ($pages as $page)
@if($page->show_video || $page->bgcolor)
<figure page-hash="/page/{{$page->alias}}" @if($page->bgcolor)style="background-color:{{$page->bgcolor}}"@endif>
@if($page->show_video)
@if($page->video_mp4)
<video autoplay loop><source src="/uploads/video/{{$page->video_mp4}}" type="video/mp4"><source src="/uploads/video/{{$page->video_webm}}" type="video/webm"></video>
@endif
@endif
</figure>
@endif
@endforeach
</div>