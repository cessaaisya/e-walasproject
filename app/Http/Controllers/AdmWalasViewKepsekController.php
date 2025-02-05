<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Walas;
use App\Models\Kakom;
use App\Models\Kepsek;

class AdmWalasViewKepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menggunakan guard 'walas' untuk mendapatkan data walas yang login
        $kepsek = Auth::guard('kepseks')->user();  // ini akan mendapatkan data kepsek yang sedang login
    
        // Periksa apakah session 'kepsek_id' ada
        if (!session()->has('kepsek_id')) {
            return redirect('/loginkepsek')->with('error', 'Silakan login terlebih dahulu.');
        }
  
        // Ambil data kurikulum berdasarkan 'kepsek_id' yang ada di session
        $kepsek = Kepsek::find(session('kepsek_id'));
        
        // Periksa apakah data kurikulum ditemukan
        if (!$kepsek) {
            return redirect('/loginkepsek')->with('error', 'Data Kaprog tidak ditemukan.');
        }
           // Ambil walas_id dari tabel rombel berdasarkan kakom_id yang login
        // Ambil walas_id dari tabel rombel berdasarkan kakom_id yang login
        $kepsekIds = Rombel::all();

        // Ambil data walas berdasarkan walas_id yang sesuai
        $walasList = Walas::whereIn('id', $kepsekIds)->get();
    
        // Return view dengan data yang difilter
        return view("homepagekepsek.admwalasview.index", compact('walasList', 'kepsekIds', 'kepsek'));
    }       

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($walas_id)
    {
        // Menggunakan guard 'walas' untuk mendapatkan data walas yang login
        $kepseks = Auth::guard('kepseks')->user();  // ini akan mendapatkan data kepsek yang sedang login
    
        // Periksa apakah session 'kepsek_id' ada
        if (!session()->has('kepsek_id')) {
            return redirect('/loginkepsek')->with('error', 'Silakan login terlebih dahulu.');
        }
  
        // Ambil data kurikulum berdasarkan 'kepsek_id' yang ada di session
        $kepseks = Kepsek::find(session('kepsek_id'));
        
        // Periksa apakah data kurikulum ditemukan
        if (!$kepseks) {
            return redirect('/loginkepsek')->with('error', 'Data Kepala Sekolah tidak ditemukan.');
        }

        // Ambil data walas berdasarkan walas_id
        $walas = Walas::find($walas_id);
    
        // Jika tidak ditemukan, kembalikan ke halaman sebelumnya dengan pesan error
        if (!$walas) {
            return redirect('/kepsekwalas')->with('error', 'Data Walas tidak ditemukan.');
        }
    
        // Kirim data ke view detail
        return view('homepagekepsek.admwalasview.admwalas', compact('walas', 'kepseks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
