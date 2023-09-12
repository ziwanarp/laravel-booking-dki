<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function listCabang() {
        $cabang = Cabang::select('kode_cabang', 'id_vendor','vendor','latitude', 'longitude', 'alamat')->get();

        if(count($cabang) == 0) {
            $status_code = "01";
            $status_message = "gagal";
        } else {
            $status_code = "00";
            $status_message = "sukses";
        }
         
        $data = [
            "status_code" => $status_code,
            "status_message" => $status_message,
            "data" => $cabang,
        ];
    
        return response()->json($data,200);     
    }
}
