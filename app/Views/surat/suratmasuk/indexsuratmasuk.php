<?= $this->extend('layout/surat/template'); ?>
<?= $this->section('content'); ?>


<div class="container ml-8">
    <button type="button" class="btn btn-success mb-4 mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                    <th>Tanggal date</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <?php foreach ($suratmasuk as $sm) : ?>
                <tbody>
                    <tr>
                        <td><?= $sm['no_surat'] ?></td>
                        <td><?= $sm['asal_surat'] ?></td>
                        <td><?= $sm['tujuan_surat'] ?></td>
                        <td><?= $sm['perihal'] ?></td>
                        <td><?= $sm['tanggal_masuk'] ?></td>
                        <td><?= $sm['ket_surat'] ?> </td>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">No surat</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Asal Surat</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Tujuan</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Perihal</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Keterangan</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputZip" class="form-label">Upload File</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>