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

        DB::table('siswas')->insert([
            'nama' => 'Endricho',
            'nis' => '212102428',
            'kelas_id' => 2,
            'telp' => '085845214967',
            'alamat' => 'Jl. Ayani 2',
        ]);
    }
}
