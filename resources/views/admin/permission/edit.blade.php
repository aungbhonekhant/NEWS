@extends('admin.layout.app')
@section('head-section')

@endsection

@section('content')

     <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                <a class="btn btn-social btn-bitbucket" href="{{route('permission.index')}}">
                                        <i class="fa fa-arrow-left"></i> Back
                                    </a>
                                    Create Permission 

                            </h1>
                        </div>
                        <div class = "row">
                             <div class="col-12 col-sm-12 col-md-6">
                                   <form role="form" action="{{route('permission.update',$permission->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">

                                            <label>Name</label><br>
                                            <span style="color:red;">
                                              *{{$errors->first('name')}}
                                            </span>
                                            <input class="form-control" name="name" value="{{old('name',$permission->name)}}" >     
                                            
                                        </div>
                                        <div class="form-group">

                                              <label>Permission for</label><br>
                                              <span style="color:red;">
                                                *{{$errors->first('for')}}
                                              </span>
                                              <select name="for" class="form-control">
                                                
                                                  <option selected disabled="">---select---</option>
                                                  <option value="user">User</option>
                                                  <option value="post">Post</option>
                                                  <option value="other">Other</option>
                                                  
                                              </select>     
                                
                                         </div><br>
                                        
                                          <input type="submit" value="Save Change" class="btn btn-primary">


                                   </form>
                                
                             </div>
                            


                        </div>
                        
                    </div>
                  </div>
                </div>  


@endsection

@section('footer-section')


  @endsection          