<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'attack',
        'description',
        'phone_number',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
