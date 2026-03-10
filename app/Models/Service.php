<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Fillable fields (jo database me insert karna allowed hai)
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}