@extends('admin.layout.app')
@section('head-section')

@endsection

@section('content')

     <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                <a class="btn btn-social btn-bitbucket" href="{{route('menu.index')}}">
                                        <i class="fa fa-arrow-left"></i> Back
                                    </a>
                                    Create Menu

                            </h1>
                        </div>
                        <div class = "row">
                             <div class="col-12 col-sm-12 col-md-6">
                                   <form role="form" action="{{route('menu.store')}}" method="post">
                                    @csrf
                                        <div class="form-group">

                                            <label>Menu Name</label><br>
                                            <span style="color:red;">
                                              *{{$errors->first('name')}}
                                            </span>
                                            <input class="form-control" name="name" value="{{old('name')}}" placeholder="Please enter Menu name....">     
                                            
                                        </div>
                                        
                                        
                                       
                                          <input type="submit" value="Create Menu" class="btn btn-primary">


                                   </form>
                                
                             </div>
                            


                        </div>
                        
                    </div>
                  </div>
                </div>  


@endsection

@section('footer-section')


  @endsection          