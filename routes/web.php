<?php

use App\Http\Controllers\Categorias\CategoriasController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/categorias', CategoriasController::class);


// Route::name('categorias.')->group(function () {
//     Route::get('/categorias', [App\Http\Controllers\Categorias\CategoriasController::class, 'index'])->name('categorias');
//     Route::get('/index', [App\Http\Controllers\Categorias\CategoriasController::class, 'index'])->name('categorias');  
//     Route::get('/show/{id}', [App\Http\Controllers\Categorias\CategoriasController::class, 'show'])->name('show');

//     Route::get('/create', [App\Http\Controllers\Categorias\CategoriasController::class, 'create'])->name('create');
//     Route::post('/store', [App\Http\Controllers\Categorias\CategoriasController::class, 'store'])->name('store');

//     Route::post('/delete/{id}', [App\Http\Controllers\Categorias\CategoriasController::class, 'destroy'])->name('destroy');

//     Route::get('/edit/{id}', [App\Http\Controllers\Categorias\CategoriasController::class, 'edit'])->name('edit');
//     Route::put('/update', [App\Http\Controllers\Categorias\CategoriasController::class, 'update'])->name('update');
//     Route::post('/patch', [App\Http\Controllers\Categorias\CategoriasController::class, 'store'])->name('patch');
// });
