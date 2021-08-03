<div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Admin Pannel</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="{{route('home.index')}}"><i class="fa fa-home fa-fw"></i> {{'Finel Project'}}</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{Auth::user()->id}} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                           
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            @can('posts.title', Auth::user())
                             <li>
                                <a href="{{route('title.index')}}"><i class="fa fa-gear fa-fw"></i> Site Setting</a>
                            </li>
                            @endcan
                             
                             @can('posts.menu', Auth::user())
                             <li>
                                <a href="{{route('menu.index')}}"><i class="fa fa-navicon fa-fw"></i>Menu</a>
                            </li>
                            @endcan
                            
                            <li>
                                <a href="{{route('post.index')}}"><i class="fa fa-pencil-square-o fa-fw"></i>Post</a>
                            </li>
                            @can('users.role', Auth::user())
                            <li>
                                <a href="{{route('role.index')}}"><i class="fa fa-shield fa-fw"></i>Role</a>
                            </li>
                            @endcan
                            @can('users.permission', Auth::user())
                            <li>
                                <a href="{{route('permission.index')}}"><i class="fa fa-shield fa-fw"></i>Permissions</a>
                            </li>
                            @endcan
                            <li>
                                <a href="{{route('user.index')}}"><i class="fa fa-user fa-fw"></i>User</a>
                            </li>

                            @can('posts.filemanager', Auth::user())
                            <li>
                                <a href="{{route('filemanager.index')}}"><i class="fa fa-file fa-fw"></i>File Manager</a>
                            </li>
                            @endcan
                            <li>
                                <a href="{{route('message.index')}}"><i class="fa fa-envelope fa-fw"></i>User Message</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>