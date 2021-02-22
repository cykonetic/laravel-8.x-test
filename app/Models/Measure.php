<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Measure extends Activity
{
    use HasFactory;

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'keyword_measure');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getKeywords(): Collection
    {
        return $this->keywords()->get();
    }
}
