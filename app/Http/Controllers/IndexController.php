<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class IndexController extends Controller
{
    public function index(){
        $produkHosting1 = Produk::where('id_produk', 7)->get();
        $produkHosting2 = Produk::where('id_produk', 8)->get();
        $produkHosting3 = Produk::where('id_produk', 9)->get();
        $produkHosting4 = Produk::where('id_produk', 10)->get();
        $produkDomain = Produk::where('kode_jenis_produk', 2)->get();
        return view('index', [
            'produkDomainList' => $produkDomain, 
            'produkHostingList1' => $produkHosting1,
            'produkHostingList2' => $produkHosting2,
            'produkHostingList3' => $produkHosting3,
            'produkHostingList4' => $produkHosting4,
        ]);
    }

    public function domain(){

        $produkDomain = Produk::where('kode_jenis_produk', 2)->get();
        return view('domain', ['produkDomainList' => $produkDomain]);
    }
    
    public function hosting(){
        $produkHosting1 = Produk::where('id_produk', 7)->get();
        $produkHosting2 = Produk::where('id_produk', 8)->get();
        $produkHosting3 = Produk::where('id_produk', 9)->get();
        $produkHosting4 = Produk::where('id_produk', 10)->get();
        return view('hosting', [
            'produkHostingList1' => $produkHosting1,
            'produkHostingList2' => $produkHosting2,
            'produkHostingList3' => $produkHosting3,
            'produkHostingList4' => $produkHosting4,
        ]);
    }
}
