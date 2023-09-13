<?php
namespace App\Services;

use App\Repositories\CabangRepository;

class CabangService
{
    protected $repository;

    public function __construct(CabangRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listCabang()
    {
        $cabang = $this->repository->listCabang();

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
