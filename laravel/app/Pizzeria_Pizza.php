<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizzeria_Pizza extends Model
{
    protected $table = 'pizzeria_pizza';
    
    public function PizzeriaPizzaComponents()
    {
        return $this->belongsToMany('App\Pizzeria_Pizza_Components');
    }
    
}
