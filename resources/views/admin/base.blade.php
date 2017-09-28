<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL('admin/plugins/images/favicon.png')}}">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <link href="{{URL('admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <link href="{{URL('admin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{URL('admin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{URL('admin/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{URL('admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{URL('admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{URL('admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <script src="{{URL('admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
</head>
<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                     <b>
                        <img src="{{URL('admin/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" />
                        <img src="{{URL('admin/plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                     </b>
                        <span class="hidden-xs">
                            <img src="{{URL('admin/plugins/images/admin-text.png')}}" alt="home" class="dark-logo" />
                            <img src="{{URL('admin/plugins/images/admin-text-dark.png')}}" alt="home" class="light-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="{{URL('admin/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{title_case(Session::get('userlogin'))}}</b></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="{{URL('administrator/kategori')}}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Kategori</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                    </li>
                    <li>
                        <a href="{{URL('signout')}}" class="waves-effect"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Log out</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <div id="page-wrapper">
            @yield('content')
        </div>
    </div>
    <script src="{{URL('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{URL('admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{URL('admin/js/waves.js')}}"></script>
    <script src="{{URL('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{URL('admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{URL('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{URL('admin/js/custom.min.js')}}"></script>
    <script src="{{URL('admin/js/dashboard1.js')}}"></script>
    <script src="{{URL('admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>
</html>
