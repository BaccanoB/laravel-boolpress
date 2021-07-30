<?php

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

Route::get('/test', function() {
    return response()->json(
        [
            'nome'=>'beatrice',
            'cognome'=>'baccano',
            'eta'=>'31'        ]
    );
}
);
Route::post('/rotta-post', function() {
    return response()->json(
        [
            'nome'=>'beatrice',
            'cognome'=>'baccano',
            'eta'=>'31'        ]
    );
}
);

Route::namespace('Api')->group(function(){
        Route::get('posts','PostController@index');
});
