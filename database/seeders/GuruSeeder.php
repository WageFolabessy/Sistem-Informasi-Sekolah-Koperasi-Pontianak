<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nama' => 'Sarkosi',
            'nip' => '0987654321',
            'mapel_id' => 1,
            'no_telp' => '081234567890',
            'alamat' => 'Jl. Tebu, Gg. Waris',
        ]);
        DB::table('gurus')->insert([
            'nama' => 'Suryadi',
            'nip' => '0987654322',
            'mapel_id' => 1,
            'no_telp' => '081234567890',
            'alamat' => 'Jl. Karet, Gg. Karet Damai',
        ]);
        DB::table('gurus')->insert([
            'nama' => 'Atika Septiana Putri',
            'nip' => '0987654323',
            'mapel_id' => 1,
            'no_telp' => '081234567890',
            'alamat' => 'Jl. Sui Rengas, Komp. Griya',
        ]);
    }
}
