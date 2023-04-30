<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EMAILS</title>
</head>
<body>
<h1>TEST EMAILS SENDER</h1>
<p>Name: {!! $user->name !!}</p>
<p>Email: {{ $user->email }}</p>
<p>Text: {{ $user->text }}</p>

</body>
</html>