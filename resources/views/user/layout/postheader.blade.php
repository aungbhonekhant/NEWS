<div class="w3-sidebar w3-bar-block w3-white w3-animate-left " style="display: none;z-index: 9999;" id="mySidebar">
		<div class="row w3-white py-3">
			<div class="col-12 ml-2">
				<img src="{{asset('user/image/news.png')}}" alt="" class="w-50">
			</div>
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
	  	<a class="navbar-brand" href="#"><img src="{{asset('user/image/news.png')}}" style="height: 40px "></a>

	  	<button class="navbar-toggler" type="button"  onclick="w3_open()">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item mx-2 px-2 "><a class="nav-link @if(Request::segment(1) == '') active @endif" href="{{ route('home.index') }}">Home</a></li>
		    	
		    	@foreach($menus as $menu)
		      	<li class="nav-item mx-2 px-2"><a class="nav-link" href="{{route('home.menu',$menu->id)}}">{{ $menu->name }}</a></li>
		      	@endforeach
		      
		      	<li class="nav-item mx-2 px-2">
		      		<a class="nav-link @if(Request::segment(1) == 'contact') active @endif" href="{{ route('contact.index') }}">Contact us</a>
				</li>
		      	<form class="form-inline my-2  my-lg-0 ml-auto">
    				<input class="form-control" type="search" placeholder="Search" aria-label="Search">
    				
                    <a href=""><i class="fas fa-search fa-2x ml-2"></i></a>



  				</form>
		      
		    </ul>
	  	</div>
</nav>
<!-- nav bar end -->

