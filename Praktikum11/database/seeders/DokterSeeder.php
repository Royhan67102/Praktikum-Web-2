<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'farida',
                'gender' => 'female',
                'tmp_lahir' => 'Citayem',
                'tgl_lahir' => '2004-06-09',
                'kategori' => 'Bidan',
                'telepon' => '089274274294',
                'alamat' => 'deket ST Citayem'
            ],
        ]);
    }
}
