<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModels extends Model
{
    protected $table = 'surat_masuk';
    protected $primaryKey = 'id_surat';
    protected $useTimestamps = true;
    protected $allowedFields = ['no_surat', 'asal_surat', 'tujuan_surat', 'perihal', 'tanggal_masuk', 'ket_surat', 'file'];
}
