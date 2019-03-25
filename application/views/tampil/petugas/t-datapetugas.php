<!-- <div class="col-md-6> -->
  <div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Petugas </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form method="post" action="<?php echo base_url('petugas/petugasdata/fungsitambahdata') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Admin</label>
                  <input type="text" class="form-control" id="idnama" name="nama" placeholder="Enter Nama Admin">
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
                <select class="form-control select2" id="idjk" name="jk" style="width: 100%;">
                  <option selected="selected">-Pilih Jenis Kelamin-</option>
                  <option value="1">LAKI - LAKI</option>
                  <option value="2">PEREMPUAN</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telephone</label>
                  <input type="text" class="form-control" id="idtelp" name="tlp" placeholder="Enter No Telephone">
                </div>
                <div class="form-group">
                <label>Status</label>
                <select class="" name="sts" id="idstatus"">
                  <option selected="selected">-Pilih Status-</option>
                  <option value="1">Admin TK</option>
                  <option value="2">Admin SD</option>
                  <option value="3">Admin SMP</option>
                  <option value="4">Admin Sekretaris</option>
                  <option value="5">Admin Direktur</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="idusername" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="idpass" name="pass" placeholder="Password">
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('petugas/petugasdata'); ?>" type="button" class="btn btn-primary">Kembali</a>
              </div>
            </form>
          </div>
