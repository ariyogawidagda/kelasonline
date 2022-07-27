<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bayarController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanggananController;
use App\Http\Controllers\detilkelasController;
use App\Http\Controllers\KelasInputController;
use App\Http\Controllers\DataPelamarController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PengajarController;

use App\Http\Controllers\PostController;
use App\Models\Post; 
use App\Models\User; 
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

Route::get('/', function () {
    return view('home');
});

Route::get('/langganan', function () {
    return view('langganan');
});

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/bayar', function () {
    return view('detailKelas', [
        "tittle" => "About",
        "name" => "Rona Litana"

    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "tittle" => "Contacts"
    ]);
});


// LOGIN DAN REGISTER
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); // request yang dilakukan di filter dahulu oleh middleware atau aksi yang dilakukan oleh user difilter dahulu oleh middleware
Route::post('/register', [RegisterController::class, 'store']); // untuk menyimpan


// SISWA
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/mentor', [PengajarController::class, 'indexuser']);
Route::get('/detailKelas', [detilkelasController::class, 'index']);
Route::get('/formBayar', [bayarController::class, 'index']);
Route::get('/hargakelas', [HargaController::class, 'index']);


// PELAMAR
Route::resource('/pelamar', PelamarController::class);
Route::resource('/lamaran', LamaranController::class);
Route::resource('/langganan', LanggananController::class);

Route::get('/admin-dashboard', function () {
    return view('admin.index');
});


// ADMIN
Route::resource('/admin/training', TrainingController::class);

Route::resource('/admin/inputkelas', KelasInputController::class);

Route::resource('/admin/datapelamar', DataPelamarController::class);

Route::resource('/submission', SubmissionController::class);

// SISWA ADMIN
Route::get('/admin/siswa', [SiswaController::class, 'index']);

Route::get('/admin/siswa/{siswa:id}/edit', [SiswaController::class, 'edit']);

Route::put('/admin/siswa/{siswa:id}', [SiswaController::class, 'update']);
Route::delete('/admin/siswa/{siswa:id}', [SiswaController::class, 'destroy']);





Route::get('/transaksi', [TransaksiController::class, 'index']);

//Profile

Route::get('/profile', [ProfileController::class, 'index']);


// setting profil

Route::group(['middleware' => 'auth'], function () {
    Route::get('/edit', [ProfileController::class, 'edit']);
});

Route::post('/updateprofile', [ProfileController::class, 'update']);

// PENGAJAR ADMIN
Route::get('/admin/pengajar', [PengajarController::class, 'indexadmin']);