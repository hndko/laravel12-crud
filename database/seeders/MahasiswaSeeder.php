<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'name' => Str::random(10),
            'nim' => Str::random(10),
            'email' => Str::random(10) . '@example.com',
            'no_telpon' => Str::random(10),
            'alamat' => Str::random(10),
        ]);
    }
}
