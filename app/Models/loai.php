<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai extends Model
{
    use HasFactory;
    protected $table = 'loai';
    protected $fillable = [
        'ten_loai',
        'trang_thai',
        'thu_tu',
    ];
}
