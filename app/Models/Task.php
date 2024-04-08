<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'lesson_id'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'imageable');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
