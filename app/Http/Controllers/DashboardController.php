<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function home()
    {
        $dataFeed = new DataFeed();

        return view('pages/home/home', compact('dataFeed'));
    }
    public function pengajuanBeasiswa()
    {
        $dataFeed = new DataFeed();

        return view('pages/pengajuan-beasiswa/pengajuan-beasiswa', compact('dataFeed'));
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
        $dataFeed = new DataFeed();

        return view('admin/daftar/daftarPengajuan', compact('dataFeed'));
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
