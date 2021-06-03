@extends('/layout/main')

@section('judul','Biodata Alumni')

@section('container')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{asset('admin/dist/img/IMG_3139.jpg')}}"
                     alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">Faisal Al Zamar</h3>
              <p class="text-muted text-center">2013081047</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <i class="fas fa-user-graduate"> <span class="ml-2"></span></i><b>Status</b> <a class="float-right">Alumni</a>
                </li>
              </ul>
              <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default"><b>Perbaharui Foto</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.modal -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Perbaharui Foto</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- <p>One fine body&hellip;</p> -->
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tentang Saya</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book-reader"></i>  <span class="ml-2">Jurusan</span></strong>
              <p class="text-muted">24234-Teknik Informatika</p>
              <hr>
              <strong><i class="fas fa-school"></i>  <span class="ml-2">Perguruan Tinggi</span></strong>
              <p class="text-muted">202004-Universitas Islam Siber Syekh Nurjati Indonesia</p>
              <hr>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
            <!-- /.Form Biodata Alumni -->
            <div class="col-md-9">   
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Biodata Alumni</h3>
                    </div>
                      <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="/biodata">
                        
                        @csrf
                          <div class="form-group row">
                            <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control @error ('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="Isi Tahun Masuk Anda" name="tahun_masuk" value="{{ old('tahun_masuk') }}">
                              @error ('tahun_masuk')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control @error ('tahun_lulus') is-invalid @enderror" id="tahun_lulus" placeholder="Isi Tahun Lulus Anda" name="tahun_lulus" value="{{ old('tahun_lulus') }}">
                              @error ('tahun_lulus')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Isi Email" name="email" value="{{ old('email') }}">
                              @error ('email')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control @error ('hp') is-invalid @enderror" id="hp" placeholder="Isi Nomor Handphone / WhatsApp" name="hp" value="{{ old('hp') }}">
                              @error ('hp')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                            <div class="col-sm-9">
                              <textarea class="form-control @error ('alamat') is-invalid @enderror" id="alamat" placeholder="Isi Alamat Lengkap" name="alamat" value="{{ old('alamat') }}"></textarea>
                              @error ('alamat')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control @error ('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="Isi Pekerjaan Anda" name="pekerjaan" value="{{ old('pekerjaan') }}">
                              @error ('pekerjaan')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tempat_bekerja" class="col-sm-3 col-form-label">Tempat Bekerja</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control @error ('tempat_bekerja') is-invalid @enderror" id="tempat_bekerja" placeholder="Isi Nama Tempat Bekerja Anda" name="tempat_bekerja" value="{{ old('tempat_bekerja') }}">
                              @error ('tempat_bekerja')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
                          <!-- <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div> -->
                          <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9">
                              <button type="submit" class="btn btn-primary btn-block"><b>Perbaharui Data</b></button>
                            </div>
                          </div>
                        </form>
                    </div> <!--Card Body -->
                </div>  <!--card card-primary -->
            </div> <!-- col-md-12 -->
            <!-- /.Akhir Form Biodata Alumni -->
        </div> <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

