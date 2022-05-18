<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DirectoryController;

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

Route::get('/directory', [DirectoryController::class, 'index'])->name("directory.index");
Route::get('/directory/{id}/show', [DirectoryController::class, 'show'])->name("directory.show");
Route::get('/directory/create', [DirectoryController::class, 'create'])->name("directory.create");
Route::post('/directory', [DirectoryController::class, 'store'])->name("directory.store");
Route::get('/directory/{id}/edit', [DirectoryController::class, 'edit'])->name("directory.edit");
Route::put('/directory/update', [DirectoryController::class, 'update'])->name("directory.update");
Route::delete('/directory/destroy', [DirectoryController::class, 'destroy'])->name("directory.destroy");

