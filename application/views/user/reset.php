
<section class="section-padding">
    <div class="container">
        <div class="row">
            <?= $this->session->flashdata('sukses') ?>
            <?= $this->session->flashdata('gagal') ?>
            <div class="col-12 col-md-6">
                <h2 class="text-center ">Reset Password</h2>
                <br>
               <form action="<?= base_url('proses/reset') ?>" method="post">
                 <div class="mb-3">
                   <label for="pass_old" class="form-label">Password sebelumnya</label>
                   <input type="text" name="pass_old" class="form-control" id="pass_old">
                 </div>
                 <div class="mb-3">
                   <label for="new_pass" class="form-label">Password baru</label>
                   <input type="text" name="new_pass" class="form-control" id="new_pass">
                 </div>
                 <button type="submit" name="btn-reset" class="btn btn-warning">Reset</button>
               </form>
            </div>

            <div class="col-12 col-md-6">
                <h2 class="text-center ">Ubah Profil</h2>
                <br>
               <form action="<?= base_url('proses/update') ?>" method="post">
                 <div class="mb-3">
                   <label for="nama" class="form-label">Nama</label>
                   <input type="text" name="nama" value="<?= $data->nama ?>" class="form-control" id="nama">
                 </div>
                 <div class="mb-3">
                   <label for="no_hp" class="form-label">No Hp</label>
                   <input type="text" name="no_hp" value="<?= $data->no_hp ?>" class="form-control" id="no_hp">
                 </div>
                 <div class="mb-3">
                   <label for="alamat" class="form-label">Alamat</label>
                   <input type="text" name="alamat" value="<?= $data->alamat ?>" class="form-control" id="alamat">
                 </div>
                 <button type="submit" name="btn-update" class="btn btn-primary">Ubah</button>
               </form>
            </div>

        </div>
    </div>
</section>

