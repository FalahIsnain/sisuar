<?php

namespace App\Controllers;

class BerandaSurat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'konten' => 'Selamat datang di beranda'
        ];
        return view('surat/dashboardsurat.php', $data);
    }
    
}
