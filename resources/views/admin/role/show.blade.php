@extends('admin.layout.app')
@section('head-section')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Admin Roles
                                <a class="btn btn-social btn-bitbucket" href="{{route('role.create')}}" >
                                        <i class="fa fa-plus" ></i> Add Role
                                    </a>

                            </h1>
                        </div>
                        
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Edit</th>
                                                    <th>Deleted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($roles as $role)


                                             <tr>
                                                 <td>{{$loop->index +1 }}</td>
                                                 <td>{{$role->name}}</td>
                                                 <td>{{$role->created_at->diffForHumans()}}</td>

                                                 <td class="center"><a href="{{route('role.edit',$role->id)}}"class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></a></td>

                                                    <td class="center">
                                                        
             <form id="delete-form-company-{{$role->id}}" action="{{route('role.destroy',$role->id)}}" method="post" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
             </form>
                                                        <a onclick="deleteConfirm({{$role->id}})" class="btn btn-social-icon btn-google-plus">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>

                                             </tr>




                                            @endforeach
                                               
                                               
                                                
                                            </tbody>
                                        </table>
                                    </div>
                        
                    </div>
                    
                </div>
                
            </div>
@endsection

@section('footer-content')

<script>

            function getConfirm()
            {
                alert('ok');
            }
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });



            function deleteConfirm(id)
            {
                var config = confirm('Are Your Sure');
                if(config)
                {
                  $('#delete-form-company-'+id).submit();
                }
            }
 </script>
  @endsection          