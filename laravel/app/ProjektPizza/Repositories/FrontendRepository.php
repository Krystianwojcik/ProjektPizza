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
        return Order::where('status_id', '<=', '2')->get();
    }
    public function getOrdersForChef()
    {
        return Order::where('status_id', '<=', '4')->orderBy('status_id')->get();
    }
    public function getOrdersForSupplier()
    {

       $q= Order::all();
        $q = ['status_id' => '4'];
          return Order::where($q)
              ->orWhere('status_id', '=', '5')
              ->orderBy('status_id')
              ->get();
    }
    public function getOrder($id)
    {
        return Order::find($id);
    }
    public function getPizzeria($id)
    {
        return Pizzeria::find($id);
    }

    public function getSearchPizzeria(string $term)
    {
        return Pizzeria::where('city', 'LIKE', $term.'%')->get();
    }
    public function getSearchResults(string $city)
    {
        return Pizzeria::where('city', $city)->get() ?? false;
    }



}


