<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Pages\Filme\FilmeHelper;
use Illuminate\Http\Request;

class AdmFilmeController extends Controller
{
    public function index() 
    {
        return view('pages.admin.catalogo', [
            'filmes' => FilmeHelper::getAllFilmes()
        ]);
    }
}
