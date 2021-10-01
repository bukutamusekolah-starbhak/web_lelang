<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $barang=Barang::all();
        return view('barang.index',compact('barang'));
    }
    public function create(){
        return view('barang.create');
    }

    public function simpan_barang(Request $request){
        $request->validate([
            'nama_barang' => 'required',
            'tgl' => 'required',
            'harga_awal' => 'required',
            'deskripsi_barang' => 'required',
      
        ]);

        Barang::create([
            'nama_barang'=>$request['nama_barang'],
            'tgl'=>$request['tgl'],
            'harga_awal'=>$request['harga_awal'],
            'deskripsi_barang'=>$request['deskripsi_barang'],
        
        ]);
        return redirect('barang.index')->with('status','Data Berhasil Di Tambah');
    }
    
    public function delete(Request $request,$id){
        $barangs = Barang::find($id);
        $barangs->delete();
        return redirect('barang.index')->with('status','Data Berhasil Di Hapus');
    }

    public function edit($id){
        $barangs = Barang::where('id' , $id)->first();
        return view('barang.edit' , compact('barangs'));
    }
    
    public function update(Request $request,$id){
        $barangs = Barang::find($id);
        $barangs->nama_barang = $request->nama_barang;
        $barangs->tgl = $request->tgl;
        $barangs->harga_awal = $request->harga_awal;
        $barangs->deskripsi_barang = $request->deskripsi_barang;
        $barangs->save();

        return redirect('barang.index')->with('status','Data Berhasil Di Ubah');

        }
}
