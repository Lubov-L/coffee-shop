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
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => 'admin',
                'role_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'user',
                'email' => 'user@mail.com',
                'password' => 'user',
                'role_id' => 2
            ]
        ]);
    }
}
