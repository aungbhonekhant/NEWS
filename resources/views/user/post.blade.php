@extends('user.layout.postapp')
@section('post-content')

{{-- fb Com --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>


{{-- fb Com --}}

{{-- fb Like & Share --}}


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

{{-- fb Like & Share --}}

<div class="container-fluid py-4">
	<div class="container">
    <div class="row">
      <div class="col-12">
        <p>
        <h1 class="font-weight-bold">{{ $post_single->title }}</h1>
        <h3 class="font-weight-light">{{ $post_single->created_at->diffForHumans() }}</h3>
        <i class="fa fa-user"></i>
        <span class="w3-text-green ml-2">{{ $post_single->created_by }}</span>
        </p>
      </div>
    </div>
		<div class="row">
			
			
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 ">
					<div class="card">
					  <img class="card-img-top" src="{{ $post_single->img }}" alt="Card image cap">
					  <div class="card-body">
					    
					    <p class="card-text">
					      {!! htmlspecialchars_decode($post_single->content) !!}
					    </p>

					   

					    
					    |

					     <a href="#">
					    	
					    	View <i class="fa fa-eye"></i>
					    	<small>{{views($post_single)->count()}}</small>
					    </a><br><br>


					    
					    
					  </div>
					</div>

					<div class="card" id="facebookCommentContainer">
						<div class="fb-comments" data-href="http://finalproject.com/post/{{ $post_single->id }}" data-width="" data-numposts="5"></div>
				    </div>
			</div>

			
			
        </div>
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

