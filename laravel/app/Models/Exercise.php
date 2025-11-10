<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;

class Exercise extends Model
{
    public function activities(){
        return $this->belongsTo(Activity::class);
    }
}
