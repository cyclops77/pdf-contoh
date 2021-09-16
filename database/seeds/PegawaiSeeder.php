<?php

use \App\Pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            Pegawai::create([
                'nama' => 'Nama Orang ' . ($i + 1),
                'nim' => mt_rand(1000000000, 9000000000),
            ]);
        }
    }
}
