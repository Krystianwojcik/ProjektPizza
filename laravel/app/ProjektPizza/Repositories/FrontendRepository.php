<?php

namespace App\ProjektPizza\Repositories;
use DateTime;
use App\Pizzeria;
use App\Pizzeria_Pizza;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\User;
use App\Role;
use App\Order;
use App\Order_Pizza;
use App\Order_Status;
use App\Components;
use App\Pizzeria_User;
use App\Pizzeria_Pizza_Components;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class FrontendRepository implements FrontendRepositoryInterface  {

    public function getObjectsForMainPage()
    {
        return Pizzeria::all();
    }
    public function getOrderedPizza()
    {
        $user=Auth::user();
        if($user == null) return null;
        $orders=Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(5)->get();
   
       // $pizzaOrder= Order_Pizza::all();
$return = array();
        foreach($orders as $order)
        {
            
                //dd($order->id); 31
                $pizzaOrder= Order_Pizza::where('order_id', '=', $order->id)->first();
               // dd($pizzaOrder->id);46
               $pizza = Pizzeria_Pizza::where('id', '=', $pizzaOrder->pizzeria_pizza_id)->first();
               // dd($pizza->name); Pizza 1
                $return[] = $pizza;
        }

        return $return;

    }
    public function getPizzeriaByID($id)
    {
        return Pizzeria::where('id', '=', $id)->first();
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
    public function getOrdersForChef()
    {
        $pizzeria_id = Pizzeria_User::where('user_id', auth()->user()->id)->first();
        return Order::where([['status_id', '<=', '4'], ['pizzeria_id', $pizzeria_id->pizzeria_id]])->orderBy('status_id')->get();
    }
    public function getOrdersForSupplier()
    {
        $pizzeria_id = Pizzeria_User::where('user_id', auth()->user()->id)->first();
        
        return Order::where([['status_id', '>=', '4'], ['status_id', '<', '6'], ['pizzeria_id', $pizzeria_id->pizzeria_id]])->orderBy('status_id')->get();

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
                $zamow = "<a class='btn btn-sm btn-primary' href='/order/".$pizza->pizzeria_id."/".$pizza->id."'>Zamów</a>";
                $return .= '<tr><td>'.$pizza->name.'</td><td>'.$zamow.'</td><td>'.$pizze.'</td></tr>';
            }

        }
        return $return;
    }
    public function getPizzaComponents($id, $return_no = NULL, $return_yes = NULL)
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

        if($wyklucz == 1 || ($return_yes && $zawiera == 0)) {
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

    public function addOrder($request)
    {
        $user = auth()->user();
        $now=new DateTime();
        $order= new Order;
        $order->user_id=$user->id;
        $order->status_id = 1;
        $order->pizzeria_id=$request->pizzeria_id;
        $order->name=$request->name;
        $order->zipcode=$request->zpicode;
        $order->surname=$request->surname;
        $order->street=$request->street;
        $order->numer=$request->numer;
        $order->city=$request->city;
        $order->time=$now;
        $order->save();
        $this->addOrderPizza($order->id, $request->pizza_id);

    }

    public function addOrderPizza($order_id, $pizza_id)
    {


        $Order_Pizza = new Order_Pizza;
        $Order_Pizza->order_id = $order_id;
        $Order_Pizza->pizzeria_pizza_id=$pizza_id;
        $Order_Pizza->cutting_id=1;
        $Order_Pizza->save();

    }
public function get_pizza_name_by_id($id) {
    $return = Pizzeria_Pizza::find($id)->name;
    return $return;
}

}


