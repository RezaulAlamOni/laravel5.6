<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/libs.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="admin-page">
<div class="">
    <nav id="wrapper">
        <nav class="navbar navbar-default navbar-static-top " role="navigation" style="margin-bottom: 1px;padding-top:1px">
            <div class="navbar-header navbar-left col-md-4" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-success text-uppercase" href="/" style="font-size: 20px"><b>Home</b></a>
            </div>
            <!-- /.navbar-header -->
            <div class="col-md-8">

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 16px;">

                        @if(!auth()->guest())
                            <img class="img-circle" style="height: 20px" src="{{auth()->user()->photo ? auth()->user()->photo['file']: 'http://placeholder.it/400*400'}}" alt="">
                            <i class="fa fa-user fa-fw"></i>
                            {{ auth()->user()->name }}

                            @endif

                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>


            {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--@if(auth()->guest())--}}
            {{--@if(!Request::is('auth/login'))--}}
            {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
            {{--@endif--}}
            {{--@if(!Request::is('auth/register'))--}}
            {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
            {{--@endif--}}
            {{--@else--}}
            {{--<li class="dropdown">--}}
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
            {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}

            {{--<li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--@endif--}}
            {{--</ul>--}}
            </div>
        </nav>
        <nav id="sidebar">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <form action="admin.blade.php" method="post">
                            <div class="input-group custom-search-form">

                                <input type="text" class="form-control" name="search" placeholder="Search...">
                                <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                            </div>
                            </form>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a  class="active" href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users <span class=""></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.users')}}"><i class="fa fa-adn fa-fw"> </i> All Users</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.user.create')}}"><i class="fa fa-edit fa-fw"> </i> Create User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href=""><i class="fa fa-eject fa-fw"></i> Posts<span class="fa "></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/posts"><i class="fa fa-adn fa-fw"> </i>All Posts</a>
                                </li>

                                <li>
                                    <a href="/posts/create"><i class="fa fa-edit fa-fw"> </i>Create Post</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Categories<span class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/categories"><i class="fa fa-list-ul fa-fw"> </i> All Categories</a>
                                </li>

                                <li>
                                    <a href="/categories/create"><i class="fa fa-edit fa-fw"> </i>Create Category</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Media<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/media"><i class="fa fa-adn fa-fw"> </i> All Media</a>
                                </li>

                                <li>
                                    <a href=""> <i class="fa fa-upload fa-fw"> </i>Upload Media</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


    </nav>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')




                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@yield('footer')
</body>

</html>
