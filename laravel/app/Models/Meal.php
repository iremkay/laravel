<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\customer;

class Meal extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
