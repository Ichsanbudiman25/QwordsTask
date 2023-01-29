<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('administrator.dashboard_produk', ['produkList' => $produk]);
    } 

    public function tambah_produk(){
        return view('administrator.tambah_produk');
    }

    public function create(Request $request){
        Produk::create($request->except(['_token']));
        return redirect('/administrator/dashboard_produk');
    }

    public function edit_produk($id){

        $Produk = Produk::find($id);
        return view('administrator.edit_produk', compact(['Produk']));
    }

    public function update($id, Request $request){
        $Produk = Produk::find($id);
        $Produk->update($request->except(['_token']));
        return redirect('/administrator/dashboard_produk');
    }

    public function destroy($id){
        $Produk = Produk::find($id);
        $Produk->delete();
        return redirect('/administrator/dashboard_produk');
    }
}