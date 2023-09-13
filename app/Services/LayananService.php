<?php
namespace App\Services;

use App\Models\Layanan;
use App\Repositories\LayananRepository;

class LayananService
{
    protected $repository;

    public function __construct(LayananRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listLayanan($request)
    {
        $layanan = $this->repository->listLayanan($request);

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
