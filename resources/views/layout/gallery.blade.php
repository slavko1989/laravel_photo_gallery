<div class="w3-sidebar w3-bar-block" style="width:25%;right:0;">
  <h5 class="w3-bar-item">Your photo albums</h5>
  @foreach($albums as $album)
  <a href="{{ url('single_album/'. $album->id) }}" class="w3-bar-item w3-button">{{ $album->album_name }}</a>
  @endforeach
</div>

<div style="margin-right:25%">
<div id="image-gallery">
  <img src="{{ url('logo/gallery.jpg') }}" alt="" id="main-image">

<div id="container">
  @foreach($images as $image)
  <img src="{{ url('gallery/'.$image->photo) }}" alt="" class="image">
  @endforeach
</div>

</div>
</div> 