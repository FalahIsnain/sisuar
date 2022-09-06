<?= $this->extend('layout/surat/template'); ?>
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

<br>
<hr class="style1" style="border-top: 1px solid #8c8b8b">
<br>

<div class="container ml-8 mt-1">
    <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                <tr>
                    <th>No surat</th>
                    <th>Asal Surat</th>
                    <th>Tujuan</th>
                    <th>Perihal</th>
                    <th>Tanggal date</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011-08-14</td>
                    <td>$163,000</td>
                </tr>
                <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sydney</td>
                    <td>37</td>
                    <td>2011-06-02</td>
                    <td>$95,400</td>
                </tr>
                <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009-10-22</td>
                    <td>$114,500</td>
                </tr>
                <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011-05-07</td>
                    <td>$145,000</td>
                </tr>
                <tr>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008-10-26</td>
                    <td>$235,500</td>
                </tr>
                <tr>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011-03-09</td>
                    <td>$324,050</td>
                </tr>
                <tr>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009-12-09</td>
                    <td>$85,675</td>
                </tr>
        </table>
    </div>
</div>

    </div>
   

<!-- Modal -->
<div class="modal fade" id="masuk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Masuk</h5>
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
                        <input type="date" class="form-control" id="inputCity">
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
                        <input type="file" class="form-control" id="inputZip">
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

<!-- Modal -->
<div class="modal fade" id="keluar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Keluar</h5>
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
                        <input type="date" class="form-control" id="inputCity">
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
                        <input type="file" class="form-control" id="inputZip">
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

<!-- Modal -->
<div class="modal fade" id="tugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Surat Tugas</h5>
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
                        <input type="date" class="form-control" id="inputCity">
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
                        <input type="file" class="form-control" id="inputZip">
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