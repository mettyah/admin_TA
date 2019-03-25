
              <div class="col-md-12">

                  <div class="nav-tabs-custom">

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#data_siswa" data-toggle="tab">Data Siswa</a></li>
                      <li ><a href="#data_keluarga" data-toggle="tab">Data Keluarga</a></li>
                      <li ><a href="#kandung" data-toggle="tab">Data Saudara Kandung</a></li>
                      <li><a href="#riwayat_kesehatan" data-toggle="tab">Riwayat Kesehatan</a></li>
                      <li><a href="#ciri_khas_anak" data-toggle="tab">Ciri Khas Anak</a></li>
                    </ul>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                      <div class="tab-content">
                          <div class="active tab-pane" id="data_siswa">
                            <?php foreach ($detail1->result() as $d) { ?>
                              <form method="post" action="<?php echo base_url('siswa/siswasd/updatedatasiswa') ?>" class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->id_siswa; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->nama_siswa; ?>" name="nama_siswa"  >
                                        <!-- <label class="col-sm-2 control-label"> NAMA_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputNamePanggilan" class="col-sm-2 control-label">Nama Panggilan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->nama_panggilan; ?>" name="nama_panggilan"  >
                                        <!-- <label class="col-sm-2 control-label"> NAMA_PANGGILAN; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Tanggal lahir</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->tanggal_lahir_siswa; ?>" name="tanggal_lahir_siswa"  >
                                        <!-- <label class="col-sm-2 control-label"> TTL_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Usia</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->usia_siswa; ?>" name="usia_siswa"  >
                                        <!-- <label class="col-sm-2 control-label"> USIA_1JULI; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" id="idjk" required name="id_jenis_kelamin" style="width: 100%;">
                                          <option value="">-Pilih Jenis Kelamin-</option>
                                          <option
                                          <?php  if ($d->id_jenis_kelamin=="1"): ?>
                                            SELECTED
                                          <?php endif ?> value="1">LAKI-LAKI</option>
                                          <option <?php if ($d->id_jenis_kelamin=="2"): ?>
                                            SELECTED
                                          <?php endif ?> value="2">PEREMPUAN</option>
                                        </select>
                                        <!-- <label class="col-sm-2 control-label"> JK_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" name="id_agama" id="idstatus" style="width: 100%;" value="<?php echo $d->id_agama;?>">
                                          <option <?php if ($d->id_agama=="1"): ?>
                                            SELECTED
                                          <?php endif ?>value="1">Islam</option>
                                          <option <?php if ($d->id_agama=="2"): ?>
                                            SELECTED
                                          <?php endif ?>value="2">Kristen</option>
                                          <option <?php if ($d->id_agama=="3"): ?>
                                            SELECTED
                                          <?php endif ?>value="3">Katolik</option>
                                          <option <?php if ($d->id_agama=="4"): ?>
                                            SELECTED
                                          <?php endif ?>value="4">Hindu</option>
                                          <option <?php if ($d->id_agama=="5"): ?>
                                            SELECTED
                                          <?php endif ?>value="5">Budha</option>
                                          <option <?php if ($d->id_agama=="6"): ?>
                                            SELECTED
                                          <?php endif ?>value="5">Kong Hu Cu</option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="AnakKe" class="col-sm-2 control-label">Kewarganegaraan</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" name="id_warganegara" style="width: 100%;" value="<?php echo $d->id_warganegara;?>">
                                          <option <?php if ($d->id_warganegara=="1"): ?>
                                            SELECTED
                                          <?php endif ?>value="1">Warga Negara Indonesia</option>
                                          <option <?php if ($d->id_warganegara=="2"): ?>
                                            SELECTED
                                          <?php endif ?>value="2">Warga Negara Asing</option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Tinggal Bersama</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->tinggal_bersama_siswa; ?>" name="tinggal_bersama_siswa"  >
                                        <!-- <label class="col-sm-2 control-label"> TINGGAL_BERSAMA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Anak Ke</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->anak_ke_siswa; ?>" name="anak_ke_siswa"  >
                                        <!-- <label class="col-sm-2 control-label"> ANAK_KE; ?></label> -->
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?php echo base_url('siswa/siswasd'); ?>" type="button" class="btn btn-primary pull-center">Kembali</a>
                              </form>
                            <?php } ?>
                          <!-- Post -->

                          </div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                          <div class="tab-pane" id="data_keluarga">
                            <?php foreach ($detail2->result() as $dd) { ?>
                              <form method="post" action="<?php echo base_url('siswa/siswasd/updatedatakeluarga') ?>" class="form-horizontal">
                                <div class="form-group">
                                  <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="id" value="<?php echo $d->id_siswa; ?>" name="id" readonly>
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label for="inputAyahname" class="col-sm-2 control-label">Nama Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_ayah; ?>" name="nama_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Nama Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_ibu; ?>" name="nama_ibu"  >
                                        <!-- <label class="col-sm-2 control-label"> USIA_1JULI; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Agama Ayah</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" name="id_agama_ayah" id="idstatus" style="width: 100%;" value="<?php echo $d->id_agama_ayah;?>">
                                          <option <?php if ($dd->id_agama_ayah=="1"): ?>
                                            SELECTED
                                          <?php endif ?>value="1">Islam</option>
                                          <option <?php if ($dd->id_agama_ayah=="2"): ?>
                                            SELECTED
                                          <?php endif ?>value="2">Kristen</option>
                                          <option <?php if ($dd->id_agama_ayah=="3"): ?>
                                            SELECTED
                                          <?php endif ?>value="3">Katolik</option>
                                          <option <?php if ($dd->id_agama_ayah=="4"): ?>
                                            SELECTED
                                          <?php endif ?>value="4">Hindu</option>
                                          <option <?php if ($dd->id_agama_ayah=="5"): ?>
                                            SELECTED
                                          <?php endif ?>value="5">Budha</option>
                                          <option <?php if ($dd->id_agama_ayah=="6"): ?>
                                            SELECTED
                                          <?php endif ?>value="5">Kong Hu Cu</option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama Ibu</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" name="id_agama_ibu" id="idstatus" style="width: 100%;" value="<?php echo $d->id_agama_ibu;?>">
                                          <option <?php if ($dd->id_agama_ibu=="1"): ?>
                                            SELECTED
                                          <?php endif ?>value="1">Islam</option>
                                          <option <?php if ($dd->id_agama_ibu=="2"): ?>
                                            SELECTED
                                          <?php endif ?>value="2">Kristen</option>
                                          <option <?php if ($dd->id_agama_ibu=="3"): ?>
                                            SELECTED
                                          <?php endif ?>value="3">Katolik</option>
                                          <option <?php if ($dd->id_agama_ibu=="4"): ?>
                                            SELECTED
                                          <?php endif ?>value="4">Hindu</option>
                                          <option <?php if ($dd->id_agama_ibu=="5"): ?>
                                            SELECTED
                                          <?php endif ?>value="5">Budha</option>
                                          <option <?php if ($dd->id_agama_ibu=="6"): ?>
                                            SELECTED
                                          <?php endif ?>value="5">Kong Hu Cu</option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="AnakKe" class="col-sm-2 control-label">Tanggal Lahir Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->tanggal_lahir_ayah; ?>" name="tanggal_lahir_ayah"  >
                                        <!-- <label class="col-sm-2 control-label"> KEWARGANEGARAAN; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Tanggal Lahir Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->tanggal_lahir_ibu; ?>" name="tanggal_lahir_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Kewarganegaraan Ayah</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" name="id_kewarganegaraan_ayah" style="width: 100%;" value="<?php echo $d->id_kewarganegaraan_ayah;?>">
                                          <option <?php if ($dd->id_kewarganegaraan_ayah=="1"): ?>
                                            SELECTED
                                          <?php endif ?>value="1">Warga Negara Indonesia</option>
                                          <option <?php if ($dd->id_kewarganegaraan_ayah=="2"): ?>
                                            SELECTED
                                          <?php endif ?>value="2">Warga Negara Asing</option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Kewarganegaraan Ibu</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" name="id_kewarganegaraan_ibu" style="width: 100%;" value="<?php echo $d->id_kewarganegaraan_ibu;?>">
                                          <option <?php if ($dd->id_kewarganegaraan_ibu=="1"): ?>
                                            SELECTED
                                          <?php endif ?>value="1">Warga Negara Indonesia</option>
                                          <option <?php if ($dd->id_kewarganegaraan_ibu=="2"): ?>
                                            SELECTED
                                          <?php endif ?>value="2">Warga Negara Asing</option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Terakhir Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pendidikan_terakhir_ayah; ?>" name="pendidikan_terakhir_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Terakhir Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pendidikan_terakhir_ibu; ?>" name="pendidikan_terakhir_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jurusan_yang_diambil_ayah; ?>" name="jurusan_yang_diambil_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jurusan_yang_diambil_ibu; ?>" name="jurusan_yang_diambil_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Nama Instansi Ayah Berkerja</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_instansi_ayah_bekerja ?>" name="nama_instansi_ayah_bekerja"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Nama Instansi Ibu Berkerja</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_instansi_ibu_bekerja ?>" name="nama_instansi_ibu_bekerja"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pangkat Golongan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pangkat_golongan_ayah; ?>" name="pangkat_golongan_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pangkat Golongan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pangkat_golongan_ibu; ?>" name="pangkat_golongan_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Kerja Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->lama_kerja_ayah_perhari; ?>" name="lama_kerja_ayah_perhari"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Kerja Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->lama_kerja_ibu_perhari; ?>" name="lama_kerja_ibu_perhari"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Penghasilan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->penghasilan_perbulan_ayah; ?>" name="penghasilan_perbulan_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Penghasilan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->penghasilan_perbulan_ibu; ?>" name="penghasilan_perbulan_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jumlah Tanggungan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jumlah_tanggungan_ayah; ?>" name="jumlah_tanggungan_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jumlah Tanggungan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jumlah_tanggungan_ibu; ?>" name="jumlah_tanggungan_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Rumah Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_rumah_ayah; ?>" name="alamat_rumah_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Rumah Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_rumah_ibu; ?>" name="alamat_rumah_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Kantor Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_kantor_ayah; ?>" name="alamat_kantor_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Kantor Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_kantor_ibu; ?>" name="alamat_kantor_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Rumah Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_rumah_hp_ayah; ?>" name="telp_rumah_hp_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Rumah Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_rumah_hp_ibu; ?>" name="telp_rumah_hp_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Kantor Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_kantor_ayah; ?>" name="telp_kantor_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Kantor Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_kantor_ibu; ?>" name="telp_kantor_ibu"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Komunikasi Dengan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->kesempatan_berkomunikasi_dg_ayah; ?>" name="kesempatan_berkomunikasi_dg_ayah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Komunikasi Dengan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->kesempatan_berkomunikasi_dg_ibu; ?>" name="kesempatan_berkomunikasi_dg_ibu"  >
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?php echo base_url('siswa/siswasd'); ?>" type="button" class="btn btn-primary pull-center">Kembali</a>
                              </form>
                            <?php } ?>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


                          </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="kandung">
                        <?php foreach ($detail3->result() as $ddd) { ?>
                          <form method="post" action="<?php echo base_url('siswa/siswasd/updatedatakandung') ?>" class="form-horizontal">
                            <div class="form-group">
                              <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="id" value="<?php echo $d->id_siswa; ?>" name="id" readonly>
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="TinggalBersama" class="col-sm-2 control-label">Nama Saudara Kandung</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" value="<?php echo $ddd->nama_saudara_kandung; ?>" name="nama_saudara_kandung"  >
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="TinggalBersama" class="col-sm-2 control-label">Jenis Kelamin Saudara Kandung</label>
                                  <div class="col-sm-10">
                                    <select class="form-control select2" id="idjk" required name="id_jenis_kelamin_saudara_kandung" style="width: 100%;">
                                      <option value="">-Pilih Jenis Kelamin-</option>
                                      <option
                                      <?php  if ($ddd->id_jenis_kelamin=="1"): ?>
                                        SELECTED
                                      <?php endif ?> value="1">LAKI-LAKI</option>
                                      <option <?php if ($ddd->id_jenis_kelamin=="2"): ?>
                                        SELECTED
                                      <?php endif ?> value="2">PEREMPUAN</option>
                                    </select>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Saudara Kandung</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" value="<?php echo $ddd->pendidikan_saudara_kandung; ?>" name="pendidikan_saudara_kandung"  >
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="TinggalBersama" class="col-sm-2 control-label">Kelas Saudara Kandung</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" value="<?php echo $ddd->kelas_saudara_kandung; ?>" name="kelas_saudara_kandung"  >
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="TinggalBersama" class="col-sm-2 control-label">No Induk Saudara Kandung</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" value="<?php echo $ddd->no_induk_saudara_kandung; ?>" name="no_induk_saudara_kandung"  >
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url('siswa/siswasd'); ?>" type="button" class="btn btn-primary pull-center">Kembali</a>
                          </form>
                        <?php } ?>
                      </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                          <div class="tab-pane" id="riwayat_kesehatan">
                            <?php foreach ($detail4->result() as $dddd){?>
                              <form method="post" action="<?php echo base_url('siswa/siswasd/updatedatariwayatkesehatan') ?>" class="form-horizontal">
                                <div class="form-group">
                                  <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="id" value="<?php echo $d->id_siswa; ?>" name="id" readonly>
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Berat Badan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->berat_badan; ?>" name="berat_badan"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Golongan Darah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($dddd->id_golongan_darah == 1){ ?>
                                          value="A"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 2){ ?>
                                          value="B"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 3){ ?>
                                          value="AB"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 4){ ?>
                                          value="O"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 5){ ?>
                                          value="-"
                                        <?php } ?>
                                        name="id_golongan_darah"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Lama Masa Meminum Asi</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->minum_asi_selama; ?>" name="minum_asi_selama"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Perkembangan Dalam 2 Bulan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->perkembangan_dalam_2bulan; ?>" name="perkembangan_dalam_2bulan"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Kelainan Dalam Tubuh</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->kelainan_dalam_tubuh; ?>" name="kelainan_dalam_tubuh"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Makan Tambahan < 2 Bulan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->makanan_tambahan_kurang_dari_2bulan ?>" name="makanan_tambahan_kurang_dari_2bulan"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Imunisasi yang Pernah Diberikan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->imunisasi_yang_diberikan; ?>" name="imunisasi_yang_diberikan"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Alergi yang Dimiliki</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->alergi_makanan_dan_obat; ?>" name="alergi_makanan_dan_obat"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Pengelihatan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->penglihatan; ?>" name="penglihatan"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Pendegaran</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->pendengaran; ?>" name="pendengaran"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Penampilan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->penampilan; ?>" name="penampilan"  >
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?php echo base_url('siswa/siswasd'); ?>" type="button" class="btn btn-primary pull-center">Kembali</a>
                              </form>
                            <?php } ?>
                          </div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                          <div class="tab-pane" id="ciri_khas_anak">
                            <?php foreach ($detail5->result() as $s){ ?>
                              <form method="post" action="<?php echo base_url('siswa/siswasd/updatedatacirikhasanak') ?>" class="form-horizontal">
                                <div class="form-group">
                                  <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="id" value="<?php echo $d->id_siswa; ?>" name="id" readonly>
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Ciri Fisik yang Menonjol</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->ciri_fisik_yang_menonjol; ?>" name="ciri_fisik_yang_menonjol"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Ciri Kepribadian yang Menonjol</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->ciri_kepribadian_yang_menonjol; ?>" name="ciri_kepribadian_yang_menonjol"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Bakat Khusus yang Menonjol</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->bakat_khusus_yang_menonjol; ?>" name="bakat_khusus_yang_menonjol"  >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Prestasi yang Pernah Diraih</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->prestasi_yang_pernah_diraih; ?>" name="prestasi_yang_pernah_diraih"  >
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?php echo base_url('siswa/siswasd'); ?>" type="button" class="btn btn-primary pull-center">Kembali</a>
                              </form>
                            <?php } ?>
                          </div>
                      <!-- /.tab-pane -->

                      </div>
                      <!-- /.tab-content -->
                  </div>
