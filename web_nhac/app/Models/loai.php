<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai extends Model
{
    protected $table='loaitin';
    protected $fillable=[
        'ten','lang'
    ];
}
