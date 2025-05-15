<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Beasiswa;


class BeasiswaController extends Controller
{
    public function addKategoriBeasiswa(Request $request)
    {
        $rules = [
            'nama_beasiswa' => 'required|string|max:255',
            'jenis_beasiswa' => 'required|string|max:255',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            'syarat' => 'required|string'
        ];

        $messages = [
            'tanggal_tutup.after' => 'Tanggal tutup harus setelah tanggal buka.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $beasiswa = new Beasiswa();
        $beasiswa->nama_beasiswa = $request->nama_beasiswa;
        $beasiswa->semester_id = 1;
        $beasiswa->jenis_beasiswa = $request->jenis_beasiswa;
        $beasiswa->tanggal_buka = $request->tanggal_buka;
        $beasiswa->tanggal_tutup = $request->tanggal_tutup;
        $beasiswa->nominal = $request->nominal;
        $beasiswa->syarat = $request->syarat;
        $beasiswa->save();

        return redirect()->route('kategoriBeasiswa')
            ->with('success', 'Beasiswa berhasil ditambah');
    }

    public function updateKategoriBeasiswa(Request $request, $id)
    {
        $rules = [
            'nama_beasiswa' => 'required|string|max:255',
            'jenis_beasiswa' => 'required|string|max:255',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            'syarat' => 'required|string'
        ];

        $messages = [
            'tanggal_tutup.after' => 'Tanggal tutup harus setelah tanggal buka.',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('old_input', ['edit_id' => $id]);
        }

        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->nama_beasiswa = $request->nama_beasiswa;
        $beasiswa->semester_id = 1;
        $beasiswa->jenis_beasiswa = $request->jenis_beasiswa;
        $beasiswa->tanggal_buka = $request->tanggal_buka;
        $beasiswa->tanggal_tutup = $request->tanggal_tutup;
        $beasiswa->nominal = $request->nominal;
        $beasiswa->syarat = $request->syarat;
        $beasiswa->save();

        return redirect()->route('kategoriBeasiswa')
            ->with('success', 'Beasiswa berhasil diperbarui');
    }

    public function deleteKategoriBeasiswa(Request $request, $id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();

        return redirect()->route('kategoriBeasiswa')
            ->with('success', 'Beasiswa berhasil dihapus');
    }
}
