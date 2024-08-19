<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'brands';

    // Specify the primary key field
    protected $primaryKey = 'id';
    // Add other necessary properties like fillable fields, etc.
    protected $fillable = ['name'];

    // Disable auto-incrementing if necessary
    public $incrementing = true;

    // Specify the key type if it's not an integer
    protected $keyType = 'int';
}
