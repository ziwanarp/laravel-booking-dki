<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\FallbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LayananController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('v1/list-layanan', [LayananController::class, 'listLayanan']);
Route::post('v1/list-jabatan', [JabatanController::class, 'listJabatan']);
Route::post('v1/list-cabang', [CabangController::class, 'listCabang']);

// if route !found
Route::any('{any}', [FallbackController::class, 'index'])->where('any', '.*');

