
<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Nomor Antrian</h2>
            </div>

            <div class="col-4 shadow-sm">
                <div class="featured-block ">
                    <p class="featured-block-text" style="font-size: 100px"><strong><?= $nomor_antrian ?></strong></p>
                    <p class="featured-block-text"><strong>Nomor Anda</strong></p>
                   
                </div>
            </div>
            <div class="col-4 shadow-sm">
                <div class="featured-block">
                    <p class="featured-block-text" style="font-size: 100px"><strong><?= $nomor_antrian ?></strong></p>
                    <p class="featured-block-text"><strong>Di proses</strong></p>
                   
                </div>
            </div>
            <div class="col-4 shadow-sm">
                <div class="featured-block">
                    <p class="featured-block-text" style="font-size: 100px"><strong><?= $nomor_antrian ?></strong></p>
                    <p class="featured-block-text"><strong>Total Antrian</strong></p>
                </div>
            </div>

            
        </div>
    </div>
</section>


<section class="cta-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-12">
                <h3 class="text-center">Riwayat Pendaftaran</h3>
                <br>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">Jenis Pengurusan</th>
                      <th scope="col">Blangko</th>
                      <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($riwayat as $no => $value): ?>
                    <tr>
                      <th scope="row"><?= ++$no ?></th>
                      <td><?= $value['jenis_pengurusan'] ?></td>
                      <td><?= $value['blangko'] ?></td>
                      <td><?= $value['tgl'] ?></td>
                    </tr>
                    <?php endforeach; ?>
        
                  </tbody>
                </table>
            </div>


        </div>
    </div>
</section>

