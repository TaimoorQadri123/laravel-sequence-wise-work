<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Mycontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('std',[MyController::class,'selectStudents']);

Route::get('insert', function () {
    return view('insert');
});
Route::post('insert',[MyController::class,'insertData']);

