<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;

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
    return view('home0069');
});

Route::get('/select', function () {
    return view('select0069');
});

Route::get('/selectLike', function () {
    return view('selectLike0069');
});

Route::get('/selectJoin', function () {
    return view('selectJoin0069');
});

Route::get('/selectJoinLike', function () {
    return view('selectJoinLike0069');
});

Route::resource('anggota', anggotaController::class);