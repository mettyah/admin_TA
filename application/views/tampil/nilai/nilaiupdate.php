<div class="col-mx-12">
<div class="box box-primary">
          <form method="post" action="<?php echo base_url('nilai/nilai/prosesupdatetk') ?>">
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
                  <input type="text" class="form-control" id="inputEmail3" name="nama_siswa" value="<?php echo $d->nama_siswa; ?>">
                  </div>
                </div>
              </div>
            <!-- </form> -->
            <?php } ?>
            <?php foreach ($dataupdate2->result() as $dd) {?>
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Nilai Observasi</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="nilai_psikotes" value="<?php echo $dd->nilai_observasi; ?>">
                  </div>
                </div>
              </div>
            <!-- </form> -->
            
              <!-- /.box-body -->
              <!-- /.box-footer -->
              <?php } ?>


          <!-- /.box -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url('nilai/nilai'); ?>" type="button" class="btn btn-primary">Batal</a>
               <!--  <button type="" class="btn btn-primary" onclick="javascript:history.go(-1);">Batal</button> -->
              </div>
              </form>
</div>
</div>
