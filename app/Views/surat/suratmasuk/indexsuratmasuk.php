<?= $this->extend('layout/surat/template'); ?>
<?= $this->section('content'); ?>


<div class="container ml-8">
    <center>
        <div class="container mt-1">
            <h2>
                Surat Masuk
            </h2>
        </div>
    </center>
    <?php if (session()->getFlashData('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashData('pesan'); ?>
        </div>
    <?php endif; ?>
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
                    <th>Isi Ringkas</th>
                    <th>Terlaksana</th>
                    <th>alasan</th>
                    <th>Tanggal Masuk</th>
                    <th>Berkas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>     
                <?php foreach ($suratmasuk as $sm) : ?>
                    <tr>
                        <td><?= $sm['no_surat'] ?></td>
                        <td><?= $sm['asal_surat'] ?></td>
                        <td><?= $sm['tujuan_surat'] ?></td>
                        <td><?= $sm['perihal'] ?></td>
                        <td><?= $sm['isi_ringkas'] ?></td>
                        <td><?= $sm['ket_surat'] ?> </td>
                        <td><?= $sm['alasan'] ?> </td>
                        <?php $date = date('d-m-Y', strtotime($sm['tanggal_masuk'])) ?>
                        <td><?= $date ?></td>
                        <td>
                            <a href="<?= base_url('asset/pdf/' . $sm['file'])?>"><?= $sm['file'] ?> </a>
                       </td>
                        <td>
                            <button type="button " class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit-<?= $sm['id_surat'] ?>">
                                <a><i class="fas fa-edit"></i></a>
                            </button>
                            <form action="<?= base_url('SuratMasuk/' . $sm['id_surat']) ?>" method="post" class="d-inline">
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/SuratMasuk/tambahSuratMasuk') ?>" class="row g-3" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">No surat</label>
                        <input type="text" class="form-control" id="no_surat" placeholder="C-5/PANRB/CG53/03/2022" name="no_surat" auttofocus>
                    </div>
                    <div class="col-12">
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
                        <label for="inputCity" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Isi Ringkas</label>
                        <input type="text" class="form-control" id="perihal" name="isi ringkas">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Terlaksana</label>
                        <select id="ket_surat" class="form-select" name="ket_surat">
                            <option value="Ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Alasan</label>
                        <input type="text" class="form-control" id="perihal" name="alasan">
                    </div>
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

<?php foreach ($suratmasuk as $sm) : ?>
    <div class="modal fade" id="formedit-<?= $sm['id_surat'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Surat Masuk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/SuratMasuk/edit/' . $sm['id_surat']) ?>" class="row g-3" method="post"  enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">No surat</label>
                            <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= $sm['no_surat'] ?>" auttofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Asal Surat</label>
                            <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="<?= $sm['asal_surat'] ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Tujuan</label>
                            <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" value="<?= $sm['tujuan_surat'] ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Perihal</label>
                            <input type="text" class="form-control" id="perihal" name="perihal" value="<?= $sm['perihal'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="<?= $sm['tanggal_masuk'] ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Isi Ringkas</label>
                            <input type="text" class="form-control" id="perihal" name="isi_ringkas" value="<?= $sm['isi_ringkas'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Keterangan</label>
                            <select id="ket_surat" class="form-select" name="ket_surat">
                                <?php if ($sm['ket_surat'] == "Ya") : ?>
                                    <option value="Ya" selected>Ya</option>
                                    <option value="tidak">Tidak</option>
                                <?php else : ?>
                                    <option value="Ya">Ya</option>
                                    <option value="tidak" selected>Tidak</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Alasan</label>
                            <input type="text" class="form-control" id="perihal" name="alasan" value="<?= $sm['alasan'] ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputZip" class="form-label"></label>
                            <input type="file" class="form-control" id="inputZip" name="file" value="<?= $sm['file'] ?>">

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
<?php endforeach; ?>





<?= $this->endSection(); ?>