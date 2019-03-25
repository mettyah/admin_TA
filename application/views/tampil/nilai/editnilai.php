<!--modal tambah-->
<div id="modal_editnilai" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <?php echo form_open('',array('id'=>'form_edit_nilai')); ?>
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Edit Nilai Siswa</h4>
                                                </div>

                                                <div class="modal-body">
                                                                                            
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nama_depan" class="control-label">ID Siswa</label>
                                                                <input type="text" class="form-control" required id="id_siswa" name="id_siswa" placeholder="id_siswa" readonly>
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-10">
                                                            <div class="form-group">
                                                                <label for="nama_belakang" class="control-label">Nama Siswa</label>
                                                                <input type="text" class="form-control" required id="nama" name="nama" placeholder="Nama Siswa" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="alamat" class="control-label">Nilai Observasi</label>
                                                                <input type="text" class="form-control" required name="nilai" id="nilai" placeholder="Nilai Observasi">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="simpannilai()">Simpan</button>                                                 
                                                </div>
                                                <?php echo form_close(); ?> 
                                            </div>
                                        </div>
                                    </div>
                        <!-- /.modal -->
