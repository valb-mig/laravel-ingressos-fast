<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmesSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        $filmes = [
            [
                'nome_filme' => 'Batman',
            ],
            [
                'nome_filme' => 'Interstelar'
            ]
        ];
            
        foreach($filmes as $filme)
        {
            DB::table('filmes')->insert([
                'nome_filme'   => $filme['nome_filme'],
                'status_filme' => 'A',
                'updated_at'   => now(),
                'created_at'   => now()
            ]);
        }
    }
}
