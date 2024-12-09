<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    return response() -> json([
        'status' => true,
        'mensage' => "Listar usuários",
    ], 200);
});
