<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\Beasiswa;
use App\Models\Pengajuan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function home()
    {

        $beasiswas = Beasiswa::whereDate('tanggal_buka', '>=', now()->toDateString())->get();
        
        return view('pages/home/home', compact('beasiswas'));
    }
    public function pengajuanBeasiswa()
    {
        $beasiswas = Beasiswa::whereDate('tanggal_buka', '>=', now()->toDateString())->get();

        return view('pages/pengajuan-beasiswa/pengajuan-beasiswa', compact('beasiswas'));
    }
    public function riwayat()
    {
        $pengajuans = Pengajuan::with(['user', 'beasiswa', 'userDocument'])
        ->orderBy('created_at', 'desc')
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
        $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();
        return view('admin/kategori/kategoriBeasiswa', compact('beasiswas'));
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
