<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhac extends Model
{
    protected $table='nhac';
    protected $primaryKey='id';
    protected $dates=['ngayDang'];
    protected $fillable=[
        'tieuDe',
        'tomTat',
        'urlHinh',
        'ngayDang',
        'noiDung',
        'idLT',
        'xem',
        'noiBat',
        'anHien',
        'tags',
        'lang'
    ];


    use HasFactory;
}
