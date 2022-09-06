<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container" style="width: 850px;">
    <canvas id="arsip"></canvas>
</div>
<?php
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
?>

<div class="container mt-4 mb-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php $j = 0 ?>
        <?php for ($i = 1; $i <= 12; $i++) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $bulan[$j] ?></h5>
                        <p class="card-text">Jumlah Arsip : 10 </p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <?php $j++ ?>
        <?php } ?>

    </div>
</div>

<div class="container">
    <p></p>
</div>



<?= $this->endSection(); ?>