<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\ {
    Catalogo\CatalogoController,
    Filme\FilmeController
};

use App\Http\Controllers\Auth\ {
    LoginController,
    RegisterController
};

// Auth

Route::get('/login',[
    LoginController::class, 'index'
])->name('login');

Route::post('/login',[
    LoginController::class, 'login'
]);

Route::get('/register',[
    RegisterController::class, 'index'
])->name('register');

Route::post('/register',[
    RegisterController::class, 'store'
]);

// Web

Route::get('/',[
    CatalogoController::class, 'index'
])->name('catalogo');

Route::get('/filme/{id}',[
    FilmeController::class, 'index'
]);