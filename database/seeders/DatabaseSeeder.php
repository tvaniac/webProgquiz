<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }
    public function run(){
        $this->call([
            CategorySeeder::class,
            WriterSeeder::class,  // Seeder untuk writers harus dipanggil lebih dulu
            CourseSeeder::class,
        ]);
    }

}
