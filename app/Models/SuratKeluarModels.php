<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModels extends Model
{
    protected $table = 'surat_keluar';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = ['no_surat', 'asal_surat', 'tujuan_surat', 'perihal', 'tanggal_keluar', 'ket_surat', 'file'];

    public function hitungSuratKeluar()
    {
        return $this->db->table('surat_Keluar')->countAll();
    }
}
