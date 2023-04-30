@extends('master')
@section('title','PHOTO BY ALBUM')
@section('link')
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>




@section('main')

<div class="w3-sidebar w3-bar-block" style="width:25%;right:0;">
  <h5 class="w3-bar-item">Your photo albums</h5>
  @foreach($albums as $album)
  <a href="{{ url('single_album/'.$album->id) }}" class="w3-bar-item w3-button">{{ $album->album_name }}</a>
  @endforeach
</div>

<div style="margin-right:25%">
<div id="image-gallery">
  <img src="{{ url('logo/gallery.jpg') }}" alt="" id="main-image">

<div id="container">
  @forelse($albums_eloguent->images as $photo_by_album)
  <img src="{{ url('gallery/'. $photo_by_album['photo']) }}" alt="" class="image">
 @empty
 <p>NOTHING TO SHOW</p>
 @endforelse
</div>

</div>
</div> 


@endsection