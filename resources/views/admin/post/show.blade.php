@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                
                                @can('posts.create', Auth::user())
                                 <a class="btn btn-social btn-bitbucket" href="{{route('post.create')}}">
                                        <i class="fa fa-plus"></i> 
                                        Add Posts
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
                                                    <th>Title</th>
                                                    <th>Menu</th>
                                                    <th>Date</th>
                                                    <th>Upload By</th>
                                                    <th>Viewer</th>
                                                    @can('posts.update', Auth::user())
                                                    <th>Edit</th>
                                                    @endcan
                                                    @can('posts.delete', Auth::user())
                                                    <th>Delete</th>
                                                    @endcan
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $post)
                                                    
                                                        <tr>
                                                            <td>{{ $loop->index +1 }}</td>
                                                            <td>{{ $post->title }}</td>
                                                            <td>{{ $post->menu->name }}</td>
                                                            <td>{{ $post->created_at->diffForHumans() }}</td>
                                                            <td>{{ $post->created_by }}</td>
                                                            <td>{{ $post->view_count }}</td>

                                                            @can('posts.update', Auth::user())
                                                                <td class="center">
                                                                    <a href="{{route('post.edit',$post->id)}}"class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></a>
                                                                </td>
                                                            @endcan

                                                            @can('posts.delete', Auth::user())

                                                            <td class="center">
             <form id="delete-form-post-{{$post->id}}" action="{{route('post.destroy',$post->id)}}" method="post" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
             </form>
                                                                <a onclick="ConfirmDelete({{$post->id}})" class="btn btn-social-icon btn-google-plus"><i class="fa fa-trash"></i></a>
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



            function ConfirmDelete(id)
            {
                var config = confirm('Are Your Sure');
                if(config)
                {
                  $('#delete-form-post-'+id).submit();
                }
            }
 </script>
  @endsection          