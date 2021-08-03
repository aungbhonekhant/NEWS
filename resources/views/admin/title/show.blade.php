@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                            	
                                    Edit Site Title

                            </h1>
                        </div>
                        <div class = "row">
                        	 <div class="col-12 col-sm-12 col-md-6">
                                @foreach($titles as $title)
                        	 	   <form role="form" action="{{route('title.update', $title->id)}}" method="post">
                        	 	   	@csrf
                        	 	   	@method('PATCH')
                        	 	   	    <div class="form-group">

                                      
											
                        	 	   	    	<label>Title</label><br>
                        	 	   	    	<span style="color:red;">
                        	 	   	    		*{{ $errors->first('title_name') }}
                        	 	   	    	</span>
                        	 	   	    	<input type="text" class="form-control" name="title_name"  value="{{$title->title_name}}">	
                        	 	   	    	@endforeach	
                        	 	   	    	

                        	 	   	    </div>
                        	 	   	    <input type="submit" value="Save" class="btn btn-primary">



                        	 	   </form>
                           </div>
                        </div>
                    </div>
                        
                </div>
                <br>
                <br>    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                
                                    Edit Site logo

                            </h1>
                        </div>
                        <div class = "row">
                             <div class="col-12 col-sm-12 col-md-6">
                                @foreach($titles as $title)
                                   <form role="form" action="{{route('title.update', $title->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">
                                            <div class="input-group">

                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose Logo
                                                 </a>
                                               </span>
                                               <input id="thumbnail" class="form-control" type="text" name="img" placeholder="please choose your logo image...." value="{{$title->img}}">
                                            </div>

                                             <img id="holder" style="margin-top:15px;max-height:100px;">

                                        </div>
                                        <input type="submit" value="Save" class="btn btn-primary">



                                   </form>
                                   @endforeach 
                           </div>
                        </div>
                    </div>
                        
                </div>

                <br>
                <br>    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                
                                    Edit Site Contact

                            </h1>
                        </div>
                        <div class = "row">
                             <div class="col-12 col-sm-12 col-md-6">
                                @foreach($titles as $title)
                                   <form role="form" action="{{route('title.update', $title->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">
                                            <label>Address</label><br>
                                            <span style="color:red;">
                                                *{{ $errors->first('contact_address') }}
                                            </span>
                                            <input type="address" class="form-control" name="contact_address"  value="{{$title->contact_address}}"> <br>

                                            <label>Email</label><br>
                                            <span style="color:red;">
                                                *{{ $errors->first('contact_email') }}
                                            </span>
                                            <input type="email" class="form-control" name="contact_email"  value="{{$title->contact_email}}">

                                            <br>
                                            <label>Phone-1</label><br>
                                            <span style="color:red;">
                                                *{{ $errors->first('ph-1') }}
                                            </span>
                                            <input type="phone" class="form-control" name="ph_1"  value="{{$title->ph_1}}">

                                            <br>
                                            <label>Phone-2</label><br>
                                            <span style="color:red;">
                                                *{{ $errors->first('ph_2') }}
                                            </span>
                                            <input type="phone" class="form-control" name="ph_2"  value="{{$title->ph_2}}">
                                            

                                        </div>
                                        <input type="submit" value="Save" class="btn btn-primary">



                                   </form>
                                   @endforeach 
                           </div>
                        </div>
                    </div>
                        
                </div>
                 <br>
                <br>    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                
                                    Edit Footer Description

                            </h1>
                        </div>
                        <div class = "row">
                             <div class="col-12 col-sm-12 col-md-6">
                                @foreach($titles as $title)
                                   <form role="form" action="{{route('title.update', $title->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">

                                            <label>Heading</label><br>
                                            <span style="color:red;">
                                                *{{ $errors->first('head') }}
                                            </span>
                                            <input type="text" class="form-control" name="head"  value="{{$title->head}}"><br><br>

                                            

                                            <textarea id="my-editor" name="description" class="form-control" >

                                                {{$title->description}}
                                
                                            </textarea>
                                            

                                        </div>
                                        <input type="submit" value="Save" class="btn btn-primary">



                                   </form>
                                   @endforeach 
                           </div>
                        </div>
                    </div>
                        
                </div>  

                <br>
                <br>    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                
                                    Edit YouTube Link

                            </h1>
                        </div>
                        <div class = "row">
                             <div class="col-12 col-sm-12 col-md-6">
                                 @foreach($titles as $title)
                                   <form role="form" action="{{route('title.update', $title->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">

                                      
                                            
                                            <label>Link</label><br>
                                            <span style="color:red;">
                                                *{{ $errors->first('youtube_link') }}
                                            </span>
                                            <input type="text" class="form-control" name="youtube_link"  value="{{$title->youtube_link}}"><br>
                                            <label>For eg: yAGVB4ZIQ4o</label>  
                                            

                                        </div>
                                        <input type="submit" value="Save" class="btn btn-primary">

                                   </form> 
                                @endforeach 
                                            

                             </div>
                         </div> 
                    </div>
                </div>              



@endsection

@section('footer-content')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
   };

  CKEDITOR.replace('my-editor', options);

 $('#lfm').filemanager('file');




            function getConfirm()
            {
                alert('ok');
            }
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
  </script>          

@endsection







