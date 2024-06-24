<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay_utama extends Model
{
    protected $table = "homestay_utama";
 
    protected $primaryKey = 'id_hm';
    protected $fillable = [
        'nama_hm',
        'deskripsi_hm',
        'lokasi_hm',
        'pemilik_hm'];
}
