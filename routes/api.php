<?php

use App\Http\Controllers\KnjigaClanaController;
use App\Http\Controllers\ClanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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
Route::resource('knjige',KnjigaClanaController::class);
Route::resource('clanovi',ClanController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/sveknjige', [App\Http\Controllers\KnjigaClanaController::class,'index'] )->name('sveknjige');
//Route::get('/sviclanovi', [App\Http\Controllers\ClanController::class, 'index'])->name('sviclanovi');

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::get('/profile', function(Request $request) {
//         return auth()->user();
//     });
   

//     // API route for logout user
//     Route::post('/logout', [AuthController::class, 'logout']);
// });


// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);

Route::get('obrisiclana/{id}',[App\Http\Controllers\ClanController::class,'destroy'])->name('obrisiclana');
Route::get('obrisiknjigu/{id}',[App\Http\Controllers\KnjigaClanaController::class,'destroy'])->name('obrisiknjigu');


Route::post('/register',[RegisterController::class,'register']);
Route::post('/login',[RegisterController::class,'login']);