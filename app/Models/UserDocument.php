<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    /** @use HasFactory<\Database\Factories\UserDocumentFactory> */
    use HasFactory;

    protected $fillable = [
        'pengajuans_id',
        'no_dokumen',
        'judul_dokumen',
        'tipe_dokumen',
        'deskripsi',
        'ukuran_file',
        'tgl_upload',
        'status',
    ];

    // Relasi ke pengajuan
    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'pengajuans_id');
    }
}
