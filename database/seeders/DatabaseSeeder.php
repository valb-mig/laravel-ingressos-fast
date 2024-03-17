<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CinemasSeeder::class);
        $this->call(FilmesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
