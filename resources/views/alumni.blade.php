
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tracer Study | UIN Syekh Nurjati Cirebon</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini text-sm layout-fixed layout-navbar-fixed layout-footer-fixed" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('/biodata') }}" class="nav-link">Biodata Alumni</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('/kuesioner') }}" class="nav-link">Isi Kuesioner</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('/alumni') }}" class="nav-link">Data Alumni</a>
      </li>
    </ul>    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tracer Study</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/IMG_3139.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Faisal Al Zamar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url ('/biodata') }}" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Biodata Alumni
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url ('/kuesioner') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Isi Kuesioner
                <span class="right badge badge-danger">Now</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url ('/alumni') }}" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Alumni
                <span class="right badge badge-danger">Banyak</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Alumni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Alumni</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <div class="row">
                <!-- <h1 class="card-title">Data Alumni</h1> -->
                  <div class="col-md-10">
                      @if (session('status')) <div class="alert alert-success">{{ session ('status') }}</div> @endif
                  </div>
                  <div class="col-md-2">
                      <a href="/create" class="btn btn-block btn-outline-primary"><i class="fas fa-user-plus"><b> Tambah Data</b></i></a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">NIM</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Tanggal Lahir</th>
                    <th scope="col" class="text-center">Jurusan</th>
                    <!-- <th scope="col" class="text-center">Perguruan Tinggi</th> -->
                    <th scope="col" class="text-center">Detail</th>
                    <th scope="col" class="text-center">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($alumni as $alm)
                  <tr>
                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                    <td>{{ $alm->nim }}</td>
                    <td>{{ $alm->nama }}</td>
                    <td class="text-center">{{ $alm->tgl }}</td>
                    <td class="text-left">{{ $alm->jurusan->nama_jurusan }}</td>
                    <!-- <td class="text-center">{{ $alm->perguruan_tinggi }}</td> -->
                    <td class="text-center">
                      <a href="alumni/{{ $alm->id }}" class="fas fa-eye"></a>
                    </td>
                    <td class="text-center">
                      <!-- <a href="" class="fas fa-user-edit"> | </a>
                      <a href="" class="fas fa-trash"></a> -->
                      <span class="badge badge-pill badge-info">Sudah</span>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    Inspiring for Excellences
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">PTIPD</a>.</strong> Universitas Islam Siber Syekh Nurjati Indonesia (UISSI)
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
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
