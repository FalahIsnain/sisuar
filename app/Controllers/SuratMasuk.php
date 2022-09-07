<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;

class SuratMasuk extends BaseController
{
    protected $SuratMasukModels;

    public function __construct()
    {
        $this->SuratKeluarModels = new SuratKeluarModels();
        $this->SuratMasukModels = new SuratMasukModels();
    }

    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'suratmasuk' => $this->SuratMasukModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar()
        ];
        return view('surat/suratmasuk/indexsuratmasuk.php', $data);
    }

    public function tambahSuratMasuk()
    {
        $dataSuratMasuk = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'ket_surat' => $this->request->getVar('ket_surat'),
            'file' => '-',
        ];
        $this->SuratMasukModels->save($dataSuratMasuk);
        return redirect()->to(base_url('/SuratMasuk'));
    }
}
