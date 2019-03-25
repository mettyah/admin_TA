<div class="col-mx-12">
<div class="box box-primary">
          <form method="post" action="<?php echo base_url('nilai/nilaismp/prosesupdatesmp') ?>">
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($dataupdate1->result() as $d) { ?>
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="idsiswa" class="col-sm-2 control-label">ID Siswa</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="id_siswa" value="<?php echo $d->id_siswa ?>" readonly>
                  </div>
                </div>
              </div>

            <!-- </form> -->
            <?php } ?>
            <?php foreach ($dataupdate1->result() as $d) { ?>
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="nama_siswa" value="<?php echo $d->nama_siswa; ?>" readonly>
                  </div>
                </div>
              </div>
            <!-- </form> -->
            <?php } ?>
            <?php foreach ($dataupdate2->result() as $dd) {?>
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Matematika</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="matematika" value="<?php echo $dd->matematika; ?>">
                  </div>
                </div>
              </div>
            <!-- </form> -->
            <?php } ?>
            <?php foreach ($dataupdate2->result() as $dd) {?>
              <div class="box-body">
                <div class="form-group">
                  <label for="big" class="col-sm-2 control-label">IPA</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="ipa" value="<?php echo $dd->ipa; ?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="big" class="col-sm-2 control-label">Bahasa Inggris</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="bahasa_inggris" value="<?php echo $dd->bahasa_inggris ?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Bahasa Indonesia</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="bahasa_indonesia" value="<?php echo $dd->bahasa_indonesia ?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Psikologi</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="psikologi" value="<?php echo $dd->psikologi ?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Jumlah Nilai</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="jumlah_nilai_tes" value="<?php echo $dd->jumlah_nilai_tes ?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Rata - Rata Nilai</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="rata_rata_nilai_tes" value="<?php echo $dd->rata_rata_nilai_tes ?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
              <?php } ?>


          <!-- /.box -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url('nilai/nilaismp'); ?>" type="button" class="btn btn-primary">Batal</a>
              </div>
              </form>
</div>
</div>
