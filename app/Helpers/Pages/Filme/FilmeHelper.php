<?php

namespace App\Helpers\Pages\Filme;

use App\Models\{
    Ingressos, 
    Filmes,
    FilmesCinemas
};

class FilmeHelper
{
    public static function getIngressosPorFilme($uf)
    {
        $ingressos = Ingressos::select('ingressos.id', 'ingressos.id_sala', 'ingressos.hora_entrada')
            ->join('cinemas as c', 'ingressos.id_cinema', '=', 'c.id')
            ->join('salas as s', 'ingressos.id_sala', '=', 's.id')
            ->join('filmes_cinemas as fc', 'ingressos.id_filme', '=', 'fc.id_filme')
            ->where('ingressos.qtd_ingressos', '>', 0)
            ->whereColumn('s.id_cinema', 'c.id')
            ->whereColumn('s.id_filme', 'fc.id_filme')
            ->where('s.status_sala',   'A')
            ->where('fc.status_filme', 'A')
            ->where('c.status_cinema', 'A')
            ->where('c.uf_cinema', $uf)
            ->get();
        
        return $ingressos;
    }

    public static function getCinemasPorFilme($uf, $id)
    {
        $cinemas = FilmesCinemas::select('c.nome_cinema', 'c.rua_cinema', 'f.nome_filme')
            ->join('filmes as f', 'filmes_cinemas.id_filme', '=', 'f.id')
            ->join('cinemas as c', 'filmes_cinemas.id_cinema', '=', 'c.id')
            ->where('filmes_cinemas.id_filme', $id)
            ->where('filmes_cinemas.status_filme', 'A')
            ->where('f.status_filme', 'A')
            ->where('c.uf_cinema', $uf)
            ->get();
        
        return $cinemas;
    }

    public static function getFilmePorID($id)
    {
        return Filmes::find($id);
    }
}