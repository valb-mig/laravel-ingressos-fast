<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemasSeeder extends Seeder
{
    public function run(): void
    {
        $cinemas = [
            [
                'nome_cinema' => 'Cinepolis Patteo',
                'uf_cinema'   => 'PE',
                'rua_cinema'  => 'Rua do exemplo n° 13'
            ],
            [
                'nome_cinema' => 'Cinepolis Tacaruna',
                'uf_cinema'   => 'PE',
                'rua_cinema'  => 'Rua do exemplo n° 14'
            ],
            [
                'nome_cinema' => 'Cinepolis Rio mar',
                'uf_cinema'   => 'PE',
                'rua_cinema'  => 'Rua do exemplo n° 15'
            ],
        ];

        DB::beginTransaction();

        try {
            foreach ($cinemas as $cinema) {
                DB::table('cinemas')->insertOrIgnore([
                    'nome_cinema'   => $cinema['nome_cinema'],
                    'uf_cinema'     => $cinema['uf_cinema'],
                    'rua_cinema'    => $cinema['rua_cinema'],
                    'status_cinema' => 'A',
                    'updated_at'    => now(),
                    'created_at'    => now()
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
