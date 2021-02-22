<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Journal extends Activity
{
    use HasFactory;

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'keyword_journal');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string{
        return $this->description;
    }

    public function getKeywords(): Collection
    {
        return $this->keywords()->get();
    }
}
