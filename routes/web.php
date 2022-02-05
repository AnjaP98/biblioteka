<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KnjigaClanaController;
use App\Http\Controllers\ClanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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
Route::get('/users', [UserController::class,'index'] );

Route::get('/knjige', [KnjigaClanaController::class,'index'] );
Route::get('/clanovi', [ClanController::class,'index'] );

Route::get('/home', function(){  
    return view('home');
  });  
 



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sviclanovi', [App\Http\Controllers\ClanController::class, 'index'])->name('sviclanovi');
Route::get('/sveknjige', [App\Http\Controllers\KnjigaClanaController::class, 'index'])->name('sveknjige');


Route::get('dodajclana',[ClanController::class,'create'])->name('dodajclana');
Route::post('dodajclana',[ClanController::class,'store'])->name('dodajclana');

Route::get('dodajknjigu',[App\Http\Controllers\KnjigaClanaController::class,'create'])->name('dodajknjigu');
Route::post('dodajknjigu',[App\Http\Controllers\KnjigaClanaController::class,'store'])->name('dodajknjigu');

Route::get('obrisiclana/{id}',[App\Http\Controllers\ClanController::class,'destroy'])->name('obrisiclana');
Route::get('obrisiknjigu/{id}',[App\Http\Controllers\KnjigaClanaController::class,'destroy'])->name('obrisiknjigu');





