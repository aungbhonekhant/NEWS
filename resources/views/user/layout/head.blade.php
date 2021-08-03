<meta charset="UTF-8">
@foreach($titles as $title)
  <title> {{ $title->title_name }}</title>
@endforeach

	<link rel="stylesheet" href="{{asset('user/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/bootstrap4/css/w3.css')}}">
	<link rel="stylesheet" href="{{asset('user/bootstrap4/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('user/imagehover/css/imagehover.css')}}">
	<link rel="stylesheet" href="{{asset('user/bootstrap4/css/mystyle.css')}}">

	<meta property="og:url"           content="{{Request::url()}}" />