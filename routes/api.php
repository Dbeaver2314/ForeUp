<?php

use App\Http\Controllers\FavoriteListController;
use App\Models\FavoriteList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/data', function () {
    $response = Http::get('https://swapi.dev/api/starships/');
    return $response->json();
});

Route::get('/favorites',[FavoriteListController::class,'index'])->name('favorites.index');
Route::post('/favorites',[FavoriteListController::class,'create'])->name('favorites.create');
