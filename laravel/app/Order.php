<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pizzeria()
    {
        return $this->belongsTo('App\Pizzeria');
    }

    public function status()
    {
        return $this->belongsTo('App\Order_Status');
    }

}
