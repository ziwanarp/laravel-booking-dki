<?php

use App\Http\Controllers\CabangController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('v1/list-layanan', [LayananController::class, 'listLayanan']);
Route::post('v1/list-jabatan', [JabatanController::class, 'listJabatan']);
Route::post('v1/list-cabang', [CabangController::class, 'listCabang']);

// if routing !found (GET)
Route::fallback(function () { return response()->json([ 'status_code' => 404,'status_message' => 'not found'],404);});

