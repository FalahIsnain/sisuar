<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratTugasModels extends Model
{
    protected $table = 'surat_Tugas';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = ['no_surat', 'asal_surat', 'tujuan_surat', 'perihal', 'tanggal_masuk', 'ket_surat', 'file'];

    public function hitungSuratTugas()
    {
        return $this->db->table('surat_tugas')->countAll();
    }
}
