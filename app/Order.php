<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('qty', 'subtotal');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
