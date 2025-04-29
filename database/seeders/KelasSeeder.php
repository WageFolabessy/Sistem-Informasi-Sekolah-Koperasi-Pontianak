<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama_kelas' => 'X Pemasaran',
            'jurusan_id' => 1,
            'guru_id' => 1,
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XI Pemasaran',
            'jurusan_id' => 1,
            'guru_id' => 1,
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XII Pemasaran',
            'jurusan_id' => 1,
            'guru_id' => 1,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X Rekayasa Perangkat Lunak',
            'jurusan_id' => 2,
            'guru_id' => 2,
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XI Rekayasa Perangkat Lunak',
            'jurusan_id' => 2,
            'guru_id' => 2,
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XII Rekayasa Perangkat Lunak',
            'jurusan_id' => 2,
            'guru_id' => 2,
        ]);
        
        DB::table('kelas')->insert([
            'nama_kelas' => 'X Akuntasi Lembaga Keuangan',
            'jurusan_id' => 3,
            'guru_id' => 3,
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XI Akuntasi Lembaga Keuangan',
            'jurusan_id' => 3,
            'guru_id' => 3,
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XII Akuntasi Lembaga Keuangan',
            'jurusan_id' => 3,
            'guru_id' => 3,
        ]);
    }
}
