<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function listLayanan (Request $request){

        $layanan =  Layanan::select('kode_layanan', 'nama_layanan')->where('jabatan_id',$request->id_jabatan)->get();

        if(count($layanan) == 0) {
            $status_code = "01";
            $status_message = "gagal";
        } else {
            $status_code = "00";
            $status_message = "sukses";
        }
         
        $data = [
            "status_code" => $status_code,
            "status_message" => $status_message,
            "data" => $layanan,
        ];

        return response()->json($data, 200);
    }
}
