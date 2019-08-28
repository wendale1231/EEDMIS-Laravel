<!DOCTYPE html>
<html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
	<title>@yield('title')</title>
	@yield('links')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cldup.com/S6Ptkwu_qA.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400');
		body, html {
		  font-family: 'Source Sans Pro', sans-serif;
		  background-color: #1d243d;
		  padding: 0;
		  margin: 0;
		}
		
		@yield('style')
	</style>
</head>
<body id="particles-js">
@csrf
<!--changed to yield
<ul>
  <li><a href="/">Home</a></li>
  <li><a href="/about">About</a></li>
  <li><a href="/contact">Contact</a></li>
  @yield('options')
</ul> -->
@yield('content')



</body>



<style>
	@yield('style')
</style>

@yield('script')
</html>