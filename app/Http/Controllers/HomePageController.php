<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        // Ambil data untuk halaman welcome di sini, misalnya artikel terbaru
        $latestCourses = \App\Models\Course::latest()->take(5)->get();
        return view('welcome', compact('latestCourses')); 
    }

    public function welcome(){
        $latestCourses = \App\Models\Course::latest()->take(5)->get();
        return view('welcome', compact('latestCourses'));
    }
}
