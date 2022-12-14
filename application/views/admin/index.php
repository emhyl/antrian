
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x" aria-hidden="true" title="Copy to use user"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $total_user ?></div>
                                <div>Total User</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/data_master/data_pemohon') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x" aria-hidden="true" title="Copy to use files-o"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $total_proses ?></div>
                                <div>Berkas pmohon</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/data_master/data_pemohon') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x" aria-hidden="true" title="Copy to use retweet"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $total_antri ?></div>
                                <div>Antrian Pemohon</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/data_master/data_antrian') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x" aria-hidden="true" title="Copy to use child"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= count($total_selesai) ?></div>
                                <div>Selesai Hari ini</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/data_master/data_antrian')?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 p-3">
                        <h3 class="page-header">Riwayat</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Jenis Pendaftaran</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($riwayat as $no => $rowRiwayat){  ?>
                                   <tr>
                                       <td><?= ++$no ?></td>
                                       <td><?= $rowRiwayat['nama'] ?></td>
                                       <td><?= $rowRiwayat['no_hp'] ?></td>
                                       <td><?= $rowRiwayat['alamat'] ?></td>
                                       <td><?= $rowRiwayat['jenis_pengurusan'] ?></td>
                                       <td><?= $rowRiwayat['tgl'] ?></td>
                                   </tr>
                               <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->

                        <!-- Button trigger modal -->
                     

                        <div class="well">
                            <h4>Data Informasi</h4>
                            <p>Data akan berstatus selesai apabila melewati jam kerja (16:00), dan akan di masukkan kedalam daftar riwayat dan dapat di export atau di Download dalam bentuk PDF serta mecetak dalam bentuk kertas.</p>
                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="<?= base_url('admin/home/export') ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use print"></i> Report</a>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
