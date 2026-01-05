<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;

class Customer extends Model
{
   // protected $fillable = [  'name', 'surname', ];
    protected $guarded = ['id'];

    public function meals() {
        return $this->hasMany(Meal::class);
    }

    public function activity() {
        return $this->hasMany(Activity::class);
    }
}