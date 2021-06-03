@extends('/layout/main')

@section('judul','Detail Data Alumni UISSI')

@section('kembali')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
       <a href="/alumni" class="btn btn-block btn-outline-primary"><b>Kembali</b></a>
    </ol>
  </div>
@endsection

@section('container')
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
                            <strong><i class="fas fa-book-reader"></i><span class="ml-2">Jurusan</span></strong>
                            <p class="text-muted">{{ $alumni->jurusan->nama_jurusan }}</p>
                            <hr>
                            <strong><i class="fas fa-school"></i> <span class="ml-2">Perguruan Tinggi</span></strong>
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
@endsection

