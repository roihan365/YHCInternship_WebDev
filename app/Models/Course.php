<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'thumbnail',
    ];

    public function materis()
    {
        return $this->hasMany(Materi::class);
    }
    
    public function enrollCourses()
    {
        return $this->hasMany(EnrollCourse::class);
    }
}
