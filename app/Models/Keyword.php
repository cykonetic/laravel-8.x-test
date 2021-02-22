<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'keyword_exercise');
    }

    public function journals()
    {
        return $this->belongsToMany(Journal::class, 'keyword_journal');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'keyword_lesson');
    }

    public function measures()
    {
        return $this->belongsToMany(Measure::class, 'keyword_measure');
    }
}
