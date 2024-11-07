<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Pastikan Anda memiliki relasi yang tepat
    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id'); // pastikan 'writer_id' sesuai dengan kolom di tabel courses
    }
}
