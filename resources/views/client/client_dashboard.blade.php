@extends('layouts.app')


@section('content')
<div class="page-container">
          <!-- BEGIN SIDEBAR -->
          <div class="page-sidebar-wrapper">
              <!-- END SIDEBAR -->
              <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
              <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
              <div class="page-sidebar navbar-collapse collapse">
                  <!-- BEGIN SIDEBAR MENU -->
                  <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                  <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                  <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                  <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                  <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                  <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                      <li class="nav-item start active open">
                          <a href="{{ route('home.dashboard') }}" class="nav-link nav-toggle">
                              <i class="icon-home"></i>
                              <span class="title">Dashboard</span>
                              <span class="selected"></span>
                              <span class="arrow open"></span>
                          </a>

                      </li>
                      <li class="nav-item  ">
                          <a href="{{ route('get.request') }}" class="nav-link nav-toggle">
                              <i class="icon-pencil"></i>
                              <span class="title">Record statement</span>
                              <span class="arrow"></span>
                          </a>

                      </li>
                      <li class="nav-item  ">
                          <a href="{{ route('get.analytics') }}" class="nav-link nav-toggle">
                              <i class="icon-bar-chart"></i>
                              <span class="title">Analytics</span>
                              <span class="arrow"></span>
                          </a>

                      </li>

                  </ul>
                  <!-- END SIDEBAR MENU -->
              </div>
              <!-- END SIDEBAR -->
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="page-content-wrapper">
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
                  <!-- BEGIN PAGE HEADER-->
                  <!-- BEGIN THEME PANEL -->

                  <!-- END THEME PANEL -->

          @if(Session::has('message'))
              <div class="alert alert-success"><em> {!! session('message') !!}</em></div>
          @endif
                  <h1 class="page-title"> Station analytics
                      <small>Familiarize yourself with stations around you</small>
                  </h1>
                  <div class="page-bar">
                      <ul class="page-breadcrumb">
                          <li>
                              <i class="icon-home"></i>
                              <a href="index.html">Home</a>
                              <i class="fa fa-angle-right"></i>
                          </li>
                          <li>
                              <span>view crime</span>
                          </li>
                      </ul>
                      <div class="page-toolbar">
                          <div class="btn-group pull-right">
                              <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                                  <i class="fa fa-angle-down"></i>
                              </button>
                              <ul class="dropdown-menu pull-right" role="menu">
                                  <li>
                                      <a href="#">
                                          <i class="icon-bell"></i> Action</a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="icon-shield"></i> Another action</a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="icon-user"></i> Something else here</a>
                                  </li>
                                  <li class="divider"> </li>
                                  <li>
                                      <a href="#">
                                          <i class="icon-bag"></i> Separated link</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!-- END PAGE HEADER-->
   <!-- {!! $chart->render() !!} -->
     @foreach ($admin as $row)
       <a href="{{ route('get.each.station',$row->id) }}" >
   <div class="alert alert-success">

       <strong><div class="pull right">{{$row->station_name}}</div></strong>  </div>

           </a>
         @endforeach
              </div>
              <!-- END CONTENT BODY -->

          </div>





      </div>
      <!-- END CONTAINER -->
      <!-- BEGIN FOOTER -->
  @endsection
