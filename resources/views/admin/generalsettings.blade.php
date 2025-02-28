<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>SSB Admin</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

  <div class="header">
  
      <div class="header-left active">
          <!-- Logo besar -->
          <a href="indexadmin" class="logo">
            <span class="logo-text">SSB Admin</span>
          </a>
        
          <!-- Logo kecil -->
          <a href="index" class="logo-small">
            <span class="logo-text-small">SSB Admin</span>
          </a>
        
          <!-- Toggle Button -->
          <a id="toggle_btn" href="javascript:void(0);">
          </a>
        </div>
        

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
          <span class="bar-icon">
          <span></span>
          <span></span>
          <span></span>
          </span>
          </a>
          
          <ul class="nav user-menu">
          <li class="nav-item dropdown has-arrow main-drop">
          <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
          <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
          <span class="status online"></span></span>
          </a>
          <div class="dropdown-menu menu-drop-user">
          <div class="profilename">
          <div class="profileset">
          <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
          <span class="status online"></span></span>
          <div class="profilesets">
          <h6>John Doe</h6>
          <h5>Admin</h5>
          </div>
          </div>
          <hr class="m-0">
          <a class="dropdown-item" href="profileadmin"> <i class="me-2" data-feather="user"></i> My Profile</a>
          <a class="dropdown-item" href="generalsettings"><i class="me-2" data-feather="settings"></i>Settings</a>
          <hr class="m-0">
          <a class="dropdown-item logout pb-0" href="{{ route('login') }}"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
          </div>
          </div>
          </li>
          </ul>
          
          
          <div class="dropdown mobile-user-menu">
          <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="profileadmin">My Profile</a>
          <a class="dropdown-item" href="generalsettings">Settings</a>
          <a class="dropdown-item" href="{{ route('login') }}">Logout</a>
          </div>
          </div>
          </div>
      </div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="index"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="productlist">Product List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="saleslist">Rekap Penjualan</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="invoicereport">Invoice Report</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
<ul>
  <li><a href="userlist">User list</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>General Setting</h4>
<h6>Manage General Setting</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Title <span class="manitory">*</span></label>
<input type="text" placeholder="Enter Title">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Date Format<span class="manitory">*</span></label>
<select class="select">
<option>Choose Date Format </option>
<option>DD/MM/YYYY</option>
<option>MM/DD/YYYY</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Email<span class="manitory">*</span></label>
<input type="text" placeholder="Enter email">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Phone<span class="manitory">*</span></label>
<input type="text" placeholder="Enter Phone">
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Address<span class="manitory">*</span> </label>
<input type="text" placeholder="Enter Address">
</div>
</div>
<div class="row">
<div class="col-lg-12">
<a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>