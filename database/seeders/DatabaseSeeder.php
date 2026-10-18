<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan seeder camp gears dipanggil di sini
        $this->call([
            CampGearSeeder::class,
        ]);
    }
}