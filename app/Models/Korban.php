<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Korban extends Model
{
   protected $fillable = [
        'nama',
        'kontak',
        'lokasi',
        'tgl_laporan',
        'deskripsi_laporan'
    ];

    public function kasus()
    {
        return $this->hasMany(Kasus::class, 'korban_id');
    }
}
