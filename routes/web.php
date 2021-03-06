<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', function(){
    return view('categories', [
        "categories" => Category::all()
    ]);
});

//tabungan
//history
Route::get('/transaksi', [TabunganController::class, 'index']);
//cek saldo
Route::get('/ceksaldo', [TabunganController::class, 'ceksaldo']);
//penarikan
Route::get('/penarikan', [TabunganController::class, 'tarik'])->name('penarikan');
Route::patch('/penarikan', [TabunganController::class, 'tarikk']);
//transfer
Route::get('/transfer', [TabunganController::class, 'transfer'])->name('transfer');
Route::patch('/transfer', [TabunganController::class, 'transferr']);
//nabung
Route::get('/nabung', [TabunganController::class, 'nabung'])->name('nabung');
Route::patch('/nabung', [TabunganController::class, 'nabungg']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/siswa', SiswaController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
