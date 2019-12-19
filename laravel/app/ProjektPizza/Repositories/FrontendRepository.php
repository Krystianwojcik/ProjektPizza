<?php

namespace App\ProjektPizza\Repositories;

use App\Pizzeria;
use App\Pizzeria_Pizza;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;

class FrontendRepository implements FrontendRepositoryInterface  {
    
    public function getObjectsForMainPage()
    {
        return Pizzeria::all();
    }
    public function getPizzeriaObject($city_slug, $name_slug)
    {
        return Pizzeria::where([['city_slug', '=', $city_slug], ['name_slug', '=', $name_slug]])->first();
    }




  
}


