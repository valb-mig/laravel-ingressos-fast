<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'username' => 'John',
                'email' => 'john@example.com',
                'password' => bcrypt('123'),
                'uf' => 'PE',
                'data_nascto' => '2000-01-01',
            ]
        ];

        DB::beginTransaction();

        try {
            foreach ($users as $user) {
                DB::table('tb_users')->insertOrIgnore([
                    'username'    => $user['username'],
                    'email'       => $user['email'],
                    'password'    => $user['password'],
                    'uf'          => $user['uf'],
                    'data_nascto' => $user['data_nascto'],
                    'updated_at'   => now(),
                    'created_at'   => now()
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
