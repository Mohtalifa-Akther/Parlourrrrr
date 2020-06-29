<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function package()
    {
        return $this->belongsTo('App\Package');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
