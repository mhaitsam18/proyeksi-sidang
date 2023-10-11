<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\ProyeksiController;
use Illuminate\Redis\Connectors\PredisConnector;
use App\Http\Controllers\PrediksiSidangController;
use App\Http\Controllers\ProyeksiSidangController;
use App\Models\PrediksiSidang;
use App\Models\ProyeksiSidang;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

route::post('/logout', [LoginController::class, 'logout']);





Route::group(['middleware' => ['auth', 'checkRole:1,2']], function () {
    Route::get('/dashboard/laporan', [LaporanController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'checkRole:2']], function () {
    Route::get('/dashboard/prediksi', [PrediksiController::class, 'index']);
    Route::match(['get', 'post'], '/upload', [PrediksiController::class, 'upload']);
});

Route::group(['middleware' => ['auth', 'checkRole:1,3']], function () {
    // Route::resource('/dashboard/proyeksi', ProyeksiSidangController::class);
    Route::get('/dashboard/proyeksi', [ProyeksiController::class, 'index']);
    Route::match(['get', 'post'], '/edit{id}', [ProyeksiController::class, 'edit']);
});

Route::group(['middleware' => ['auth', 'checkRole:1,3,2']], function () {
    Route::get('/dashboard', function () {
        return view('welcome', [
            'title' => 'Dashboard'
        ]);
    });
});

Route::get('/download-prediksi-sidang-pdf', [PrediksiController::class, 'downloadPrediksiPdf']);





































// Route::group(['middleware' => ['auth', 'checkRole:2']], function () {
//     Route::resource('/dashboard', PrediksiSidangController::class);
//     Route::resource('/dashboard/prediksi', PrediksiSidangController::class);
// });

// Route::group(['middleware' => ['auth', 'checkRole:1,2']], function () {
//     Route::get('/dashboard', [PrediksiController::class, 'index']);
//     Route::get('/dashboard/laporan', [PrediksiController::class, 'index']);
// });

// Route::group(['middleware' => ['auth', 'checkRole:1,3']], function () {
//     Route::resource('/dashboard', ProyeksiSidangController::class);
//     Route::get('/dashboard/proyeksi', [ProyeksiController::class, 'index']);
// });
