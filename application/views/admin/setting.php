
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Setting</h1>
                            <?= $this->session->flashdata('sukses') ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">

                        <div class="col-md-4">
                            <form action="<?= base_url('admin/setting/set_jam_kerja') ?>" method="post">
                              <div class="form-group">
                                <label>Jam Kerja</label>
                                <input type="number"max="24" min="1" value="<?= $jam_buka ?>" name="buka" class="form-control" >
                                <small class="form-text text-muted">Atur jam Buka mulai dari 1 - 24</small>
                                <input type="number"max="24" min="1" value="<?= $jam_tutup ?>" name="tutup" class="form-control" >
                                <small class="form-text text-muted">Atur jam Tutup mulai dari 1 - 24.</small>
                              </div>
                              <button type="submit" class="btn btn-primary">Atur</button>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <form action="<?= base_url('admin/setting/set_sesi_pendaftaran') ?>" method="post">
                              <div class="form-group">
                                <label>Jam Pndaftaran</label>
                                <input type="number"max="24" name="sesi_buka" min="1" value="<?= $sesi_buka ?>" class="form-control" >
                                <small class="form-text text-muted">Atur jam Buka mulai dari 1 - 24</small>
                                <input type="number"max="24" min="1" name="sesi_tutup" value="<?= $sesi_tutup ?>" class="form-control" >
                                <small class="form-text text-muted">Atur jam Tutup mulai dari 1 - 24.</small>
                              </div>
                              <button type="submit" class="btn btn-primary">Atur</button>
                            </form>
                        </div>

                         <div class="col-md-4">
                            <form action="<?= base_url('admin/setting/set_report') ?>" method="post">
                              <div class="form-group">
                                <label>Jam Set Report</label>
                                <input type="number"max="24" name="set_buka" min="1" value="<?= $set_buka ?>" class="form-control" >
                                <small class="form-text text-muted">Atur jam Buka mulai dari 1 - 24</small>
                                <input type="number"max="24" min="1" name="set_tutup" value="<?= $set_tutup ?>" class="form-control" >
                                <small class="form-text text-muted">Atur jam Tutup mulai dari 1 - 24.</small>
                              </div>
                              <button type="submit" class="btn btn-primary">Atur</button>
                            </form>
                        </div>

                    </div>
                    <div class="row">

                      <div class="col">
                        <br>
                        <div class="well">
                            <h4>Perhatian</h4>
                            <p>Dengan melakukan reset maka akan menghapus data antrian dan nomor antrian serta data berkas pada setiap pemohon.</p>
                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="<?= base_url('admin/setting/reset_berkas') ?>"> Reset</a>
                        </div>
                      </div>

                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->