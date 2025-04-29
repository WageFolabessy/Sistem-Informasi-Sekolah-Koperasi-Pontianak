<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapels')->insert([
            'nama_mapel' => 'Pemasaran Produk',
            'jurusan_id' => 1,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Indonesia',
            'jurusan_id' => 1,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Inggris',
            'jurusan_id' => 1,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Sejarah',
            'jurusan_id' => 1,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Pendidikan Kewarganegaraan',
            'jurusan_id' => 1,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Seni Budaya',
            'jurusan_id' => 1,
        ]);
        
        DB::table('mapels')->insert([
            'nama_mapel' => 'Basisdata',
            'jurusan_id' => 2,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Sejarah',
            'jurusan_id' => 2,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Informatika',
            'jurusan_id' => 2,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Inggris',
            'jurusan_id' => 2,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Indonesia',
            'jurusan_id' => 2,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Akutansi Pemerintah',
            'jurusan_id' => 3,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Matematika',
            'jurusan_id' => 3,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Sejarah',
            'jurusan_id' => 3,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Inggris',
            'jurusan_id' => 3,
        ]);
        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Indonesia',
            'jurusan_id' => 2,
        ]);
    }
}
