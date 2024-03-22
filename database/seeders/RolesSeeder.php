<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'cliente',
            'funcionario',
            'admin',
            'anonimo',
        ];

        DB::beginTransaction();

        try {
            foreach ($roles as $role) {
                DB::table('tb_roles')->insertOrIgnore([
                    'role'       => $role,
                    'updated_at' => now(),
                    'created_at' => now()
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
