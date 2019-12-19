<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        /*dd($request->pizzeria);*/
        $id_pizzeria = $request->pizzeria;
        $id_pizza = $request->pizzeria_pizza;
        return view('Order',['id_pizza'=>$id_pizza], ['id_pizzeria'=>$id_pizzeria]);
    }
    public function thankyou(Request $request)
    {
        dd($request->all());
        return view('thankyou');
    }
    
    
}
