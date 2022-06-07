<?php

namespace App\Http\Controllers;

use App\Models\Supplies;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $supplies = Supplies::create($data);
        return response()->json($supplies);
    }
}
