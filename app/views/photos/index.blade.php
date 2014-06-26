<div class="photo-item-wrapper">
@foreach ($photos as $photo)
<a class="photo-item" rel="changebg" @if($photo->light_bg==1) data-attr-colormutator="mutator-bg-dark"@endif href='{{url("/")}}/uploads/gallery/big/{{$photo->img}}'><img src='{{url("/")}}/uploads/gallery/thumb/{{$photo->img}}'/></a>
@endforeach
</div>

