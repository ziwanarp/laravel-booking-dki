<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    public function index(Request $request)
    {
        // Handle the fallback
        return response()->json(["status_code" => 404, "status_message" => "not found"], 404);
    }
}
