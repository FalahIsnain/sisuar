<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;
use App\Models\SuratTugasModels;

class SuratTugas extends BaseController
{
    protected $SuratMasukModels;
    protected $SuratKeluarModels;
    protected $SuratTugasModels;

    public function __construct()
    {
        $this->SuratKeluarModels = new SuratKeluarModels();
        $this->SuratMasukModels = new SuratMasukModels();
        $this->SuratTugasModels = new SuratTugasModels();
    }

    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'surattugas' => $this->SuratTugasModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar(),
            'jumlahSuratTugas' => $this->SuratTugasModels->hitungSuratTugas()
        ];
        return view('surat/surattugas/indexsurattugas.php', $data);
    }

    public function tambahSuratTugas()
    {
        $dataSuratTugas = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_tugas' => $this->request->getVar('tanggal_tugas'),
            'ket_surat' => $this->request->getVar('ket_surat'),
            'file' => '-',
        ];
        $this->SuratTugasModels->save($dataSuratTugas);
        return redirect()->to(base_url('/SuratTugas'));
    }

    public function hapusSuratTugas()
    {
        helper(['form', 'url']);
        $id = $this->request->uri->getSegment(2);
        $this->SuratTugasModels->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to(base_url('/SuratTugas'));
    }
}
