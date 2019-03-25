<!-- <div class="col-md-6> -->
<div class="col-md-6">
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Petugas </h3>
            </div>

          <form method="post" action="<?php echo base_url('petugas/petugasdata/fungsieditdata') ?>">
              <div class="box-body">
                <?php foreach ($dataupdate->result() as $key) { ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">ID Admin</label>
                  <input type="text" class="form-control" id="id" value="<?php echo $key->id_admin;?>" name="id" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Admin</label>
                  <input type="text" class="form-control" id="idnama" name="nama" value="<?php echo $key->nama_admin;?>">
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" class="form-control" id="idnip" name="nip" value="<?php echo $key->NIP;?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="idalamat" name="alamat" value="<?php echo $key->Alamat;?>">
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" id="idjk" required name="jk" style="width: 100%;">
                  <option value="">-Pilih Jenis Kelamin-</option>
                  <option
                  <?php  if ($key->id_jenis_kelamin=="1"): ?>
                    SELECTED
                  <?php endif ?> value="1">LAKI-LAKI</option>
                  <option <?php if ($key->id_jenis_kelamin=="2"): ?>
                    SELECTED
                  <?php endif ?> value="2">PEREMPUAN</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telephone</label>
                  <input type="text" class="form-control" id="idtelp" name="tlp" placeholder="Enter No Telephone" value="<?php echo $key->no_telp_admin;?>">
                </div>
                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="sts" id="idstatus" style="width: 100%;" value="<?php echo $key->id_level;?>">
                  <option selected="selected">-Pilih Status-</option>
                  <option <?php if ($key->id_level=="1"): ?>
                    SELECTED
                  <?php endif ?>value="1">Admin TK</option>
                  <option <?php if ($key->id_level=="2"): ?>
                    SELECTED
                  <?php endif ?>value="2">Admin SD</option>
                  <option <?php if ($key->id_level=="3"): ?>
                    SELECTED
                  <?php endif ?>value="3">Admin SMP</option>
                  <option <?php if ($key->id_level=="4"): ?>
                    SELECTED
                  <?php endif ?>value="4">Admin Sekretaris</option>
                  <option <?php if ($key->id_level=="5"): ?>
                    SELECTED
                  <?php endif ?>value="5">Admin Direktur</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="idusername" name="username" value="<?php echo $key->username_admin;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="idpass" name="pass" value="<?php echo $key->password_admin;?>">
                </div>


              <?php } ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="" class="btn btn-primary" onclick="javascript:history.go(-1);">Batal</button>
              </div>
            </div>

            </form>
          </div>
        </div>
