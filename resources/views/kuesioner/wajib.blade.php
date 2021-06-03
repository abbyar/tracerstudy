@extends('/layout/main')



@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <!-- <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Catatan</h5>
                Form Kuesioner Ini Telah Sesuai Dengan <b>Standar Tracer Studi DIKTI</b>, silahkan isi data ini dengan lengkap dan benar lalu simpan, setelah itu anda akan diarahkan ke halaman cetak kartu bukti pengisian.
                </div> -->

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Catatan
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                        Launch Default Modal
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                        Launch Primary Modal
                        </button> -->  
                        <div>
                        Form Kuesioner Ini Telah Sesuai Dengan <b>Standar Tracer Studi DIKTI</b>, silahkan isi data ini dengan lengkap dan benar lalu simpan, setelah itu anda akan diarahkan ke halaman cetak kartu bukti pengisian.
                        </div>
                    </div>
                    <!-- /.card -->
                    </div>

                <!-- Main content -->

                <!-- /.invoice -->
                      
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Kuesioner Wajib</h3>
                        </div>
                        <!-- /.card-header -->
                        
                        <div class="container">
                        <br>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- <div class="alert alert-success hide"></div>	 -->
                            <form id="user_form" novalidate action="form_action.php"  method="post">	
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-1</h5>
                            <br>
                            <div class="form-group">
                            <div id="f5" class="form-group" style=""> 
                                <div class="row"> 
                                <!-- <label class="control-label col-sm-1 red-text">( f5 )</label>  -->
                                <label class="control-label col-sm-4">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</label> 
                                <div class="col-sm-7"> 
                                    <input name="f501" value="1" type="radio">&nbsp;[1] Kira-kira <input name="f502" size="5" value="" class="width30 form-control" type="number"> bulan sebelum lulus ujian <br><br> 
                                    <input name="f501" value="2" type="radio">&nbsp;[2] Kira-kira <input class="width30 form-control" name="f503" size="5" value="" type="number"> bulan setelah lulus ujian <br> 
                                </div>
                                </div>
                            </div>
                            </div>
                            <br>
                            <input type="button" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            </fieldset>	
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-2</h5>
                            <br>
                            <div id="f12" class="form-group"> 
                                <div class="row"> 
                                <!-- <label class="control-label col-sm-1 red-text">( f12 )</label>  -->
                                <label class="control-label col-sm-4">Sebutkan sumberdana dalam pembiayaan kuliah?</label> 
                                <div class="col-sm-7"> 
                                    <div class="row"> 
                                        <div class="col-sm-10"> 
                                        <input name="f1201" value="1" type="radio"> [1] Biaya Sendiri / Keluarga<br> 
                                        <input name="f1201" value="2" type="radio"> [2] Beasiswa ADIK<br> 
                                        <input name="f1201" value="3" type="radio"> [3] Beasiswa BIDIKMISI<br> 
                                        <input name="f1201" value="4" type="radio"> [4] Beasiswa PPA<br> 
                                        <input name="f1201" value="5" type="radio"> [5] Beasiswa PPA<br> 
                                        <input name="f1201" value="6" type="radio"> [6] Beasiswa PPA<br> 
                                        <input name="f1201" value="7" type="radio"> [7] Lainnya, tuliskan: 
                                        </div>
                                    </div> 
                                    <div class="row"> 
                                        <div class="col-sm-10"> 
                                        <input class="form-control" name="f1202" size="60" maxlength="80" value="" type="text"> 
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-3</h5>
                            <br>
                            <div id="f8" class="form-group"> 
                            <div class="row"> 
                                <!-- <label class="control-label col-sm-1 red-text">( f8 )</label>  -->
                                <label class="control-label col-sm-4">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)? </label> 
                                <div class="col-sm-7"> 
                                    <input value="1" name="f8" valuetable="" table-striped="" table-responsive="1" onclick="hide1()" type="radio"> [1] Ya <br> 
                                    <input name="f8" value="2" onclick="show1()" type="radio"> [2] Tidak 
                                </div>
                            </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-4</h5>
                            <br>
                            <div id="f14" class="form-group"> 
                            <div class="row"> 
                                <!-- <label class="control-label col-sm-1 red-text">( f14 )</label>  -->
                                <label class="control-label col-sm-4"> Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label> 
                                <div class="col-sm-7"> 
                                    <span> 
                                    <input name="f14" value="1" type="radio"> [1] Sangat Erat<br> 
                                    <input name="f14" value="2" type="radio"> [2] Erat<br> 
                                    <input name="f14" value="3" type="radio"> [3] Cukup Erat<br> 
                                    <input name="f14" value="4" type="radio"> [4] Kurang Erat<br> 
                                    <input name="f14" value="5" type="radio"> [5] Tidak Sama Sekali <br> 
                                    </span> 
                                </div> 
                            </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-5</h5>
                            <br>
                            <div id="f15" class="form-group"> 
                            <div class="row"> 
                                <!-- <label class="control-label col-sm-1 red-text">( f15 )</label>  -->
                                <label class="control-label col-sm-4"> Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label> 
                                <div class="col-sm-7"> 
                                    <span> 
                                    <input name="f15" value="1" type="radio"> [1] Setingkat Lebih Tinggi<br> 
                                    <input name="f15" value="2" type="radio"> [2] Tingkat yang Sama<br> 
                                    <input name="f15" value="3" type="radio"> [3] Setingkat Lebih Rendah<br> 
                                    <input name="f15" value="4" type="radio"> [4] Tidak Perlu Pendidikan Tinggi<br> 
                                    </span> 
                                </div> 
                            </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-6</h5>
                            <br>
                            <div id="f13" class="form-group"> 
                            <div class="row"> 
                                <!-- <label class="control-label col-sm-1 red-text">( f13 )</label>  -->
                                <label class="control-label col-sm-4">Kira-kira berapa pendapatan anda setiap bulannya?</label> 
                                <div class="col-sm-7"> 
                                    <table class="table table-striped table-responsive"> 
                                    <tbody> 
                                        <tr> 
                                        <td>Dari Pekerjaan Utama</td> 
                                        <td> Rp. &nbsp; <input name="f1301" value="" size="20" type="number" class="form-control">
                                            <!-- <span class="hl">(f13-01)</span>  -->
                                            (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma) 
                                        </td> 
                                        </tr> 
                                        <tr>
                                        <td>Dari Lembur dan Tips</td>
                                        <td> Rp. &nbsp; <input name="f1302" value="" size="20" type="number" class="form-control">
                                            <!-- <span class="hl">(f13-02)</span>  -->
                                            (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
                                        </td> 
                                        </tr>
                                        <tr>
                                        <td>Dari Pekerjaan Lainnya</td>
                                        <td> Rp. &nbsp; <input name="f1303" value="" size="20" type="number" class="form-control">
                                            <!-- <span class="hl">(f13-03)</span>  -->
                                            (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
                                        </td> 
                                        </tr> 
                                    </tbody> 
                                    </table> 
                                </div> 
                            </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-7</h5>
                            <br>
                            <div id="f2" class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-1"> 
                                    <!-- <label class="control-label ">( f2 )</label>  -->
                                    </div> 
                                    <div class="col-sm-4"> 
                                    <label class="control-label ">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</label> 
                                    </div> 
                                    <div class="col-sm-7"> 
                                    <label>Perkuliahan</label> <br> 
                                    <input name="f21" value="1" type="radio"> [1] Sangat Besar<br> 
                                    <input name="f21" value="2" type="radio"> [2] Besar<br> 
                                    <input name="f21" value="3" type="radio"> [3] Cukup Besar<br> 
                                    <input name="f21" value="4" type="radio"> [4] Kurang<br> 
                                    <input name="f21" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div> 
                                </div> 
                                </div>
                                <div class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-5"></div> 
                                    <div class="col-sm-7"> 
                                        <label>Demonstrasi</label> <br> 
                                        <input name="f22" value="1" type="radio"> [1] Sangat Besar<br> 
                                        <input name="f22" value="2" type="radio"> [2] Besar<br> 
                                        <input name="f22" value="3" type="radio"> [3] Cukup Besar<br> 
                                        <input name="f22" value="4" type="radio"> [4] Kurang<br> 
                                        <input name="f22" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div> 
                                </div> 
                                </div>
                                <div class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-5"></div> 
                                    <div class="col-sm-7"> 
                                        <label>Partisipasi dalam proyek riset</label> <br> 
                                        <input name="f23" value="1" type="radio"> [1] Sangat Besar<br> 
                                        <input name="f23" value="2" type="radio"> [2] Besar<br> 
                                        <input name="f23" value="3" type="radio"> [3] Cukup Besar<br> 
                                        <input name="f23" value="4" type="radio"> [4] Kurang<br> 
                                        <input name="f23" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div> 
                                </div> 
                                </div>
                                <div class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-5"></div> 
                                    <div class="col-sm-7"> 
                                        <label>Magang</label> <br> 
                                        <input name="f24" value="1" type="radio"> [1] Sangat Besar<br> 
                                        <input name="f24" value="2" type="radio"> [2] Besar<br> 
                                        <input name="f24" value="3" type="radio"> [3] Cukup Besar<br> 
                                        <input name="f24" value="4" type="radio"> [4] Kurang<br> 
                                        <input name="f24" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div>
                                </div> 
                                </div>
                                <div class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-5"></div> 
                                    <div class="col-sm-7"> 
                                        <label>Praktikum</label> <br> 
                                        <input name="f25" value="1" type="radio"> [1] Sangat Besar<br> 
                                        <input name="f25" value="2" type="radio"> [2] Besar<br> 
                                        <input name="f25" value="3" type="radio"> [3] Cukup Besar<br> 
                                        <input name="f25" value="4" type="radio"> [4] Kurang<br> 
                                        <input name="f25" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div> 
                                </div> 
                                </div>
                                <div class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-5"></div> 
                                    <div class="col-sm-7"> 
                                        <label>Kerja Lapangan</label> <br> 
                                        <input name="f26" value="1" type="radio"> [1] Sangat Besar<br> 
                                        <input name="f26" value="2" type="radio"> [2] Besar<br> 
                                        <input name="f26" value="3" type="radio"> [3] Cukup Besar<br> 
                                        <input name="f26" value="4" type="radio"> [4] Kurang<br> 
                                        <input name="f26" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div> 
                                </div> 
                                </div>
                                <div class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-5"></div> 
                                    <div class="col-sm-7"> 
                                        <label>Diskusi</label> <br> 
                                        <input name="f27" value="1" type="radio"> [1] Sangat Besar<br> 
                                        <input name="f27" value="2" type="radio"> [2] Besar<br> 
                                        <input name="f27" value="3" type="radio"> [3] Cukup Besar<br> 
                                        <input name="f27" value="4" type="radio"> [4] Kurang<br> 
                                        <input name="f27" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                                    </div> 
                                </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-8</h5>
                            <br>
                            <div id="f3" class="form-group"> 
                                <div class="row"> 
                                    <div class="col-sm-1"> 
                                    <!-- <label class="control-label">( f3 )</label>  -->
                                    </div> 
                                    <div class="col-sm-4"> 
                                    <label class="control-label">Kapan anda mulai mencari pekerjaan? <i>Mohon pekerjaan sambilan tidak dimasukkan</i></label> 
                                    </div> 
                                    <div class="col-sm-7">
                                        <!-- <span class="hl"> f301 &nbsp;</span> -->
                                        
                                        <input id="f301" name="f301" value="1" onclick="show3()" type="radio"> [1] Kira-kira 
                                        <input name="f302" value="" size="5" type="number" class="width40 form-control"> &nbsp;bulan sebelum lulus &nbsp;&nbsp;
                                        <!-- <span class="hl">f302</span>-->
                                        <br><br>  
                                        <!-- <span class="hl">f301</span> -->
                                        
                                        <input id="f301" name="f301" value="2" onclick="show3()" type="radio"> [2] Kira-kira 
                                        <input name="f303" value="" size="5" type="number" class="width40 form-control"> &nbsp;bulan sesudah lulus &nbsp;&nbsp;
                                        <!-- <span class="hl">f303</span> -->
                                        <br><br> 
                                        <!-- <span class="hl">f301</span> -->
                                        
                                        <input id="f301" name="f301" value="3" onclick="hide3()" type="radio"> [3] Saya tidak mencari kerja (<i>Langsung ke pertanyaan f8</i>)<br> 
                                    </div> 
                                </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-9</h5>
                            <br>
                            <div id="f4" class="form-group" style=""> 
                                <div class="row"> 
                                    <!-- <label class="control-label col-sm-1">( f4 )</label>  -->
                                    <label class="control-label col-sm-4">Bagaimana anda mencari pekerjaan tersebut? <i>Jawaban bisa lebih dari satu</i></label> 
                                    <div class="col-sm-7"> 
                                        <input name="f401" value="1" type="checkbox"> [1] Melalui iklan di koran/majalah, brosur 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-01</span> -->
                                        <br> 
                                        <input name="f402" value="1" type="checkbox"> [1] Melamar ke perusahaan tanpa mengetahui lowongan yang ada 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-02</span> -->
                                        <br> 
                                        <input name="f403" value="1" type="checkbox"> [1] Pergi ke bursa/pameran kerja 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-03</span> -->
                                        <br> 
                                        <input name="f404" value="1" type="checkbox"> [1] Mencari lewat internet/iklan online/milis 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-04</span> -->
                                        <br> 
                                        <input name="f405" value="1" type="checkbox"> [1] Dihubungi oleh perusahaan
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-05</span> -->
                                        <br> 
                                        <input name="f406" value="1" type="checkbox"> [1] Menghubungi Kemenakertrans
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-06</span> -->
                                        <br> 
                                        <input name="f407" value="1" type="checkbox"> [1] Menghubungi agen tenaga kerja komersial/swasta
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-07</span> -->
                                        <br> 
                                        <input name="f408" value="1" type="checkbox"> [1] Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-08</span> -->
                                        <br> 
                                        <input name="f409" value="1" type="checkbox"> [1] Menghubungi kantor kemahasiswaan/hubungan alumni 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-09</span> -->
                                        <br> 
                                        <input name="f410" value="1" type="checkbox"> [1] Membangun jejaring (<i>network</i>) sejak masih kuliah 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-10</span> -->
                                        <br> 
                                        <input name="f411" value="1" type="checkbox"> [1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-11</span> -->
                                        <br> 
                                        <input name="f412" value="1" type="checkbox"> [1] Membangun bisnis sendiri
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-12</span> -->
                                        <br> 
                                        <input name="f413" value="1" type="checkbox"> [1] Melalui penempatan kerja atau magang
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-13</span> -->
                                        <br> 
                                        <input name="f414" value="1" type="checkbox"> [1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-14</span> -->
                                        <br> 
                                        <input name="f415" value="1" type="checkbox"> [1] Lainnya: 
                                        <!-- <span class="hl">&nbsp;&nbsp;f4-15</span> -->
                                        <br> 
                                            <div class="row"> 
                                            <div class="col-sm-10"> 
                                                <input size="40" name="f416" value="" type="text" class="form-control"> 
                                            </div> 
                                                <!-- <div class="col-sm-2"> f4-16 </div> -->
                                            </div>
                                    </div> 
                                </div> 
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-10</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-11</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-12</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-13</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-14</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-15</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-16</h5>
                            <br>
                            <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                            </div>
                            <br>
                            <input type="button" name="next" class="next btn btn-block btn-primary" value="Selanjutnya" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            <fieldset>
                            <br>
                            <h5>Kuesioner Wajib — Pertanyaan Ke-17</h5>
                            <br>
                            <div class="form-group">
                            <label for="mobile">Mobile*</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                            <label for="address">Address</label>
                            <textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
                            </div>
                            <br>
                            <input type="submit" name="submit" class="submit btn btn-block btn-success" value="Simpan Data" />
                            <input type="button" name="previous" class="previous btn btn-block btn-secondary" value="Sebelumnya" />
                            </fieldset>
                            </form>		
                        </div>	
                        <br>
                        <!--Card Body -->
                    </div>  
                    <!--card card-primary -->
                
                <!-- /.invoice -->

            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <style type="text/css">
        #user_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
@endsection