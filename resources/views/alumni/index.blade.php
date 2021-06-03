@extends('/layout/main')

@section('judul','Data Alumni UISSI')

@section('kembali')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <a href="/create" class="btn btn-block btn-outline-primary"><i class="fas fa-user-plus"><b> Tambah Data</b></i></a>
    </ol>
  </div>
@endsection

@section('container')
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <div class="row">
                <!-- <h1 class="card-title">Data Alumni</h1> -->
                  <div class="col-md-12">
                      @if (session('status')) <div class="alert alert-success">{{ session ('status') }}</div> @endif
                  </div>
                  <!-- <div class="col-md-2">
                      <a href="/create" class="btn btn-block btn-outline-primary"><i class="fas fa-user-plus"><b> Tambah Data</b></i></a>
                  </div> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">NIM</th>
                    <th scope="col" class="text-center">Nama</th>
                    <!-- <th scope="col" class="text-center">Password</th> -->
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
                    <!-- <td class="text-center">{{ $alm->password }}</td> -->
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
@endsection

