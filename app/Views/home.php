<?= $this->extend('layout/dashboard/template'); ?>
<?= $this->section('content'); ?>

<!-- HEADER -->

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

<!-- TENTANG KAMI -->


<?php $color = "#798795" ?>
<?php $styleJudul = "color:#404040;font-weight:800;" ?>
<div class="container marketing mt-5" id="about">
    <div class="row">
        <center>
            <p style="color:#f14836; padding-bottom: 65px ; padding-top: 40px;letter-spacing: 5px;font-size: 18px;">TENTANG KAMI</p>
        </center>

        <div class="col-lg-4">

            <center>
                <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/09/logo4.png" width="100px">
            </center>
            <br>
            <h3 style="<?php echo $styleJudul ?>">Seksi Monitoring/Evaluasi</h3>
            <p style="color: <?php echo $color ?>;font">Sistem ini berjalan dengan mengimplementasikan Geographic Information Sistem sehingga mempermudah dalam pemantauan dengan bentuk peta.</p>

        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <center>
                <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/09/logo3.png" width="100px">
            </center>
            <br>
            <h3 style="<?php echo $styleJudul ?>">Seksi Pemberdayaan</h3>
            <p style="color: <?php echo $color ?>">Tenaga dengan sertifikat keahlian berdasarkan klasifikasi dan kualifikasi yang ditetapkan sesuai dengan ketentuan peraturan perundang-undangan tentang jasa konstruksi.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

            <center>
                <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/09/logo6.png" width="140px">
            </center>
            <br>
            <h3 style="<?php echo $styleJudul ?>">Seksi Pengawasan</h3>
            <p style="color: <?php echo $color ?>">Tenaga dengan sertifikat keterampilan berdasarkan klasifikasi dan kualifikasi yang ditetapkan sesuai dengan ketentuan peraturan perundang-undangan tentang jasa konstruksi.</p>

        </div>
    </div>
</div>



<!-- CONTAINER FEATURE -->

<div class="container ml-5" id="feature">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">SISUAR</h2>
            <p class="lead">Sistem Surat dan Pengarsipan berbasis web. Aplikasi Siswar merupakan aplikasi yang dibangun secara khusus untuk kebutuhan administrasi persuratan dan pengarsipan pada Bidang Bina Konstruksi Dinas PUPR Provinsi Kalimantan Selatan.</p>
            <a href="<?= base_url('/BerandaSurat') ?>">
                <button type="button" class="btn" style="width:300px;background:#3F4E4F;color: white;">Surat</button>
            </a>
        </div>
        <div class="col-md-5">
            <img src="asset\suraticon.png" class="card-img-top" alt="...">
        </div>
    </div>

    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

</div>

<!-- <div class="container text-center mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="asset\suraticon.png" class="card-img-top" alt="...">
                <div class="card-body">

                    <a href="<?= base_url('/BerandaSurat') ?>">
                        <button type="button" class="btn" style="width:300px;background:#3F4E4F">Surat</button>
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
</div> -->


<!-- STRUKTUR -->

<div class="container ml-5" id="struktur">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Kepala Dinas PU Kalimantan Selatan <span class="text-muted"></span></h2>
            <p class="lead">Direktorat Jenderal Bina Konstruksi mempunyai tugas menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang pembinaan jasa konstruksi sesuai dengan ketentuan peraturan perundang-undangan.</p>

            <div class="accordion accordion-flush" id="accordionFlushStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <b>Tugas pokok dan fungsi</b>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p>Direktorat Jenderal Bina Konstruksi mempunyai tugas menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang pembinaan jasa .konstruksi sesuai dengan ketentuan peraturan perundang-undangan.</p>
                            <p>Dalam melaksanakan tugas Direktorat Jenderal Bina Konstruksi menyelenggarakan fungsi:</p>
                            <ol>
                                <li>perumusan kebijakan di bidang pembinaan penyelenggaraan, kelembagaan, dan sumber daya jasa konstruksi;</li>
                                <li>pelaksanaan kebijakan di bidang pembinaan penyelenggaraan, kelembagaan, dan sumber daya jasa konstruksi;</li>
                                <li>pelaksanaan kebijakan di bidang pemberdayaan dan pengawasan penyelenggaraan jasa konstruksi yang dilaksanakan oleh masyarakat dan pemerintah daerah;</li>
                                <li>penyusunan norma, standar, prosedur, dan kriteria di bidang pembinaan jasa konstruksi;</li>
                                <li>pelaksanaan bimbingan teknis dan supervisi di bidang pembinaan penyelenggaraan, kelembagaan, dan sumber daya jasa konstruksi;</li>
                                <li>pelaksanaan evaluasi dan pelaporan di bidang pembinaan penyelenggaraan, kelembagaan, dan sumber daya jasa konstruksi;</li>
                                <li>pelaksanaan administrasi Direktorat Jenderal Bina Konstruksi; dan</li>
                                <li>pelaksanaan fungsi lain yang diberikan oleh Menteri.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <b>Unit Kerja</b>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <li>Sekretariat Direktorat Jenderal</li>
                            <li>Bina Investasi Infrastruktur</li>
                            <li>Bina Penyelenggaraan Jasa Konstruksi</li>
                            <li>Bina Kelembagaan dan Sumber Daya Jasa Konstruksi</li>
                            <li>Bina Kompetensi dan Produktivitas Konstruksi</li>
                            <li>Kerjasama dan Pemberdayaan</li>
                            <li>Balai Jasa Konstruksi</li>
                            <li>Balai Penerapan Teknologi Konstruksi</li>
                            <li>Balai Material dan Peralatan</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img width="532" height="789" src="https://kalselprov.monjaki.id/wp-content/uploads/2020/08/profil-kadis2.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://kalselprov.monjaki.id/wp-content/uploads/2020/08/profil-kadis2.png 732w, https://kalselprov.monjaki.id/wp-content/uploads/2020/08/profil-kadis2-222x300.png 222w" sizes="(max-width: 732px) 100vw, 732px">
        </div>
    </div>

</div>

<!-- KEPALA BIDANG -->

<div class="container mt-5 text-center">
    <div class="row">
        <div class="col">
            <h3 style="font-weight:bolder ;">Kepala<br> Bidang </h3>
            <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/08/kabid2.png" width="215px" alt="">
        </div>
        <div class="col">
            <h3 style="font-weight:bolder ;">Kepala Seksi Pengawasan</h3>
            <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/08/Kasi.png" width="215px" alt="">
        </div>
        <div class="col">
            <h3 style="font-weight:bolder ;">Kepala Seksi Pemberdayaan</h3>
            <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/08/kasi2-1.png" width="215px" alt="">
        </div>
        <div class="col">
            <h3 style="font-weight:bolder ;">Kepala Seksi Monev & Pengaturan</h3>
            <img src="https://kalselprov.monjaki.id/wp-content/uploads/2020/08/subhan-.png" width="215px" alt="">
        </div>
    </div>


    <hr class="featurette-divider">

    <!-- PARTER -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col text-center">
                <a href="https://www.pu.go.id/">
                    <img src="asset\logopupr.jpeg" width="50px" alt="">
                </a>
                <h3 class="mt-1 mb-2" style="color:black">Kementrian PUPR <br> Republik Indonesia</h3>
            </div>
            <div class="col text-center">
                <a href="https://dinaspupr.kalselprov.go.id/home">
                    <img src="https://raw.githubusercontent.com/aldiskatel/cdn/main/dist/2.png" width="50px" alt="">
                </a>
                <h3 class="mt-1 mb-2" style="color:black">Dinas PUPR <br> Provinsi Kalimantan Selatan</h3>
            </div>
            <div class="col text-center">
                <a href="https://pamsimas.pu.go.id/">
                    <img src="asset\logopamsinas.png" width="80px" alt="">
                </a>
                <h3 class="mt-1 " style="color:black">PAMSIMAS <br> Republik Indonesia</h3>
            </div>
            <div class="col text-center">
                <a href="https://kalselprov.go.id/">
                    <img src="https://raw.githubusercontent.com/aldiskatel/cdn/main/dist/2.png" width="50px" alt="">
                </a>
                <h3 class="mt-1 mb-2" style="color:black">Provinsi Kalimantan Selatan</h3>
            </div>
            <div class="col text-center">
                <a href="https://binakonstruksi.pu.go.id/">
                    <img src="asset\logopupr.jpeg" width="50px" alt="">
                </a>
                <h3 class="mt-1 mb-2" style="color:black">Direktorat Jendral <br> Binakontruksi PUPR </h3>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>