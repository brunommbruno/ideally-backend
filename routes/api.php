<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Ideas;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "ideas"], function (){
    //GETS all ideas
    Route::get("", [Ideas::class, "index"]);
    //POSTS an idea
    Route::post("", [Ideas::class, "store"]);

    Route::group(["prefix" => "{idea}"], function () {
        //GETS specific idea
        Route::get("", [Ideas::class, "show"]);
        //UPDATES a specific idea
        Route::put("", [Ideas::class, "update"]);
        //DELETES a specific idea
        Route::delete("", [Ideas::class, "destroy"]);
    });
});