<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pemohon</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php if(count($pemohon)>0){ ?>
        <div class="row">
        <?php foreach($pemohon as $row_pemohon): ?>
            <div class="col-sm-3">
                <div class="hero-widget well well-sm">
                    <div class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="text">
                        <span class="value text-danger" style="font-size: 20px;"><?= $row_pemohon['jenis_pengurusan'] ?></span>
                        <label class="text-muted">Nama : <?= $row_pemohon['nama'] ?></label>
                        <br>
                        <label class="text-muted">No : <?= $row_pemohon['no_hp'] ?></label>
                        <label class="text-muted">Alamat: <?= $row_pemohon['alamat'] ?></label>
                    </div>
                    <div class="options">
                        <!-- Button trigger modal -->
                        <a type="button" class="" data-toggle="modal" data-target="#modal<?= $row_pemohon['id'] ?> ">
                          Lihat Blangko
                        </a>

                        <a href="<?= base_url('admin/pemohon/konfirmasi/'.$row_pemohon['id']) ?>" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Konfirmasi</a>
                    </div>
                </div>
            </div>


            <!-- konfirmasi gambar blangko -->

            <!-- Modal -->
            <div class="modal fade" id="modal<?= $row_pemohon['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blangko</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="text-center">
                      <img src="<?= base_url('assets/user/uploads/'.$row_pemohon['blangko']) ?>" class="rounded" width="500" alt="...">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


        <?php endforeach ?>
        </div>
        <?php }else{ ?>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Belum Ada pemohon</h1>
                    <p>Sesi pendaftaran akan dibuka pada jam perhari</p>
                    <!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more</a> -->
                    </p>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php } ?>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->