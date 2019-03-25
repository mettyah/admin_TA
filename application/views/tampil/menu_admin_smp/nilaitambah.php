<div class="col-mx-12">
<div class="box box-primary">
          <form method="post" action="<?php echo base_url('nilai/nilaismp/proses_insert_nilai') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">ID Siswa</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="id_siswa" placeholder="Masukkan id siswa">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Matematika</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="matematika" placeholder="Masukkan nilai matematika">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="big" class="col-sm-2 control-label">IPA</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="ipa" placeholder="Masukkan nilai IPA">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="big" class="col-sm-2 control-label">Bahasa Inggris</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="bahasa_inggris" placeholder="Masukkan nilai bahasa Inggris">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Bahasa Indonesia</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="bahasa_indonesia" placeholder="Masukan nilai bahasa Indonesia">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Psikologi</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="psikologi" placeholder="Masukkan nilai psikologi">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Jumlah Nilai</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="jumlah_nilai_tes" placeholder="Masukkan jumlah nilai">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Rata - Rata Nilai</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="rata_rata_nilai_tes" placeholder="Masukkan nilai rata - rata">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url('nilai/nilaismp'); ?>" type="button" class="btn btn-primary">Batal</a>
              </div>
              </form>
</div>
</div>
