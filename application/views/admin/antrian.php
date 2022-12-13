<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nomor Antrian</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <?php if($no_antrian){ ?>
        <div class="row show-grid">
            <div class="col-md-6 col-md-offset-3">
                <div class="hero-widget well well-sm" style="background-color: transparent;border: none;">
                    <div class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="text">
                        <label class="text-muted"><?= $no_antrian['nama'] ?></label>
                        <span class="value"><?= $no_antrian['no_antrian'] ?> / <?= count($antrian) ?></span>
                        <label class="text-muted">Proses</label>
                    </div>
                    <div class="options">
                       <a href="<?= base_url('admin/antrian/next/'.$no_antrian['id'].'/'.$no_antrian['no_antrian']) ?>" class="btn btn-primary btn-lg">Berikutnya <i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-right"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        <?php }else{ ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Belum Ada antrian</h1>
                    <p></p>
                    <!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more</a> -->
                    </p>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php } ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Daftar Antrian</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
        <?php if(count($antrian)>0){ ?>
        <?php foreach($antrian as $no => $row_pemohon): ?>
            <div class="col-sm-3">
                <div class="hero-widget well well-sm">
                    <div class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= ++$no ?></span>
                        <label class="text-muted">Nama : <?= $row_pemohon['nama'] ?></label>
                        <br>
                        <label class="text-muted">No : <?= $row_pemohon['no_hp'] ?></label>
                        <label class="text-muted">Alamat: <?= $row_pemohon['alamat'] ?></label>
                    </div>
                    <div class="options">
                       
                    </div>
                </div>
            </div>  
        <?php endforeach ?>
        <?php }else{ ?>
        </div>


        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Belum Ada Daftar Antrian</h1>
                    <p></p>
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