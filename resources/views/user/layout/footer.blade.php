<div class="container-fluid w3-black">

 <footer class="page-footer font-small unique-color-grey ">

 
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-5">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto ">

        <!-- Content -->
        @foreach($titles as $title)
        <h6 class="text-uppercase font-weight-bold">{{$title->head}}</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>{!! htmlspecialchars_decode($title->description) !!}</p>
        @endforeach

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Categories</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        @foreach($menus as $menu)
        <p>
          <a href="{{route('home.menu',$menu->id)}}">{{ $menu->name}}</a>
        </p>
        @endforeach
       


      </div>
      <!-- Grid column -->

     

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        @foreach($titles as $title)
        <p>
          <i class="fas fa-home mr-3"></i>{{ $title->contact_address }}</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> {{ $title->contact_email }}</p>
        <p>
          <i class="fas fa-phone mr-3"></i> {{ $title->ph_1 }}</p>
        <p>
          <i class="fas fa-print mr-3"></i> {{ $title->ph_2 }}</p>
          @endforeach

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center text-black">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center ml-7 ">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.google.com/search?q=facebook&ie=utf-8&oe=utf-8">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="https://www.google.com/search?q=twitter&ie=utf-8&oe=utf-8">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic" href="https://www.google.com/search?q=google+plus&ie=utf-8&oe=utf-8">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
       
          <!--Instagram-->
          <a class="ins-ic" href="https://www.google.com/search?q=insta&ie=utf-8&oe=utf-8">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>


  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 w3-black text-white ">&copy;2019-{{ Carbon\carbon::now()->year }} Copyright:
    <a href="index.html">News.com</a>
  </div>
  <!-- Copyright -->

 </footer>
</div>

<!-- script -->
<script src="{{asset('user/bootstrap4/js/jquery.min.js')}}"></script>
<script src="{{asset('user/bootstrap4/js/popper.min.js')}}"></script>
<script src="{{asset('user/bootstrap4/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user/parallax/parallax.min.js')}}"></script>
<script src="{{asset('user/wow/wow.min.js')}}"></script>
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
