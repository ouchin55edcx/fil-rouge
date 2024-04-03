<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }


}
