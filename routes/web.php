<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\{
    Catalogo\CatalogoController,
    Filme\FilmeController
};

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

Route::get('/',[
    CatalogoController::class, 'index'
])->name('catalogo');

Route::get('/filme/{id}',[
    FilmeController::class, 'index'
]);