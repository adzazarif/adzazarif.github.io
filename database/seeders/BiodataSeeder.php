<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('biodatas')->insert([
            "NIM" => "E41221681",
            'nama_mhs' => "Adza Zarif Nur Iskandar",
            "prodi_mhs" => "Teknik Informatika",
            "alamat_mhs" => "Blitar",
            "notelp_mhs" => "085942972801",
            "ttl_mhs" => "2003-02-14"
        ]);
    }
}
