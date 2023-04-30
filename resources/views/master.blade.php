<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	@yield('link')
</head>

<body>
@include('layout.nav')
@yield('main')

<script src="{{ url('javascript/script.js') }}"></script>
</body>
</html>