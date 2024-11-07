<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method untuk Interactive Multimedia
    public function interactiveMultimedia()
    {
        return view('menu.category.interactive-multimedia');
    }

    // Method untuk Software Engineering
    public function softwareEngineering()
    {
        return view('menu.category.software-engineering');
    } 

    public function showDetail($category)
    {
        // Dummy data untuk contoh, ganti dengan data dari database jika diperlukan
        $data = [
            'title' => 'Judul Artikel Detail',
            'image' => 'path/to/image.jpg',
            'content' => 'Ini adalah konten lengkap dari artikel tersebut. Bisa berasal dari database atau seeder.'
        ];

        return view('menu.category.detail-page', compact('data'));
    } 

}
