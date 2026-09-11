<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    public function index(): View
    {
        $users = DB::table("barang")->get();
        return view("barang", ['users' => $users]); 
    }
    public function tambah(): View
    {
        return view('tambah');
    }
    public function insert(Request $request)
    {
        // dd($request->nama);
        DB::table('barang')->insert([
            'kode_barang' => $request->kode_barang, 
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah,
            'kategori' => $request->kategori,
            'lokasi_penyimpanan' => $request->lokasi_penyimpanan,
        ]);

        return redirect('/barang');
    }

    public function edit($kode_barang): View
    {
        $barang = DB::table('barang')->where('kode_barang', $kode_barang)->first();
        // dd($barang);
        return view('edit', ['barang' => $barang]);
    }

    public function update($kode_barang,Request $request)
    {
        // dd($request);

        $affected = DB::table('barang')
        ->where('kode_barang', $kode_barang)
        ->update([
            'kode_barang' =>$request->kode_barang, 
            'nama_barang'=>$request->nama_barang, 
            'kategori'=>$request->kategori, 
            'jumlah'=>$request->jumlah, 
            'kondisi'=>$request->kondisi, 
            'lokasi_penyimpanan'=>$request->lokasi_penyimpanan]);

        return redirect('/barang');
    }

     public function delete($kode_barang)
    {
        // dd($request);
        
        $delete = DB::table('barang')
        ->where('kode_barang', $kode_barang)
        ->delete();

        return redirect('/barang');
            
    }
}