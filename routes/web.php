<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\AlbumsController;
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
})->name('home');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/artists/{id?}', [ArtistsController::class, 'index'])->name('artists')->whereNumber('id');
Route::resource('albums', AlbumsController::class);
// ARTISAN
Route::get('/clean', function() {
    Artisan::call('optimize:clear');
    print(Artisan::output());
});