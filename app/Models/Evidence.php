<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = 'evidence';

    protected $fillable = [
        'case_id',
        'jenis_bukti',
        'lokasi_penyimpanan',
        'hash_value',
        'waktu_pengambilan_bukti'
    ];

    public function kasus()
    {
        return $this->belongsTo(Kasus::class, 'case_id');
    }
}
