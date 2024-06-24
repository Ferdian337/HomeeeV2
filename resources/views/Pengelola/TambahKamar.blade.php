<!DOCTYPE html>
<html>
<head>
  <title>MIS</title>

  <!-- Custom fonts for this template-->
  <link href="dashboard_bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="dashboard_bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
  <body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-tasks"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MIS Menu</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kelola Homestay
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kelola Kamar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Kamar:</h6>
            <a class="collapse-item" href="/TambahKamar">Tambah Kamar</a>
            <a class="collapse-item" href="/EditKamar">Edit Kamar</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">       
        <a class="nav-link" href="/EditDeskripsiUmum">
          <i class="fas fa-fw fa-align-left"></i>
          <span>Edit Deskripsi Umum</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Statistik
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Daftar Pengunjung</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rentang Waktu: </h6>
            <a class="collapse-item" href="/DaftarPengunjungSebelum">Sudah Menginap</a>
            <a class="collapse-item" href="/DaftarPengunjungSekarang">Sedang Menginap</a>
            <a class="collapse-item" href="/DaftarPengunjungSesudah">Akan Menginap</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/ReviewPengunjung">
          <i class="fas fa-fw fa-comment-alt"></i>
          <span>Review Penungjung</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->


    <!-- Start Top Bar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- Dibawah Nama Pengelola beserta foto -->
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Start Main Item -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Kamar Baru</h6>
            </div>
            <div class="card-body">
            <!-- ISI TABEL -->
            <form method="post" action="/TambahKamar/store" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="Nama Kamar" class="col-sm-2 col-form-label">Nama Kamar</label>
              <div class="col-md-6">
                <input type="text" class="form-control form-control-user" id="NamaKamar" name= "nama_h" aria-describedby="emailHelp" placeholder="Masukan Nama Kamar" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="Nama Kamar" class="col-sm-2 col-form-label">Fasilitas</label>
              <div class="col-md-6">
                <input type="text" class="form-control form-control-user" id="FasilitasKamar" name= "fasilitas_h" aria-describedby="emailHelp" placeholder="Masukan Fasilitas Kamar" required>
              </div>
            </div>
            <div class="form-group row">             
              <label for="Nama Kamar" class="col-sm-2 col-form-label">Deskirpsi Kamar</label>
              <div class="col-md-6">
                <textarea class="form-control form-control-user" id="DeskirpsiKamar" name="deskripsi_h" rows="3" aria-describedby="emailHelp" placeholder="Masukan Deskirpsi Kamar" required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="Nama Kamar" class="col-sm-2 col-form-label">Jumlah Kamar</label>
              <div class="col-md-6">
                <input type="text" class="form-control form-control-user" id="JumlahKamar" name="jumKmar_h" aria-describedby="emailHelp" placeholder="Contoh: 6">
              </div>
            </div>
            <div class="form-group row">
                <label for="Nama Kamar" class="col-sm-2 col-form-label">Harga Kamar</label>
                <div class="col-md-6">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>      
                    <input type="text" class="form-control form-control-user" id="HargaKamar" name="hargaKmar_h" aria-describedby="emailHelp" placeholder="Contoh: 250000" required>
                  </div>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="Nama Kamar" class="col-sm-2 col-form-label">Upload Foto</label>
                <div class="col-md-6">
                  <input type="file" class="form-control-file form-control-user" id="FotoKamar">
                </div> -->
            </div>
             <hr>
            <div class="form-group col-md-1">
              <div class="row">
                <a href="/dashboard" class="btn btn-primary btn-user btn-block">Submit</a>
                <!-- <input type="submit" class="btn btn-success" value="Submit"> -->
              </div>
            </div>
          </form>
            </div>
          </div>



        <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Silahkan klik tombol "Logout" dibawah jika Anda ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>



 <!-- Bootstrap core JavaScript-->
  <script src="dashboard_bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="dashboard_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="dashboard_bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="dashboard_bootstrap/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="dashboard_bootstrap/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="dashboard_bootstrap/js/demo/chart-area-demo.js"></script>
  <script src="dashboard_bootstrap/js/demo/chart-pie-demo.js"></script>
  <script src="dashboard_bootstrap/js/demo/chart-bar-demo.js"></script>

  <!-- Chart JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</body>
</html>