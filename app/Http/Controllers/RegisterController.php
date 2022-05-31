<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        return response()->json([
            200
        ]);
    }
}
