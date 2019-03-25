<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Siswa</h3><br><br>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Status Di terima</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
        <?php
        $n = 1;
        foreach ($siswa->result() as $s) { ?>

              <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $s->nama_siswa; ?></td>
                <td><?php echo $s->tanggal_lahir_siswa; ?></td>
                <td><?php echo $s->jenis_kelamin; ?></td>
                <td><?php echo $s->status_diterima; ?></td>
                <td style="text-align: center;">
                  <a class="btn btn-info " onclick="detailsiswa('<?php echo $s->id_siswa; ?>')">Detail</a>
                  <a class="btn btn-danger " onclick="deleted('<?php echo $s->id_siswa; ?>')">Delete</a>
                </td>
              </tr>
      <?php
      $n++;
      } ?>
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
      document.location='<?php echo base_url(); ?>siswa/siswasmp/deletesiswasmp/'+param;
    }
  }
  function detailsiswa(param){
      document.location='<?php echo base_url(); ?>siswa/siswasmp/detsiswasmp/'+param;
  }
</script>
