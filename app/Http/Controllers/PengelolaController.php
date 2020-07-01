<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\homestay;
use App\homestay_utama;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PengelolaController extends Controller
{

    //// Tambah Kamar////

    //return view tambah kamar
    public function TambahKamar()
    {
    	return view('/pengelola/TambahKamar');
    }

    //passing data form ke DB + return view ke dashboard
    public function storeKamar(Request $request)
    {
    	$data = new homestay;
    	$data->nama_h = $request->nama_h;
        $data->deskripsi_h = $request->deskripsi_h;
        $data->fasilitas_h = $request->fasilitas_h;
        $data->jumKmar_h = $request->jumKmar_h;
        $data->hargaKmar_h = $request->hargaKmar_h;
        $data->pemilik_h = Auth::user()->id;
    	
    	echo $data->save();
    	return redirect('/dashboard');
    }

    //// Tambah Kamar////


    //// Edit Kamar////

    //return view edit kamar
    public function EditKamar()
    {
        $pemilik = Auth::user()->id;
        $homestay = DB::table('homestay')->where('pemilik_h',$pemilik)->get();
        

    	return view('/pengelola/EditKamar',['homestay' => $homestay]);
    }

    //passing data kamar dr db ke form
    public function edit($id)
    {   
        // $homestay = homestay::find($id);
        // return view('edithomestay', ['homestay' => $homestay]);

        $h = homestay::findOrFail($id);
        return view('pengelola.FormEditKamar', compact('h'));
    }

    public function update($id,Request $request)
    {
    	$data = new homestay;
    	$data->nama_h = $request->nama_h;
        $data->deskripsi_h = $request->deskripsi_h;
        $data->fasilitas_h = $request->fasilitas_h;
        $data->jumKmar_h = $request->jumKmar_h;
        $data->hargaKmar_h = $request->hargaKmar_h;
        
        
        
    	echo $data->update();
    	return redirect('/dashboard');
    }

    //// Edit Kamar////

    public function ReviewPengunjung()
    {
    	return view('/pengelola/ReviewPengunjung');
    }

    //// Edit Deskripsi Umum ////
    public function EditDeskripsiUmum()
    {
    	return view('pengelola/EditDeskripsiUmum');
    }

    public function storeDeskripsiUmum(Request $request)
    {
    	$data = new homestay_utama;
    	$data->nama_hm = $request->nama_hm;
        $data->deskripsi_hm = $request->deskripsi_hm;
        $data->alamat_hm = $request->alamat_hm;
        $data->pemilik_hm = Auth::user()->id;
    	
    	echo $data->save();
    	return redirect('/dashboard');
    }
    //// Edit Deskripsi Umum ////

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
