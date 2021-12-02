<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casir extends Model
{
    use HasFactory;

    public function food_orders()
    {
        return $this->hasMany(FoodOrder::class);
    }
}
