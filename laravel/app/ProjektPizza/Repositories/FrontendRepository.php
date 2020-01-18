<?php

namespace App\ProjektPizza\Repositories;

use App\Pizzeria;
use App\Pizzeria_Pizza;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\User;
use App\Role;
use App\Order;
use App\Order_Status;
use App\Components;
use App\Pizzeria_Pizza_Components;

class FrontendRepository implements FrontendRepositoryInterface  {

    public function getObjectsForMainPage()
    {
        return Pizzeria::all();
    }
    public function getAllComponents()
    {
        return Components::all();
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
    public function getOrder($id)
    {
        return Order::find($id);
    }
    public function getAllPizzeriaWithPizza($return_no)
    {
        $All_pizzerias = Pizzeria::all();
        $return = '';
        foreach($All_pizzerias as $pizzeria) {
            $return .= '<tr><td>'.$pizzeria->name.'</td><td><table class="table table-sm">'.$this->getAllPizzasWithPizzeria($pizzeria->id, $return_no).'</table></td></tr>';
        }
        return $return;
    }
    public function getAllPizzasWithPizzeria($id, $return_no)
    {
        $All_pizzas = Pizzeria_Pizza::where('pizzeria_id', $id)->get();
        $return = '';
        foreach($All_pizzas as $pizza) {
            $return .= '<tr><td>'.$pizza->name.'</td><td>'.$this->getPizzaComponents($pizza->id, $return_no).'</td></tr>';
        }
        return $return;
    }
    public function getPizzaComponents($id, $return_no)
    {
        $All_components = Pizzeria_Pizza_Components::where('pizzeria_pizza_id' , $id)->get();
        $return = '';
        $i = 0;
        foreach($All_components as $component) {
            if($i>=1) {
                $return .= ', ';
            }
            $return .= $this->getPizzaComponents_Component($component->components_id);
            $i++;
        }
        return $return;
    }
    public function getPizzaComponents_Component($id)
    {
        $component = Components::where('id', $id)->first();
         return $component->name;
    }


}


