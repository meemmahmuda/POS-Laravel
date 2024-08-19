<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'pengeluaran';

    // Specify the primary key field
    protected $primaryKey = 'id_pengeluaran';

    // Specify the fillable fields
    protected $fillable = ['nama_pengeluaran', 'nominal', 'tanggal']; // Add fields as needed

    // Enable auto-incrementing for the primary key
    public $incrementing = true;

    // Specify the key type if it's not an integer
    protected $keyType = 'int';
}
