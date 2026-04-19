<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\ApiController;

Route::get('/api/ping', [ApiController::class, 'ping']);
Route::get('/api/demo', [ApiController::class, 'demo']);

Route::get('/', function () {
    return Response::file(public_path('build/index.html'));
});

Route::get('/{any}', function () {
    return Response::file(public_path('build/index.html'));
})->where('any', '.*');
