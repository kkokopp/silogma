<?php

namespace Database\Seeders;

use App\Models\Senjata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SenjataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Senjata::create([
            'kode_senjata' => 'AL-0001',
            'nama_senjata' => 'AK-47',
            'jenis_senjata_id' => 1,
            'seri_senjata' => 10,
            'status_senjata_id' => 1,
        ]);
        Senjata::create([
            'kode_senjata' => 'AL-0002',
            'nama_senjata' => 'AK-47',
            'jenis_senjata_id' => 1,
            'seri_senjata' => 10,
            'status_senjata_id' => 2,
        ]);
        Senjata::create([
            'kode_senjata' => 'AL-0003',
            'nama_senjata' => 'AK-47',
            'jenis_senjata_id' => 1,
            'seri_senjata' => 10,
            'status_senjata_id' => 1,
        ]);
    }
}
