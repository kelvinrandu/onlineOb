@extends('layouts.admin_dashboard_default')


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

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i>
                     <span class="badge badge-important"></span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">





                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="{{ route('admin.dashboard') }}">
                            <strong>See all requests</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{{ isset(Auth::user()->station_name) ? Auth::user()->station_name : Auth::user()->code }}}
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
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> View crimes</span></a>

                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i> Add record</a>
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
                                            <div class="col-md-6">
                                                <div class="portlet box red">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>assign Detective</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse"> </a>
                                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                            <a href="javascript:;" class="reload"> </a>
                                                            <a href="javascript:;" class="remove"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form action="#">

                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                  <div class="form-group">
                                                                      <label class="control-label">assigned by</label>
                                                                      <input type="text" class="form-control" placeholder="your name">

                                                                  </div>
                                                                    <label class="control-label">Date</label>
                                                                    <input type="date" class="form-control">

                                                                </div>
                                                                <div class="form-group">
                                                            <label class="control-label col-md-3">detectives</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" multiple>
                                                                    <optgroup label="Rape">
                                                                        <option>John mwiki</option>
                                                                        <option>Harry James</option>
                                                                        <option>Martin Mwamela</option>
                                                                        <option>Scott Atkins</option>
                                                                    </optgroup>
                                                                    <optgroup label="Theft">
                                                                      <option>John mwiki</option>
                                                                      <option>Harry James</option>
                                                                      <option>Martin Mwamela</option>
                                                                      <option>Scott Atkins</option>
                                                                    </optgroup>
                                                                    <optgroup label="Murder">
                                                                      <option>John mwiki</option>
                                                                      <option>Harry James</option>
                                                                      <option>Martin Mwamela</option>
                                                                      <option>Scott Atkins</option>
                                                                    </optgroup>
                                                                    <optgroup label="Buglary">
                                                                      <option>John mwiki</option>
                                                                      <option>Harry James</option>
                                                                      <option>Martin Mwamela</option>
                                                                      <option>Scott Atkins</option>
                                                                    </optgroup>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">comment</label>
                                                            <!-- <input name="crime_description"  type="text" required="required" class="form-control" placeholder="Enter Last Name" /> -->
                                                            <textarea class="form-control" placeholder="your comment goes here"  name="crime_description" rows="5" required="required"></textarea>
                                                        </div>


                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green">Assign</button>
                                                                <button type="button" class="btn default">Cancel</button>
                                                            </div>
                                                        </form>
                                                        <!-- END FORM-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="portlet box purple">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>View Statement</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse"> </a>
                                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                            <a href="javascript:;" class="reload"> </a>
                                                            <a href="javascript:;" class="remove"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form action="#">

                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label class="control-label">Name of complaint</label>
                                                                    <input type="text" class="form-control" value="kelvin Randu">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Type of crime</label>
                                                                    <input type="text" class="form-control" value="rape">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">phone</label>
                                                                    <input type="text" class="form-control" value="0711651196">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">statement</label>
                                                                    <!-- <input name="crime_description"  type="text" required="required" class="form-control" placeholder="Enter Last Name" /> -->
                                                                    <textarea class="form-control" placeholder="client complaint goes here"  name="crime_description" rows="5" required="required"></textarea>
                                                                </div>
                                                                <div class="form-actions">

                                                                    <button type="button" class="btn default">Close</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                        <!-- END FORM-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div><!-- /.panel-body -->
                            @endsection
