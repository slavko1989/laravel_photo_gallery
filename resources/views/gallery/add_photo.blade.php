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
                    <h1 class="display-4 py-2 text-truncate">ADDING PHOTO</h1>
                    <div class="px-2">
                        <form action="{{ url('gallery/add_photo') }}" class="justify-content-center" method="post" enctype="multipart/form-data">
                          @csrf
                          @include('layout.mess_for_photo')
                          <input type="hidden" name="album_id">
                            <div class="form-group">
                                <label class="sr-only">Image Name</label>
                                <input type="text" name="image_name" class="form-control" placeholder="image name">
                                @error('image_name')
                                      <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="sr-only">Add photo</label>
                                <input type="file" name="photo">
                                @error('photo')
                                      <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select name="album_id" class="form-control">

                                    <option>Add albums</option>
                                    @foreach($albums as $albums)
                                    <option value="{{ $albums->id }}">{{ $albums->album_name }}</option>
                                    @endforeach
                                </select>
                                
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