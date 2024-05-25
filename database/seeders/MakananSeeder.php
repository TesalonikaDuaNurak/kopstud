<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table(makanans)->insert([
            'id_admin'=> '1',
            'nama'=>'jeruk',
            'jenis makanan'=>'buah',
            'jumlah makanan'=>'1',
        ]);
    }
}
