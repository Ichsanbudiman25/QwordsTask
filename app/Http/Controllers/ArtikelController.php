<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){

        //eloquent orm (direkomendasikann)  
        //query builder (masih boleh)
        //raw query (tidak direkomendasikan bisa di sql injection)
        $artikel = Artikel::all();
        return view('administrator.dashboard_artikel', ['artikelList' => $artikel]);
        
    }
    
    public function listArtikel(){

        $artikel = Artikel::all();
        return view('artikel', ['artikelList' => $artikel]);
    }

    public function viewArtikel($id){
        // $produkDomain = Produk::where('kode_jenis_produk', 2)->get();
        $artikelList = Artikel::all();
        $artikel = Artikel::where('id_artikel', $id)->get();
        return view('viewArtikel', ['viewArtikel' => $artikel, 'artikelList' => $artikelList]);
    }

    public function tambah_artikel(){
        return view('administrator.tambah_artikel');
    }

    public function create(Request $request){
        $Artikel = Artikel::create($request->except(['_token']));
        if($request->hasFile('gambar_artikel')){
        $request->file('gambar_artikel')->move('images/', $request->file('gambar_artikel')->getClientOriginalName());
        $Artikel->gambar_artikel = $request->file('gambar_artikel')->getClientOriginalName();
        $Artikel->save();
        }

        return redirect('/administrator/dashboard_artikel');
    }   

    public function edit_artikel($id){

        $Artikel = Artikel::find($id);
        return view('administrator.edit_artikel', compact(['Artikel']));
    }

    public function update($id, Request $request){
        $Artikel = Artikel::find($id);
        $Artikel->update($request->except(['_token']));
        return redirect('/administrator/dashboard_artikel');
    }

    public function update_gambar_artikel($id, Request $request){
        $Artikel = Artikel::find($id);
        $Artikel->update($request->except(['_token']));
        // dd($Artikel);
        if($request->hasFile('gambar_artikel')){
            $request->file('gambar_artikel')->move('images/', $request->file('gambar_artikel')->getClientOriginalName());
            $Artikel->gambar_artikel = $request->file('gambar_artikel')->getClientOriginalName();
            $Artikel->save();
            }
        return redirect('/administrator/dashboard_artikel');
    }

    public function destroy($id){
        $Artikel = Artikel::find($id);
        $Artikel->delete();
        return redirect('/administrator/dashboard_artikel');
    }
}
