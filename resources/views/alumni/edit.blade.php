@extends('/layout/main')

@section('judul','Edit Data Alumni UISSI')

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
                                <input type="number" class="form-control @error ('nim') is-invalid @enderror" id="nim" placeholder="Isi NIM/NIP" name="nim" value="{{ $alumni->nim }}">
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
                                  <option selected="selected" value="202007-Universitas Islam Siber Syekh Nurjati Indonesia">202007-Universitas Islam Siber Syekh Nurjati Indonesia</option>
                                </select>
                              </div>
                            </div>
                            <div id="ee" class="form-group row">
                              <label for="tgl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                              <div class="col-sm-9 input-group">
                                <input type="text" class="form-control @error ('tgl') is-invalid @enderror" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask id="tgl" placeholder="Isi Tanggal Lahir" name="tgl" value="{{ $alumni->tgl }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
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
  <!-- /.content -->
@endsection

