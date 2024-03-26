<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanConroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::resource('produk', ProdukController::class);
	// Route::resource('penjualan', PenjualanController::class);
	// Route::resource('detail-penjualan', DetailPenjualanConroller::class);

    Route::get('pesan/{id}', 'App\Http\Controllers\PesanController@index');
Route::post('pesan/{id}', 'App\Http\Controllers\PesanController@pesan');
Route::get('cart', 'App\Http\Controllers\PesanController@check_out');
Route::delete('cart/{id}', 'App\Http\Controllers\PesanController@delete');
Route::post('update-quantity/{id}', 'App\Http\Controllers\PesanController@updateQuantity')->name('update.quantity');
Route::get('history', 'App\Http\Controllers\HistoryController@index');
Route::get('history/{id}', 'App\Http\Controllers\HistoryController@detail');



Route::get('konfirmasi-check-out', 'App\Http\Controllers\PesanController@konfirmasi');


require __DIR__.'/auth.php';
