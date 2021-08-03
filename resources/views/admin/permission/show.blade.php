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
                                <a class="btn btn-social btn-bitbucket" href="{{route('permission.create')}}" >
                                        <i class="fa fa-plus" ></i> Add Permission
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
                                                    <th>Permmissions</th>
                                                    <th>Permission for</th>
                                                    <th>Date</th>
                                                    <th>Edit</th>
                                                    <th>Deleted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($permissions as $permission)


                                             <tr>
                                                 <td>{{$loop->index +1 }}</td>
                                                 <td>{{$permission->name}}</td>
                                                 <td>{{$permission->for}}</td>
                                                 <td>{{$permission->created_at->diffForHumans()}}</td>

                                                 <td class="center"><a href="{{route('permission.edit',$permission->id)}}"class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></a></td>

                                                    <td class="center">
             <form id="delete-form-permission-{{$permission->id}}" action="{{route('permission.destroy',$permission->id)}}" method="post" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
             </form>
                                                        <a onclick="deleteConfirm({{$permission->id}})" class="btn btn-social-icon btn-google-plus">
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
                  $('#delete-form-permission-'+id).submit();
                }
            }
 </script>
  @endsection          