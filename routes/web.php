<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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

//COMICS CRUD
//index
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//create
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//show
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//store
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//edit
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

//update
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

//delete
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');