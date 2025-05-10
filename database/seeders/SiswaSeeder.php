<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Lukman',
            'nis' => '211103765',
            'kelas_id' => 1,
            'telp' => '083153000449',
            'alamat' => 'Jl. Komodor Yos Sudarso Gg. Alpokat Indah 5',
        ]);

    }
}
