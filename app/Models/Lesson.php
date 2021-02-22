<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Activity
{
    use HasFactory;

    public function activity()
    {
        return $this->morphOne(Activity::class, 'activityable');
    }
}
