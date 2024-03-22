<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\ {
    Catalogo\CatalogoController,
    Filme\FilmeController,
    Checkout\CheckoutController
};

use App\Http\Controllers\Admin\ {
    AdmFilmeController
};

use App\Http\Controllers\Auth\ {
    LoginController,
    RegisterController
};

/*
*   Auth
*/

Route::get('/login',  [ LoginController::class, 'index' ])->name('login');
Route::post('/login', [ LoginController::class, 'login' ]);

Route::get('/register', [ RegisterController::class, 'index' ])->name('register');
Route::post('/register',[ RegisterController::class, 'store' ]);

/*
*   Admin
*/

Route::group(['middleware' => 'check.admin'], function() {

    Route::prefix('admin')->group(function(){
        Route::get('/catalogo',[ AdmFilmeController::class, 'index' ])->name('adm.catalogo');
    });

    Route::get('/filme/{id}/get',    [ FilmeController::class, 'get'    ]);
    Route::post('/filme/{id}/edit',  [ FilmeController::class, 'edit'   ]);
    Route::post('/filme/{id}/remove',[ FilmeController::class, 'remove' ]);
});

/*
*   Web
*/

Route::get('/',[ CatalogoController::class, 'index' ])->name('catalogo');
Route::get('/filme/{id}', [ FilmeController::class, 'index'  ])->name('filme');


/*
*   Checkout
*/

Route::get('/checkout/{id}', [ CheckoutController::class, 'index'    ])->name('checkout');
Route::post('/checkout/{id}',[ CheckoutController::class, 'checkout' ]);