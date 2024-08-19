<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'supplier';

    // Specify the primary key field
    protected $primaryKey = 'id_supplier';

    // Specify the fillable fields
    protected $fillable = ['nama', 'alamat', 'telepon'];

    // Enable auto-incrementing for the primary key
    public $incrementing = true;

    // Specify the key type if it's not an integer
    protected $keyType = 'int';
}
