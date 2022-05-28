<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
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
Route::get('/', [FilmsController::class, 'index'])->name('films');

Route::get('/backend', [FilmsController::class, 'crud'])->name('backend');

Route::post('/ajouter', [FilmsController::class, 'create'])->name('ajouter');

Route::post('/update/{id}', [FilmsController::class, 'update'])->whereNumber('id')->name('update');

Route::delete('/delete/{id}', [FilmsController::class, 'delete'])->whereNumber('id')->name('delete');

Route::get('/film/{id}', [FilmsController::class, 'show'])->whereNumber('id');

Route::get('/film/synopsis/{id}', [FilmsController::class, 'shows'])->whereNumber('id');

Route::get('/search', [FilmsController::class, 'search']);