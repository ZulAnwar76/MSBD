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

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<style>
  /* Styling untuk ikon "accept" dan "reject" */
  .table-responsive td img {
      width: 20px; /* Ukuran ikon */
      height: 20px; /* Ukuran ikon */
      cursor: pointer; /* Menambahkan efek pointer pada ikon */
  }
  
  /* Menambahkan jarak antar ikon dalam kolom aksi */
  .table-responsive td a {
      margin-right: 10px; /* Menambah jarak antar ikon */
  }
  </style>
  
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

    <div class="header-left active">
        <!-- Logo besar -->
        <a href="index" class="logo">
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
<h6>Asep</h6>
<h5>Pegawai</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="settings"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="{{ route('login') }}"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile">My Profile</a>
<a class="dropdown-item" href="settings">Settings</a>
<a class="dropdown-item" href="{{ route('login') }}">Logout</a>
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
<li><a href="produk">Tambah Produk</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="transaksi" class="active">Proses Transaki</a></li>
</ul>
</li>
</div>
</div>
</div>

<div class="page-wrapper">
  <div class="content">
  <div class="page-header">
  <div class="page-title">
  <h4>Transaksi Pembayaran</h4>
  <h6>Manage Transaki</h6>
  </div>
  
  </div>
  
  <div class="card">
  <div class="card-body">
  <div class="table-top">
  <div class="search-set">
  <div class="search-path">
  <a class="btn btn-filter" id="filter_search">
  <img src="assets/img/icons/filter.svg" alt="img">
  <span><img src="assets/img/icons/closes.svg" alt="img"></span>
  </a>
  </div>
  <div class="search-input">
  <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
  </div>
  </div>
  <div class="wordset">
  <ul>
  <li>
  <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
  </li>
  <li>
  <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
  </li>
  <li>
  <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
  </li>
  </ul>
  </div>
  </div>

  <div class="table-responsive">
    <table class="table datanew">
        <thead>
            <tr>
                <th>
                    <label class="checkboxs">
                        <input type="checkbox" id="select-all">
                        <span class="checkmarks"></span>
                    </label>
                </th>
                <th>Kustomer ID</th>
                <th>ID Produk</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                    </label>
                </td>
                <td class="text-bolds">JP45678</td>
                <td>SSB001</td>
                <td>550</td>
                <td><span class="badges bg-lightgreen">Received</span></td>
                <td>
                    <!-- Accept Button -->
                    <a class="me-3" href="javascript:void(0);" data-action="accept" data-id="JP45678">
                        <img src="assets/img/icons/checkmark-green.svg" alt="accept">
                    </a>
                    <!-- Reject Button -->
                    <a class="me-3" href="javascript:void(0);" data-action="reject" data-id="JP45678">
                        <img src="assets/img/icons/x-red.svg" alt="reject">
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                    </label>
                </td>
                <td class="text-bolds">JP12345</td>
                <td>SSB002</td>
                <td>200.000</td>
                <td><span class="badges bg-lightred">Pending</span></td>
                <td>
                    <a class="me-3" href="javascript:void(0);" data-action="accept" data-id="JP12345">
                        <img src="assets/img/icons/checkmark-green.svg" alt="accept">
                    </a>
                    <a class="me-3" href="javascript:void(0);" data-action="reject" data-id="JP12345">
                        <img src="assets/img/icons/x-red.svg" alt="reject">
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
  
  <script>
      // Menangani klik pada tombol Accept (langsung tanpa pop-up)
      document.querySelectorAll("a[data-action='accept']").forEach(button => {
          button.addEventListener("click", function() {
              const kustomerId = this.getAttribute("data-id");
  
              // Langsung lakukan aksi Accept tanpa modal atau notifikasi
              showNotification(`Order ${kustomerId} telah diterima.`);
          });
      });
  
      // Menangani klik pada tombol Reject (langsung tanpa pop-up)
      document.querySelectorAll("a[data-action='reject']").forEach(button => {
          button.addEventListener("click", function() {
              const kustomerId = this.getAttribute("data-id");
  
              // Langsung lakukan aksi Reject tanpa modal atau notifikasi
              showNotification(`Order ${kustomerId} telah ditolak.`, true); // Menambahkan parameter untuk Reject
          });
      });
  
      // Fungsi untuk menampilkan notifikasi
      function showNotification(message, isReject = false) {
          const notification = document.createElement("div");
          notification.classList.add("notification");
          if (isReject) {
              notification.classList.add("reject"); // Menandai notifikasi sebagai Reject
          }
          notification.innerText = message;
          document.body.appendChild(notification);
  
          // Menghapus notifikasi setelah beberapa detik
          setTimeout(function() {
              notification.remove();
          }, 3000); // Notifikasi akan hilang setelah 3 detik
      }
  </script>
  
  <style>
      .notification {
          background-color: #28a745; /* Green background for accept */
          color: white;
          padding: 10px;
          border-radius: 5px;
          position: fixed;
          top: 10px;
          right: 10px;
          z-index: 1000;
          font-size: 16px;
      }
  
      .notification.reject {
          background-color: #dc3545; /* Red background for reject */
      }
  </style>
  

  
<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>