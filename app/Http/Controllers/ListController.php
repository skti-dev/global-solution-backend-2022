<?php

namespace App\Http\Controllers;

use App\Models\Supplies;
use Illuminate\Http\JsonResponse;

class ListController extends Controller
{
    public function index()
    {
        return response()->json(
            Supplies::all()
        );
    }
}
