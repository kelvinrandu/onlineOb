<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="{{asset('layout_assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('layout_assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('layout_assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('layout_assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('layout_assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('layout_assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('layout_assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
          {!! $map['js'] !!}
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>


</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
       <!-- BEGIN HEADER -->
       <div class="page-header navbar navbar-fixed-top">
           <!-- BEGIN HEADER INNER -->
           <div class="page-header-inner ">
               <!-- BEGIN LOGO -->
               <div class="page-logo">
                   <a href="index.html">
                       <img src="../assets/layouts/layout2/img/logo-default.png" alt="logo" class="logo-default" /> </a>
                   <div class="menu-toggler sidebar-toggler">
                       <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                   </div>
               </div>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <!-- BEGIN PAGE ACTIONS -->
               <!-- DOC: Remove "hide" class to enable the page header actions -->
               <div class="page-actions">
                   <div class="btn-group">
                       <!-- <button type="button" class="btn btn-circle btn-outline red dropdown-toggle" data-toggle="dropdown">
                           <i class="fa fa-plus"></i>&nbsp;
                           <span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;
                           <i class="fa fa-angle-down"></i>
                       </button> -->
                       <!-- <ul class="dropdown-menu" role="menu">
                           <li>
                               <a href="javascript:;">
                                   <i class="icon-docs"></i> New Post </a>
                           </li>
                           <li>
                               <a href="javascript:;">
                                   <i class="icon-tag"></i> New Comment </a>
                           </li>
                           <li>
                               <a href="javascript:;">
                                   <i class="icon-share"></i> Share </a>
                           </li>
                           <li class="divider"> </li>
                           <li>
                               <a href="javascript:;">
                                   <i class="icon-flag"></i> Comments
                                   <span class="badge badge-success">4</span>
                               </a>
                           </li>
                           <li>
                               <a href="javascript:;">
                                   <i class="icon-users"></i> Feedbacks
                                   <span class="badge badge-danger">2</span>
                               </a>
                           </li>
                       </ul> -->
                   </div>
               </div>
               <!-- END PAGE ACTIONS -->
               <!-- BEGIN PAGE TOP -->
               <div class="page-top">
                   <!-- BEGIN HEADER SEARCH BOX -->
                   <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                   <!-- <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                       <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search..." name="query">
                           <span class="input-group-btn">
                               <a href="javascript:;" class="btn submit">
                                   <i class="icon-magnifier"></i>
                               </a>
                           </span>
                       </div>
                   </form> -->
                   <!-- END HEADER SEARCH BOX -->
                   <!-- BEGIN TOP NAVIGATION MENU -->
                   <div class="top-menu">
                       <ul class="nav navbar-nav pull-right">
                           <!-- BEGIN NOTIFICATION DROPDOWN -->
                           <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                           <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                           <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                           <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                             @if (count(Auth::user()->fName)==1)

                             @else
                               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                   <i class="icon-bell"></i>
                            <span class="badge badge-default"> <?php echo count($request); ?></span>
                               </a>
                                @if ((Auth::user()->status)==0)
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">  <?php echo count($request); ?></span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>

                                         <li>
                                             <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                  @foreach ($request as $row)
                                                 <li>
                                                     <a href="{{ route('admin.get.requests',$row->id) }}">
                                                           <?php $time=$row->created_at->diffForHumans(); ?>
                                                         <span class="time"><?php echo $time ; ?></span>
                                                         <span class="details">
                                                             <!-- <span class="label label-sm label-icon label-success"> -->

                                                             <!-- </span> -->
                                                             {{$row->type->name}}</span>
                                                     </a>
                                                 </li>
                                                   @endforeach
                                             </ul>
                                         </li>



                                </ul>
                                @else
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">  <?php echo count($request); ?></span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>

                                         <li>
                                             <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                  @foreach ($request as $row)
                                                 <li>
                                                     <a href="{{ route('detective.get.statement',$row->id) }}">
                                                       <?php  $time=$row->created_at ?>


                                                         <span class="time"><?php  echo Carbon\Carbon::parse($time)->diffForHumans(); ?></span>
                                                         <span class="details">
                                                             <!-- <span class="label label-sm label-icon label-success"> -->

                                                             <!-- </span> -->
                                                             {{$row->ob_number}}</span>
                                                     </a>
                                                 </li>
                                                   @endforeach
                                             </ul>
                                         </li>



                                </ul>

  @endif

                               @endif
                           </li>
                           <!-- END NOTIFICATION DROPDOWN -->
                           <!-- BEGIN INBOX DROPDOWN -->
                           <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                   <i class="icon-envelope-open"></i>
                                   <span class="badge badge-default"> 4 </span>
                               </a>
                               <ul class="dropdown-menu">
                                   <li class="external">
                                       <h3>You have
                                           <span class="bold">7 New</span> Messages</h3>
                                       <a href="app_inbox.html">view all</a>
                                   </li>
                                   <li>
                                       <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                           <li>
                                               <a href="#">
                                                   <span class="photo">
                                                       <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                   <span class="subject">
                                                       <span class="from"> Lisa Wong </span>
                                                       <span class="time">Just Now </span>
                                                   </span>
                                                   <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                               </a>
                                           </li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           <!-- END INBOX DROPDOWN -->
                           <!-- BEGIN TODO DROPDOWN -->
                           <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                           <!-- END TODO DROPDOWN -->
                           <!-- BEGIN USER LOGIN DROPDOWN -->
                           <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           <li class="dropdown dropdown-user">
                               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                   <!-- <img alt="" class="img-circle" src="../assets/layouts/layout2/img/avatar3_small.jpg" /> -->

                                        <span class="username username-hide-on-mobile"> {{Auth::user()->fName}} </span>
                                        <span class="username username-hide-on-mobile"> {{{ isset(Auth::user()->station_name) ? Auth::user()->station_name : Auth::user()->code }}} </span>


                                   <i class="fa fa-angle-down"></i>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-default">
                                   <li>
                                       <a href="#">
                                           <i class="icon-user"></i> My Profile </a>
                                   </li>

                                   <li class="divider"> </li>

                                   <li>
                                     <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                         <i class="icon-key"></i> Log Out </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                         </form>
                                   </li>
                               </ul>
                           </li>
                           <!-- END USER LOGIN DROPDOWN -->
                           <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                           <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           <li class="dropdown dropdown-extended quick-sidebar-toggler">
                               <span class="sr-only">Toggle Quick Sidebar</span>
                               <i class="icon-logout"></i>
                           </li>
                           <!-- END QUICK SIDEBAR TOGGLER -->
                       </ul>
                   </div>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
               <!-- END PAGE TOP -->
           </div>
           <!-- END HEADER INNER -->
       </div>
        <div class="clearfix"></div>
        <!-- <div class="page-container">

          </div> -->
         {!! $map['html'] !!}
        </div>



    </div>

    <!-- Scripts -->

            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('layout_assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('layout_assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('layout_assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('layout_assets/pages/scripts/form-wizard.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/pages/scripts/profile.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('layout_assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>

</body>
</html>
