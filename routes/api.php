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
Route::get('/tips','TipsController@all');
Route::get('/tip/{id}','TipsController@find');
Route::put('/tip','TipsController@put');
Route::patch('/tip/{id}','TipsController@patch');
Route::delete('/tip/{id}','TipsController@delete');


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



//Route domande
Route::middleware('auth:api')->get('/domande','DomandeController@all');
Route::middleware('auth:api')->get('/domanda/{id}','DomandeController@find');
Route::middleware('auth:api')->put('/domanda','DomandeController@put');
Route::middleware('auth:api')->patch('/domanda/{id}','DomandeController@patch');
Route::middleware('auth:api')->delete('/domanda/{id}','DomandeController@delete');

//Route Prodotto

Route::middleware('auth:api')->get('/prodotti','ProdottoController@all');
Route::middleware('auth:api')->get('/prodotto/{id}','ProdottoController@find');
Route::middleware('auth:api')->put('/prodotto','ProdottoController@put');
Route::middleware('auth:api')->patch('/prodotto/{id}','ProdottoController@patch');
Route::middleware('auth:api')->delete('/prodotto/{id}','ProdottoController@delete');

//Route Ordini Testata

Route::middleware('auth:api')->get('/ordinitestata','OrdiniTestataController@all');
Route::middleware('auth:api')->get('/ordinetestata/{id}','OrdiniTestataController@find');
Route::middleware('auth:api')->put('/ordinetestata','OrdiniTestataController@put');
Route::middleware('auth:api')->patch('/ordinetestata/{id}','OrdiniTestataController@patch');
Route::middleware('auth:api')->delete('/ordinetestata/{id}','OrdiniTestataController@delete');


//Route Ordini Testata

Route::middleware('auth:api')->get('/ordinitestata','OrdiniTestataController@all');
Route::middleware('auth:api')->get('/ordinetestata/{id}','OrdiniTestataController@find');
Route::middleware('auth:api')->put('/ordinetestata','OrdiniTestataController@put');
Route::middleware('auth:api')->patch('/ordinetestata/{id}','OrdiniTestataController@patch');
Route::middleware('auth:api')->delete('/ordinetestata/{id}','OrdiniTestataController@delete');


//Route Risposte

//restituisce tutte le risposte di una domanda
Route::middleware('auth:api')->get('/domanda/{id}/risposte','RisposteController@all');

//trova risposta da id
Route::middleware('auth:api')->get('/risposta/{id}','RisposteController@find');

//aggiungi risposta con domanda_id
Route::middleware('auth:api')->put('/domanda/{dom_id}/risposta','RisposteController@put');

//modifica risposta da id
Route::middleware('auth:api')->patch('/risposta/{id}','RisposteController@patch');

//cancella risposta da id
Route::middleware('auth:api')->delete('/risposta/{id}','RisposteController@delete');


//Route Ordini Dettaglio


Route::middleware('auth:api')->get('/dettagliordini','OrdiniDettagliController@all');
Route::middleware('auth:api')->get('/dettagliordine/{id}','OrdiniDettagliController@find');
Route::middleware('auth:api')->put('/dettagliordine','OrdiniDettagliController@put');
Route::middleware('auth:api')->patch('/dettagliordine/{id}','OrdiniDettagliController@patch');
Route::middleware('auth:api')->delete('/dettagliordine/{id}','OrdiniDettagliController@delete');

//Route Rate

Route::middleware('auth:api')->get('/rate','RateController@all');
Route::middleware('auth:api')->get('/rate/{id}','RateController@find');
Route::middleware('auth:api')->put('/rate','RateController@put');
Route::middleware('auth:api')->patch('/rate/{id}','RateController@patch');
Route::middleware('auth:api')->delete('/rate/{id}','RateController@delete');

//Route Traguardi

Route::middleware('auth:api')->get('/traguardi','TraguardiController@all');
Route::middleware('auth:api')->get('/traguardo/{id}','TraguardiController@find');
Route::middleware('auth:api')->put('/traguardo','TraguardiController@put');
Route::middleware('auth:api')->patch('/traguardo/{id}','TraguardiController@patch');
Route::middleware('auth:api')->delete('/traguard/{id}','TraguardiController@delete');

//Route Badge

Route::middleware('auth:api')->get('/badge','BadgeController@all');
Route::middleware('auth:api')->get('/badge/{id}','BadgeController@find');
Route::middleware('auth:api')->put('/badge','BadgeController@put');
Route::middleware('auth:api')->patch('/badge/{id}','BadgeController@patch');
Route::middleware('auth:api')->delete('/badge/{id}','BadgeController@delete');

