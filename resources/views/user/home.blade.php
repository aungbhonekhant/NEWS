@extends('user.layout.app')
@section('content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>

<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="font-weight-bold">Popular Posts</h1>
			</div>
		</div>

		
		<div class="row">
			@foreach($posts as $post)

			<div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-3">
				<div class="shadow">
					<img src="{{ $post->img }}" alt="" class="w-100">
					<div class="px-4 pb-4">
						<h3>{{ str_limit($post->title, 50)}}</h3>
						<p>
							<i class="fas fa-user w3-text-green"></i>
							<span class="w3-text-green ml-2">{{ $post->created_by }}</span>
							<i class="fas fa-calendar"></i>
							<span>{{ $post->created_at->diffForHumans() }}</span> 
						</p>
						<p>
							{!!htmlspecialchars_decode(str_limit($post->content, 130)) !!}
						</p>
						<a href="{{route('home.post', $post->id)}}" class="btn px-4 w3-round-xxlarge shadow">Read more</a><br><br><br>
						
						<a href="{{route('home.post', $post->id)}}">
					    	
					    	Comment <i class="fa fa-comment"></i>
					    	<span class="fb-comments-count" data-href="http://finalproject.com/post/{{ $post->id }}"></span>
					    </a>
					    |
					    <a href="#">
					    	
					    	View <i class="fa fa-eye"></i>
					    	<small>{{views($post)->count()}}</small>
					    </a>

					</div>

				</div>
			</div><br><br>
			@endforeach

		</div><br><br>
	{{$posts->links()}}
		

	</div>
</div>		

@endsection
@section('footer-content')
<script>
		function w3_open() {
		  document.getElementById("mySidebar").style.display = "block";
		  document.getElementById("myOverlay").style.display = "block";
		}

		function w3_close() {
		  document.getElementById("mySidebar").style.display = "none";
		  document.getElementById("myOverlay").style.display = "none";
		}
</script>


@endsection

