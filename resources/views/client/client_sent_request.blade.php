@extends('layouts.client_dashboard_default')


@section('content')

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'online Ob') }}

            </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{{ isset(Auth::user()->lName) ? Auth::user()->lName : Auth::user()->email }}}
                    </i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> View crimes</span></a>

                        <!-- /.nav-second-level -->
                    </li>
                    <!-- <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                    </li> -->
                    <li>
                        <a href="{{ route('get.request') }}"><i class="fa fa-edit fa-fw"></i> Report crime</a>
                    </li>



                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>


    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
              <h1>Request sent succesfully </h1>
                <h3> we will notify you on the progress of you case...</h3>


                <!-- <div class="col-lg-9">
               <form class="" action="crime" method="post">
                 {{ csrf_field() }}

                 <div class="form-group">
                     <label for="user_id" class="col-md-4 control-label">user_id</label>
                     <div class="col-md-6">
                         <input id="user_id" type="text" class="form-control" name="user_id" value="" required autofocus>
                     </div>
                 </div> -->
                 <!-- <div class="form-group">
                     <label for="user_id" class="col-md-4 control-label">user_id</label>
                     <div class="col-md-6">
                         <input id="user_id" type="text" class="form-control" name="user_id" value="" required autofocus>
                     </div>
                 </div> -->
                 <!-- <div class="form-group">
                     <label for="email" class="col-md-4 control-label">admin_id</label>
                     <div class="col-md-6">
                         <input id="admin_id" type="text" class="form-control" name="admin_id" value="" required autofocus>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="date" class="col-md-4 control-label">date</label>
                     <div class="col-md-6">
                         <input id="date" type="date" class="form-control" name="date" value="" required autofocus>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="type_id" class="col-md-4 control-label">type_id</label>
                     <div class="col-md-6">
                         <input id="type_id" type="text" class="form-control" name="type_id" value="" required autofocus>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="status" class="col-md-4 control-label">status</label>
                     <div class="col-md-6">
                         <input id="status" type="text" class="form-control" name="status" value="" required autofocus>
                     </div>
                 </div>

                 <div class="form-group">
                     <label for="crime_description" class="col-md-4 control-label">crime_description</label>
                     <div class="col-md-6">
                         <input id="crime_description" type="text" class="form-control" name="crime_description" value="" required autofocus>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-md-8 col-md-offset-4">
                         <button type="submit" class="btn btn-primary">
                             Login
                         </button>

                         <a class="btn btn-link" href="{{ route('get.request') }}">
                             Forgot Your Password?
                         </a>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-md-8 col-md-offset-4">
                         <button type="submit" class="btn btn-primary">
                             Login
                         </button>

                         <a class="btn btn-link" href="{{ route('password.request') }}">
                             Forgot Your Password?
                         </a>
                     </div>
                 </div>

              </form> -->

                  <!--   <div class="container">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                <p>Step 1</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <p>Step 2</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p>Step 3</p>
                            </div>
                        </div>


                    <form role="form" action="crime" method="post" >
                        {{ csrf_field() }}
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-10">
                                <div class="col-md-10">
                                    <h3> Step 1</h3>
                                    <div class="form-group">
                                        <label class="control-label">admin_id</label>
                                        <input name="admin_id"   type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">user_id</label>
                                        <input name="user_id" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">description</label>
                                        <input name="crime_description"  type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-xs-10">
                                <div class="col-md-10">
                                    <h3> Step 2</h3>
                                    <div class="form-group">
                                        <label class="control-label">Date</label>
                                        <input name="date" type="date" required="required" class="form-control" placeholder="Enter Company Name" />
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">status</label>
                                        <input  name="status" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h3> Click finish to send</h3>
                                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>


                </div>-->
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div><!-- /.panel-body -->
                            @endsection
