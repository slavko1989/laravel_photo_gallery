@extends('master')
@section('title','ADD ALBUMS')
@section('link')
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

@section('main')

<section id="cover" class="min-vh-100">
  
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">ADDING ALBUMS</h1>
                    <div class="px-2">
                        <form action="{{ url('gallery/add_album') }}" class="justify-content-center" method="post">
                          @csrf
                          @include('layout.mess_for_album')
                            <div class="form-group">
                                <label class="sr-only">Album Name</label>
                                <input type="text" name="album_name" class="form-control" placeholder="Album name">
                                @error('album_name')
                                      <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg">Launch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection