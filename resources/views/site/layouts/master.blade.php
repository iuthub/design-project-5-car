<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="">
		<meta name="author" content="Laze">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<link rel="stylesheet" href="{{ asset('site/font-awesome/css/font-awesome.min.css') }}">
		<!-- Owl carousel-->
		<link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">

		<link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/hover.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/responsive.css') }}"/>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		
	@include('site.layouts.header')
	@yield('content')
	@include('site.layouts.footer')
	@yield('js')		

	</body>
</html>
