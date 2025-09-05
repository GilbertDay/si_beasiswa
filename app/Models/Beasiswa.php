<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Semester;

class Beasiswa extends Model
{
    /** @use HasFactory<\Database\Factories\BeasiswaFactory> */
    use HasFactory;

    protected $table = 'beasiswas';

    protected $fillable = [
        'nama_beasiswa',
        'semester_id',
        'jenis_beasiswa',
        'tanggal_buka',
        'tanggal_tutup',
        'syarat'
    ];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
