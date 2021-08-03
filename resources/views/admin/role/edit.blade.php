@extends('admin.layout.app')
@section('head-section')

@endsection

@section('content')

     <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                 
                      <a class="btn btn-social btn-bitbucket" href="{{route('role.index')}}">
                              <i class="fa fa-arrow-left"></i> Back
                          </a>
                          Update Role 

                  </h1>
              </div>
              <div class = "row">
                 <div class="col-12 col-sm-12 col-md-6">

                       <form role="form" action="{{route('role.update',$role->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                            <div class="form-group">

                                <label>Name</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('name')}}
                                </span>
                                <input class="form-control" name="name" value="{{old('name',$role->name)}}" >     
                                
                            </div>

                            <div class="row"> 
                              <div class="col-lg-4">
                                  
                                    <label>Posts Permissions</label><br>
                                    @foreach($permissions as $permission)

                                      @if ($permission->for =='post') 

                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id}}"
                                                
                                                @foreach ($role->permissions as $role_permission)
                                                @if ($role_permission->id == $permission->id)
                                                      checked
                                                 @endif
                                                 @endforeach     

                                              >{{$permission->name}}</label>
                                        </div>

                                      @endif

                                    @endforeach
                                    
                                    

                              </div>
                              <div class="col-lg-4">
                                
                                    <label>Users Permissions</label><br>
                                   @foreach($permissions as $permission)

                                      @if ($permission->for =='user') 

                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id}}"
                                                @foreach ($role->permissions as $role_permission)
                                                @if ($role_permission->id == $permission->id)
                                                      checked
                                                 @endif
                                                 @endforeach   

                                              >{{$permission->name}}</label>
                                        </div>

                                      @endif

                                    @endforeach

                              </div>
                              <div class="col-lg-4">
                                
                                    <label>Other Permissions</label><br>
                                   
                                      @foreach($permissions as $permission)

                                      @if ($permission->for =='other') 

                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id}}"
                                                  @foreach ($role->permissions as $role_permission)
                                                @if ($role_permission->id == $permission->id)
                                                      checked
                                                 @endif
                                                 @endforeach   

                                              >{{$permission->name}}</label>
                                        </div>

                                      @endif

                                    @endforeach

                              </div>
                            </div> 

                            <div class="form-group">

                               <input type="submit" value="Save Change" class="btn btn-primary">

                            </div> 

                      </form>
                                
              </div>
                            


                        </div>
                        
          </div>
        </div>
      </div>  


@endsection

@section('footer-section')


  @endsection          