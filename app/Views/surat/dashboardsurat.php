<?= $this->extend('layout/surat/template'); ?>
<?= $this->section('content'); ?>

<div class="container ml-8 mt-4">
    <div class="col">
        <center>
            <div class="card" style="width: 490px;">
                <div class="card-body">
                    <canvas id="suratdashboard"></canvas>
                </div>
            </div>
        </center>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="background-color: <?php echo $suratMasukWrn ?>;" border-radius:10>
                    <div class="card-body">
                        <h5 class="card-title">Surat Masuk</h5>
                        <p class="card-text">Jumlah Surat Masuk : <?= $jumlahSuratMasuk ?> </p>
                        <a href="<?= base_url('/SuratMasuk') ?>" class="btn btn-dark">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color:  <?php echo $suratKeluarWrn ?>;" border-radius:10>
                    <div class="card-body">
                        <h5 class="card-title">Surat Keluar</h5>
                        <p class="card-text">Jumlah Surat Keluar : <?= $jumlahSuratKeluar ?></p>
                        <a href="<?= base_url('/SuratKeluar') ?>" class="btn btn-dark" style="">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: <?php echo $suratTugasWrn ?>" border-radius:10>
                    <div class="card-body">
                        <h5 class="card-title">Surat Tugas</h5>
                        <p class="card-text">Jumlah Surat Tugas :<?= $jumlahSuratTugas ?></p>
                        <a href="<?= base_url('/SuratTugas') ?>" class="btn btn-dark">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <hr class="style1" style="border-top: 1px solid #8c8b8b">
    <br>


    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Tambah
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#masuk" href="#">Surat Masuk</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#keluar" href="#">Surat Keluar</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tugas" href="#">Surat Tugas</a></li>
        </ul>
    </div>
    <div class="container mt-4">
        <div class="tablebox" style="width: 1300px;">
            <table id="table" class="table table-striped" style="width:100%">
                <thead>
                    <tr style="background-color: #5E8B7E;color:white">
                        <th>Jenis Surat</th>
                        <th>No surat</th>
                        <th>Tujuan</th>
                        <th>Perihal</th>
                        <th>Tanggal</th>
                        <th>Isi Ringkas</th>
                        <th>Berkas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($suratmasuk as $sm) : ?>
                        <tr>
                            <td><?= $sm['jenis_surat'] ?></td>
                            <td><?= $sm['no_surat'] ?></td>
                            <td><?= $sm['tujuan_surat'] ?></td>
                            <td><?= $sm['perihal'] ?></td>
                            <?php $date = date('d-m-Y', strtotime($sm['tanggal_masuk'])) ?>
                            <td><?= $date ?></td>
                            <td><?= $sm['isi_ringkas'] ?></td>
                            <td>
                                <a href="<?= base_url('asset/pdf/' . $sm['file']) ?>"><?= $sm['file'] ?> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php foreach ($suratkeluar as $sm) : ?>
                        <tr>
                            <td><?= $sm['jenis_surat'] ?></td>
                            <td><?= $sm['no_surat'] ?></td>
                            <td><?= $sm['tujuan_surat'] ?></td>
                            <td><?= $sm['perihal'] ?></td>
                            <?php $date = date('d-m-Y', strtotime($sm['tanggal_keluar'])) ?>
                            <td><?= $date ?></td>
                            <td><?= $sm['isi_ringkas'] ?> </td>
                            <td>
                                <a href="<?= base_url('asset/pdf/' . $sm['file']) ?>"><?= $sm['file'] ?> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php foreach ($surattugas as $sm) : ?>
                        <tr>
                            <?php $dateMulai = date('d-m-Y', strtotime($sm['tanggal_mulai'])) ?>
                            <?php $dateSelesai = date('d-m-Y', strtotime($sm['tanggal_selesai'])) ?>
                            <td><?= $sm['jenis_surat'] ?></td>
                            <td><?= $sm['no_surat'] ?></td>
                            <td><?= $sm['tempat_tujuan'] ?></td>
                            <td><?= $sm['keperluan'] ?></td>
                            <td><?= $dateMulai ?> s/d <?= $dateSelesai ?></td>
                            <td><?= $sm['beban_biaya'] ?> </td>
                            <td>
                                <a href="<?= base_url('asset/pdf/' . $sm['file']) ?>"><?= $sm['file'] ?> </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>

        </div>

        </table>
    </div>
</div>




<!-- Modal MASUK -->
<div class="modal fade" id="masuk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" method="post" action="<?= base_url('/BerandaSurat/tambahSuratMasukDashboard') ?>" enctype="multipart/form-data" novalidate>
                    <?= csrf_field(); ?>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label">No surat</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" id="no_surat" name="no_surat" required>
                        <div class="invalid-feedback">
                            Silahkan Isi No Surat!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label">Asal Surat</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" id="asal_surat" name="asal_surat" required>
                        <div class="invalid-feedback">
                            Asal Surat Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Tujuan Surat</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="tujuan_surat" name="tujuan_surat" required>
                        <div class="invalid-feedback">
                            Tujuan Surat Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Perihal</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="perihal" name="perihal" required>
                        <div class="invalid-feedback">
                            Perihal Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="validationCustom02" value="" id="tanggal_masuk" name="tanggal_masuk" required>
                        <div class="invalid-feedback">
                            Tanggal Masuk Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Isi Ringkas</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="isi_ringkas" name="isi_ringkas" required>
                        <div class="invalid-feedback">
                            Isi Ringkas Tidak Boleh Kosong!
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Alasan</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="alasan" name="alasan" required>
                        <div class="invalid-feedback">
                            Alasan Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">Keterangan</label>
                        <select class="form-select" id="validationCustom04" id="ket_surat" name="ket_surat" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                        <div class="invalid-feedback">
                            Silahkan Pilih Keterangan
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">file</label>
                        <input type="file" class="form-control" aria-label="file example" name="file" required>
                        <div class="invalid-feedback">
                            File Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="keluar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" method="post" action="<?= base_url('/BerandaSurat/tambahSuratKeluarDashboard') ?>" enctype="multipart/form-data" novalidate>
                    <?php csrf_field() ?>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label">No surat</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" id="no_surat" name="no_surat" required>
                        <div class="invalid-feedback">
                            Silahkan Isi No Surat!
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Tujuan Surat</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="tujuan_surat" name="tujuan_surat" required>
                        <div class="invalid-feedback">
                            Tujuan Surat Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Perihal</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="perihal" name="perihal" required>
                        <div class="invalid-feedback">
                            Perihal Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Tanggal keluar</label>
                        <input type="date" class="form-control" id="validationCustom02" value="" id="tanggal_keluar" name="tanggal_keluar" required>
                        <div class="invalid-feedback">
                            Tanggal Masuk Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Isi Ringkas</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="isi_ringkas" name="isi_ringkas" required>
                        <div class="invalid-feedback">
                            Isi Ringkas Tidak Boleh Kosong!
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">file</label>
                        <input type="file" class="form-control" aria-label="file example" name="file" required>
                        <div class="invalid-feedback">
                            File Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" method="post" action="<?= base_url('/BerandaSurat/tambahSuratTugasDashboard') ?>" enctype="multipart/form-data" novalidate>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label">No surat</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" id="no_surat" name="no_surat" required>
                        <div class="invalid-feedback">
                            Silahkan Isi No Surat!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label">Keperluan</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" id="keperluan" name="keperluan" required>
                        <div class="invalid-feedback">
                            Asal Surat Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Tempat Tujuan</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="tempat_tujuan" name="tempat_tujuan" required>
                        <div class="invalid-feedback">
                            Tujuan Surat Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="validationCustom02" value="" id="tanggal_mulai" name="tanggal_mulai" required>
                        <div class="invalid-feedback">
                            Tanggal Mulai Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="validationCustom02" value="" id="tanggal_selesai" name="tanggal_selesai" required>
                        <div class="invalid-feedback">
                            Tanggal Selesai Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Rincian Biaya</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" id="beban_biaya" name="beban_biaya" required>
                        <div class="invalid-feedback">
                            Rincian Biaya Tidak Boleh Kosong!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Tanggal Surat di Buat</label>
                        <input type="date" class="form-control" id="validationCustom02" value="" id="tgl_rilis" name="tgl_rilis" required>
                        <div class="invalid-feedback">
                            Tanggal Surat Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">file</label>
                        <input type="file" class="form-control" aria-label="file example" name="file" required>
                        <div class="invalid-feedback">
                            File Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>