<?= $this->extend('layout/surat/template'); ?>
<?= $this->section('content'); ?>


<div class="container ml-8">
    <center>
        <div class="container mt-1">
            <h2>
                Surat Keluar
            </h2>
        </div>
    </center>

    <button type="button" class="btn btn-primary mb-4 mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Surat
    </button>
    <div class="tablebox" style="width: 1300px;">
        <table id="table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No surat</th>
                    <th>Asal Surat</th>
                    <th>Tujuan</th>
                    <th>Perihal</th>
                    <th>Tanggal Surat</th>
                    <th>Terlaksana</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suratkeluar as $sm) : ?>
                    <tr>
                        <td><?= $sm['no_surat'] ?></td>
                        <td><?= $sm['asal_surat'] ?></td>
                        <td><?= $sm['tujuan_surat'] ?></td>
                        <td><?= $sm['perihal'] ?></td>
                        <?php $date = date('d-m-Y', strtotime($sm['tanggal_keluar'])) ?>
                        <td><?= $date ?></td>
                        <td><?= $sm['ket_surat'] ?> </td>
                        <td>
                            <form action="<?= base_url('SuratKeluar/' . $sm['id_surat']) ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin');"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/SuratKeluar/tambahSuratKeluar') ?>" class="row g-3" method="post">
                    <?= csrf_field(); ?>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">No surat</label>
                        <input type="text" class="form-control" id="no_surat" placeholder="C-5/PANRB/CG53/03/2022" name="no_surat" auttofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Asal Surat</label>
                        <input type="text" class="form-control" id="asal_surat" name="asal_surat">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Tujuan</label>
                        <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Perihal</label>
                        <input type="text" class="form-control" id="perihal" name="perihal">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
                    </div>
                    <!-- <div class="col-md-4">
                        <label for="inputState" class="form-label">Keterangan</label>
                        <select id="ket_surat" class="form-select" name="ket_surat">
                            <option value="Ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div> -->
                    <div class="col-12">
                        <label for="inputZip" class="form-label">Upload File</label>
                        <input type="file" class="form-control" id="inputZip" name="file">
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