<?php

namespace App\Helpers\Pages\Filme;

use App\Models\{
    Ingressos, 
    Filmes,
    FilmesCinemas
};

class FilmeHelper
{
    public static function getIngressosPorFilme($uf, $id)
    {
        $ingressos = Ingressos::select('tb_ingressos.*')
            ->join('tb_filmes as f', 'f.id', '=', 'tb_ingressos.id_filme')
            ->join('tb_salas as s', 's.id', '=', 'tb_ingressos.id_sala')
            ->join('tb_cinemas as c', 'c.id', '=', 'tb_ingressos.id_cinema')
            ->where('f.id',            '=', $id)
            ->where('f.status_filme',  '=', 'A')
            ->where('s.status_sala',   '=', 'A')
            ->where('c.status_cinema', '=', 'A')
            ->get();

        return $ingressos;
    }

    public static function getCinemasPorFilme($uf, $id)
    {
        $cinemas = FilmesCinemas::select('c.nome_cinema', 'dp_filmes_cinemas.id_cinema', 'c.rua_cinema', 'f.nome_filme')
            ->join('tb_filmes as f', 'dp_filmes_cinemas.id_filme', '=', 'f.id')
            ->join('tb_cinemas as c', 'dp_filmes_cinemas.id_cinema', '=', 'c.id')
            ->where('dp_filmes_cinemas.id_filme', $id)
            ->where('dp_filmes_cinemas.status_filme', 'A')
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