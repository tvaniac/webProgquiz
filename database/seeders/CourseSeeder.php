<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }

    public function run(){
        \App\Models\Course::create([
            'category_id' => 1,
            'title' => 'Human and Computer Interaction',
            'content' => 'Materi tentang interaksi antara manusia dan komputer...',
            'post_date' => now(),
            'writer_id' => 1,
        ]);
    // Tambahkan course lainnya...
    } 

}
