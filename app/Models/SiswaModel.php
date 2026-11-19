<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = "data_siswa";
    protected $fillable = [
        'nama',
        'umur'
    ];
}
