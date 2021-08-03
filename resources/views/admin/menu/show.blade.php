@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                
                                {{-- @can('create', App\Model\Menu::class) --}}
                                 <a class="btn btn-social btn-bitbucket" href="{{route('menu.create')}}">
                                        <i class="fa fa-plus"></i> Add Menu
                                    </a>
                               {{--  @endcan --}}

                            </h1>
                        </div>

                        
                        
                    </div>
                    <div class="row">
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
                                                   @foreach($menus as $menu)

                                                        <tr>
                                                            

                                                            
                                                            <td>{{$loop->index +1}}</td>
                                                            <td>{{$menu->name}}</td>
                                                            <td>{{$menu->created_at->diffForHumans()}}</td>

                                                            <td class="center"><a href="{{route('menu.edit',$menu->id)}}"class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></a></td>
                                                            
                                                            <td class="center">
                             <form id="delete-form-menu-{{$menu->id}}" action="{{route('menu.destroy',$menu->id)}}" method="post" style="display: none;">

                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                             </form>
                                                            <a onclick="ConfirmDelete({{$menu->id}})" class="btn btn-social-icon btn-google-plus">
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



            function ConfirmDelete(id)
            {
                var config = confirm('Are You Sure');
                if(config)
                {
                  $('#delete-form-menu-'+id).submit();
                }
            }
 </script>
  @endsection          