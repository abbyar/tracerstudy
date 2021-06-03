
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
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  
</head>
<body class="hold-transition sidebar-mini text-sm" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('/biodata') }}" class="nav-link">Biodata Alumni</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('/kuesioner') }}" class="nav-link">Isi Kuesioner</a>
      </li> -->
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
            <h1>Detail Data Alumni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="/alumni" class="btn btn-block btn-outline-primary"><b>Kembali</b></a>
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Biodata Alumni</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{asset('admin/dist/img/IMG_3139.jpg')}}"
                                alt="User profile picture">
                        </div>
                        
                        <h3 class="profile-username text-center">{{ $alumni->nama }}</h3>

                        <!-- <p class="text-muted text-center">{{ $alumni->pekerjaan }}</p>
                        <p class="text-muted text-center">{{ $alumni->tempat_bekerja }}</p> -->

                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <i class="fas fa-calendar-alt"></i><b> <span class="ml-2">Tanggal Lahir</span></b> <a class="float-right">{{ $alumni->tgl }}</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-envelope"></i><b> <span class="ml-2">Email</b> </span><a class="float-right">{{ $alumni->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-phone-square-alt"></i><b> <span class="ml-2">Nomor Handphone</b></span><a class="float-right">{{ $alumni->hp }}</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-briefcase"></i><b> <span class="ml-2">Pekerjaan</b></span> <a class="float-right">{{ $alumni->pekerjaan }}</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-building"></i><b> <span class="ml-2">Tempat Bekerja</b> </span><a class="float-right">{{ $alumni->tempat_bekerja }}</a>
                        </li>
                        </ul>
                        
                          <a href="{{ $alumni->id }}/edit" class="btn btn-block btn-outline-primary mt-2"><b>Edit Data Alumni</b></a>
                          <form action="{{ $alumni->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                            <button type="submit" class="btn btn-block btn-outline-danger mt-2"><b>Hapus Data Alumni</b></button>
                          </form>
                          
                          
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="col-md-7">   
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tentang Saya</h3>
                    </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-portrait"></i> <span class="ml-2">Nomor Induk Mahasiswa</span></strong>
                            <p class="text-muted">{{ $alumni->nim }}</p>
                            <hr>
                            <strong><i class="fas fa-graduation-cap"></i><span class="ml-2">Jurusan</span></strong>
                            <p class="text-muted">{{ $alumni->jurusan->nama_jurusan }}</p>
                            <hr>
                            <strong><i class="fas fa-university"></i> <span class="ml-2">Perguruan Tinggi</span></strong>
                            <p class="text-muted">{{ $alumni->perguruan_tinggi }}</p>
                            <hr>
                            <strong><i class="fas fa-user-graduate"></i> <span class="ml-2">Status</span></strong>
                            <p class="text-muted">{{ $alumni->status }}</p>
                            <hr>
                            <strong><i class="fas fa-calendar-alt"></i> <span class="ml-2">Tahun Masuk</span></strong>
                            <p class="text-muted">{{ $alumni->tahun_masuk }}</p>
                            <hr>
                            <strong><i class="fas fa-calendar-alt"></i> <span class="ml-2">Tahun Lulus</span></strong>
                            <p class="text-muted">{{ $alumni->tahun_lulus }}</p>
                            <hr>
                            <strong><i class="fas fa-house-user"></i> <span class="ml-2">Alamat Lengkap</span></strong>
                            <p class="text-muted">{{ $alumni->alamat }}</p>
                            <hr>
                        </div>
                        <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col Akhir -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">PTIPD</a>.</strong> UIN Syekh Nurjati Cirebon
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
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

   


</body>
</html>
