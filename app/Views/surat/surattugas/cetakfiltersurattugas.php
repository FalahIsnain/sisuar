<?= $this->extend('layout/surat/template'); ?>
<?= $this->section('content'); ?>


<div class="card">
    <div class="card-body">
        <center>
            <h5>
                Filter Surat Masuk <br>
                Periode <?= $tanggalMin ?> s/d <?= $tanggalMax ?>
            </h5>
        </center>

    </div>
</div>
<div class="container ml-8 mt-3">
    <div class="row mb-2" style="width:400px ;">
        <form class="row g-3 needs-validation" method="post" action="<?= base_url('/SuratMasuk/cetakFilterSuratMasuk') ?>" enctype="multipart/form-data" novalidate>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Tanggal Minimal</label>
                <input type="date" class="form-control" id="validationCustom02" value="" id="tanggal_min" name="tanggal_min" required>
                <div class="invalid-feedback">
                    Tanggal Minimal Tidak Boleh Kosong!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Tanggal Maxmimal</label>
                <input type="date" class="form-control" id="validationCustom02" value="" id="tanggal_max" name="tanggal_max" required>
                <div class="invalid-feedback">
                    Tanggal Maxmimal Tidak Boleh Kosong!
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

    </div>
    <div class="tablebox" style="width: 1300px;">

        <table id="table" class="table table-striped" style="width:100%">

        <thead>
                <tr>
                    <th>No surat</th>
                    <th>keperluan</th>
                    <th>Tempat</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Biaya</th>
                    <th>Tanggal surat</th>
                    <th>Berkas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataFilter->getResultArray() as $sm) : ?>
                    <tr>
                        <?php $dateMulai = date('d-m-Y', strtotime($sm['tanggal_mulai'])) ?>
                        <?php $dateSelesai = date('d-m-Y', strtotime($sm['tanggal_selesai'])) ?>
                        <td><?= $sm['no_surat'] ?></td>
                        <td><?= $sm['keperluan'] ?></td>
                        <td><?= $sm['tempat_tujuan'] ?></td>
                        <td><?= $dateMulai ?> s/d <?= $dateSelesai ?></td>
                        <td><?= $sm['beban_biaya'] ?></td>
                        <td><?= $sm['tgl_rilis'] ?> </td>
                        <td>
                            <a href="<?= base_url('asset/pdf/' . $sm['file']) ?>"><?= $sm['file'] ?> </a>
                        </td>
                        <td>
                            <button type="button " class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit-<?= $sm['id_surat'] ?>">
                                <a><i class="fas fa-edit"></i></a>
                            </button>
                            <form action="<?= base_url('SuratTugas/' . $sm['id_surat']) ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin');"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tr>>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>




<?= $this->endSection(); ?>