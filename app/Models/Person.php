<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people'; // Name of the table in the database

    protected $fillable = [
        'name'
        // Add other attributes here as needed
    ];


}
