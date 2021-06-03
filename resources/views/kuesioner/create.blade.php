@extends('/layout/main')

@section('judul','Isi Kuesioner Alumni UISSI')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Catatan</h5>
                Form Kuesioner Ini Telah Sesuai Dengan <b>Standar Tracer Studi DIKTI</b>, silahkan isi data ini dengan lengkap dan benar lalu simpan, setelah itu anda akan diarahkan ke halaman cetak kartu bukti pengisian.
                </div>


                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                <!-- Awal Pertanyaan f5 -->
                <div id="f5" class="form-group" style=""> 
                    <div class="row"> 
                    <label class="control-label col-sm-1 red-text">( f5 )</label> 
                    <label class="control-label col-sm-4">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</label> 
                    <div class="col-sm-7"> 
                        <input name="f501" value="1" type="radio">&nbsp;[1] Kira-kira <input name="f502" size="5" value="" class="width40" type="number"> bulan sebelum lulus ujian &nbsp;&nbsp;<span class="hl">(f5-01, f5-02)</span><br><br> 
                        <input name="f501" value="2" type="radio">&nbsp;[2] Kira-kira <input class="width40" name="f503" size="5" value="" type="number"> bulan setelah lulus ujian &nbsp;&nbsp;<span class="hl">(f5-01, f5-03)</span><br> 
                    </div>
                    </div>
                </div>
                <!-- Akhir Pertanyaan f5 -->

                <!-- Awal Pertanyaan f12 -->
                <div id="f12" class="form-group"> 
                    <div class="row"> 
                    <label class="control-label col-sm-1 red-text">( f12 )</label> 
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
                            <div class="col-sm-2"> f12-01 </div> 
                        </div> 
                        <div class="row"> 
                            <div class="col-sm-10"> 
                            <input class="form-control" name="f1202" size="60" maxlength="80" value="" type="text"> 
                            </div> 
                            <div class="col-sm-2"> f12-02 </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Akhir Pertanyaan f12 -->

                <!-- Awal Pertanyaan f8 -->
                <div id="f8" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1 red-text">( f8 )</label> 
                    <label class="control-label col-sm-4">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)? </label> 
                    <div class="col-sm-7"> 
                        <input value="1" name="f8" valuetable="" table-striped="" table-responsive="1" onclick="hide1()" type="radio"> [1] Ya <br> 
                        <input name="f8" value="2" onclick="show1()" type="radio"> [2] Tidak 
                    </div>
                </div> 
                </div>
                <!-- Akhir Pertanyaan f8 -->

                <!-- Awal Pertanyaan f14 -->
                <div id="f14" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1 red-text">( f14 )</label> 
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
                <!-- Akhir Pertanyaan f14 -->

                <!-- Awal Pertanyaan f15 -->
                <div id="f15" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1 red-text">( f15 )</label> 
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
                <!-- Akhir Pertanyaan f15 -->

                <!-- Awal Pertanyaan f13 -->
                <div id="f13" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1 red-text">( f13 )</label> 
                    <label class="control-label col-sm-4">Kira-kira berapa pendapatan anda setiap bulannya?</label> 
                    <div class="col-sm-7"> 
                        <table class="table table-striped table-responsive"> 
                        <tbody> 
                            <tr> 
                            <td>Dari Pekerjaan Utama</td> 
                            <td> Rp. &nbsp; <input name="f1301" value="" size="20" type="number">
                                <span class="hl">(f13-01)</span> 
                                (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma) 
                            </td> 
                            </tr> 
                            <tr>
                            <td>Dari Lembur dan Tips</td>
                            <td> Rp. &nbsp; <input name="f1302" value="" size="20" type="number">
                                <span class="hl">(f13-02)</span> 
                                (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
                            </td> 
                            </tr> 
                            <tr>
                            <td>Dari Pekerjaan Lainnya</td>
                            <td> Rp. &nbsp; <input name="f1303" value="" size="20" type="number">
                                <span class="hl">(f13-03)</span> 
                                (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
                            </td> 
                            </tr> 
                        </tbody> 
                        </table> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f13 -->

                <!-- Awal Pertanyaan f2 -->
                <div id="f2" class="form-group"> 
                <div class="row"> 
                    <div class="col-sm-1"> 
                    <label class="control-label ">( f2 )</label> 
                    </div> 
                    <div class="col-sm-4"> 
                    <label class="control-label ">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</label> 
                    </div> 
                    <div class="col-sm-7"> 
                    <label>Perkuliahan (f21)</label> <br> 
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
                        <label>Demonstrasi (f22)</label> <br> 
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
                        <label>Partisipasi dalam proyek riset (f23)</label> <br> 
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
                        <label>Magang (f24)</label> <br> 
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
                        <label>Praktikum (f25)</label> <br> 
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
                        <label>Kerja Lapangan (f26)</label> <br> 
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
                        <label>Diskusi (f27)</label> <br> 
                        <input name="f27" value="1" type="radio"> [1] Sangat Besar<br> 
                        <input name="f27" value="2" type="radio"> [2] Besar<br> 
                        <input name="f27" value="3" type="radio"> [3] Cukup Besar<br> 
                        <input name="f27" value="4" type="radio"> [4] Kurang<br> 
                        <input name="f27" value="5" type="radio"> [5] Tidak Sama Sekali<br> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f2 -->

                <!-- Awal Pertanyaan f3 -->
                <div id="f3" class="form-group"> 
                <div class="row"> 
                    <div class="col-sm-1"> 
                    <label class="control-label">( f3 )</label> 
                    </div> 
                    <div class="col-sm-4"> 
                    <label class="control-label">Kapan anda mulai mencari pekerjaan? <i>Mohon pekerjaan sambilan tidak dimasukkan</i></label> 
                    </div> 
                    <div class="col-sm-7">
                        <span class="hl"> f301 &nbsp;</span>
                        <input id="f301" name="f301" value="1" onclick="show3()" type="radio"> [1] Kira-kira 
                        <input name="f302" value="" size="5" type="number" class="width40"> &nbsp;bulan sebelum lulus &nbsp;&nbsp;
                        <span class="hl">f302</span><br><br> 
                        <span class="hl">f301</span>&nbsp;&nbsp;
                        <input id="f301" name="f301" value="2" onclick="show3()" type="radio"> [2] Kira-kira 
                        <input name="f303" value="" size="5" type="number" class="width40"> &nbsp;bulan sesudah lulus &nbsp;&nbsp;
                        <span class="hl">f303</span><br><br> 
                        <span class="hl">f301</span>&nbsp;&nbsp;
                        <input id="f301" name="f301" value="3" onclick="hide3()" type="radio"> [3] Saya tidak mencari kerja (<i>Langsung ke pertanyaan f8</i>)<br> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f3 -->

                <!-- Javascript -->
                <script type="text/javascript">
                                function show3() {
                                    document.getElementById('f4').style.display = "";
                                    document.getElementById('f5').style.display = "";
                                    document.getElementById('f6').style.display = "";
                                    document.getElementById('f7').style.display = "";
                                    document.getElementById('f7a').style.display = "";
                                    document.getElementById('f8').style.display = "";
                                }
                                function hide3() {
                                    document.getElementById('f4').style.display = "none";
                                    document.getElementById('f5').style.display = "none";
                                    document.getElementById('f6').style.display = "none";
                                    document.getElementById('f7').style.display = "none";
                                    document.getElementById('f7a').style.display = "none";
                                    document.getElementById('f8').style.display = "none";
                                }
                            </script>
                <!-- Javascript -->

                <!-- Awal Pertanyaan f4 -->
                <div id="f4" class="form-group" style=""> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f4 )</label> 
                    <label class="control-label col-sm-4">Bagaimana anda mencari pekerjaan tersebut? <i>Jawaban bisa lebih dari satu</i></label> 
                    <div class="col-sm-7"> 
                        <input name="f401" value="1" type="checkbox"> [1] Melalui iklan di koran/majalah, brosur 
                        <span class="hl">&nbsp;&nbsp;f4-01</span><br> 
                        <input name="f402" value="1" type="checkbox"> [1] Melamar ke perusahaan tanpa mengetahui lowongan yang ada 
                        <span class="hl">&nbsp;&nbsp;f4-02</span><br> 
                        <input name="f403" value="1" type="checkbox"> [1] Pergi ke bursa/pameran kerja 
                        <span class="hl">&nbsp;&nbsp;f4-03</span><br> 
                        <input name="f404" value="1" type="checkbox"> [1] Mencari lewat internet/iklan online/milis 
                        <span class="hl">&nbsp;&nbsp;f4-04</span><br> 
                        <input name="f405" value="1" type="checkbox"> [1] Dihubungi oleh perusahaan
                        <span class="hl">&nbsp;&nbsp;f4-05</span><br> 
                        <input name="f406" value="1" type="checkbox"> [1] Menghubungi Kemenakertrans
                        <span class="hl">&nbsp;&nbsp;f4-06</span><br> 
                        <input name="f407" value="1" type="checkbox"> [1] Menghubungi agen tenaga kerja komersial/swasta
                        <span class="hl">&nbsp;&nbsp;f4-07</span><br> 
                        <input name="f408" value="1" type="checkbox"> [1] Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas 
                        <span class="hl">&nbsp;&nbsp;f4-08</span><br> 
                        <input name="f409" value="1" type="checkbox"> [1] Menghubungi kantor kemahasiswaan/hubungan alumni 
                        <span class="hl">&nbsp;&nbsp;f4-09</span><br> 
                        <input name="f410" value="1" type="checkbox"> [1] Membangun jejaring (<i>network</i>) sejak masih kuliah 
                        <span class="hl">&nbsp;&nbsp;f4-10</span><br> 
                        <input name="f411" value="1" type="checkbox"> [1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                        <span class="hl">&nbsp;&nbsp;f4-11</span><br> 
                        <input name="f412" value="1" type="checkbox"> [1] Membangun bisnis sendiri
                        <span class="hl">&nbsp;&nbsp;f4-12</span><br> 
                        <input name="f413" value="1" type="checkbox"> [1] Melalui penempatan kerja atau magang
                        <span class="hl">&nbsp;&nbsp;f4-13</span><br> 
                        <input name="f414" value="1" type="checkbox"> [1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah 
                        <span class="hl">&nbsp;&nbsp;f4-14</span><br> 
                        <input name="f415" value="1" type="checkbox"> [1] Lainnya: 
                        <span class="hl">&nbsp;&nbsp;f4-15</span><br> 
                            <div class="row"> 
                            <div class="col-sm-10"> 
                                <input size="40" name="f416" value="" type="text" class="form-control"> 
                            </div> 
                                <div class="col-sm-2"> f4-16 </div>
                            </div>
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f4 -->

                <!-- Awal Pertanyaan f6 -->
                <div id="f6" class="form-group" style=""> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f6 )</label> 
                    <label class="control-label col-sm-4">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?</label> 
                    <div class="col-sm-7"> 
                        <div class="row"> 
                        <div class="col-sm-2"> 
                            <input class="form-control" name="f6" size="5" value="" type="number"> 
                        </div> 
                            <div class="col-sm-10"> 
                            perusahaan/instansi/institusi 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f6 -->

                <!-- Awal Pertanyaan f7 -->
                <div id="f7" class="form-group" style=""> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f7 )</label> 
                    <label class="control-label col-sm-4">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda? </label> 
                    <div class="col-sm-7"> 
                        <div class="row"> 
                        <div class="col-sm-2"> 
                            <input class="form-control" name="f7" size="5" value="" type="number"> 
                        </div> 
                            <div class="col-sm-10"> 
                            perusahaan/instansi/institusi 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f7 -->

                <!-- Awal Pertanyaan f7a -->
                <div class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f7a )</label> 
                    <label class="control-label col-sm-4">Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara? </label> 
                    <div class="col-sm-7"> 
                        <div class="row"> 
                        <div class="col-sm-2"> 
                            <input class="form-control" name="f7a" size="5" value="" type="number"> 
                        </div> 
                        <div class="col-sm-10"> 
                            perusahaan/instansi/institusi 
                        </div> 
                        </div> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f7a -->

                <!-- Javascript -->
                <script type="text/javascript">
                                    function show1() {
                                        document.getElementById('f9').style.display = "";
                                        document.getElementById('f10').style.display = "";
                                    }
                                    function hide1() {
                                        document.getElementById('f9').style.display = "none";
                                        document.getElementById('f10').style.display = "none";
                                    }
                            </script>
                <!-- Javascript -->

                <!-- Awal Pertanyaan f9 -->
                <div id="f9" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f9 )</label> 
                    <label class="control-label col-sm-4">Bagaimana anda menggambarkan situasi anda saat ini? <i> Jawaban bisa lebih dari satu</i> </label> 
                    <div class="col-sm-7"> 
                        <input name="f901" value="1" type="checkbox"> [1] Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana 
                        <span class="hl">f9-01</span><br> 
                        <input name="f902" value="2" type="checkbox"> [2] Saya menikah 
                        <span class="hl">f9-02</span><br> 
                        <input name="f903" value="3" type="checkbox"> [3] Saya sibuk dengan keluarga dan anak-anak 
                        <span class="hl">f9-03</span><br> 
                        <input name="f904" value="4" type="checkbox"> [4] Saya sekarang sedang mencari pekerjaan 
                        <span class="hl">f9-04</span><br> 
                        <input name="f905" value="5" type="checkbox"> [5] Lainnya 
                        <span class="hl">f9-05</span><br> 
                        <div class="row"> 
                        <div class="col-sm-10"> 
                            <input class="form-control" name="f906" size="60" maxlength="80" value="" type="text"> 
                        </div> 
                        <div class="col-sm-2"> f9-06 </div> 
                        </div> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f9 -->

                <!-- Awal Pertanyaan f10 -->
                <div id="f10" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f10 )</label> 
                    <label class="control-label col-sm-4">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? <i> Pilihlah Satu Jawaban. KEMUDIAN LANJUT KE f17 </i> </label> 
                    <div class="col-sm-7"> 
                        <div class="row"> 
                        <div class="col-sm-10"> 
                            <input name="f1001" value="1" onclick="hide2()" type="radio"> [1] Tidak<br> 
                            <input name="f1001" value="2" onclick="hide2()" type="radio"> [2] Tidak, tapi saya sedang menunggu hasil lamaran kerja<br> 
                            <input name="f1001" value="3" onclick="hide2()" type="radio"> [3] Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br> 
                            <input name="f1001" value="4" onclick="hide2()" type="radio"> [4] Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br> 
                            <input name="f1001" value="5" onclick="hide2()" type="radio"> [5] Lainnya 
                        </div> 
                        <div class="col-sm-2"> f10-01 </div> 
                        </div> 
                        <div class="row"> 
                        <div class="col-sm-10"> 
                            <input class="form-control" name="f1002" size="60" maxlength="80" value="" type="text"> 
                        </div> 
                        <div class="col-sm-2"> f10-02 </div> 
                        </div> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f10 -->

                <!-- Javascript -->
                <script type="text/javascript">
                                    function hide2() {
                                        document.getElementById('f11').style.display = "none";
                                        document.getElementById('f13').style.display = "none";
                                        document.getElementById('f14').style.display = "none";
                                        document.getElementById('f15').style.display = "none";
                                        document.getElementById('f16').style.display = "none";
                                    }
                                </script>
                <!-- Javascript -->

                <!-- Awal Pertanyaan f11 -->
                <div id="f11" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f11 )</label> 
                    <label class="control-label col-sm-4">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</label> 
                    <div class="col-sm-7"> 
                        <div class="row"> 
                        <div class="col-sm-10"> 
                            <input name="f1101" value="1" type="radio"> [1] Instansi pemerintah (termasuk BUMN)<br> 
                            <input name="f1101" value="2" type="radio"> [2] Organisasi non-profit/Lembaga Swadaya Masyarakat<br> 
                            <input name="f1101" value="3" type="radio"> [3] Perusahaan swasta<br> 
                            <input name="f1101" value="4" type="radio"> [4] Wiraswasta/perusahaan sendiri<br> 
                            <input name="f1101" value="5" type="radio"> [5] Lainnya, tuliskan: 
                        </div> 
                        <div class="col-sm-2"> f11-01 </div> 
                        </div> 
                        <div class="row"> 
                        <div class="col-sm-10"> 
                            <input class="form-control" name="f1102" size="60" maxlength="80" value="" type="text"> 
                        </div> 
                        <div class="col-sm-2"> f11-02 
                        </div> 
                    </div> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f11 -->

                <!-- Awal Pertanyaan f16 -->
                <div id="f16" class="form-group"> 
                <div class="row"> 
                    <label class="control-label col-sm-1">( f16 )</label> 
                    <label class="control-label col-sm-4"> Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</label> 
                    <div class="col-sm-7"> 
                        <span> 
                        <input name="f1601" value="1" type="checkbox"> [1] Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. 
                            <span class="hl">f16-01</span><br> 
                        <input name="f1602" value="2" type="checkbox"> [2] Saya belum mendapatkan pekerjaan yang lebih sesuai.
                            <span class="hl">f16-02</span><br> 
                        <input name="f1603" value="3" type="checkbox"> [3] Di pekerjaan ini saya memeroleh prospek karir yang baik. 
                            <span class="hl">f16-03</span><br> 
                        <input name="f1604" value="4" type="checkbox"> [4] Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. 
                            <span class="hl">f16-04</span><br> 
                        <input name="f1605" value="5" type="checkbox"> [5] Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.
                            <span class="hl">f16-05</span><br> 
                        <input name="f1606" value="6" type="checkbox"> [6] Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. 
                            <span class="hl">f16-06</span><br> 
                        <input name="f1607" value="7" type="checkbox"> [7] Pekerjaan saya saat ini lebih aman/terjamin/secure 
                            <span class="hl">f16-07</span><br> 
                        <input name="f1608" value="8" type="checkbox"> [8] Pekerjaan saya saat ini lebih menarik 
                            <span class="hl">f16-08</span><br> 
                        <input name="f1609" value="9" type="checkbox"> [9] Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.
                            <span class="hl">f16-09</span><br> 
                        <input name="f1610" value="10" type="checkbox"> [10] Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. 
                            <span class="hl">f16-10</span><br> 
                        <input name="f1611" value="11" type="checkbox"> [11] Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. 
                            <span class="hl">f16-11</span><br> 
                        <input name="f1612" value="12" type="checkbox"> [12] Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya. 
                            <span class="hl">f16-12</span><br> 
                        <input name="f1613" value="13" type="checkbox"> [13] Lainnya: 
                            <span class="hl">f16-13</span><br> 
                            <div class="row"> 
                                <div class="col-sm-10"> 
                                <input class="form-control" name="f1614" size="60" value="" maxlength="80" type="text"> 
                                </div> 
                                <div class="col-sm-2"> f16-14 </div> 
                            </div> 
                        </span> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f16 -->

                <!-- Awal Pertanyaan f17 -->
                <div id="f17" class="form-group"> 
                <div class="row"> 
                <label class="control-label col-sm-1">( f17 )</label> 
                    <label class="control-label col-sm-4"> Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? (<b>Bagian A</b>) <br> Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (<b>Bagian B</b>)</label> 
                    <div class="col-sm-7"> 
                        <table class="table table-striped table-responsive"> 
                        <tbody> 
                            <tr> 
                            <th colspan="5" style="text-align:center;">Bagian A</th> 
                            <th>&nbsp;</th>
                            <th style="text-align:center;" colspan="5">Bagian B</th> 
                            </tr> 
                            <tr> 
                            <th colspan="2">Sangat Rendah</th>
                            <th>&nbsp;</th><th colspan="2">Sangat Tinggi</th> 
                            <th>&nbsp;</th> <th colspan="2">Sangat Rendah</th>
                            <th>&nbsp;</th><th colspan="2">Sangat Tinggi</th> 
                            </tr> 
                            <tr> 
                            <th>1</th> 
                            <th>2</th> 
                            <th>3</th> 
                            <th>4</th> 
                            <th>5</th> 
                            <th>&nbsp;</th> 
                            <th>1</th> 
                            <th>2</th> 
                            <th>3</th> 
                            <th>4</th> 
                            <th>5</th> 
                            </tr> 
                            <tr> 
                            <td><input name="f1701" value="1" type="radio"></td> 
                            <td><input name="f1701" value="2" type="radio"></td> 
                            <td><input name="f1701" value="3" type="radio"></td> 
                            <td><input name="f1701" value="4" type="radio"></td> 
                            <td><input name="f1701" value="5" type="radio"></td> 
                            <td>Pengetahuan di bidang atau disiplin ilmu anda 
                                <span class="hl">f17-1 f17-2b</span>
                            </td> 
                            <td><input name="f1702b" value="1" type="radio"></td> 
                            <td><input name="f1702b" value="2" type="radio"></td> 
                            <td><input name="f1702b" value="3" type="radio"></td> 
                            <td><input name="f1702b" value="4" type="radio"></td> 
                            <td><input name="f1702b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1703" value="1" type="radio"></td> 
                            <td><input name="f1703" value="2" type="radio"></td> 
                            <td><input name="f1703" value="3" type="radio"></td> 
                            <td><input name="f1703" value="4" type="radio"></td> 
                            <td><input name="f1703" value="5" type="radio"></td> 
                            <td>Pengetahuan di luar bidang atau disiplin ilmu anda 
                                <span class="hl">f17-3 f17-4b</span>
                            </td> 
                            <td><input name="f1704b" value="1" type="radio"></td> 
                            <td><input name="f1704b" value="2" type="radio"></td> 
                            <td><input name="f1704b" value="3" type="radio"></td> 
                            <td><input name="f1704b" value="4" type="radio"></td> 
                            <td><input name="f1704b" value="5" type="radio"></td> 
                            </tr> 
                            <tr> 
                            <td><input name="f1705" value="1" type="radio"></td> 
                            <td><input name="f1705" value="2" type="radio"></td> 
                            <td><input name="f1705" value="3" type="radio"></td> 
                            <td><input name="f1705" value="4" type="radio"></td> 
                            <td><input name="f1705" value="5" type="radio"></td> 
                            <td>Pengetahuan umum 
                                <span class="hl">f17-5 f17-6b</span>
                            </td> 
                            <td><input name="f1706b" value="1" type="radio"></td> 
                            <td><input name="f1706b" value="2" type="radio"></td> 
                            <td><input name="f1706b" value="3" type="radio"></td> 
                            <td><input name="f1706b" value="4" type="radio"></td> 
                            <td><input name="f1706b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1705a" value="1" type="radio"></td> 
                            <td><input name="f1705a" value="2" type="radio"></td> 
                            <td><input name="f1705a" value="3" type="radio"></td> 
                            <td><input name="f1705a" value="4" type="radio"></td> 
                            <td><input name="f1705a" value="5" type="radio"></td> 
                            <td>Bahasa Inggris 
                                <span class="hl">f17-5a f17-6ba</span>
                            </td> 
                            <td><input name="f1706ba" value="1" type="radio"></td> 
                            <td><input name="f1706ba" value="2" type="radio"></td> 
                            <td><input name="f1706ba" value="3" type="radio"></td> 
                            <td><input name="f1706ba" value="4" type="radio"></td> 
                            <td><input name="f1706ba" value="5" type="radio"></td> 
                            </tr> 
                            <tr> 
                            <td><input name="f1707" value="1" type="radio"></td> 
                            <td><input name="f1707" value="2" type="radio"></td> 
                            <td><input name="f1707" value="3" type="radio"></td> 
                            <td><input name="f1707" value="4" type="radio"></td> 
                            <td><input name="f1707" value="5" type="radio"></td> 
                            <td>Ketrampilan internet 
                                <span class="hl">f17-7 f17-8b</span> 
                            </td> 
                            <td><input name="f1708b" value="1" type="radio"></td> 
                            <td><input name="f1708b" value="2" type="radio"></td> 
                            <td><input name="f1708b" value="3" type="radio"></td> 
                            <td><input name="f1708b" value="4" type="radio"></td> 
                            <td><input name="f1708b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1709" value="1" type="radio"></td> 
                            <td><input name="f1709" value="2" type="radio"></td> 
                            <td><input name="f1709" value="3" type="radio"></td> 
                            <td><input name="f1709" value="4" type="radio"></td> 
                            <td><input name="f1709" value="5" type="radio"></td> 
                            <td>Ketrampilan komputer 
                                <span class="hl">f17-9 f17-10b</span> 
                            </td> 
                            <td><input name="f1710b" value="1" type="radio"></td> 
                            <td><input name="f1710b" value="2" type="radio"></td> 
                            <td><input name="f1710b" value="3" type="radio"></td> 
                            <td><input name="f1710b" value="4" type="radio"></td> 
                            <td><input name="f1710b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1711" value="1" type="radio"></td> 
                            <td><input name="f1711" value="2" type="radio"></td> 
                            <td><input name="f1711" value="3" type="radio"></td> 
                            <td><input name="f1711" value="4" type="radio"></td> 
                            <td><input name="f1711" value="5" type="radio"></td> 
                            <td>Berpikir kritis 
                                <span class="hl">f17-11 f17-12b</span>
                            </td> 
                            <td><input name="f1712b" value="1" type="radio"></td> 
                            <td><input name="f1712b" value="2" type="radio"></td> 
                            <td><input name="f1712b" value="3" type="radio"></td> 
                            <td><input name="f1712b" value="4" type="radio"></td> 
                            <td><input name="f1712b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1713" value="1" type="radio"></td> 
                            <td><input name="f1713" value="2" type="radio"></td> 
                            <td><input name="f1713" value="3" type="radio"></td> 
                            <td><input name="f1713" value="4" type="radio"></td> 
                            <td><input name="f1713" value="5" type="radio"></td> 
                            <td>Ketrampilan riset 
                                <span class="hl">f17-13 f17-14b</span> 
                            </td> 
                            <td><input name="f1714b" value="1" type="radio"></td> 
                            <td><input name="f1714b" value="2" type="radio"></td> 
                            <td><input name="f1714b" value="3" type="radio"></td> 
                            <td><input name="f1714b" value="4" type="radio"></td> 
                            <td><input name="f1714b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1715" value="1" type="radio"></td> 
                            <td><input name="f1715" value="2" type="radio"></td> 
                            <td><input name="f1715" value="3" type="radio"></td> 
                            <td><input name="f1715" value="4" type="radio"></td> 
                            <td><input name="f1715" value="5" type="radio"></td> 
                            <td>Kemampuan belajar 
                                <span class="hl">f17-15 f17-16b</span>
                            </td> 
                            <td><input name="f1716b" value="1" type="radio"></td> 
                            <td><input name="f1716b" value="2" type="radio"></td> 
                            <td><input name="f1716b" value="3" type="radio"></td> 
                            <td><input name="f1716b" value="4" type="radio"></td> 
                            <td><input name="f1716b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1717" value="1" type="radio"></td> 
                            <td><input name="f1717" value="2" type="radio"></td> 
                            <td><input name="f1717" value="3" type="radio"></td> 
                            <td><input name="f1717" value="4" type="radio"></td> 
                            <td><input name="f1717" value="5" type="radio"></td> 
                            <td>Kemampuan berkomunikasi 
                                <span class="hl">f17-17 f17-18b</span>
                            </td> 
                            <td><input name="f1718b" value="1" type="radio"></td> 
                            <td><input name="f1718b" value="2" type="radio"></td> 
                            <td><input name="f1718b" value="3" type="radio"></td> 
                            <td><input name="f1718b" value="4" type="radio"></td> 
                            <td><input name="f1718b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1719" value="1" type="radio"></td> 
                            <td><input name="f1719" value="2" type="radio"></td> 
                            <td><input name="f1719" value="3" type="radio"></td> 
                            <td><input name="f1719" value="4" type="radio"></td> 
                            <td><input name="f1719" value="5" type="radio"></td> 
                            <td>Bekerja di bawah tekanan 
                                <span class="hl">f17-19 f17-20b</span>
                            </td> 
                            <td><input name="f1720b" value="1" type="radio"></td> 
                            <td><input name="f1720b" value="2" type="radio"></td> 
                            <td><input name="f1720b" value="3" type="radio"></td> 
                            <td><input name="f1720b" value="4" type="radio"></td> 
                            <td><input name="f1720b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1721" value="1" type="radio"></td> 
                            <td><input name="f1721" value="2" type="radio"></td> 
                            <td><input name="f1721" value="3" type="radio"></td> 
                            <td><input name="f1721" value="4" type="radio"></td> 
                            <td><input name="f1721" value="5" type="radio"></td> 
                            <td>Manajemen waktu 
                                <span class="hl">f17-21 f17-22b</span>
                            </td> 
                            <td><input name="f1722b" value="1" type="radio"></td> 
                            <td><input name="f1722b" value="2" type="radio"></td> 
                            <td><input name="f1722b" value="3" type="radio"></td> 
                            <td><input name="f1722b" value="4" type="radio"></td> 
                            <td><input name="f1722b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1723" value="1" type="radio"></td> 
                            <td><input name="f1723" value="2" type="radio"></td> 
                            <td><input name="f1723" value="3" type="radio"></td> 
                            <td><input name="f1723" value="4" type="radio"></td> 
                            <td><input name="f1723" value="5" type="radio"></td> 
                            <td>Bekerja secara mandiri 
                                <span class="hl">f17-23 f17-24b</span>
                            </td> 
                            <td><input name="f1724b" value="1" type="radio"></td> 
                            <td><input name="f1724b" value="2" type="radio"></td> 
                            <td><input name="f1724b" value="3" type="radio"></td> 
                            <td><input name="f1724b" value="4" type="radio"></td> 
                            <td><input name="f1724b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1725" value="1" type="radio"></td> 
                            <td><input name="f1725" value="2" type="radio"></td> 
                            <td><input name="f1725" value="3" type="radio"></td> 
                            <td><input name="f1725" value="4" type="radio"></td> 
                            <td><input name="f1725" value="5" type="radio"></td> 
                            <td>Bekerja dalam tim/bekerjasama dengan orang lain 
                                <span class="hl">f17-25 f17-26b</span>
                            </td> 
                            <td><input name="f1726b" value="1" type="radio"></td> 
                            <td><input name="f1726b" value="2" type="radio"></td> 
                            <td><input name="f1726b" value="3" type="radio"></td> 
                            <td><input name="f1726b" value="4" type="radio"></td> 
                            <td><input name="f1726b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1727" value="1" type="radio"></td> 
                            <td><input name="f1727" value="2" type="radio"></td> 
                            <td><input name="f1727" value="3" type="radio"></td> 
                            <td><input name="f1727" value="4" type="radio"></td> 
                            <td><input name="f1727" value="5" type="radio"></td> 
                            <td>Kemampuan dalam memecahkan masalah 
                                <span class="hl">f17-27 f17-28b</span>
                            </td> 
                            <td><input name="f1728b" value="1" type="radio"></td> 
                            <td><input name="f1728b" value="2" type="radio"></td> 
                            <td><input name="f1728b" value="3" type="radio"></td> 
                            <td><input name="f1728b" value="4" type="radio"></td> 
                            <td><input name="f1728b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1729" value="1" type="radio"></td> 
                            <td><input name="f1729" value="2" type="radio"></td> 
                            <td><input name="f1729" value="3" type="radio"></td> 
                            <td><input name="f1729" value="4" type="radio"></td> 
                            <td><input name="f1729" value="5" type="radio"></td> 
                            <td>Negosiasi 
                                <span class="hl">f17-29 f17-30b</span>
                            </td> 
                            <td><input name="f1730b" value="1" type="radio"></td> 
                            <td><input name="f1730b" value="2" type="radio"></td> 
                            <td><input name="f1730b" value="3" type="radio"></td> 
                            <td><input name="f1730b" value="4" type="radio"></td> 
                            <td><input name="f1730b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1731" value="1" type="radio"></td>
                            <td><input name="f1731" value="2" type="radio"></td> 
                            <td><input name="f1731" value="3" type="radio"></td> 
                            <td><input name="f1731" value="4" type="radio"></td> 
                            <td><input name="f1731" value="5" type="radio"></td> 
                            <td>Kemampuan analisis 
                                <span class="hl">f17-31 f17-32b</span>
                            </td> 
                            <td><input name="f1732b" value="1" type="radio"></td> 
                            <td><input name="f1732b" value="2" type="radio"></td> 
                            <td><input name="f1732b" value="3" type="radio"></td> 
                            <td><input name="f1732b" value="4" type="radio"></td> 
                            <td><input name="f1732b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1733" value="1" type="radio"></td> 
                            <td><input name="f1733" value="2" type="radio"></td> 
                            <td><input name="f1733" value="3" type="radio"></td> 
                            <td><input name="f1733" value="4" type="radio"></td> 
                            <td><input name="f1733" value="5" type="radio"></td> 
                            <td>Toleransi 
                                <span class="hl">f17-33 f17-34b</span>
                            </td> 
                            <td><input name="f1734b" value="1" type="radio"></td> 
                            <td><input name="f1734b" value="2" type="radio"></td> 
                            <td><input name="f1734b" value="3" type="radio"></td> 
                            <td><input name="f1734b" value="4" type="radio"></td> 
                            <td><input name="f1734b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1735" value="1" type="radio"></td> 
                            <td><input name="f1735" value="2" type="radio"></td> 
                            <td><input name="f1735" value="3" type="radio"></td> 
                            <td><input name="f1735" value="4" type="radio"></td> 
                            <td><input name="f1735" value="5" type="radio"></td> 
                            <td>Kemampuan adaptasi 
                                <span class="hl">f17-35 f17-36b</span>
                            </td> 
                            <td><input name="f1736b" value="1" type="radio"></td> 
                            <td><input name="f1736b" value="2" type="radio"></td> 
                            <td><input name="f1736b" value="3" type="radio"></td> 
                            <td><input name="f1736b" value="4" type="radio"></td> 
                            <td><input name="f1736b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1737" value="1" type="radio"></td> 
                            <td><input name="f1737" value="2" type="radio"></td> 
                            <td><input name="f1737" value="3" type="radio"></td> 
                            <td><input name="f1737" value="4" type="radio"></td> 
                            <td><input name="f1737" value="5" type="radio"></td> 
                            <td>Loyalitas
                                <span class="hl">f17-37 f17-38b</span>
                            </td> 
                            <td><input name="f1738b" value="1" type="radio"></td> 
                            <td><input name="f1738b" value="2" type="radio"></td> 
                            <td><input name="f1738b" value="3" type="radio"></td> 
                            <td><input name="f1738b" value="4" type="radio"></td> 
                            <td><input name="f1738b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1737a" value="1" type="radio"></td> 
                            <td><input name="f1737a" value="2" type="radio"></td> 
                            <td><input name="f1737a" value="3" type="radio"></td> 
                            <td><input name="f1737a" value="4" type="radio"></td> 
                            <td><input name="f1737a" value="5" type="radio"></td> 
                            <td>Integritas 
                                <span class="hl">f17-37A f17-38ba</span>
                            </td> 
                            <td><input name="f1738ba" value="1" type="radio"></td> 
                            <td><input name="f1738ba" value="2" type="radio"></td> 
                            <td><input name="f1738ba" value="3" type="radio"></td> 
                            <td><input name="f1738ba" value="4" type="radio"></td> 
                            <td><input name="f1738ba" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1739" value="1" type="radio"></td> 
                            <td><input name="f1739" value="2" type="radio"></td> 
                            <td><input name="f1739" value="3" type="radio"></td> 
                            <td><input name="f1739" value="4" type="radio"></td> 
                            <td><input name="f1739" value="5" type="radio"></td> 
                            <td>Bekerja dengan orang yang berbeda budaya maupun latar belakang 
                                <span class="hl">f17-39 f17-40b</span></td> 
                            <td><input name="f1740b" value="1" type="radio"></td> 
                            <td><input name="f1740b" value="2" type="radio"></td> 
                            <td><input name="f1740b" value="3" type="radio"></td> 
                            <td><input name="f1740b" value="4" type="radio"></td> 
                            <td><input name="f1740b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1741" value="1" type="radio"></td> 
                            <td><input name="f1741" value="2" type="radio"></td> 
                            <td><input name="f1741" value="3" type="radio"></td> 
                            <td><input name="f1741" value="4" type="radio"></td> 
                            <td><input name="f1741" value="5" type="radio"></td> 
                            <td>Kepemimpinan 
                                <span class="hl">f17-41 f17-42b</span></td> 
                            <td><input name="f1742b" value="1" type="radio"></td> 
                            <td><input name="f1742b" value="2" type="radio"></td> 
                            <td><input name="f1742b" value="3" type="radio"></td> 
                            <td><input name="f1742b" value="4" type="radio"></td> 
                            <td><input name="f1742b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1743" value="1" type="radio"></td> 
                            <td><input name="f1743" value="2" type="radio"></td> 
                            <td><input name="f1743" value="3" type="radio"></td> 
                            <td><input name="f1743" value="4" type="radio"></td> 
                            <td><input name="f1743" value="5" type="radio"></td> 
                            <td>Kemampuan dalam memegang tanggungjawab 
                                <span class="hl">f17-43 f17-44b</span></td> 
                            <td><input name="f1744b" value="1" type="radio"></td> 
                            <td><input name="f1744b" value="2" type="radio"></td> 
                            <td><input name="f1744b" value="3" type="radio"></td> 
                            <td><input name="f1744b" value="4" type="radio"></td> 
                            <td><input name="f1744b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1745" value="1" type="radio"></td> 
                            <td><input name="f1745" value="2" type="radio"></td> 
                            <td><input name="f1745" value="3" type="radio"></td> 
                            <td><input name="f1745" value="4" type="radio"></td> 
                            <td><input name="f1745" value="5" type="radio"></td> 
                            <td>Inisiatif 
                                <span class="hl">f17-45 f17-46b</span></td> 
                            <td><input name="f1746b" value="1" type="radio"></td> 
                            <td><input name="f1746b" value="2" type="radio"></td> 
                            <td><input name="f1746b" value="3" type="radio"></td> 
                            <td><input name="f1746b" value="4" type="radio"></td> 
                            <td><input name="f1746b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1747" value="1" type="radio"></td> 
                            <td><input name="f1747" value="2" type="radio"></td> 
                            <td><input name="f1747" value="3" type="radio"></td> 
                            <td><input name="f1747" value="4" type="radio"></td> 
                            <td><input name="f1747" value="5" type="radio"></td> 
                            <td>Manajemen proyek/program 
                                <span class="hl">f17-47 f17-48b</span></td> 
                            <td><input name="f1748b" value="1" type="radio"></td> 
                            <td><input name="f1748b" value="2" type="radio"></td> 
                            <td><input name="f1748b" value="3" type="radio"></td> 
                            <td><input name="f1748b" value="4" type="radio"></td> 
                            <td><input name="f1748b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1749" value="1" type="radio"></td> 
                            <td><input name="f1749" value="2" type="radio"></td> 
                            <td><input name="f1749" value="3" type="radio"></td> 
                            <td><input name="f1749" value="4" type="radio"></td> 
                            <td><input name="f1749" value="5" type="radio"></td> 
                            <td>Kemampuan untuk memresentasikan ide/produk/laporan 
                                <span class="hl">f17-49 f17-50b</span></td> 
                            <td><input name="f1750b" value="1" type="radio"></td> 
                            <td><input name="f1750b" value="2" type="radio"></td> 
                            <td><input name="f1750b" value="3" type="radio"></td> 
                            <td><input name="f1750b" value="4" type="radio"></td> 
                            <td><input name="f1750b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1751" value="1" type="radio"></td> 
                            <td><input name="f1751" value="2" type="radio"></td> 
                            <td><input name="f1751" value="3" type="radio"></td> 
                            <td><input name="f1751" value="4" type="radio"></td> 
                            <td><input name="f1751" value="5" type="radio"></td> 
                            <td>Kemampuan dalam menulis laporan, memo dan dokumen 
                                <span class="hl">f17-51 f17-52b</span></td> 
                            <td><input name="f1752b" value="1" type="radio"></td> 
                            <td><input name="f1752b" value="2" type="radio"></td> 
                            <td><input name="f1752b" value="3" type="radio"></td> 
                            <td><input name="f1752b" value="4" type="radio"></td> 
                            <td><input name="f1752b" value="5" type="radio"></td> 
                            </tr> 
                            <tr>
                            <td><input name="f1753" value="1" type="radio"></td> 
                            <td><input name="f1753" value="2" type="radio"></td> 
                            <td><input name="f1753" value="3" type="radio"></td> 
                            <td><input name="f1753" value="4" type="radio"></td> 
                            <td><input name="f1753" value="5" type="radio"></td> 
                            <td>Kemampuan untuk terus belajar sepanjang hayat 
                                <span class="hl">f17-53 f17-54b</span></td> 
                            <td><input name="f1754b" value="1" type="radio"></td> 
                            <td><input name="f1754b" value="2" type="radio"></td> 
                            <td><input name="f1754b" value="3" type="radio"></td> 
                            <td><input name="f1754b" value="4" type="radio"></td> 
                            <td><input name="f1754b" value="5" type="radio"></td> 
                            </tr> 
                        </tbody> 
                        </table> 
                    </div> 
                </div> 
                </div>
                <!-- Akhir Pertanyaan f17 -->            

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-12">
                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                        Kuesioner
                    </button>
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="fas fa-download"></i> Generate PDF
                    </button>
                    </div>
                </div>
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection