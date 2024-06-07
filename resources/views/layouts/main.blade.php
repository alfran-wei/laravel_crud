<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/index" by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 18:31:23 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Dashboard</title>

<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">



</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="/" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="/" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<div class="menu-toggle">
<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-bars"></i>
</a>
</div>

<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">
<li class="nav-item dropdown noti-dropdown language-drop me-2">
<a href="" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
<img src="assets/img/icons/header-icon-01.svg" alt>
</a>
<div class="dropdown-menu ">
<div class="noti-content">
<div>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
</div>
</div>
</div>
</li>

<li class="nav-item dropdown noti-dropdown me-2">
<a href="" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
<img src="assets/img/icons/header-icon-05.svg" alt>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="">View all Notifications</a>
</div>
</div>
</li>

<li class="nav-item zoom-screen me-2">
<a href="" class="nav-link header-nav-list win-maximize">
<img src="assets/img/icons/header-icon-04.svg" alt>
</a>
</li>

<li class="nav-item dropdown has-arrow new-user-menus">
<a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<div class="user-img">
<img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile">My Profile</a>
<a class="dropdown-item" href="inbox">Inbox</a>
<a class="dropdown-item" href="login">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="submenu active">
<a href=""><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="" class="active">Admin Dashboard</a></li>
<li><a href="">Teacher Dashboard</a></li>
<li><a href="">Student Dashboard</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="">Student List</a></li>
<li><a href="">Student View</a></li>
<li><a href="">Student Add</a></li>
<li><a href="">Student Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="">Teacher List</a></li>
<li><a href="">Teacher View</a></li>
<li><a href="">Teacher Add</a></li>
<li><a href="">Teacher Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="">Department List</a></li>
<li><a href="">Department Add</a></li>
<li><a href="">Department Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="">Subject List</a></li>
<li><a href="">Subject Add</a></li>
<li><a href="">Subject Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="invoices-list">Invoices List</a></li>
<li><a href="invoices-grid">Invoices Grid</a></li>
<li><a href="add-invoices">Add Invoices</a></li>
<li><a href="edit-invoices/{id}">Edit Invoices</a></li>
<li><a href="invoices-detail">Invoices Details</a></li>
<li><a href="invoices-setting">Invoices Settings</a></li>
</ul>
</li>
<li class="menu-title">
<span>Management</span>
</li>
<li class="submenu">
<a href=""><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="">Fees Collection</a></li>
<li><a href="">Expenses</a></li>
<li><a href="">Salary</a></li>
<li><a href="">Add Fees</a></li>
<li><a href="">Add Expenses</a></li>
<li><a href="">Add Salary</a></li>
</ul>
</li>
<li>
<a href=""><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href=""><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li>
<li>
<a href=""><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<a href=""><i class="fas fa-calendar-day"></i> <span>Events</span></a>
</li>
<li>
<a href=""><i class="fas fa-table"></i> <span>Time Table</span></a>
</li>
<li>
<a href=""><i class="fas fa-book"></i> <span>Library</span></a>
</li>
<li class="submenu">
<a href=""><i class="fa fa-newspaper"></i> <span> Blogs</span>
<span class="menu-arrow"></span>
</a>
<ul>
<li><a href="blog">All Blogs</a></li>
<li><a href="add-blog">Add Blog</a></li>
<li><a href="edit-blog">Edit Blog</a></li>
</ul>
</li>
<li>
<a href="settings"><i class="fas fa-cog"></i> <span>Settings</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href=""><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login">Login</a></li>
<li><a href="register">Register</a></li>
<li><a href="forgot-password">Forgot Password</a></li>
<li><a href="error-404">Error Page</a></li>
</ul>
</li>
<li>
<a href="blank-page"><i class="fas fa-file"></i> <span>Blank Page</span></a>
</li>
<li class="menu-title">
<span>Others</span>
</li>
<li>
<a href="sports"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li>
<li>
<a href="hostel"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
</li>
<li>
<a href="transport"><i class="fas fa-bus"></i> <span>Transport</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li class="submenu">
<a href=""><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="alerts">Alerts</a></li>
<li><a href="accordions">Accordions</a></li>
<li><a href="avatar">Avatar</a></li>
<li><a href="badges">Badges</a></li>
<li><a href="buttons">Buttons</a></li>
<li><a href="buttongroup">Button Group</a></li>
<li><a href="breadcrumbs">Breadcrumb</a></li>
<li><a href="cards">Cards</a></li>
<li><a href="carousel">Carousel</a></li>
<li><a href="dropdowns">Dropdowns</a></li>
<li><a href="grid">Grid</a></li>
<li><a href="images">Images</a></li>
<li><a href="lightbox">Lightbox</a></li>
<li><a href="media">Media</a></li>
<li><a href="modal">Modals</a></li>
<li><a href="offcanvas">Offcanvas</a></li>
<li><a href="pagination">Pagination</a></li>
<li><a href="popover">Popover</a></li>
<li><a href="progress">Progress Bars</a></li>
<li><a href="placeholders">Placeholders</a></li>
<li><a href="rangeslider">Range Slider</a></li>
<li><a href="spinners">Spinner</a></li>
<li><a href="sweetalerts">Sweet Alerts</a></li>
<li><a href="tab">Tabs</a></li>
<li><a href="toastr">Toasts</a></li>
<li><a href="tooltip">Tooltip</a></li>
<li><a href="typography">Typography</a></li>
<li><a href="video">Video</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="ribbon">Ribbon</a></li>
<li><a href="clipboard">Clipboard</a></li>
<li><a href="drag-drop">Drag & Drop</a></li>
<li><a href="rating">Rating</a></li>
<li><a href="text-editor">Text Editor</a></li>
<li><a href="counter">Counter</a></li>
<li><a href="scrollbar">Scrollbar</a></li>
<li><a href="notification">Notification</a></li>
<li><a href="stickynote">Sticky Note</a></li>
<li><a href="timeline">Timeline</a></li>
<li><a href="horizontal-timeline">Horizontal Timeline</a></li>
<li><a href="form-wizard">Form Wizard</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="chart-apex">Apex Charts</a></li>
<li><a href="chart-js">Chart Js</a></li>
<li><a href="chart-morris">Morris Charts</a></li>
<li><a href="chart-flot">Flot Charts</a></li>
<li><a href="chart-peity">Peity Charts</a></li>
<li><a href="chart-c3">C3 Charts</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="icon-fontawesome">Fontawesome Icons</a></li>
<li><a href="icon-feather">Feather Icons</a></li>
<li><a href="icon-ionic">Ionic Icons</a></li>
<li><a href="icon-material">Material Icons</a></li>
<li><a href="icon-pe7">Pe7 Icons</a></li>
<li><a href="icon-simpleline">Simpleline Icons</a></li>
<li><a href="icon-themify">Themify Icons</a></li>
<li><a href="icon-weather">Weather Icons</a></li>
<li><a href="icon-typicon">Typicon Icons</a></li>
<li><a href="icon-flag">Flag Icons</a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs">Basic Inputs </a></li>
<li><a href="form-input-groups">Input Groups </a></li>
<li><a href="form-horizontal">Horizontal Form </a></li>
<li><a href="form-vertical"> Vertical Form </a></li>
<li><a href="form-mask"> Form Mask </a></li>
<li><a href="form-validation"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href=""><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic">Basic Tables </a></li>
<li><a href="data-tables">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul>
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
@yield('content')

</div>


<script src="assets/js/jquery-3.7.1.min.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>

<script src="assets/js/feather.min.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>
<script src="assets/plugins/apexchart/chart-data.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>

<script src="assets/js/script.js" type="70979863ccb4882cfebc8ebc-text/javascript"></script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70979863ccb4882cfebc8ebc-|49" defer></script></body>




<!-- Mirrored from preschool.dreamstechnologies.com/template/index" by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 18:32:00 GMT -->
</html>