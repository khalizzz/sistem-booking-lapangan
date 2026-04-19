<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function ping(): JsonResponse
    {
        return response()->json([
            'message' => env('PING_MESSAGE', 'ping'),
        ]);
    }

    public function demo(): JsonResponse
    {
        return response()->json([
            'message' => 'Hello from Laravel backend',
        ]);
    }
}
