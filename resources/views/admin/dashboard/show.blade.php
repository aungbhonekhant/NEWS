@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                    Dashboard
                                   
                            </h1>
                        </div>
                        <div class = "row">
                        	<div class="col-12" >
		                        <div class="col-lg-3 col-md-6">
		                            <div class="panel panel-primary">
		                                <div class="panel-heading">
		                                    <div class="row">
		                                        <div class="col-xs-3">
		                                            <i class="fa fa-navicon fa-5x"></i>
		                                        </div>
		                                        <div class="col-xs-9 text-right">
		                                            <div class="huge">{{ $menus->count()}}</div>
		                                            <div>Menus</div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <a href="{{route('menu.index')}}">
		                                    <div class="panel-footer">
		                                        <span class="pull-left">View Details</span>
		                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

		                                        <div class="clearfix"></div>
		                                    </div>
		                                </a>
		                            </div>
		                        </div>
		                        <div class="col-lg-3 col-md-6">
			                            <div class="panel panel-green">
			                                <div class="panel-heading">
			                                    <div class="row">
			                                        <div class="col-xs-3">
			                                            <i class="fa fa-pencil-square-o fa-5x"></i>
			                                        </div>
			                                        <div class="col-xs-9 text-right">
			                                        	
			                                            <div class="huge">{{ $posts->count()}}</div>
			                                            <div>Posts</div>
			                                            
			                                        </div>
			                                    </div>
			                                </div>
			                                <a href="{{route('post.index')}}">
			                                    <div class="panel-footer">
			                                        <span class="pull-left">View Details</span>
			                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

			                                        <div class="clearfix"></div>
			                                    </div>
			                                </a>
			                            </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
			                            <div class="panel panel-yellow">
			                                <div class="panel-heading">
			                                    <div class="row">
			                                        <div class="col-xs-3">
			                                            <i class="fa fa-user fa-5x"></i>
			                                        </div>
			                                        <div class="col-xs-9 text-right">
			                                            <div class="huge">{{$users->count()}}</div>
			                                            <div>Users!</div>
			                                        </div>
			                                    </div>
			                                </div>
			                                <a href="{{ route('user.index') }}">
			                                    <div class="panel-footer">
			                                        <span class="pull-left">View Details</span>
			                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

			                                        <div class="clearfix"></div>
			                                    </div>
			                                </a>
			                            </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-eye fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $all_views }}</div>
                                            <div>All View</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('post.index') }}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                                 

                                 
                     </div>
                     
                </div>
                <div class = "row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Viewer Chart for Week
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="morris-bar-chart">
                                    {!! $chart->container() !!}
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>

                    

                	<div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Most Popular
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Upload By</th>
                                                    <th>viewer</th>
                                                    <th>See Post</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($popular_posts as $key=>$post)
                                                <tr class="success">
                                                	
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ str_limit($post->title,'20') }}</td>
                                                    <td>{{ $post->created_by }}</td>
                                                    <td>{{ $post->view_count }}</td>
                                                    <td class="center"><a href="{{ route('home.post',$post->id) }}"class="btn btn-outline btn-success"><i class="fa fa-arrow-right"></i></a></td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                    </div>

                        
                    
                        
                </div>	
      </div>
    </div>
  </div>
@endsection

@section('footer-content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $chart->script() !!}

@endsection                
