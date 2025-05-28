<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\Beasiswa;
use App\Models\Pengajuan;
use App\Models\User;
use App\Models\Semester;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function home()
    {
        $beasiswas = Beasiswa::with('semester')->whereDate('tanggal_buka', '>=', now()->toDateString())->get();

        return view('pages/home/home', compact('beasiswas'));
    }
    public function pengajuanBeasiswa()
    {
        $beasiswas = Beasiswa::whereDate('tanggal_buka', '>=', now()->toDateString())->get();

        return view('pages/pengajuan-beasiswa/pengajuan-beasiswa', compact('beasiswas'));
    }
    public function riwayat($id)
    {
        $pengajuans = Pengajuan::with(['user', 'beasiswa', 'userDocument'])
        ->orderBy('created_at', 'desc')
        ->where('user_id', $id)
        ->get();
        return view('pages/riwayat/riwayat', compact('pengajuans'));
    }
// admin
    public function homeAdmin()
    {
        $mahasiswas = User::where('role', 'mahasiswa')->count();
        $beasiswas = Beasiswa::whereDate('tanggal_buka', '>=', now()->toDateString())->count();

        $pengajuan = Pengajuan::count();
        $pengajuanDiterima = Pengajuan::where('status', 'accepted')->count();
        $pengajuanDitolak = Pengajuan::where('status', 'rejected')->count();
        $pengajuanDiProses = Pengajuan::where('status', 'pending')->count();
        return view('admin/home/home', compact('mahasiswas', 'beasiswas', 'pengajuan', 'pengajuanDiterima', 'pengajuanDitolak', 'pengajuanDiProses'));
    }
    public function kategoriBeasiswa()
    {
        $beasiswas = Beasiswa::with('semester')->orderBy('created_at', 'desc')->get();
        $semester = Semester::all();
        return view('admin/kategori/kategoriBeasiswa', compact('beasiswas', 'semester'));
    }
    public function daftarPengajuan()
    {
        // $pengajuan = Pengajuan::with(['user', 'beasiswa'])->get();
        $pengajuan = Pengajuan::with(['user', 'beasiswa', 'userDocument'])
        ->orderBy('created_at', 'desc')
        ->get();
        // dd($pengajuan);
        return view('admin/daftar/daftarPengajuan', compact('pengajuan'));
    }
    public function verifikasiDokumen()
    {
        $dataFeed = new DataFeed();

        return view('admin/verifikasi/verifikasiDokumen', compact('dataFeed'));
    }
    public function laporanPenerima()
    {
        $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();
        $pengajuans = Pengajuan::with(['user', 'beasiswa', 'userDocument'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin/laporan/laporan', compact('beasiswas', 'pengajuans'));
    }

    public function laporanPenerimaFilter(Request $request)

    {
        $data = $request->all();

        $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();

        $pengajuans = Pengajuan::with('user');

        if (isset($data['program_studi'])) {
            $pengajuans = $pengajuans->whereHas('user', function ($query) use ($data) {
                $query->where('jurusan', $data['program_studi']);
            });
        }

        if (isset($data['jenis_beasiswa'])) {
            $pengajuans = $pengajuans->where('beasiswa_id', $data['jenis_beasiswa']);
        }

        // dd($pengajuans->get());

        if (isset($data['semester'])) {
            $pengajuans = $pengajuans->where('smtr_pengajuan', $data['semester']);
        }

        if (isset($data['status_seleksi'])) {
            $pengajuans = $pengajuans->where('status', $data['status_seleksi']);
        }

        $pengajuans = $pengajuans->get();


        return view('admin/laporan/laporan', compact('beasiswas', 'pengajuans'));
    }








    // /**
    //  * Displays the analytics screen
    //  *
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    //  */
    // public function analytics()
    // {
    //     return view('pages/dashboard/analytics');
    // }

    // /**
    //  * Displays the fintech screen
    //  *
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    //  */
    // public function fintech()
    // {
    //     return view('pages/dashboard/fintech');
    // }
}
