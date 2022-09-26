<?= $this->extend('layout/surat/template'); ?>
<?= $this->section('content'); ?>


<div class="card">
    <div class="card-body">
        <center>
            <h5>
                Filter Surat Masuk
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

</div>




<?= $this->endSection(); ?>