<!DOCTYPE html>
<html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
	<title>@yield('title')</title>
	<link href="{{ asset('/css/login.css') }}" rel="stylesheet">
	<script src="{{ asset('js/ParticleJS.js') }}" defer></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cldup.com/S6Ptkwu_qA.js"></script>
	<style>

		
		@yield('style')
	</style>
</head>
<body id="particles-js">
@csrf
@yield('content')



</body>

</html>