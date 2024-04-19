<?php

use App\Http\Controllers\kategoria;
use App\Http\Controllers\teszt;
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
Route::get('/show/{id}', [teszt::class, 'show2']);
Route::get('/show', [teszt::class, 'show']);
Route::get('/showk', [kategoria::class, 'showk']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
