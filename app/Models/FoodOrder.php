<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodOrder extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    protected $table = 'food_orders';

    public function tables()
    {
        return $this->belongsTo('App\Models\Table', 'no_meja');
    }

    public function food()
    {
        return $this->belongsTo('App\Models\Food', 'makanan_dipesan');
    }

    public function drinks()
    {
        return $this->belongsTo('App\Models\Drink','minuman_dipesan');
    }

    public function services()
    {
        return $this->belongsTo('App\Models\Service','servis');
    }



}
