<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/soumission-reclamation', function () {
    return view('reclamation');
});
Route::get('/suivre-reclamation', function () {
    return view('suivrerec');
});
Route::get('/rec-done', function () {
    return view('reclamationdone');
});
Route::get('/soumission-proposition', function () {
    return view('proposition');
});
Route::get('/contact', function () {
    return view('contact');
});
