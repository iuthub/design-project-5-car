<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<meta name="csrf-tokeb" content="{{ csrf_field() }}"> 
		<link rel="stylesheet" href="{{ asset('site/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/hover.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/responsive.css') }}"/>
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
