<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizzeria extends Model
{
    protected $table = 'pizzeria';
    
    public function PizzeriaPizza()
    {
        return $this->hasMany('App\Pizzeria_Pizza', 'pizzeria_id');
    }
}
