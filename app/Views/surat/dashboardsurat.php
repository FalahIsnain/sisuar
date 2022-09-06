<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <canvas id="suratmasuk"></canvas>
        </div>
        <div class="col">
            <canvas id="suratkeluar"></canvas>
        </div>
        <div class="col">
            <canvas id="surattugas"></canvas>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php $surat = ['Surat Masuk', 'Surat Keluar', 'Surat Tugas'];
        $j = 0; ?>
        <?php for ($i = 1; $i <= 4; $i++) { ?>



        <?php } ?>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Surat Masuk</h5>
                    <p class="card-text">Jumlah Surat Masuk : 10 </p>
                    <a href="<?= base_url('/SuratMasuk') ?>" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Surat Keluar</h5>
                    <p class="card-text">Jumlah Surat Keluar : 10 </p>
                    <a href="<?= base_url('/SuratKeluar') ?>" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Surat Masuk</h5>
                    <p class="card-text">Jumlah Surat Tugas : 10 </p>
                    <a href="<?= base_url('/SuratTugas') ?>" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>