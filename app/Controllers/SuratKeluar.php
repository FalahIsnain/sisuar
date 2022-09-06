<?php

namespace App\Controllers;

class SuratKeluar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'konten' => 'Selamat datang di beranda'
        ];
        return view('surat/suratkeluar/indexsuratkeluar.php', $data);
    }
}
