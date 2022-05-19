<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

Route::view('insert','insert');
Route::get('list',[MemberController::class,'show']);
Route::get('add',[MemberController::class,'Adddata']);
Route::get('edit/{id}',[MemberController::class,'editData']);
Route::post('edit',[MemberController::class,'Update']);

Route::get('delete/{id}',[MemberController::class,'delete']);

