<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;
use App\Models\Activity;

class Customer extends Model
{
    public function meals(){
        return $this->hasMany(Meal::class);
    }
}
