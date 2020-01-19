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
    public function getAllPizzeriaWithPizza($return_no, $return_yes)
    {
        $All_pizzerias = Pizzeria::all();
        $return = '';
        foreach($All_pizzerias as $pizzeria) {
            $pizzerie = $this->getAllPizzasWithPizzeria($pizzeria->id, $return_no, $return_yes);
            if($pizzerie) {
                $return .= '<tr><td>'.$pizzeria->name.'</td><td><table class="table table-sm">'.$pizzerie.'</table></td></tr>';
            }
        }
        return $return;
    }
    public function getAllPizzasWithPizzeria($id, $return_no, $return_yes)
    {
        $All_pizzas = Pizzeria_Pizza::where('pizzeria_id', $id)->get();
        $return = '';
        foreach($All_pizzas as $pizza) {
            $pizze = $this->getPizzaComponents($pizza->id, $return_no, $return_yes);
            if($pizze) {
                $zamow = 'zamów';
                $return .= '<tr><td>'.$pizza->name.'</td><td>'.$zamow.'</td><td>'.$pizze.'</td></tr>';
            }
            
        }
        return $return;
    }
    public function getPizzaComponents($id, $return_no, $return_yes)
    {
        $All_components = Pizzeria_Pizza_Components::where('pizzeria_pizza_id', $id)->get();
        $return = '';
        $wyklucz = 0;
        $zawiera = 0;
        $i = 0;
        foreach($All_components as $component) {
            if(is_array($return_no)) {
                if(in_array($component->components_id, $return_no)) {
                    $wyklucz = 1;
                }
            } else {
                if($component->components_id == $return_no) {
                    $wyklucz = 1;
                }
            }
            
            if(is_array($return_yes)) {
                if(in_array($component->components_id, $return_yes)) {
                    $zawiera++;
                }
            } else {
                if($component->components_id == $return_yes) {
                    $zawiera++;
                }
            }
            
            if($i>=1) {
                $return .= ', ';
            }
            $return .= $this->getPizzaComponents_Component($component->components_id);
            $i++;
        }

        if($wyklucz == 1 || $zawiera == 0) {
            return '';
        } else {
            return $return;
        }
    }
    public function getPizzaComponents_Component($id)
    {
        $component = Components::where('id', $id)->first();
         return $component->name;
    }


}


