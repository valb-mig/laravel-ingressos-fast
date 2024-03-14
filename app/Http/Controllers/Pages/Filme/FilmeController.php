<?php

namespace App\Http\Controllers\Pages\Filme;

use App\Http\Controllers\Controller;
use App\Helpers\Pages\Filme\FilmeHelper;

class FilmeController extends Controller
{
    private $uf = "PE";

    public function index($id) 
    {
        $filme = FilmeHelper::getFilmePorID($id);

        if(!$filme)
        {
            return redirect()->route('catalogo');
        }

        $ingressos = FilmeHelper::getIngressosPorFilme($this->uf);
        $cinemas = FilmeHelper::getCinemasPorFilme($this->uf, $id);
        
        return view('pages.filme.index', [
            'filme'     => $filme,
            'ingressos' => $ingressos,
            'cinemas'   => $cinemas
        ]);
    }
}
