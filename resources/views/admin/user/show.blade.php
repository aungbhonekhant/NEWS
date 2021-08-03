@extends('admin.layout.app')
@section('head-section')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                User-Admin 
                                @can('users.create', Auth::user())
                                    <a class="btn btn-social btn-bitbucket" href="{{route('user.create')}}">
                                            <i class="fa fa-plus"></i> Add User
                                    </a>
                                @endcan

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
                                                    <th>Email</th>
                                                    <th>Admin Role</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    @can('users.update', Auth::user())
                                                    <th>Edit</th>
                                                    @endcan
                                                    @can('users.delete', Auth::user())
                                                    <th>Deleted</th>
                                                    @endcan
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)

                                                <tr>
                                                    
                                                     <td>{{$loop->index +1}}</td>
                                                     <td>{{ $user->name }}</td>
                                                     <td>{{ $user->email }}</td>
                                                     <td>
                                                         
                                                        @foreach ($user->roles as $role)
                                                            
                                                            {{ $role->name }},
                                                            
                                                        @endforeach

                                                     </td>
                                                     <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                                                     <td>{{$user->created_at->diffForHumans()}}</td>

                                                @can('users.update', Auth::user())
                                                     <td class="center"><a href="{{route('user.edit',$user->id)}}"class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></a></td>
                                                 @endcan 
                                                 @can('users.delete', Auth::user())   

                                                    <td class="center">
             <form id="delete-form-user-{{$user->id}}" action="{{route('user.destroy',$user->id)}}" method="post" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
             </form>
                                                        <a onclick="deleteConfirm({{$user->id}})" class="btn btn-social-icon btn-google-plus">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                  @endcan  
 


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
                  $('#delete-form-user-'+id).submit();
                }
            }
 </script>
  @endsection          