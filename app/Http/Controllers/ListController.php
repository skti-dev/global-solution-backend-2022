<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ListController extends Controller
{
    public function index()
    {
        return response()->json([
            200
        ]);
    }
}
