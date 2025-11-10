<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\customer;
use App\Models\Exercise;

class Activity extends Model
{
    public function users(){
        return $this->belongsToMany(Customer::class);
    }
}

class Activity extends Model
{
    public function customers(){
        return $this->hasMany(Exercise::class);
    }
}
