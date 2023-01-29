<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/administrator', [App\Http\Controllers\AdministratorController::class, 'index']);
Route::middleware(['auth'])->group(function(){
    Route::prefix('administrator')->group(function () {
        Route::get('/', [AdministratorController::class, 'index']);
        Route::get('/dashboard_admin', [AdminController::class, 'index']);
    
        //PRODUK
        Route::get('/dashboard_produk', [ProdukController::class, 'index']);
        Route::get('/dashboard_produk/create', [ProdukController::class, 'tambah_produk']);
        Route::post('/dashboard_produk/store', [ProdukController::class, 'create']);
        Route::get('/dashboard_produk/edit/{id}', [ProdukController::class, 'edit_produk']);
        Route::put('/dashboard_produk/update/{id}', [ProdukController::class, 'update']);
        Route::delete('/dashboard_produk/hapus/{id}', [ProdukController::class, 'destroy']);
    
        // ARTIKEL
        Route::get('/dashboard_artikel', [ArtikelController::class, 'index']);
        Route::get('/dashboard_artikel/create', [ArtikelController::class, 'tambah_artikel']);
        Route::post('/dashboard_artikel/store', [ArtikelController::class, 'create']);
        Route::get('/dashboard_artikel/edit/{id}', [ArtikelController::class, 'edit_artikel']);
        Route::put('/dashboard_artikel/update/{id}', [ArtikelController::class, 'update']);
        Route::put('/dashboard_artikel/update_gambar_artikel/{id}', [ArtikelController::class, 'update_gambar_artikel']);
        Route::delete('/dashboard_artikel/hapus/{id}', [ArtikelController::class, 'destroy']);
    
        // Route::get('/', function () {
        //     return view('/administrator/layouts/master', [
        //         'nama1' => 'Ichsan Budiman Putra',
        //         'nama2' => 'Lutfi Rizky Budi',
        //         'nama3' => 'Tegar Wiratama',
        //         'nama4' => 'Azmi Azis',
        //     ]);
        // });
    
        Route::get('/dashboard-produk', function () {
            return 'dashboard produk';
        });
    
        Route::get('/dashboard-artikel', function () {
            return 'dashboard artikel';
        });
    });
    
});

//UNTUK HALAMAN USER BIASA


Route::get('/', [IndexController::class, 'index']);
Route::get('/domain', [IndexController::class, 'domain']);
Route::get('/hosting', [IndexController::class, 'hosting']);
Route::get('/view_Artikel/{id}', [ArtikelController::class, 'viewArtikel']);

// Route::get('/domain', function(){
//     return view('domain');
// });
// Route::get('/', function () {
//     return view('index', [
//         'nama1' => 'Ichsan Budiman Putra',
//         'nama2' => 'Lutfi Rizky Budi',
//         'nama3' => 'Tegar Wiratama',
//         'nama4' => 'Azmi Azis',
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        'nama1' => 'Ichsan Budiman Putra',
        'nama2' => 'Lutfi Rizky Budi',
        'nama3' => 'Tegar Wiratama',
        'nama4' => 'Azmi Azis',
    ]);
});


// Route::get('/hosting', function(){
//     return view('hosting');
// });

Route::get('/team', function(){
    return view('team');
});

Route::get('/testimonial', function(){
    return view('testimonial');
});

Route::get('/comparison', function(){
    return view('comparison');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/artikel', [ArtikelController::class, 'listArtikel']);

// Route::get('/artikel', function(){
//     return view('artikel');
// });



