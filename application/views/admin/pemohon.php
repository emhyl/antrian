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
        <?php foreach($pemohon as $row_pemohon): ?>
        <div class="row">
            <div class="col-sm-3">
                <div class="hero-widget well well-sm">
                    <div class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $row_pemohon['jenis_pengurusan'] ?></span>
                        <label class="text-muted">Nama : <?= $row_pemohon['nama'] ?></label>
                        <br>
                        <label class="text-muted">No : <?= $row_pemohon['no_hp'] ?></label>
                        <label class="text-muted">Alamat: <?= $row_pemohon['alamat'] ?></label>
                    </div>
                    <div class="options">
                        <a href="<?= base_url('admin/pemohon/konfirmasi/'.$row_pemohon['id']) ?>" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Konfirmasi</a>
                    </div>
                </div>
            </div>  
        </div>
        <?php endforeach ?>
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