@if(session()->has('photo_success'))
    <p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('photo_success') }}</p>
@endif

@if(session()->has('photo_error'))
    <p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('photo_error') }}</p>
@endif