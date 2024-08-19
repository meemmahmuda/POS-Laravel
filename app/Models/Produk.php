<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    // Include kode_produk in the fillable property
    protected $fillable = [
        'kode_produk',
        'id_kategori',
        'id_brand',
        'nama_produk',
        'merk',
        'harga_beli',
        'diskon',
        'harga_jual',
        'stok'
    ];

    public $incrementing = true;
    protected $keyType = 'int';
}
