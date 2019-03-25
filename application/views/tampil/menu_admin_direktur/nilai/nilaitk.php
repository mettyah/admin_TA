<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Masukkan Nilai Siswa TK</h3><br><br>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>

           <th>No</th>
            <th>Nama</th>
            <th>Matematika</th>
            <th>IPA</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Psikologi</th>
            <th>Jumlah</th>
            <th>Rata-rata</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($nilai->result() as $n){
            ?>
              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $n->nama_siswa; ?></td>
                <td><?php echo $n->matematika; ?></td>
                <td><?php echo $n->ipa; ?></td>
                <td><?php echo $n->bahasa_indonesia; ?></td>
                <td><?php echo $n->bahasa_inggris; ?></td>
                <td><?php echo $n->psikologi; ?></td>
                <td><?php echo $n->jumlah_nilai_tes; ?></td>
                <td><?php echo $n->rata_rata_nilai_tes; ?></td>
              </tr>
            <?php
            }
            ?>
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
