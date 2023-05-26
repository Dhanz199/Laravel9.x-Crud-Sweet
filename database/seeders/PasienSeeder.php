<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_pasien')->insert([
            'nama_pasien' => 'Ahmad Muhamad',
            'alamat' => 'Jl. Raya Cimanggis',
            'no_telpon' => '08121234567',
            'id_rs'=> 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tb_pasien')->insert([
            'nama_pasien' => 'Ahmad Julian',
            'alamat' => 'Jl. Raya Manuk',
            'no_telpon' => '081243123432',
            'id_rs'=> 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tb_pasien')->insert([
            'nama_pasien' => 'Zulan',
            'alamat' => 'Jl. Raya Bogor',
            'no_telpon' => '0812232112',
            'id_rs'=> 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
