<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
    <meta content="Spruko" name="author">

    <!-- Title -->
    <title> Admin Dashboard</title>

    <!-- Favicon -->
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Ansta CSS -->
    <link href="assets/css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Tabs CSS -->
    <link href="assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">

    <!-- jvectormap CSS -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Sidemenu Css -->
    <link href="assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl" >
<div id="global-loader" ></div>
<div class="page">
    <div class="page-main">
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar ">
            <div class="sidebar-img">
                <a class="navbar-brand" href="dashboard.php"><img alt="..." class="navbar-brand-img main-logo" src="assets/img/brand/logo-dark.png"> <img alt="..." class="navbar-brand-img logo" src="assets/img/brand/logo.png"></a>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item active" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a class="slide-item" href="dashboard.php">Admin Dashboard</a>
                            </li>
                            <li>
                                <a class="slide-item" href="dashboard-social.html">Social Dashboard</a>
                            </li>
                            <li>
                                <a class="slide-item" href="dashboard-marketing.html">Marketing Dashboard</a>
                            </li>
                            <li>
                                <a class="slide-item" href="dashboard-it.html">IT Dashboard</a>
                            </li>
                            <li>
                                <a class="slide-item" href="dashboard-cryptocurrency.html">Cryptocurrency Dashboard</a>
                            </li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">News</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="addnews.php" class="slide-item">Add News</a>
                            </li>
                            <li>
                                <a href="news.php" class="slide-item">News</a>
                            </li>
                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="forms.html" class="slide-item">Basic Forms</a>
                            </li>
                            <li>
                                <a href="form-select2.html" class="slide-item">Forms Select2</a>
                            </li>
                            <li>
                                <a href="file-uploads.html" class="slide-item">Forms Uploads</a>
                            </li>
                            <li>
                                <a href="form-wizard.html" class="slide-item">Form wizard</a>
                            </li>
                            <li>
                                <a href="datepicker.html" class="slide-item">Form Datepicker</a>
                            </li>
                            <li>
                                <a href="form-switches.html" class="slide-item">Form switches</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="maps.html" class="slide-item">Google Maps</a>
                            </li>
                            <li>
                                <a href="vector-map.html" class="slide-item">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="tables.html" class="slide-item">Tables</a>
                            </li>
                            <li>
                                <a href="datatable.html" class="slide-item">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Chart Types</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="chart-flot.html" class="slide-item">Flot Charts</a>
                            </li>
                            <li>
                                <a href="chart-high.html" class="slide-item">High Charts </a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html" class="slide-item">Chartjs Charts</a>
                            </li>
                            <li>
                                <a href="charts-echarts.html" class="slide-item">Echart Charts</a>
                            </li>
                            <li>
                                <a href="charts-morris.html" class="slide-item">Morris Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="user-profile.html" class="slide-item">User Profile</a>
                            </li>
                            <li>
                                <a href="email-inbox.html" class="slide-item">Email Inbox</a>
                            </li>
                            <li>
                                <a href="email-compose.html" class="slide-item">Email</a>
                            </li>
                            <li>
                                <a href="gallery.html" class="slide-item">Gallery</a>
                            </li>
                            <li>
                                <a href="invoice.html" class="slide-item">Invoice</a>
                            </li>
                            <li>
                                <a href="pricing.html" class="slide-item">Pricing Tables</a>
                            </li>
                            <li>
                                <a href="empty.html" class="slide-item">Empty</a>
                            </li>
                            <li>
                                <a href="under-construction.html" class="slide-item">Under Construction</a>
                            </li>
                            <li>
                                <a href="400.html" class="slide-item">Page 400</a>
                            </li>
                            <li>
                                <a href="404.html" class="slide-item">Page 404</a>
                            </li>
                            <li>
                                <a href="500.html" class="slide-item">Page 500</a>
                            </li>
                            <li>
                                <a href="505.html" class="slide-item">Page 505</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-italic"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="icons-feather.html" class="slide-item">Feather Icons</a>
                            </li>
                            <li>
                                <a href="icons-fontawesome.html" class="slide-item">Font Awesome Icons</a>
                            </li>
                            <li>
                                <a href="icons-ion.html" class="slide-item">Ion Icons</a>
                            </li>
                            <li>
                                <a href="icons-materialdesign.html" class="slide-item">Materialdesign Icons</a>
                            </li>
                            <li>
                                <a href="icons-nucleo.html" class="slide-item">Nucleo Icons</a>
                            </li>
                            <li>
                                <a href="icons-pe7.html" class="slide-item">pe7 Icons</a>
                            </li>
                            <li>
                                <a href="icons-simpleline.html" class="slide-item">Simpleline Icons</a>
                            </li>
                            <li>
                                <a href="icons-themify.html" class="slide-item">Themify Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">Ui Elements</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="accordion.html" class="slide-item">Accordion</a>
                            </li>
                            <li>
                                <a href="alerts.html" class="slide-item">Alerts</a>
                            </li>
                            <li>
                                <a href="badges.html" class="slide-item">Badges</a>
                            </li>
                            <li>
                                <a href="buttons.html" class="slide-item">Buttons</a>
                            </li>
                            <li>
                                <a href="carousel.html" class="slide-item">Carousels</a>
                            </li>
                            <li>
                                <a href="colors.html" class="slide-item">Colors</a>
                            </li>
                            <li>
                                <a href="dropdowns.html" class="slide-item">Drop downs</a>
                            </li>
                            <li>
                                <a href="grids.html" class="slide-item">Grids</a>
                            </li>
                            <li>
                                <a href="modal.html" class="slide-item">Modal</a>
                            </li>
                            <li>
                                <a href="navigation.html" class="slide-item">Navigation</a>
                            </li>
                            <li>
                                <a href="pagination.html" class="slide-item">Pagination</a>
                            </li>
                            <li>
                                <a href="popovers.html" class="slide-item">Popovers</a>
                            </li>
                            <li>
                                <a href="progress.html" class="slide-item">Progress</a>
                            </li>
                            <li>
                                <a href="tabs.html" class="slide-item">Tabs</a>
                            </li>
                            <li>
                                <a href="tooltip.html" class="slide-item">Tooltip</a>
                            </li>
                            <li>
                                <a href="typography.html" class="slide-item">Typography</a>
                            </li>
                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Account</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="login.html" class="slide-item">Login</a>
                            </li>
                            <li>
                                <a href="register.html" class="slide-item">Register</a>
                            </li>
                            <li>
                                <a href="forgot.html" class="slide-item">Forgot password</a>
                            </li>
                            <li>
                                <a href="lockscreen.html" class="slide-item">Lock screen</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="shop.html" class="slide-item">Products</a>
                            </li>
                            <li>
                                <a href="cart.html" class="slide-item">Shopping Cart</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="side-menu__item" href="https://themeforest.net/user/sprukosoft/portfolio"><i class="side-menu__icon fa fa-question-circle"></i><span class="side-menu__label">Help & Support</span></a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Sidebar menu-->

        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                    <div class="p-2 d-block d-sm-none navbar-sm-search">
                        <!-- Form -->
                        <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div><input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Top navbar -->
                    <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

                            <!-- Horizontal Navbar -->
                            <ul class="navbar-nav align-items-center d-none d-xl-block">
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
                                        Default Settings <span class="fas fa-caret-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><span>Manage Profile</span></a>
                                        <a class="dropdown-item" href="#"><span>Themes</span></a>
                                        <a class="dropdown-item" href="#"><span>Passwords</span></a>
                                        <a class="dropdown-item" href="#"><span>Payment methods</span></a>
                                        <a class="dropdown-item" href="#"><span>Other Settings</span></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
                                        Projects <span class="fas fa-caret-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><span>Active</span></a>
                                        <a class="dropdown-item" href="#"><span>Marketing</span></a>
                                        <a class="dropdown-item" href="#"><span>Users</span></a>
                                        <a class="dropdown-item" href="#"><span>Development</span></a>
                                        <a class="dropdown-item" href="#"><span>Settings</span></a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Brand -->
                            <a class="navbar-brand pt-0 d-md-none" href="index-2.html">
                                <img src="assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
                            </a>
                            <!-- Form -->
                            <form class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div><input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </form>
                            <!-- User -->
                            <ul class="navbar-nav align-items-center ">
                                <li class="nav-item d-none d-md-flex">
                                    <div class="dropdown d-none d-md-flex mt-2 ">
                                        <a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-user "></i>
                                        </div></a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item d-flex" href="#">
                                            <span class="avatar brround mr-3 align-self-center"> <img src="assets/img/faces/male/4.jpg" alt="imag" ></span>
                                            <div>
                                                <strong>Madeleine Scott</strong> sent you friend request
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">Conform</span>
                                                    <span class="btn btn-sm btn-outline-primary">Delete</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/female/14.jpg" alt="imag" ></span>
                                            <div>
                                                <strong>rebica</strong> sent you friend request
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">Conform</span>
                                                    <span class="btn btn-sm btn-outline-primary">Delete</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/male/1.jpg" alt="imag"></span>
                                            <div>
                                                <strong>Devid robott</strong> sent you friend request
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">Conform</span>
                                                    <span class="btn btn-sm btn-outline-primary">Delete</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-center text-muted-dark" href="#">View all Requestes</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-mail "></i>
                                        </div></a>
                                    <div class="dropdown-menu  dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a href="#" class="dropdown-item text-center">12 New Messages</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/male/41.jpg" alt="img"></span>
                                            <div>
                                                <strong>Madeleine</strong> Hey! there I' am available....
                                                <div class="small text-muted">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/female/1.jpg" alt="img" ></span>
                                            <div>
                                                <strong>Anthony</strong> New product Launching...
                                                <div class="small text-muted">5  hour ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">See all Messages</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-bell f-30 "></i>
                                        </div></a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong>Someone likes our posts.</strong>
                                                <div class="small text-muted">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong> 3 New Comments</strong>
                                                <div class="small text-muted">5  hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong> Server Rebooted.</strong>
                                                <div class="small text-muted">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="assets/img/faces/female/32.jpg"></span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 ">Cori Stover</span>
                                            </div>
                                        </div></a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome!</h6>
                                        </div>
                                        <a class="dropdown-item" href="user-profile.html"><i class="ni ni-single-02"></i> <span>My profile</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-settings-gear-65"></i> <span>Settings</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-calendar-grid-58"></i> <span>Activity</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-support-16"></i> <span>Support</span></a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="ni ni-user-run"></i> <span>Logout</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Top navbar-->

                    <!-- Page content -->
                    <div class="container-fluid pt-8">
                        <div class="page-header mt-0 shadow p-3">
                            <ol class="breadcrumb mb-sm-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sales Dashboard</li>
                            </ol>
                            <div class="btn-group mb-0">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-plus mr-2"></i>Add new Page</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-eye mr-2"></i>View the page Details</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Edit Page</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
                                </div>
                            </div>
                        </div>