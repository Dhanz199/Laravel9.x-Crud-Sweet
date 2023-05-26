<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_rumah_sakit')->insert([
            'nama_rumah_sakit' => 'RS Bintaro Citra Raya',
            'alamat' => 'Jl. Citra Raya - Citra Raya - Citra Raya',
            'email'=> 'zsd@gmail.com',
            'telepon' => '0811 - 1111 - 1111',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tb_rumah_sakit')->insert([
            'nama_rumah_sakit' => 'RS Citra Raya 2',
            'alamat' => 'Jl. Citra Raya 2 - Citra Raya - Citra Raya2 ',
            'email'=> 'jkl@gmail.com',
            'telepon' => '0822 - 2222 - 2222',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tb_rumah_sakit')->insert([
            'nama_rumah_sakit' => 'RS Citra Raya 3',
            'alamat' => 'Jl. Citra Raya 3- Citra Raya - Citra Raya3',
            'email'=> 'mno@gmail.com',
            'telepon' => '0833 - 3333 - 3333',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
