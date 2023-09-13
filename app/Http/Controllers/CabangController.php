<?php

namespace App\Http\Controllers;

use App\Services\CabangService;

class CabangController extends Controller
{
    protected $service;

    public function __construct(CabangService $service){
        $this->service = $service;
    }

    public function listCabang() {
        return $this->service->listCabang();
    }
}
