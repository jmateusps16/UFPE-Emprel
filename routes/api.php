<?php

use App\Http\Controllers\ComplaintController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->group(function ($v1) {
    $v1->prefix('/complaint')->group(function ($complaint) {
        $complaint->get('/', [ComplaintController::class, 'list']);
        $complaint->post('/', [ComplaintController::class, 'save']);
        $complaint->delete('/', [ComplaintController::class, 'delete']);
    });
});