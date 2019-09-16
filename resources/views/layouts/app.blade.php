<!DOCTYPE html>
<html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
	@yield('links')
    @include('includes.head')
</head>
<body translate="no">
@include('includes.sidebar')
<section id="contents">
    
    
    @include('includes.header')
    

    @yield('content')


</section>
    <footer class="row">
        @include('includes.footer')
    </footer>
</body>

</html>

