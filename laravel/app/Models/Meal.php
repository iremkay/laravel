<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Meal extends Model
{
    protected $guarded = ['id'];
    
    public function customer () {
        return $this->belongsTo(Customer::class);
    }

    public function food () {
        return $this->belongsTo(Food::class);
    }
}
