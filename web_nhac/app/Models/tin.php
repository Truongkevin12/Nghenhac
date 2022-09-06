<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table='tin';
    protected $primaryKey='id';
    protected $dates=['ngayDang'];
    protected $fillable=[
        'tieuDe','urlHinh','ngayDang','noiDung','idLT','xem','noiBat','anHien','tags','lang',
    ];
}
