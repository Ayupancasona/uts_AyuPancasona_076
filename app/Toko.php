<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'data_toko';
    protected $fillable = ['kode_barang', 'nama_barang', 'stok_barang'];
}
