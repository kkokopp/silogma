<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSenjataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\JenisSenjata::create([
            'nama_jenis_senjata' => 'Tank',
        ]);
        \App\Models\JenisSenjata::create([
            'nama_jenis_senjata' => 'Pesawat',
        ]);
        \App\Models\JenisSenjata::create([
            'nama_jenis_senjata' => 'Mechine Gun',
        ]);
    }
}
