<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
        <title>Branch 1 branch on github</title>
        <!-- ============================================
         * Ruang Admin template asset css files
        ============================================== -->
        <!-- datatables css file -->
          <link href="{{url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

        <!-- select 2  -->
        <link href="{{url('vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Bootstrap DatePicker -->  
        <link href="{{url('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" >
        <!-- Bootstrap Touchspin -->
        <link href="{{url('vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" >
        <!-- ClockPicker -->
        <link href="{{url('vendor/clock-picker/clockpicker.css')}}" rel="stylesheet">


        <!-- project custom css files -->
        <link href="{{url('css/architecture.css')}}" rel="stylesheet"></head>
        <link href="{{url('css/app.css')}}" rel="stylesheet"></head>
        <link href="{{url('css/custom.css')}}" rel="stylesheet"></head>

<body>
    <div class="preloader">
        <div class="spinner-border text-primary"></div>
    </div>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{url('assets/images/avatars/1.jpg')}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>        
            
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="{{url('/users')}}" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">UI Components</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Users
                                        <i class="metismenu-state-icon fa fa-angle-down pe-7s-angle-down caret-left"></i>

                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/users')}}">
                                                <i class="metismenu-icon">
                                                </i>All Users
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/users/create')}}">
                                                <i class="metismenu-icon"></i>
                                                Add new User
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Tags
                                        <i class="metismenu-state-icon fa fa-angle-down pe-7s-angle-down caret-left"></i>

                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/tags')}}">
                                                <i class="metismenu-icon">
                                                </i>All Tags
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/tags/create')}}">
                                                <i class="metismenu-icon"></i>
                                                Add new Tag
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Posts
                                         <i class="metismenu-state-icon fa fa-angle-down pe-7s-angle-down caret-left"></i>
                                        <i class=""></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/posts')}}">
                                                <i class="metismenu-icon">
                                                </i>All Posts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/posts/create')}}">
                                                <i class="metismenu-icon">
                                                </i>Create Post
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                        @section('main-body')
                        @show
         </div>
      </div>                  
 </body>
 </html>                       
 <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.j')}}s"></script>
  <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Select2 -->
  <script src="{{url('vendor/select2/dist/js/select2.min.js')}}"></script>
  <!-- Bootstrap Datepicker -->
  <script src="{{url('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Bootstrap Touchspin -->
  <script src="{{url('vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js')}}"></script>
  <!-- ClockPicker -->
  <script src="{{url('vendor/clock-picker/clockpicker.js')}}"></script> 

    <!-- Page level plugins -->
  <script src="{{url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->

<!-- Page level custom scripts -->
  <script src="{{url('js/charts/chart-area-demo.js')}}"></script>
  <script src="{{url('js/charts/chart-pie-demo.js')}}"></script>
  <script src="{{url('js/charts/chart-bar-demo.js')}}"></script>
  <!-- project custom js files -->
  <script src="{{url('js/app.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>
  <script src="{{url('assets/scripts/architecture.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
