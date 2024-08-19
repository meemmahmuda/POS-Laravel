<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'kategori';

    // Specify the primary key field
    protected $primaryKey = 'id_kategori';

    // Add other necessary properties like fillable fields, etc.
    protected $fillable = ['nama_kategori'];

    // Disable auto-incrementing if necessary
    public $incrementing = true;

    // Specify the key type if it's not an integer
    protected $keyType = 'int';
}


