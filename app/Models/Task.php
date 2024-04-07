<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['taskTitle','TaskContent'];


    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function image():MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
