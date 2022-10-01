<?php

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('/', function () {
    return response()->json([
        'status' => 200,
        'message' => 'Server API is working'
    ], 200);
});

Route::any('login', function () {
    return response()->json([
        'status' => 200,
        'message' => 'Login under maintenance'
    ], 200);
});