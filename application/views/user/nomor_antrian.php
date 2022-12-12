
<section class="section-padding">
    <div class="container">
        <div class="row">

            <!-- jam buka -->
            <?php if($jam_buka){ ?>

                <!-- Sesi pendaftaran -->
                <?php if($sesi_daftar){ ?>
                    
                    <?php if(!$status_proses){ ?>

                        <?php if(!$sts_antrian){ ?>

                            <div class="col-lg-10 col-12 text-center mx-auto">
                                <h2 class="mb-5">Silahkan Pilih Jenis Pengurusan</h2>
                            </div>


                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="featured-block d-flex justify-content-center align-items-center">
                                    <a href="<?= base_url('nomor_antrian/ktp') ?>" class="d-block">
                                        <img src="<?= base_url('assets/user/') ?>images/icons/ktp.png" class="featured-block-image img-fluid" alt="">

                                        <p class="featured-block-text"><strong>KTP</strong></p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                                <div class="featured-block d-flex justify-content-center align-items-center">
                                    <a href="<?= base_url('nomor_antrian/kartu_keluarga') ?>" class="d-block">
                                        <img src="<?= base_url('assets/user/') ?>images/icons/kk.png" class="featured-block-image img-fluid" alt="">

                                        <p class="featured-block-text"><strong>Kartu Keluarga</strong> </p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                                <div class="featured-block d-flex justify-content-center align-items-center">
                                    <a href="<?= base_url('nomor_antrian/akta_kelahiran') ?>" class="d-block">
                                        <img src="<?= base_url('assets/user/') ?>images/icons/akta.png" class="featured-block-image img-fluid" alt="">

                                        <p class="featured-block-text"><strong>Akta Kelahiran</strong></p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="featured-block d-flex justify-content-center align-items-center">
                                    <a href="<?= base_url('nomor_antrian/akta_kematian') ?>" class="d-block">
                                        <img src="<?= base_url('assets/user/') ?>images/icons/akta_mati.png" class="featured-block-image img-fluid" alt="">

                                        <p class="featured-block-text"><strong>Akta Kematian</strong> </p>
                                    </a>
                                </div>
                            </div>
                        <?php }else{ ?>

                            <div class="col-lg-10 col-12 text-center mx-auto">
                                <h2 class="mb-5">Nomor Antrian Anda</h2>
                            </div>

                            <div class="col-12">
                                <div class=" d-flex justify-content-center align-items-center">
                                    <h1 style="font-size:100px;"><?= $nomor_antrian?></h1>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Sesi pendaftaran belum di konfiirmasi -->
                    <?php }else{ ?>
                        <div class="col-12">
                            <div class="alert alert-info" role="alert">
                                Anda hanya dapat melakukan pendaftaran 1X dalam sehari !
                                <br>
                                Silahkan tunggu konfirmmas dari admin unutu mendapatkan nomor antrian.!
                            </div>
                            
                        </div>
                    <?php } ?>

                 <!-- else ses daftar    -->
                <?php }else{ ?>
               
                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Info</h2>
                    </div>

                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                         Sesi pendaftaran berakhir silahkan mendaftar kembali besok di jam 08:00 - 09:00
                        </div>

                    </div>
                <?php } ?>
                <!-- end sesi daftar -->

            <?php }else{ ?>
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                      Belum jam masuk jam kerja, silahkan tunggu pada jam 08:00 sampai 16:00.!
                    </div>
                </div>
            <?php } ?>
            <!-- end jam buka -->
        </div>
    </div>
</section>

<?php if($sesi_daftar){ ?>
<section class="volunteer-section section-padding" id="section_4">
    <div class="container">
        <div class="row">
            <?php if(!$sts_antrian){ ?>
                <?php if(!$status_proses){ ?>
                <div class="col-lg-6 col-12">
                    <!-- <h2 class="text-white mb-4">Volunteer</h2> -->

                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="<?= ($sts_jenis)?base_url('proses/index/'.$jenis_url):base_url('nomor_antrian'); ?>" method="post" role="form" enctype="multipart/form-data">
                        <h3 class="mb-4 text-center">Masukka Foto Surat Pengantar</h3>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                            

                            <div class="col-12">
                                <div class="input-group input-group-file">
                                    <input type="file" name="blangko" class="form-control" id="inputGroupFile02" required="">

                                    <label class="input-group-text" for="inputGroupFile02">Blangko Atau Surat Pngantar</label>

                                    <i class="bi-cloud-arrow-up ms-auto"></i>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="btn-upload" class="form-control">Kirim</button>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <img src="<?= base_url('assets/user/') ?>images/icons/<?= ($sts_jenis)?$ikon:'question.png'; ?>" class="featured-block-image img-fluid" alt="">

                    <div class="custom-block-body text-center">
                        <h4 class="text-white mb-lg-3"><?= ($sts_jenis)?$jenis_pengurusan:'Pilih Jenis Pengurusan'; ?></h4>
    <!-- 
                        <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                            tokito Professional charity theme based</p> -->
                    </div>
                </div>
                <?php } ?>

            <?php }else{ ?>
            <div class="col-lg-6 col-12">
                <!-- <h2 class="text-white mb-4">Volunteer</h2> -->

                <div class="custom-form volunteer-form mb-5 mb-lg-0 text-center">
                    <h3 class="mb-4 text-center">Nomor yang sedang di peroses</h3>
                    <?php if($no_proses != false){ ?>
                    <h1 style="font-size:100px;"><?= $no_proses?></h1>
                    <?php }else{ ?>
                        <h1 class="text-success">Selesai semua</h1>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <!-- <h2 class="text-white mb-4">Volunteer</h2> -->

                <div class="custom-form volunteer-form mb-5 mb-lg-0 text-center">
                    <h3 class="mb-4 text-center">Total Antrian Hari ini</h3>
                    <h1 style="font-size:100px;"><?= $total_antrian?></h1>
                    
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>
<?php } ?>