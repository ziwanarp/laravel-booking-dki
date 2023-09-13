<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LayananService;

class LayananController extends Controller
{
    protected $service;

    public function __construct(LayananService $service){
        $this->service = $service;
    }

    public function listLayanan (Request $request){
        return $this->service->listLayanan($request);
    }
}
