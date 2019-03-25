<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Verifikasi Data User TK</h3><br><br>
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
            <th>Aksi</th>
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
    						<td style="text-align: center;">
    							<a class="btn btn-info"  onclick="updatejs('<?php echo $p->id_user; ?>')">Validate</a>
                  <a class="btn btn-danger " onclick="deleted('<?php echo $p->id_user; ?>')">Delete</a>
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
<script type="text/javascript">
  function deleted(param){
    var proc = window.confirm('Are you sure delete this data?');
    if(proc){
      document.location='<?php echo base_url(); ?>siswa/siswatk/deletedatatk/'+param;
    }
  }
  function updatejs(param){
      document.location='<?php echo base_url(); ?>siswa/siswatk/dttk/'+param;
  }
</script>
