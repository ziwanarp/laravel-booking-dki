<?php
namespace App\Services;

use App\Models\Jabatan;

class JabatanService
{
    public function listJabatan()
    {
        $jabatan = Jabatan::select('id_jabatan','nama_jabatan')->get();

        if(count($jabatan) == 0) {
            $status_code = "01";
            $status_message = "gagal";
        } else {
            $status_code = "00";
            $status_message = "sukses";
        }
         
        $data = [
            "status_code" => $status_code,
            "status_message" => $status_message,
            "data" => $jabatan,
        ];
    
        return response()->json($data,200);
    }
}
