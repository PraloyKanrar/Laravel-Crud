<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Crud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addstd',[Crud::class , "addstd"])->name('addstd');
Route::post('/store',[Crud::class , "store"])->name('store');

Route::get('/selsrd',[Crud::class , "selstd"])->name('select');

Route::get('/edit/{eid}',[Crud::class , "edit"])->name('edit');
Route::post('/updstd',[Crud::class , "updstd"])->name('updstd');

Route::get('/del/{did}',[Crud::class , "delstd"])->name('delstd');