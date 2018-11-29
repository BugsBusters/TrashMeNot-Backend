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

Route::get('/hello-world',function(){
    return response()->json("hello bugbuster my old friend!",200);
});

Route::post('/register','Auth\RegisterController@apiRegister');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route Tips
Route::middleware('auth:api')->get('/tips','TipsController@all');
Route::middleware('auth:api')->get('/tip/{id}','TipsController@find');
Route::middleware('auth:api')->put('/tip','TipsController@put');
Route::middleware('auth:api')->patch('/tip/{id}','TipsController@patch');
Route::middleware('auth:api')->delete('/tip/{id}','TipsController@delete');


//Route categoria
Route::middleware('auth:api')->get('/categorie','CategorieController@all');
Route::middleware('auth:api')->get('/categoria/{id}','CategorieController@find');
Route::middleware('auth:api')->put('/categoria','CategorieController@put');
Route::middleware('auth:api')->patch('/categoria/{id}','CategorieController@patch');
Route::middleware('auth:api')->delete('/categoria/{id}','CategorieController@delete');

//Route negozio
Route::middleware('auth:api')->get('/negozi','NegozioController@all');
Route::middleware('auth:api')->get('/negozio/{id}','NegozioController@find');
Route::middleware('auth:api')->put('/negozio','NegozioController@put');
Route::middleware('auth:api')->patch('/negozio/{id}','NegozioController@patch');
Route::middleware('auth:api')->delete('/negozio/{id}','NegozioController@delete');

//Route Prodotto

Route::middleware('auth:api')->get('/prodotti','ProdottoController@all');
Route::middleware('auth:api')->get('/prodotto/{id}','ProdottoController@find');
Route::middleware('auth:api')->put('/prodotto','ProdottoController@put');
Route::middleware('auth:api')->patch('/prodotto/{id}','ProdottoController@patch');
Route::middleware('auth:api')->delete('/prodotto/{id}','ProdottoController@delete');
