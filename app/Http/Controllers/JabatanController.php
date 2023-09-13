<?php

namespace App\Http\Controllers;

use App\Services\JabatanService;

class JabatanController extends Controller
{
    protected $service;

    public function __construct(JabatanService $service){
        $this->service = $service;
    }

    public function listJabatan (){
        return $this->service->listJabatan();
    }
}
