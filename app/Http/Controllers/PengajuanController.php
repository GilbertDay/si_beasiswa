<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pengajuan;
use App\Models\UserDocument;

class PengajuanController extends Controller
{
    //

    public function pengajuanBeasiswa()
    {
        return view('pages.pengajuan-beasiswa.pengajuan-beasiswa');
    }

    public function addPengajuanBeasiswa(Request $request)
    {
        $tanggalSekarang = date('YmdHis');
        $user = User::find($request->user_id);
        $nim = $user->NIM;

        $nom_pengajuan = "PENGJ" . $tanggalSekarang . $nim;

        $pengajuan = new Pengajuan();
        $pengajuan->beasiswa_id = $request->beasiswa;
        $pengajuan->user_id = $request->user_id;
        $pengajuan->nom_pengajuan = $nom_pengajuan;
        $pengajuan->smtr_pengajuan = $request->semester;
        $pengajuan->status = 'pending';
        $pengajuan->tgl_pengajuan = now();

        $pengajuan->save();


        // Simpan file
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $fileName = $nim . $tanggalSekarang . '_' . $file->getClientOriginalName();
            $file->storeAs('public/berkas', $fileName);
            
            $noDokumen = "USRDOC" . $tanggalSekarang . $nim;
            $dokumen = new UserDocument();
            $dokumen->pengajuan_id = $pengajuan->id;
            $dokumen->judul_dokumen = 'BERKAS';
            $dokumen->no_dokumen = $noDokumen;
            $dokumen->tipe_dokumen = 'PDF';
            $dokumen->ukuran_file = $file->getSize();
            $dokumen->tgl_upload = now();
            $dokumen->status = 'Belum Dilihat';
            $dokumen->deskripsi = $fileName;
            $dokumen->save();
        }


        return redirect()->back()->with('success', 'Pengajuan beasiswa berhasil ditambahkan');
    }

    public function updatePengajuan(Request $request){

        $tanggalSekarang = date('YmdHis');
        $pengajuan = Pengajuan::with(['user', 'beasiswa', 'userDocument'])->find($request->id);

        $nom_terima = "PENGJ" . $tanggalSekarang . $pengajuan->user->NIM;

        $pengajuan->nom_terima = $nom_terima;
        $pengajuan->status = $request->text === 'acc' ? 'accepted' : 'rejected';

        $pengajuan->save();
        return redirect()->back()->with('success', 'Pengajuan beasiswa berhasil diupdate');
    }
}
