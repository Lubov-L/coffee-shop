<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTestUsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => 'admin',
                'created_at' => now(),
                'role_id' => 1
            ],
            [
                'name' => 'user',
                'email' => 'user@mail.com',
                'password' => 'user',
                'created_at' => now(),
                'role_id' => 2
            ]
        ]);
    }
}
