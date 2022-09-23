<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;
use App\Models\SuratTugasModels;

class SuratMasuk extends BaseController
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
        $id = $this->request->uri->getSegment(2);
        helper(['form', 'url']);
        $jumlahRecord = $this->SuratMasukModels->where('id_surat', $id)->countAllResults();

        $data = [
            'title' => 'SISUAR',
            'suratmasuk' => $this->SuratMasukModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar(),
            'jumlahSuratTugas' => $this->SuratTugasModels->hitungSuratTugas(),
            'validation' => \Config\Services::validation(),

        ];
        return view('surat/suratmasuk/indexsuratmasuk.php', $data);
    }

    public function tambahSuratMasuk()
    {
        helper(['form', 'url']);
        $file = $this->request->getFile('berkas');
        $namaFile = $file->getName();
        $file->move('asset/pdf', $namaFile);
        $dataSuratMasuk = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'isi_ringkas' => $this->request->getVar('isi_ringkas'),
            'ket_surat' => $this->request->getVar('ket_surat'),
            'alasan' => $this->request->getVar('alasan'),
            'jenis_surat' => 'Masuk',
            'file' =>  $namaFile,
        ];
        session()->setFlashdata('pesan', 'Berhasil Di Tambahkan');
        $this->SuratMasukModels->save($dataSuratMasuk);
        return redirect()->to(base_url('/SuratMasuk'));
    }

    public function hapusSuratMasuk()
    {
        helper(['form', 'url']);
        $id = $this->request->uri->getSegment(2);
        $this->SuratMasukModels->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to(base_url('/SuratMasuk'));
        echo json_encode(array("status" => TRUE));
    }

    public function edit($id_surat)
    {
        $file = $this->request->getFile('file');
        $namaFile = $file->getName();
        $file->move('asset/pdf', $namaFile);
        $this->SuratMasukModels->update($id_surat, [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'isi_ringkas' => $this->request->getVar('isi_ringkas'),
            'ket_surat' => $this->request->getVar('ket_surat'),
            'alasan' => $this->request->getVar('alasan'),
            'jenis_surat' => 'Surat Masuk',
            'file' => $namaFile,
        ]);

        return redirect()->to(base_url('/SuratMasuk'));
    }
}
