<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    /** @use HasFactory<\Database\Factories\PengajuanFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'beasiswa_id',
        'nom_pengajuan',
        'nom_terima',
        'smtr_pengajuan',
        'tgl_pengajuan',
        'status',
    ];

    // Relasi ke user (jika ada model User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // Relasi ke beasiswa (jika ada model Beasiswa)
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
}
