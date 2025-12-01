<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TIndakanForensik extends Model
{
    protected $table = 'tindakan_forensik';

    protected $fillable = [
        'case_id',
        'tahap_forensik',
        'desk_tindakan',
        'waktu_pelaksanaan',
        'pic',
        'status_tindakan'
    ];

    public function kasus()
    {
        return $this->belongsTo(Kasus::class, 'case_id');
    }
}
