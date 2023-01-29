<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Produk;

class AdministratorController extends Controller
{
    public function index(){

        $artikel = Artikel::all()->count();
        $produk = Produk::all()->count();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCbJeCFHXPf6DTvUyRNd_zaA&key=AIzaSyCL6UgyrbHbJ54MhlIfPjo4yam-Dr8VtOA');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, true);
        $youtube['subscribe'] = $result['items'][0]['statistics']['subscriberCount'];
        $countYoutube = $youtube['subscribe'];
        return view('administrator.master', ['countArtikel' => $artikel, 'countProduk' => $produk, 'youtube' => $countYoutube]);
    }
} 
