<?php

namespace App\Http\Controllers\Pages\Catalogo;

use App\Http\Controllers\Controller;
use App\Models\Filmes;
use App\Helpers\GlobalHelper;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    private $user;

    public function index() 
    {
        $this->user = GlobalHelper::getUserData();

        $filmes = Filmes::select()
            ->where('tb_filmes.status_filme', '=', 'A')
            ->get();

        return view('pages.catalogo.index', [
            'filmes' => $filmes,
            'user'   => $this->user
        ]);
    }
}
