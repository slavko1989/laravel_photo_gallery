@if(session()->has('message'))
    <p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('message') }}</p>
@endif

@if(session()->has('error_mess'))
    <p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('error_mess') }}</p>
@endif