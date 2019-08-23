<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	
	<style>
		@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400');
		body, html {
		  font-family: 'Source Sans Pro', sans-serif;
		  background-color: #1d243d;
		  padding: 0;
		  margin: 0;
		}
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #1d243d;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover:not(.active) {
		  background-color: #111;
		}

		.active {
		  background-color: #4CAF50;
		}
	</style>
</head>
<body id="particles-js">

<ul>
  <li><a href="/">Home</a></li>
  <li><a href="/about">About</a></li>
  <li><a href="/contact">Contact</a></li>
  @yield('options')
</ul>


@yield('content')

</body>
<style>
	@yield('style')
</style>

@yield('script')
</html>