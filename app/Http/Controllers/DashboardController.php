<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\Beasiswa;
use App\Models\Pengajuan;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function home()
    {

        $beasiswas = Beasiswa::all();
        
        return view('pages/home/home', compact('beasiswas'));
    }
    public function pengajuanBeasiswa()
    {
        $beasiswas = Beasiswa::all();

        return view('pages/pengajuan-beasiswa/pengajuan-beasiswa', compact('beasiswas'));
    }
    public function pengumuman()
    {
        $dataFeed = new DataFeed();

        return view('pages/pengumuman/pengumuman', compact('dataFeed'));
    }
// admin
    public function homeAdmin()
    {
        $dataFeed = new DataFeed();

        return view('admin/home/home', compact('dataFeed'));
    }
    public function kategoriBeasiswa()
    {
        $dataFeed = new DataFeed();

        return view('admin/kategori/kategoriBeasiswa', compact('dataFeed'));
    }
    public function daftarPengajuan()
    {
        // $pengajuan = Pengajuan::with(['user', 'beasiswa'])->get();
        $pengajuan = Pengajuan::with(['user', 'beasiswa', 'userDocument'])->get();
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
