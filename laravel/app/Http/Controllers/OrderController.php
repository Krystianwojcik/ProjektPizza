<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\ProjektPizza\Gateways\FrontendGateway;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    public function __construct(FrontendRepositoryInterface $frontendRepository, FrontendGateway $frontendGateway)
    {
        $this->fR = $frontendRepository;
        $this->fG = $frontendGateway;
    }
    public function index(Request $request)
    {
        /*dd($request->pizzeria);*/
        $id_pizzeria = $request->pizzeria;
        $id_pizza = $request->pizzeria_pizza;
        return view('Order',['id_pizza'=>$id_pizza], ['id_pizzeria'=>$id_pizzeria]);
    }

    public function zkreatora($idpizzeria, $idpizza)
    {
        /*dd($request->pizzeria);*/
        $id_pizzeria = $idpizzeria;
        $id_pizza = $idpizza;
        return view('Order',['id_pizza'=>$id_pizza], ['id_pizzeria'=>$id_pizzeria]);
    }

    public function thankyou(Request $request)
    {
       // dd($request->all());
        //dd($request->all());
        /*
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            //dd($validator);
            return redirect()->back()->withInput();
        }*/
        $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'street' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'zpicode' => 'required|digits:5|integer'
        ]);


        $this->fR->addOrder($request);
        // dd($request->all());
        // dd($request->name);
        return view('thankyou');
    }




}
