<?= $this->extend('layout/dashboard/template'); ?>
<?= $this->section('content'); ?>


<div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(https://sibikokalsel.id/img/logo/landing1.png)">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-hero-content text-center">
                    <div class="mb-3">
                        <img src="https://raw.githubusercontent.com/aldiskatel/cdn/main/dist/2.png" alt="" width="200px">
                    </div>
                    <h3 style="color: white" class="mb-3">Dinas Pekerjaan Umum dan Penataan Ruang Bidang Bina Kontruksi</h3>
                    <h3 style="color: white">Provinsi Kalimantan Selatan</h3>
                </div> <!-- header hero content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <!--<div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">-->
    <!--    <div class="image">-->
    <!--        <img src="https://sibikokalsel.id/img/slide_show.jpg" alt="Hero Image">-->
    <!--    </div>-->
    <!--</div> <!-- header hero image -->
</div>

<?php $color = "#798795" ?>
<?php $styleJudul = "color:#404040;font-weight:800;" ?>
<div class="container marketing mt-5">
    <div class="row">

        <center>
            <p style="color:#f14836; padding-bottom: 65px ; padding-top: 40px;letter-spacing: 5px;font-size: 18px;">TENTANG KAMI</p>
        </center>

        <div class="col-lg-4">
            <h3 style="<?php echo $styleJudul ?>">Seksi Monitoring/Evaluasi</h3>
            <p style="color: <?php echo $color ?>;font">Sistem ini berjalan dengan mengimplementasikan Geographic Information Sistem sehingga mempermudah dalam pemantauan dengan bentuk peta.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h3 style="<?php echo $styleJudul ?>">Seksi Pemberdayaan</h3>
            <p style="color: <?php echo $color ?>">Tenaga dengan sertifikat keahlian berdasarkan klasifikasi dan kualifikasi yang ditetapkan sesuai dengan ketentuan peraturan perundang-undangan tentang jasa konstruksi.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h3 style="<?php echo $styleJudul ?>">Seksi Pengawasan</h3>
            <p style="color: <?php echo $color ?>">Tenaga dengan sertifikat keterampilan berdasarkan klasifikasi dan kualifikasi yang ditetapkan sesuai dengan ketentuan peraturan perundang-undangan tentang jasa konstruksi.</p>

        </div>
    </div>
</div>

<div class="container text-center mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="asset\suraticon.png" class="card-img-top" alt="...">
                <div class="card-body">

                    <a href="<?= base_url('/BerandaSurat') ?>">
                        <button type="button" class="btn btn-primary btn-lg" style="width:300px;">Surat</button>
                    </a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="asset\arsipicon.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="<?= base_url('/BerandaArsip') ?>">
                        <button type="button" class="btn btn-primary btn-lg" style="width:300px;">Arsip</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>