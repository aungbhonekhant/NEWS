@extends('user.layout.postapp')


@section('post-content')


<div class="container">
	<!--Section: Contact v.2-->
	<section class="mb-4">

	    <!--Section heading-->
	<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
	    <!--Section description-->
	    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
	        a matter of hours to help you.</p>

	    <div class="row">

	        <!--Grid column-->
	        <div class="col-md-9 mb-md-0 mb-5" >
	        	
	            <form id="contact-form" name="contact-form" action="{{ route('contact.store') }}" method="post">
                @csrf
	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                        	<label for="name" class="">Your name</label>
	                        	<span style="color:red;">
                                      *{{$errors->first('name')}}
                                </span>
	                            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" placeholder="please enter your name...">
	                            
	                        </div>
	                    </div>
	                    <!--Grid column-->
                        <br>
	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                        	<label for="email" class="">Your email</label>
	                        	<span style="color:red;">
                                      *{{$errors->first('email')}}
                                </span>
	                            <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" placeholder="please enter your email...">
	                            
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div>
	                <!--Grid row-->
					<br>
	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
	                        	<label for="subject" class="">Subject</label>
	                        	<span style="color:red;">
                                      *{{$errors->first('subject')}}
                                </span>
	                            <input type="text" id="subject" name="subject" class="form-control"value="{{old('subject')}}"  placeholder="your subject...">
	                            
	                        </div>
	                    </div>
	                </div>
	                <!--Grid row-->
                    <br>
	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
	                        	<label for="message">Your message</label>
	                        	<span style="color:red;">
                                      *{{$errors->first('message')}}
                                </span>
	                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="your message...">
	                            	{{old('message')}}
	                            </textarea>
	                            
	                        </div>

	                    </div>
	                </div><br><br>


	                <!--Grid row-->

	                <input type="submit" value="Send" class="btn btn-primary">

	            </form>
	            
	        </div>
	        <!--Grid column-->


	        <!--Grid column-->
	        <div class="col-md-3 text-right">
	        	@foreach( $titles as $title)
	            <ul class="list-unstyled mb-0">
	                <li><i class="fas fa-map-marker-alt fa-2x"></i>
	                    <p>{{ $title->contact_address }}</p>
	                </li>	                

	                <li><i class="fas fa-phone mt-3 fa-2x"></i>
	                    <p>{{ $title->ph_1 }}</p>
	                </li>

	                <li><i class="fas fa-phone mt-3 fa-2x"></i>
	                    <p>{{ $title->ph_2 }}</p>
	                </li>

	                <li><i class="fas fa-envelope mt-3 fa-2x"></i>
	                    <p>{{ $title->contact_email }}</p>
	                </li>
	            </ul>
	            @endforeach
	        </div>
	        <!--Grid column-->

	    </div>

	</section>
				<!--Section: Contact v.2-->
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

