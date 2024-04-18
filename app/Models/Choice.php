<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = ['choice_text','is_correct','question_id'];


    public function task()
    {
        return $this->belongsTo(Task::class, 'question_id');
    }
}
