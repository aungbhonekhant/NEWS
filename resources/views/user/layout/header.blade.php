<div class="w3-sidebar w3-bar-block w3-white w3-animate-left " style="display: none;z-index: 9999;" id="mySidebar">
		<div class="row w3-white py-3">
			@foreach($titles as $title)
			<div class="col-12 ml-2">
				<img src="{{ $title->img }}" alt="" class="w-50">
			</div>
			@endforeach
		</div>
		<a href="{{ route('home.index') }}" class="w3-bar-item w3-button">Home</a>

		@foreach($menus as $menu)
	  	<a href="{{route('home.menu',$menu->id)}}" class="w3-bar-item w3-button">{{ $menu->name }}</a>
	  	@endforeach
	  	
	  	<a href="{{ route('contact.index') }}" class="w3-bar-item w3-button">Contact Us</a>
</div>

<div id="myOverlay" class="w3-overlay" onclick="w3_close()" style="cursor:pointer">
</div>

<!--nav bar start  -->
<nav class="navbar navbar-expand-lg  navbar-light py-2 shadow sticky-top bg-light">	
	
@foreach($titles as $title)	
	  	<a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ $title->img }}" style="height: 40px "></a>
@endforeach	  	

	  	<button class="navbar-toggler" type="button"  onclick="w3_open()">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item mx-2 px-2 "><a class="nav-link @if(Request::segment(1) == '') active @endif" href="{{ route('home.index') }}">Home</a></li>
		    	

		    	@foreach($menus as $menu)
		      	<li class="nav-item mx-2 px-2 "><a class="nav-link @if(Request::segment(2) == $menu->id) active @endif" href="{{route('home.menu',$menu->id)}}">{{ $menu->name }}</a></li>
		      	@endforeach
		      	     
		      	<li class="nav-item mx-2 px-2 "><a class="nav-link @if(Request::segment(1) == 'contact') active @endif" href="{{ route('contact.index') }}">Contact Us</a></li>

               
		      	<form method="GET" action="{{ route('search') }}" class="form-inline my-2  my-lg-0 ml-auto">
    				<input class="form-control" name="query" type="search" placeholder="Search" aria-label="Search">
    				
                    <a href=""><i class="fas fa-search fa-2x ml-2"></i></a>



  				</form>
		      
		    </ul>
	  	</div>
</nav>
<!-- nav bar end -->



<!-- first container -->
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-8">
			  <h2 class="font-weight-bold">BBC News</h2>
		      @foreach($titles as $title)	
			  <iframe width="700" height="450" src="https://www.youtube.com/embed/{{ $title->youtube_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			  @endforeach
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-4">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="font-weight-bold">Up To Date News</h3>
					</div>
					<div class="list-group ">
						@foreach($recents as $recent)
						<div class="card">
									<div class="card-body">
									    <h4 class="card-title font-weight-bold">
									    	{{ $recent->title }}
									     </h4>
									    <h6 class="card-subtitle mb-2 text-muted">
									    	{{ $recent->created_at->diffForHumans() }}
									    </h6>
									    <p class="card-text">
									      {!!htmlspecialchars_decode(str_limit($recent->content, 100)) !!}
									    </p>
									    <a href="{{route('home.post', $recent->id)}}" class="text-primary stretched-link">Read More</a>
									   
									</div>
						</div>
						@endforeach
						
					</div>

					</div>
				</div>
					
				</div>
			</div>
		</div>
				
		</div>

    </div>
</div>