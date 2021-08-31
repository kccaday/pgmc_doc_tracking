<?php

use App\Http\Controllers\TextResultController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/clients', 'clients');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/login', 'login');
Route::view('/search', 'search');
Route::view('/result', 'result');
Route::view('/menu', 'menu');
Route::view('/textsearch', 'textsearch');

//Route::view('/textresult', 'textresult');
//Route::get('/textresult', [TextResultController::class, 'index']);
//Route::get('/textresult/{trackingNr}', [TextResultController::class, 'edit']);
//Route::put('/textresult/{trackingNr}', [TextResultController::class, 'update']);
Route::put ( 'textresult/update', ['as' => 'text.update', 'uses' => 'App\Http\Controllers\TextResultController@update'] );

Route::view('/textmain', 'textmain');
Route::get('/textmain', [TextResultController::class, 'indexMain']);

Route::get ( 'textresult', ['as' => 'text.result', 'uses' => 'App\Http\Controllers\TextResultController@result']);

Route::view('/edit', 'edit');

Route::view('/existing', 'textmain');
Route::get('/existing', [TextResultController::class, 'index']);

