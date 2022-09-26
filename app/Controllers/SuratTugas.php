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
        $file = $this->request->getFile('file');
        $namaFile = $file->getName();
        $file->move('asset/pdf', $namaFile);
        $dataSuratTugas = [
            'no_surat' => $this->request->getVar('no_surat'),
            'keperluan' => $this->request->getVar('keperluan'),
            'tempat_tujuan' => $this->request->getVar('tempat_tujuan'),
            'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getVar('tanggal_selesai'),
            'beban_biaya' => $this->request->getVar('beban_biaya'),
            'tgl_rilis' => $this->request->getVar('tgl_rilis'),
            'jenis_surat' => "Tugas",
            'file' => $namaFile,
        ];
        $this->SuratTugasModels->save($dataSuratTugas);
        return redirect()->to(base_url('/SuratTugas'));
    }

    public function hapusSuratTugas()
    {
        helper(['form', 'url']);
        $id = $this->request->uri->getSegment(2);
        //Cari File berdasarkan Id
        $hapusFile = $this->SuratTugasModels->find($id);

        // Hapus file
        unlink('asset/pdf/' . $hapusFile['file']);
        $this->SuratTugasModels->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to(base_url('/SuratTugas'));
    }

    public function edit($id_surat)
    {

        $file = $this->request->getFile('file');
        // cek File 
        if ($file->getError() == 4) {
            $namaFile = $this->request->getVar('fileLama');
        } else {
            $namaFile = $file->getName();
            $file->move('asset/pdf', $namaFile);
            unlink('asset/pdf/' . $this->request->getVar('fileLama'));
        };
        
        $this->SuratTugasModels->update($id_surat, [
            'no_surat' => $this->request->getVar('no_surat'),
            'keperluan' => $this->request->getVar('keperluan'),
            'tempat_tujuan' => $this->request->getVar('tempat_tujuan'),
            'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getVar('tanggal_selesai'),
            'beban_biaya' => $this->request->getVar('beban_biaya'),
            'tgl_rilis' => $this->request->getVar('tgl_rilis'),
            'jenis_surat' => "Tugas",
            'file' => $namaFile,
        ]);
        return redirect()->to(base_url('/SuratTugas'));
    }
}
