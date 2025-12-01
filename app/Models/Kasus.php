<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $fillable = [
        'korban_id',
        'jenis_kasus',
        'tanggal_kejadian',
        'ringkasan_kasus',
        'status_kasus'
    ];

    public function korban()
    {
        return $this->belongsTo(Korban::class);
    }

    public function evidences()
    {
        return $this->hasMany(Evidence::class, 'case_id');
    }

    public function tindakan()
    {
        return $this->hasMany(TindakanForensik::class, 'case_id');
    }
}
