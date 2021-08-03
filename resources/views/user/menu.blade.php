@extends('user.layout.app')
@section('content')

<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="font-weight-bold">Latest News</h1>
			</div>
		</div>

		
		<div class="row">
			@foreach($posts as $post)

			<div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
				<div class="shadow">
					<img src="{{ $post->img }}" alt="" class="w-100">
					<div class="px-4 pb-4">
						<h3>{{ $post->title }}</h3>
						<p>
							<i class="fas fa-user w3-text-green"></i>
							<span class="w3-text-green ml-2">{{ $post->created_by }}</span>
							<i class="fas fa-calendar"></i>
							<span>{{ $post->created_at->diffForHumans() }}</span> 
						</p>
						<p>
							{!!htmlspecialchars_decode(str_limit($post->content, 150)) !!} 
						</p>
						<a href="{{route('home.post', $post->id)}}" class="btn px-4 w3-round-xxlarge shadow">Read more</a>
					</div>

				</div>
			</div>
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

