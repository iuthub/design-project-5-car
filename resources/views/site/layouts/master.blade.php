<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="{{ asset('site/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}"/>
		<link rel="shortcut icon" href="{{ asset('images/imageedit_3_6106254637.png') }}">
      	<link rel="apple-touch-icon" href="{{ asset('images/imageedit_3_6106254637.png') }}">
	</head>

	<body>
		
	@include('site.layouts.header')
	@yield('content')
	@include('site.layouts.footer')
	@yield('js')		

	</body>
</html>
