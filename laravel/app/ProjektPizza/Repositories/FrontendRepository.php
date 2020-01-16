<?php

namespace App\ProjektPizza\Repositories;

use App\Pizzeria;
use App\Pizzeria_Pizza;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\User;
use App\Role;
use App\Order;
use App\Order_Status;

class FrontendRepository implements FrontendRepositoryInterface  {

    public function getObjectsForMainPage()
    {
        return Pizzeria::all();
    }
    public function getPizzeriaObject($city_slug, $name_slug)
    {
        return Pizzeria::where([['city_slug', '=', $city_slug], ['name_slug', '=', $name_slug]])->first();
    }

    public function getAllUsers()
    {
        return User::all();
    }
    public function getAllRoles()
    {
        return Role::all();
    }
    public function getAllOrders()
    {
        return Order::where('status_id', '=', '1')->get();
    }


}


