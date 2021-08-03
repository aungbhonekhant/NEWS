<!DOCTYPE html>
<html lang="en">
<head>
	@include('user.layout.head')
	@yield('head.content')
</head>
<body>
	
	@include('user.layout.postheader')
	@yield('post-content')


	@include('user.layout.footer')
	@yield('footer-content')

</body>
</html>