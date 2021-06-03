  @extends('layout/main')

  @section('judul','Biodata Alumni')

  @section('container')
    <!-- Main content -->
    <!-- <section class="content">
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
                    <i class="fas fa-user-graduate"><span class="ml-2"></span></i><b>Status</b> <a class="float-right">Alumni</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block"><b>Perbaharui Foto</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-graduation-cap"></i> Jurusan</strong>
                <p class="text-muted">24234-Teknik Informatika</p>
                <hr>
                <strong><i class="fas fa-university"></i> Perguruan Tinggi</strong>
                <p class="text-muted">202004-UIN Syekh Nurjati Cirebon</p>
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
                          <form method="post" action="/alumni">
                          @csrf
                            <div class="form-group row">
                              <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
                              <div class="col-sm-9">
                              <select class="form-control select2" style="width: 100%;" name="tahun_masuk" id="tahun_masuk">
                                  <option selected="selected" value="2021">2021</option>
                                  <option value="2020">2020</option>
                                  <option value="2019">2019</option>
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                              <div class="col-sm-9">
                              <select class="form-control select2" style="width: 100%;" name="tahun_lulus" id="tahun_lulus">
                                  <option selected="selected" value="2021">2021</option>
                                  <option value="2020">2020</option>
                                  <option value="2019">2019</option>
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="email" class="col-sm-3 col-form-label">Email</label>
                              <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Isi Email" name="email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="hp" placeholder="Isi Nomor Handphone / WhatsApp" name="hp">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" id="alamat" placeholder="Isi Alamat Lengkap" name="alamat"></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="pekerjaan" placeholder="Isi Pekerjaan Anda" name="pekerjaan">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat_bekerja" class="col-sm-3 col-form-label">Tempat Bekerja</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="tempat_bekerja" placeholder="Isi Nama Tempat Bekerja Anda" name="tempat_bekerja">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-3 col-sm-9">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                  </label>
                                </div>
                              </div>
                            </div>
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
    </section> -->
    <!-- /.content -->
  @endsection

