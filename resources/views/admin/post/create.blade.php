  @extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                           
                        <a class="btn btn-social btn-bitbucket" href="{{route('post.index')}}">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>

                            Create Post

                    </h1>
                </div>
                <div class = "row">
                   <div class="col-12 col-sm-12 col-md-6">
                        <form role="form" action="{{route('post.store')}}" method="post">
                            @csrf
                            <div class="form-group">

                                <label>Title</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('title')}}
                                </span>
                                <input class="form-control" name="title" value="{{old('title')}}" placeholder="please enter post title.....">     
                                
                            </div>
                            <div class="form-group">

                                <label>Menu Name</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('name')}}
                                </span>
                                <select name="menu_id" class="form-control" value="{{old('menu_id')}}">
                                	
							                  <option value="">---select---</option>

                                @foreach($menus as $menu)
                                      <option value="{{$menu->id}}">
                                        {{$menu->name}}
                                      </option>
                                @endforeach

                                </select>     
                                
                            </div><br>
                            <div class="form-group">
                              <div class="input-group">

          												   <span class="input-group-btn">
          												     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
          												       <i class="fa fa-picture-o"></i> Choose
          												     </a>
          												   </span>
          												   <input id="thumbnail" class="form-control" type="text" name="img" placeholder="please choose your image...." value="{{old('img')}}">
					                    </div>

				                    	<img id="holder" style="margin-top:15px;max-height:100px;">

					                    </div> 

         										<div class="form-group">

         											<textarea id="my-editor" name="content" class="form-control" >
                                {{old('content')}}
                              </textarea>

         										</div> 

                            <div class="form-group">

                                <label>Create By</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('name')}}
                                </span>
                                <input class="form-control" name="created_by" value="{{Auth::user()->name}}" >     
                                
                            </div>  

                            <input type="submit" value="Create Post" class="btn btn-primary">


                        </form>
                                
                   </div>
                            


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

 </script>


  @endsection          