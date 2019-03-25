<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Verifikasi Data User SD</h3><br><br>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Verifikasi</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $n = 1; foreach ($pengumuman->result() as $p){
            ?>
    					<tr>
    						<td><?php echo $n++;?></td>
    						<td><?php echo $p->nama_siswa;?></td>
    						<td><?php echo $p->no_telp_siswa;?></td>
    						        <td>
                        <?php if ($p->id_pembayaran == 2): ?>
                          BELUM TERVERIFIKASI
                        <?php endif; ?>
                        <?php if ($p->id_pembayaran == 1): ?>
                          TERVERIFIKASI
                        <?php endif; ?>
                        </td>
    					</tr>
            <?php } ?>
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
