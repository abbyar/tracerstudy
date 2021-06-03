
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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('admin/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('admin/plugins/dropzone/min/dropzone.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
  
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
            <h1>Ubah Data Alumni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="/alumni" class="btn btn-block btn-outline-primary"><b>Kembali</b></a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row"> 
            <!-- Form Tambah Data Alumni -->
              <div class="col-md-12">   
                  <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">Form Ubah Data Alumni</h3>
                      </div>
                        <!-- /.card-header -->
                      <div class="card-body">
                          <form method="post" action="/alumni/{{ $alumni->id }}">
                          @method ('patch')
                          @csrf
                            <div class="form-group row">
                              <label for="status" class="col-sm-3 col-form-label">Status</label>
                              <div class="col-sm-9">
                                <select class="form-control select2bs4" style="width: 100%;" name="status" id="status" onchange="sample(this.value);" value="{{ $alumni->status }}">
                                  <option selected="selected" disabled>Pilih Status</option>
                                  <option value="Alumni" {{ old('status') == trans('Alumni') ? "selected" : "" }}>Alumni</option>
                                  <option value="Jurusan" {{ old('status') == trans('Jurusan') ? "selected" : "" }}>Jurusan</option>
                                  <option value="Fakultas" {{ old('status') == trans('Fakultas') ? "selected" : "" }}>Fakultas</option>
                                  <option value="Wakil Rektor" {{ old('status') == trans('Wakil Rektor') ? "selected" : "" }}>Wakil Rektor</option>
                                  <option value="Admin" {{ old('status') == trans('Admin') ? "selected" : "" }}>Admin</option>
                                </select>
                              </div>
                            </div>
                            <script type="text/javascript">
                              function sample(value)
                                  {
                                    if(value=="Alumni")
                                  {

                                        document.getElementById('aa').style.display = '';
                                        document.getElementById('bb').style.display = '';
                                        document.getElementById('cc').style.display = '';
                                        document.getElementById('dd').style.display = '';
                                        document.getElementById('ee').style.display = '';

                                  }
                                  if(value=="Jurusan")
                                  {

                                        document.getElementById('aa').style.display = '';
                                        document.getElementById('bb').style.display = '';
                                        document.getElementById('cc').style.display = 'none';
                                        document.getElementById('dd').style.display = 'none';
                                        document.getElementById('ee').style.display = '';

                                  }
                                  if(value=="Fakultas")
                                  {

                                        document.getElementById('aa').style.display = '';
                                        document.getElementById('bb').style.display = '';
                                        document.getElementById('cc').style.display = 'none';
                                        document.getElementById('dd').style.display = 'none';
                                        document.getElementById('ee').style.display = '';

                                  }
                                  if(value=="Wakil Rektor")
                                  {

                                        document.getElementById('aa').style.display = '';
                                        document.getElementById('bb').style.display = '';
                                        document.getElementById('cc').style.display = 'none';
                                        document.getElementById('dd').style.display = 'none';
                                        document.getElementById('ee').style.display = '';

                                  }
                                  if(value=="Admin")
                                  {

                                        document.getElementById('aa').style.display = '';
                                        document.getElementById('bb').style.display = '';
                                        document.getElementById('cc').style.display = 'none';
                                        document.getElementById('dd').style.display = 'none';
                                        document.getElementById('ee').style.display = '';

                                  }
                                  
                                  }
                            </script>
                            
                            <div id="aa" class="form-group row">
                              <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Isi Nama Lengkap" name="nama" value="{{ $alumni->nama }}">
                                  @error ('nama')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                              </div>
                            </div>
                            <div id="bb" class="form-group row">
                              <label for="nim" class="col-sm-3 col-form-label">NIM / NIP</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control @error ('nim') is-invalid @enderror" id="nim" placeholder="Isi NIM/NIP" name="nim" value="{{ $alumni->nim }}">
                                  @error ('nim')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                              </div>
                            </div>
                            <div id="cc" class="form-group row">
                              <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                              <div class="col-sm-9">
                                <select class="form-control select2" style="width: 100%;" name="jurusan_id" id="jurusan_id">
                                  <option selected="selected" disabled>Pilih Jurusan</option>
                                  @foreach ($jurusan as $id =>$nama_jurusan)
                                  <option value="{{ $id }}" {{ ($alumni->jurusan_id==$id)?"selected" :"" }}>{{ $nama_jurusan }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>                  
                            <div id="dd" class="form-group row">
                              <label for="perguruan_tinggi" class="col-sm-3 col-form-label">Perguruan Tinggi</label>
                              <div class="col-sm-9">
                              <select class="form-control select2bs4" style="width: 100%;" name="perguruan_tinggi" id="perguruan_tinggi" value="{{ $alumni->perguruan_tinggi }}">
                                  <option selected="selected" value="202007-IAIN Syekh Nurjati Cirebon">202007-IAIN Syekh Nurjati Cirebon</option>
                                </select>
                              </div>
                            </div>
                            <div id="ee" class="form-group row">
                              <label for="tgl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control @error ('tgl') is-invalid @enderror" id="tgl" placeholder="Isi Tanggal Lahir" name="tgl" value="{{ $alumni->tgl }}">
                                  @error ('tgl')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror                              
                              </div>
                            </div>
                            <div class="form-group row">
                            
                              <div class="offset-sm-3 col-sm-9">
                              <button type="submit" class="btn btn-block btn-primary"><b>Ubah Data Alumni</b></button>
                              </div>
                            </div>
                            
                          </form>
                      </div> <!--Card Body -->
                  </div>  <!--card card-primary -->
              </div> <!-- col-md-12 -->
          </div> <!-- row -->
      </div> <!-- container-fluid -->     
    </section>
  </div> <!-- content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    Inspiring for Excellences
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">PTIPD</a>.</strong> UIN Syekh Nurjati Cirebon
  </footer>
</div> <!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('admin/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('admin/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End

  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

  $recommended_foods = ["American Black Bear",
                       "Asiatic Black Bear",
                       "Brown Bear",
                       "Giant Panda"];

  //Old Names Select
  // $(function() {
  //      $("select").each(function (index, element) {
  //               const val = $(this).data('value');
  //               if(val !== '') {
  //                   $(this).val(val);
  //               }
  //       });
  // })
</script> 


</body>
</html>
