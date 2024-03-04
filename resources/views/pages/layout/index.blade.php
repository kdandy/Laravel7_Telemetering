<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/favicon.ico" rel="icon" type="image/x-icon" />
  <title>Sistem Informasi Telemetering Tirtarona</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Telemetering</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a href="{{route('node1')}}" class="nav-link active">
                  <p>Device Telemetering 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('node2')}}" class="nav-link active">
                  <p>Device Telemetering 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('node3')}}" class="nav-link active">
                  <p>Device Telemetering 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tele1')}}" class="nav-link active">
                  <p>History Data Device 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tele2')}}" class="nav-link active">
                  <p>History Data Device 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tele3')}}" class="nav-link active">
                  <p>History Data Device 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('visual1')}}" class="nav-link active">
                  <p>Visualisasi Data Device 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('visual2')}}" class="nav-link active">
                  <p>Visualisasi Data Device 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <p>Visualisasi Data Device 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forecast')}}" class="nav-link active">
                  <p>Weather Forecast</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link active">
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link active">
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <footer class="main-footer">
    <strong>Copyright &copy; </strong> Made With Love.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & 'plugins' -->
<script src="{{asset('plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/jszip/jszip.min.js"></script>
<script src="{{asset('plugins')}}/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('plugins')}}/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist')}}/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#keseluruhan').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
