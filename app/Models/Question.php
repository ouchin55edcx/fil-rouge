<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['question_text', 'task_id'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
