<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Petugas</h3><br><br>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Telp</th>
            <th>Status</th>
            <th>Username</th>
            <th>Password</th>
          </tr>
          </thead>
          <tbody>
              <?php
    					$n=1;
    						foreach ($show->result() as $i) {
    					 ?>
    					<tr>
    						<td><?php echo $n; ?></td>
    						<td><?php echo $i->nama_admin; ?></td>
    						<td><?php echo $i->jenis_kelamin ?></td>
    						<td><?php echo $i->no_telp_admin ?></td>
    						<td><?php echo $i->nama_level ?></td>
    						<td><?php echo $i->username_admin ?></td>
    						<td><?php echo $i->password_admin ?></td>
    					</tr>
    					<?php $n++; } ?>
            </tbody>
            </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
