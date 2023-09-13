<?php
namespace App\Services;

use App\Repositories\JabatanRepository;

class JabatanService
{
    protected $repository;

    public function __construct(JabatanRepository $repository)
    {
        $this->repository = $repository;
    }
    public function listJabatan()
    {
        $jabatan = $this->repository->listJabatan();;

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
