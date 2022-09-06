<?php

namespace App\Controllers;

class SuratTugas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'konten' => 'Selamat datang di beranda'
        ];
        return view('surat/surattugas/indexsurattugas.php', $data);
    }
}
