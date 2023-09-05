<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;

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
    return view('home');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
//AuthorControllerのindexメソッドを呼び出している
Route::get('/author', [AuthorController::class, 'create'])->name('author.create');
Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');
Route::get('/author/show', [AuthorController::class, 'show'])->name('author.show');
Route::get('/author/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');
