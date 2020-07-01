<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay extends Model
{
    protected $table = "homestay";
 
    protected $primaryKey = 'id_h';
    protected $fillable = [
        'nama_h',
        'fasilitas_h',
        'deskripsi_h',
        'jumKmar_h',
        'hargaKmar_h',
        'pemilik_h'];
}
