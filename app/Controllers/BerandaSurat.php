<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;


class BerandaSurat extends BaseController
{
    protected $SuratKeluarModels;

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
            'suratkeluar' => $this->SuratKeluarModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar()
        ];

        return view('surat/dashboardsurat.php', $data);
    }
    public function tambahSuratMasukDashboard()
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
        return redirect()->to(base_url('/BerandaSurat'));
    }
    public function tambahSuratKeluarDashboard()
    {
        $dataSuratKeluar = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            // 'ket_surat' => $this->request->getVar('ket_surat'),
            'ket_surat' => '-',

            'file' => '-',
        ];
        $this->SuratKeluarModels->save($dataSuratKeluar);
        return redirect()->to(base_url('/BerandaSurat'));
    }
}
