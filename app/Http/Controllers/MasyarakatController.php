<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->nik;
        // dd($user);

        return view('pages.masyarakat.index', ['liat'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'description' => 'required',
        'image' => 'required',
        ]);

        $nik = Auth::user()->nik;
        $id = Auth::user()->id;
        $name = Auth::user()->name;

        $data = $request->all();
        $data['user_nik']=$nik;
        $data['user_id']=$id;
        $data['name']=$name;
        $data['image'] = $request->file('image')->store('assets/laporan', 'public');



        Alert::success('Berhasil dikirim', 'Pengaduan terkirim');
        
        Pengaduan::create($data);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function lihat() {
        // Ambil ID pengguna yang sedang login
    $userId = Auth::user()->id;

    // Ambil semua pengaduan yang dibuat oleh pengguna yang sedang login berdasarkan user_id
    $items = Pengaduan::where('user_id', $userId)->get();

    return view('pages.masyarakat.detail', [
        'items' => $items
    ]);
    }
    
    // public function lihat() {


    //     // $user = Auth::user()->pengaduan()->get();
    //     $user = Auth::user()->nik;


    //     // $items = Pengaduan::all();
    //     $items = Pengaduan::where('user_id', $user)->get();

    //     return view('pages.masyarakat.detail', [
    //         'items' => $items
    //     ]);

    // }

    
    // public function lihat() {
    //     // Ambil ID pengguna yang sedang login
    //     $userId = Auth::id(); // Mengambil ID pengguna yang sedang login
    
    //     // Ambil pengaduan yang dibuat oleh pengguna tersebut
    //     $items = Pengaduan::where('id', $userId)->get(); // Pastikan 'user_id' adalah kolom yang menyimpan ID pengguna
    
    //     return view('pages.masyarakat.detail', [
    //         'items' => $items
    //     ]);
    // }

    // PengaduanController.php
// public function show($id)
// {
//     $pengaduan = Pengaduan::where('id', $id)
//         ->where('user_id', auth()->id()) // Pastikan hanya mengambil pengaduan milik pengguna yang sedang login
//         ->firstOrFail();

//     return view('pages.masyarakat.detail', compact('pengaduan'));
// }

    public function show($id)
    {
        $item = Pengaduan::with([
        'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('pengaduan_id',$id)->first();

        return view('pages.masyarakat.show',[
        'item' => $item,
        'tangap' => $tangap
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
