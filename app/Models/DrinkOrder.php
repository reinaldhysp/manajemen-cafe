<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DrinkOrder extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'drink_orders';
    protected $guarded = ['id'];

    public function tables()
    {
        return $this->belongsTo('App\Models\Table', 'no_meja');
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
