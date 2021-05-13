<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/app.css">
	@yield('css')
	<title>@yield('title') | laravel-base-crud</title>
</head>
<body>
	@include('partials.header')
	@yield('main_content')
	@include('partials.footer')
</body>
</html>