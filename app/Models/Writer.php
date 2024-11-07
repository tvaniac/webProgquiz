<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    // Contoh jika Anda ingin menampilkan courses yang ditulis oleh penulis
    public function courses()
    {
        return $this->hasMany(Course::class, 'writer_id');
    }
}
