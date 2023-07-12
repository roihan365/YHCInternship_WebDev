<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'video',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
