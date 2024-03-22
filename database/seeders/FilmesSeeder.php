<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Filmes;

class FilmesSeeder extends Seeder
{
    
    public function run(): void
    {
        $filmes = [
            [
                'nome_filme'      => 'Batman',
                'descricao_filme' => 'Filme do batima',
                'image_path'      => 'filmes/batman.jpeg'
            ],
            [
                'nome_filme'      => 'Interstelar',
                'descricao_filme' => 'Filme de nerdola',
                'image_path'      => 'filmes/interstelar.jpeg'
            ]
        ];
            
        DB::beginTransaction();

        try 
        {
            foreach($filmes as $filme)
            {
                DB::table('tb_filmes')->insert([
                    'nome_filme'      => $filme['nome_filme'],
                    'descricao_filme' => $filme['descricao_filme'],
                    'image_path'      => $filme['image_path'],
                    'id_usuario'      => 999,
                    'status_filme'    => 'A',
                    'updated_at'      => now(),
                    'created_at'      => now()
                ]);
            }

            DB::commit();
        }
        catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }
    }
}
