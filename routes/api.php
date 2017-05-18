<?php

use Illuminate\Http\Request;

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

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

Route::group(['prefix' => 'v1'], function(){

    /*
     * Users
     */
    Route::resource('/users', '\App\Http\Controllers\UsersController', ['only' => [
            'index', 'show', 'store'
        ]
    ]);

    /*
     * Teams
     */
    Route::resource('/teams', '\App\Http\Controllers\Api\V1\TeamsController', ['only' => [
            'index', 'show', 'store'
        ]
    ]);

});
