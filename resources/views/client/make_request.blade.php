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
                    <li class="nav-item start ">
                        <a href="{{ route('home.dashboard') }}" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="arrow"></span>
                        </a>

                    </li>
                    <li class="nav-item start active open ">
                        <a href="{{ route('get.request') }}" class="nav-link nav-toggle">
                            <i class="icon-pencil"></i>
                            <span class="title">Record statement</span>
                            <span class="arrow"></span>
                        </a>

                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Analytics</span>
                            <span class="arrow"></span>
                        </a>

                    </li>

                    <!-- <li class="nav-item  active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">Form Stuff</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="form_controls.html" class="nav-link ">
                                    <span class="title">Bootstrap Form
                                        <br>Controls</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_controls_md.html" class="nav-link ">
                                    <span class="title">Material Design
                                        <br>Form Controls</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation.html" class="nav-link ">
                                    <span class="title">Form Validation</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation_states_md.html" class="nav-link ">
                                    <span class="title">Material Design
                                        <br>Form Validation States</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation_md.html" class="nav-link ">
                                    <span class="title">Material Design
                                        <br>Form Validation</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_layouts.html" class="nav-link ">
                                    <span class="title">Form Layouts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_repeater.html" class="nav-link ">
                                    <span class="title">Form Repeater</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_input_mask.html" class="nav-link ">
                                    <span class="title">Form Input Mask</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_editable.html" class="nav-link ">
                                    <span class="title">Form X-editable</span>
                                </a>
                            </li>
                            <li class="nav-item  active open">
                                <a href="form_wizard.html" class="nav-link ">
                                    <span class="title">Form Wizard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_icheck.html" class="nav-link ">
                                    <span class="title">iCheck Controls</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_image_crop.html" class="nav-link ">
                                    <span class="title">Image Cropping</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_fileupload.html" class="nav-link ">
                                    <span class="title">Multiple File Upload</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_dropzone.html" class="nav-link ">
                                    <span class="title">Dropzone File Upload</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bulb"></i>
                            <span class="title">Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="elements_steps.html" class="nav-link ">
                                    <span class="title">Steps</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_lists.html" class="nav-link ">
                                    <span class="title">Lists</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_ribbons.html" class="nav-link ">
                                    <span class="title">Ribbons</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_overlay.html" class="nav-link ">
                                    <span class="title">Overlays</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_cards.html" class="nav-link ">
                                    <span class="title">User Cards</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="table_static_basic.html" class="nav-link ">
                                    <span class="title">Basic Tables</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_static_responsive.html" class="nav-link ">
                                    <span class="title">Responsive Tables</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_bootstrap.html" class="nav-link ">
                                    <span class="title">Bootstrap Tables</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">Datatables</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="?p=" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title">Portlets</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="portlet_boxed.html" class="nav-link ">
                                    <span class="title">Boxed Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_light.html" class="nav-link ">
                                    <span class="title">Light Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_solid.html" class="nav-link ">
                                    <span class="title">Solid Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_ajax.html" class="nav-link ">
                                    <span class="title">Ajax Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_draggable.html" class="nav-link ">
                                    <span class="title">Draggable Portlets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Charts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="charts_amcharts.html" class="nav-link ">
                                    <span class="title">amChart</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_flotcharts.html" class="nav-link ">
                                    <span class="title">Flot Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_flowchart.html" class="nav-link ">
                                    <span class="title">Flow Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_google.html" class="nav-link ">
                                    <span class="title">Google Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_echarts.html" class="nav-link ">
                                    <span class="title">eCharts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_morris.html" class="nav-link ">
                                    <span class="title">Morris Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">HighCharts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-pointer"></i>
                            <span class="title">Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="maps_google.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="maps_vector.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">Page Layouts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_blank_page.html" class="nav-link ">
                                    <span class="title">Blank Page</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_ajax_page.html" class="nav-link ">
                                    <span class="title">Ajax Content Layout</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_language_bar.html" class="nav-link ">
                                    <span class="title">Header Language Bar</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_footer_fixed.html" class="nav-link ">
                                    <span class="title">Fixed Footer</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_boxed_page.html" class="nav-link ">
                                    <span class="title">Boxed Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-feed"></i>
                            <span class="title">Sidebar Layouts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_sidebar_menu_accordion.html" class="nav-link ">
                                    <span class="title">Sidebar Accordion Menu</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_menu_compact.html" class="nav-link ">
                                    <span class="title">Sidebar Compact Menu</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_reversed.html" class="nav-link ">
                                    <span class="title">Reversed Sidebar Page</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_fixed.html" class="nav-link ">
                                    <span class="title">Fixed Sidebar Layout</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_closed.html" class="nav-link ">
                                    <span class="title">Closed Sidebar Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class=" icon-wrench"></i>
                            <span class="title">Custom Layouts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_disabled_menu.html" class="nav-link ">
                                    <span class="title">Disabled Menu Links</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_full_height_portlet.html" class="nav-link ">
                                    <span class="title">Full Height Portlet</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_full_height_content.html" class="nav-link ">
                                    <span class="title">Full Height Content</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">eCommerce</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="ecommerce_index.html" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_orders.html" class="nav-link ">
                                    <i class="icon-basket"></i>
                                    <span class="title">Orders</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_orders_view.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">Order View</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_products.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Products</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_products_edit.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Product Edit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-docs"></i>
                            <span class="title">Apps</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="app_todo.html" class="nav-link ">
                                    <i class="icon-clock"></i>
                                    <span class="title">Todo 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="app_todo_2.html" class="nav-link ">
                                    <i class="icon-check"></i>
                                    <span class="title">Todo 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="app_inbox.html" class="nav-link ">
                                    <i class="icon-envelope"></i>
                                    <span class="title">Inbox</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="app_calendar.html" class="nav-link ">
                                    <i class="icon-calendar"></i>
                                    <span class="title">Calendar</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="app_ticket.html" class="nav-link ">
                                    <i class="icon-notebook"></i>
                                    <span class="title">Support</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">User</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_user_profile_1.html" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Profile 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_user_profile_1_account.html" class="nav-link ">
                                    <i class="icon-user-female"></i>
                                    <span class="title">Profile 1 Account</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_user_profile_1_help.html" class="nav-link ">
                                    <i class="icon-user-following"></i>
                                    <span class="title">Profile 1 Help</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_user_profile_2.html" class="nav-link ">
                                    <i class="icon-users"></i>
                                    <span class="title">Profile 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-notebook"></i>
                                    <span class="title">Login</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                                    <i class="icon-lock"></i>
                                    <span class="title">Lock Screen 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                                    <i class="icon-lock-open"></i>
                                    <span class="title">Lock Screen 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-social-dribbble"></i>
                            <span class="title">General</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_general_about.html" class="nav-link ">
                                    <i class="icon-info"></i>
                                    <span class="title">About</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_contact.html" class="nav-link ">
                                    <i class="icon-call-end"></i>
                                    <span class="title">Contact</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-notebook"></i>
                                    <span class="title">Portfolio</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-magnifier"></i>
                                    <span class="title">Search</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_pricing.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">Pricing</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_faq.html" class="nav-link ">
                                    <i class="icon-wrench"></i>
                                    <span class="title">FAQ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_blog.html" class="nav-link ">
                                    <i class="icon-pencil"></i>
                                    <span class="title">Blog</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_blog_post.html" class="nav-link ">
                                    <i class="icon-note"></i>
                                    <span class="title">Blog Post</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_invoice.html" class="nav-link ">
                                    <i class="icon-envelope"></i>
                                    <span class="title">Invoice</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_invoice_2.html" class="nav-link ">
                                    <i class="icon-envelope"></i>
                                    <span class="title">Invoice 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">System</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_cookie_consent_1.html" class="nav-link ">
                                    <span class="title">Cookie Consent 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_cookie_consent_2.html" class="nav-link ">
                                    <span class="title">Cookie Consent 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                    <span class="title">Coming Soon</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_404_1.html" class="nav-link ">
                                    <span class="title">404 Page 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                    <span class="title">404 Page 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                    <span class="title">404 Page 3</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_500_1.html" class="nav-link ">
                                    <span class="title">500 Page 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                    <span class="title">500 Page 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-folder"></i>
                            <span class="title">Multi Level Menu</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i> Item 1
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                            <i class="icon-user"></i> Arrow Toggle
                                            <span class="arrow nav-toggle"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-power"></i> Sample Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-paper-plane"></i> Sample Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-star"></i> Sample Link 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-camera"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-link"></i> Sample Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-pointer"></i> Sample Link 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                    <i class="icon-globe"></i> Arrow Toggle
                                    <span class="arrow nav-toggle"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-tag"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-pencil"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-graph"></i> Sample Link 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-bar-chart"></i> Item 3 </a>
                            </li>
                        </ul>
                    </li> -->
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
                <!-- <h1 class="page-title"> Bootstrap Form Wizard
                    <small>bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin</small>
                </h1> -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{ route('home.dashboard') }}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Make statement</span>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> actions
                                <i class="fa fa-angle-down"></i>
                            </button>

                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="m-heading-1 border-green m-bordered">
                            <h3>Twitter Bootstrap Wizard Plugin</h3>
                            <p> This twitter bootstrap plugin builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into
                                each step individually. </p>
                            <p> For more info please check out
                                <a class="btn red btn-outline" href="http://vadimg.com/twitter-bootstrap-wizard-example" target="_blank">the official documentation</a>
                            </p>
                        </div> -->
                        <div class="portlet light " id="form_wizard_1">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-red"></i>
                                    <span class="caption-subject font-red bold uppercase">
                                        <span class="step-title"> Step 1 of 4 </span>
                                    </span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                 <form class="form-horizontal" action="crime" id="submit_form" method="POST">
                                <!-- <form role="form" action="crime" method="post" > -->
                                    {{ csrf_field() }}
                                    <div class="form-wizard">
                                        <div class="form-body">
                                            <ul class="nav nav-pills nav-justified steps">
                                                <li>
                                                    <a href="#tab1" data-toggle="tab" class="step">
                                                        <span class="number"> 1 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Select police station </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number"> 2 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Personal info </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab" class="step active">
                                                        <span class="number"> 3 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Make statement </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number"> 4 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Confirm </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div id="bar" class="progress progress-striped" role="progressbar">
                                                <div class="progress-bar progress-bar-success"> </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-none">
                                                    <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                <div class="tab-pane active" id="tab1">
                                                    <h3 class="block">Select police station</h3>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Type of crime
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                          <select class="form-control" name="fullname">

                                                            <option disabled selected value>--type of crime--</option>
                                                             @foreach ($type as $row)
                                                               <option  value="{{$row->id}}">{{$row->name}} </option>
                                                            @endforeach


                                                        </select>
                                                            <!-- <input type="password" class="form-control" name="password" id="submit_form_password" /> -->
                                                            <span class="help-block"> Provide your type </span>
                                                        </div>
                                                    </div>

                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">Police station
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">

                                                            <select class="form-control" name="country">

                                                              <option disabled selected value>--police station-- </option>
                                                               @foreach ($ward as $row)
                                                                 <option  value="{{$row->id}}">{{$row->station_name}} </option>
                                                              @endforeach


                                                          </select>
                                                            <span class="help-block"> Provide the police station </span>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <h3 class="block">Provide your Personal info </h3>
                                                     <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">Fullname
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="fullname" />
                                                            <span class="help-block"> Provide your fullname </span>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">ID Number
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="phone" />
                                                            <span class="help-block"> Provide your id number </span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">Gender
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="radio-list">
                                                                <label>
                                                                    <input type="radio" name="gender" value="M" data-title="Male" /> Male </label>
                                                                <label>
                                                                    <input type="radio" name="gender" value="F" data-title="Female" /> Female </label>
                                                            </div>
                                                            <div id="form_gender_error"> </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">Address
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="address" />
                                                            <span class="help-block"> Provide your street address </span>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Phone Number
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="city" />
                                                            <span class="help-block"> Provide your phonenumber</span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">Country</label>
                                                        <div class="col-md-4">
                                                            <select name="country" id="country_list" class="form-control">
                                                                <option value=""></option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BA">Bosnia and Herzegowina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Cote d'Ivoire</option>
                                                                <option value="HR">Croatia (Hrvatska)</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macau</option>
                                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="AN">Netherlands Antilles</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Reunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint LUCIA</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SH">St. Helena</option>
                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands (British)</option>
                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div> -->

                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <h3 class="block">Record your statement</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Date
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="date" class="form-control" name="gender" />
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Statement</label>
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" rows="3" name="remarks"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">Card Number
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="card_number" />
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">CVC
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="" class="form-control" name="card_cvc" />
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div> -->

                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <h3 class="block">Confirm your request</h3>
                                                    <h4 class="form-section">Station</h4>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Station:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="country"> </p>
                                                        </div>
                                                    </div>

                                                    <h4 class="form-section">Personal info</h4>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Name: </label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="gender">{{Auth::user()->fName}} {{Auth::user()->lName}} </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Id number:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="phone"> </p>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">Phone:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="city"> </p>
                                                        </div>
                                                    </div>


                                                    <h4 class="form-section">Statement</h4>
                                                    <!-- <div class="form-group">
                                                        <label class="control-label col-md-3">Date:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="gender"> </p>
                                                        </div>
                                                    </div> -->
                                                      <div class="form-group">
                                                          <label class="control-label col-md-3">Type of crime:</label>
                                                          <div class="col-md-4">
                                                              <p class="form-control-static" data-display="fullname"> </p>
                                                          </div>
                                                      </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Statement:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="remarks"> </p>
                                                          </div>
                                                        </div>



                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <a href="javascript:;" class="btn default button-previous">
                                                        <i class="fa fa-angle-left"></i> Back </a>
                                                    <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <button class="btn green button-submit" type="submit">Finish!</button>
                                                    <!-- <a href="javascript:;" class="btn green button-submit"> Submit
                                                        <i class="fa fa-check"></i>
                                                    </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub"> Art Director </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li> Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li> Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->

                            @endsection
