<?php

use App\Http\Controllers\TextResultController;
use App\Http\Controllers\MainController;

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
Route::view('/selection', 'selection');

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

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::post('/admin/add', [MainController::class, 'add'])->name('admin.add');


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/admin/search',[MainController::class, 'search'])->name('admin.search');
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
    Route::get('/admin/new', [MainController::class, 'new'])->name('admin.new');
    Route::get('/admin/dashboard/update', [MainController::class, 'updatepage'])->name('admin.update');
    Route::post('/admin/updatedtls'  ,[MainController::class, 'update'])->name('admin.updatedtls');
    Route::get('/admin/details'  ,[MainController::class, 'details'])->name('admin.details');
    Route::get('/admin/dashboard'  ,[MainController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard/edit/{id}', [MainController::class, 'edit'])->name('admin.edit');
});