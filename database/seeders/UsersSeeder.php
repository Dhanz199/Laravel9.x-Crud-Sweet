<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert([
            'name' => 'Sofa Ramadhan',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tb_user')->insert([
            'name' => 'Ramadhan',
            'username' => 'dhan199',
            'password' => Hash::make('dhan199'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
