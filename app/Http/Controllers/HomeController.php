<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Menghitung jumlah total pengguna, laporan, dan laporan dengan status "completed"
        $data = [
            'total_pengguna' => DB::table('users')->count(),
            'total_laporan' => DB::table('pengaduan')->count(),
            'total_laporan_selesai' => DB::table('pengaduan')->where('status', 'Selesai')->count(),
            
        ];

        dd($data);
        // Mengirim data ke tampilan landingpage.index
        return view('welcome', $data);
    }
}
