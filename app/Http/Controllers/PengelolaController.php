<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    public function TambahKamar()
    {
    	return view('/pengelola/TambahKamar');
    }

    public function EditKamar()
    {
    	return view('/pengelola/EditKamar');
    }

    public function ReviewPengunjung()
    {
    	return view('/pengelola/ReviewPengunjung');
    }

    public function EditDeskripsiUmum()
    {
    	return view('pengelola/EditDeskripsiUmum');
    }

    public function DaftarPengunjungSebelum()
    {
    	return view('pengelola/DaftarPengunjung');
    }

    public function DaftarPengunjungSekarang()
    {
    	return view('pengelola/DaftarPengunjung');
    }

    public function DaftarPengunjungSesudah()
    {
    	return view('pengelola/DaftarPengunjung');
    }
}
