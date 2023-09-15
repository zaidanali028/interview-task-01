<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Artisan;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/v1')->namespace('App\Http\Controllers')->group(function () {

    Route::get('success-route',  'ApiController@successRoute');
    Route::get('failing-route',  'ApiController@failingRoute');
    Route::get('ref', function () {
        // for refreshing app
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        Artisan::call('clear-compiled');
        Artisan::call('config:clear');
        return response()->json([
            'state' => 'success',
            'msg' => 'App refresh success',

        ], 200);
    });
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
