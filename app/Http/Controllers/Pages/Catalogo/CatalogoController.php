<?php

namespace App\Http\Controllers\Pages\Catalogo;

use App\Http\Controllers\Controller;
use App\Models\Filmes;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index() 
    {
        $filmes = Filmes::all();

        return view('pages.catalogo.index', [
            'filmes' => $filmes
        ]);
    }
}
